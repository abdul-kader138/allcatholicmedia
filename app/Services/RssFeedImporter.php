<?php

namespace App\Services;

use App\Models\FeedImportLog;
use App\Models\FeedSource;
use App\Models\PodcastEpisode;
use Botble\ACL\Models\User;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use SimpleXMLElement;
use SlugHelper;

class RssFeedImporter
{
    public function __construct(private ImageDownloader $imageDownloader) {}

    public function sync(FeedSource $source): array
    {
        // Fetching the feed and downloading images for each item is network-bound and
        // can easily exceed the default execution-time limit on a long feed.
        @set_time_limit(600);

        $results = ['imported' => 0, 'skipped' => 0, 'errors' => 0];

        try {
            $xml   = $this->fetchFeed($source->url);
            $items = $this->parseItems($xml);

            foreach ($items as $item) {
                try {
                    $guid = $this->extractGuid($item);

                    if ($source->isAlreadyImported($guid)) {
                        $results['skipped']++;
                        continue;
                    }

                    $postId = match ($source->type) {
                        'post'            => $this->importPost($item, $source)?->id,
                        'podcast_episode' => $this->importPodcastEpisode($item, $source),
                    };

                    FeedImportLog::create([
                        'feed_source_id' => $source->id,
                        'post_id'        => $postId ?? null,
                        'guid'           => $guid,
                        'item_url'       => $this->extractLink($item),
                        'title'          => $this->extractTitle($item),
                        'imported_at'    => now(),
                    ]);

                    $results['imported']++;
                } catch (\Throwable $e) {
                    $results['errors']++;
                    Log::warning("Feed import item error [{$source->url}]: " . $e->getMessage());
                }
            }

            $source->update([
                'last_synced_at' => now(),
                'last_error'     => null,
                'total_imported' => $source->total_imported + $results['imported'],
            ]);
        } catch (\Throwable $e) {
            $source->update(['last_error' => $e->getMessage()]);
            throw $e;
        }

        return $results;
    }

    // ── Feed fetching & parsing ───────────────────────────────────────────────

    private function fetchFeed(string $url): SimpleXMLElement
    {
        $response = Http::withHeaders(['User-Agent' => 'AllCatholicMedia RSS Reader/1.0'])
            ->timeout(30)
            ->get($url);

        if (! $response->successful()) {
            throw new \RuntimeException("HTTP {$response->status()} fetching feed: {$url}");
        }

        $xml = @simplexml_load_string($response->body(), 'SimpleXMLElement', LIBXML_NOCDATA);

        if ($xml === false) {
            throw new \RuntimeException("Failed to parse RSS/Atom XML from {$url}");
        }

        return $xml;
    }

    private function parseItems(SimpleXMLElement $xml): array
    {
        // RSS 2.0
        if (isset($xml->channel->item)) {
            return iterator_to_array($xml->channel->item, false);
        }

        // Atom
        if (isset($xml->entry)) {
            return iterator_to_array($xml->entry, false);
        }

        return [];
    }

    // ── Field extractors ──────────────────────────────────────────────────────

    private function extractTitle(SimpleXMLElement $item): string
    {
        return trim((string) $item->title) ?: 'Untitled';
    }

    private function extractLink(SimpleXMLElement $item): string
    {
        if (isset($item->link) && (string) $item->link) {
            return (string) $item->link;
        }

        // Atom
        foreach ($item->link ?? [] as $link) {
            $rel = (string) ($link['rel'] ?? '');
            if ($rel === 'alternate' || $rel === '') {
                return (string) ($link['href'] ?? '');
            }
        }

        return '';
    }

    private function extractGuid(SimpleXMLElement $item): string
    {
        if (isset($item->guid) && (string) $item->guid) {
            return (string) $item->guid;
        }

        if (isset($item->id) && (string) $item->id) {
            return (string) $item->id;
        }

        $link = $this->extractLink($item);

        return $link ?: md5($this->extractTitle($item));
    }

    private function extractContent(SimpleXMLElement $item): string
    {
        $ns = $item->getNamespaces(true);

        if (isset($ns['content'])) {
            $c = $item->children($ns['content']);
            if (isset($c->encoded) && (string) $c->encoded) {
                return (string) $c->encoded;
            }
        }

        if (isset($item->description) && (string) $item->description) {
            return (string) $item->description;
        }

        if (isset($item->summary)) {
            return (string) $item->summary;
        }

        if (isset($item->content)) {
            return (string) $item->content;
        }

        return '';
    }

    private function extractPubDate(SimpleXMLElement $item): Carbon
    {
        if (isset($item->pubDate) && (string) $item->pubDate) {
            try { return Carbon::parse((string) $item->pubDate); } catch (\Throwable) {}
        }

        $ns = $item->getNamespaces(true);

        if (isset($ns['dc'])) {
            $dc = $item->children($ns['dc']);
            if (isset($dc->date)) {
                try { return Carbon::parse((string) $dc->date); } catch (\Throwable) {}
            }
        }

        if (isset($item->updated)) {
            try { return Carbon::parse((string) $item->updated); } catch (\Throwable) {}
        }

        return now();
    }

    private function extractImage(SimpleXMLElement $item): ?string
    {
        $ns = $item->getNamespaces(true);

        // 1. media:content / media:thumbnail
        if (isset($ns['media'])) {
            $media = $item->children($ns['media']);
            if (isset($media->content) && (string) ($media->content['url'] ?? '')) {
                return (string) $media->content['url'];
            }
            if (isset($media->thumbnail) && (string) ($media->thumbnail['url'] ?? '')) {
                return (string) $media->thumbnail['url'];
            }
        }

        // 2. itunes:image
        if (isset($ns['itunes'])) {
            $itunes = $item->children($ns['itunes']);
            if (isset($itunes->image) && (string) ($itunes->image['href'] ?? '')) {
                return (string) $itunes->image['href'];
            }
        }

        // 3. enclosure with image MIME
        if (isset($item->enclosure)) {
            $type = (string) ($item->enclosure['type'] ?? '');
            if (str_starts_with($type, 'image/')) {
                return (string) ($item->enclosure['url'] ?? '');
            }
        }

        // 4. Scrape first meaningful <img> from full content:encoded, then description
        $html = $this->extractContent($item) ?: (string) ($item->description ?? '');

        return $html ? $this->extractFirstImageFromHtml($html) : null;
    }

    private function extractFirstImageFromHtml(string $html): ?string
    {
        // Find every <img> tag
        preg_match_all('/<img([^>]+)>/i', $html, $imgMatches);

        foreach ($imgMatches[1] as $attrs) {
            // Try each attribute that might hold the real URL (including lazy-load variants)
            foreach (['src', 'data-src', 'data-lazy-src', 'data-original', 'data-lazy'] as $attr) {
                if (! preg_match('/' . preg_quote($attr, '/') . '\s*=\s*["\']([^"\']+)["\']/', $attrs, $m)) {
                    continue;
                }

                $url = trim($m[1]);

                if (! filter_var($url, FILTER_VALIDATE_URL)) {
                    continue;
                }

                // Skip 1×1 tracking pixels
                if (preg_match('/\bwidth\s*=\s*["\']?\s*1\s*["\']?/i', $attrs) ||
                    preg_match('/\bheight\s*=\s*["\']?\s*1\s*["\']?/i', $attrs)) {
                    continue;
                }

                return $url;
            }
        }

        return null;
    }

    private function rewriteContentImages(string $html): string
    {
        if (empty($html)) {
            return $html;
        }

        return preg_replace_callback(
            '/<img([^>]*?)\bsrc\s*=\s*(["\'])([^"\']+)\2([^>]*)>/i',
            function (array $matches) {
                [, $before, $quote, $url, $after] = $matches;

                if (! filter_var($url, FILTER_VALIDATE_URL)) {
                    return $matches[0];
                }

                $local = $this->imageDownloader->download($url, 'posts/content');

                if (! $local) {
                    return $matches[0];
                }

                $publicUrl = url('storage/' . $local);

                return "<img{$before}src={$quote}{$publicUrl}{$quote}{$after}>";
            },
            $html
        ) ?? $html;
    }

    private function extractAudioUrl(SimpleXMLElement $item): ?string
    {
        if (isset($item->enclosure)) {
            $type = (string) ($item->enclosure['type'] ?? '');
            $url  = (string) ($item->enclosure['url'] ?? '');
            if ($url && (str_contains($type, 'audio') || str_ends_with($url, '.mp3'))) {
                return $url;
            }
        }

        return null;
    }

    private function extractDuration(SimpleXMLElement $item): ?string
    {
        $ns = $item->getNamespaces(true);

        if (isset($ns['itunes'])) {
            $itunes = $item->children($ns['itunes']);
            if (isset($itunes->duration) && (string) $itunes->duration) {
                return (string) $itunes->duration;
            }
        }

        return null;
    }

    private function extractEpisodeNumber(SimpleXMLElement $item): int
    {
        $ns = $item->getNamespaces(true);

        if (isset($ns['itunes'])) {
            $itunes = $item->children($ns['itunes']);
            if (isset($itunes->episode) && (int) $itunes->episode) {
                return (int) $itunes->episode;
            }
        }

        return 0;
    }

    // ── Importers ─────────────────────────────────────────────────────────────

    private function importPost(SimpleXMLElement $item, FeedSource $source): Post
    {
        $title      = $this->extractTitle($item);
        $rawContent = $this->extractContent($item);
        $pubDate    = $this->extractPubDate($item);
        $sourceUrl  = $this->extractLink($item);
        $imageUrl   = $this->extractImage($item);

        $plainText   = html_entity_decode(strip_tags($rawContent), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $description = Str::limit(trim(preg_replace('/\s+/', ' ', $plainText)), 300);

        // Download & rewrite every external image in the body to a local copy
        $content = $this->rewriteContentImages($rawContent);
        if ($sourceUrl) {
            $content .= "\n\n<p><em>Source: <a href=\"{$sourceUrl}\" target=\"_blank\" rel=\"noopener\">{$sourceUrl}</a></em></p>";
        }

        // Featured image: try feed image first, then the first image inside the content.
        // This makes imports more resilient on production when one remote image host blocks downloads.
        $imageCandidates = array_values(array_unique(array_filter([
            $imageUrl,
            $this->extractFirstImageFromHtml($rawContent),
        ])));

        $localImage = null;

        foreach ($imageCandidates as $candidateImageUrl) {
            $localImage = $this->imageDownloader->download($candidateImageUrl, 'posts');

            if ($localImage) {
                $imageUrl = $candidateImageUrl;
                break;
            }
        }

        if (! $imageUrl && $imageCandidates) {
            $imageUrl = $imageCandidates[0];
        }

        $authorId = User::query()->orderBy('id')->value('id') ?? 1;

        return DB::transaction(function () use ($title, $description, $content, $localImage, $imageUrl, $source, $authorId, $pubDate) {
            $post = Post::query()->create([
                'name'        => $title,
                'description' => $description,
                'content'     => $content,
                'image'       => $localImage ?? $imageUrl,
                'status'      => $source->auto_publish ? 'published' : 'draft',
                'author_id'   => $authorId,
                'author_type' => User::class,
                'created_at'  => $pubDate,
                'updated_at'  => $pubDate,
            ]);

            SlugHelper::createSlug($post);

            if ($source->category) {
                $category = $this->resolveCategory($source->category);

                if ($category) {
                    $post->categories()->attach($category->id);
                } else {
                    Log::warning(sprintf(
                        'Feed import category not found. Source #%d (%s), category value: %s',
                        $source->id,
                        $source->name,
                        $source->category
                    ));
                }
            }

            return $post;
        });
    }

    private function resolveCategory(string $categoryValue): ?Category
    {
        $normalized = trim($categoryValue);

        if ($normalized === '') {
            return null;
        }

        $slug = Str::slug($normalized);

        return Category::query()
            ->whereRaw('LOWER(name) = ?', [Str::lower($normalized)])
            ->orWhereHas('slugable', function ($query) use ($slug) {
                $query->where('key', $slug);
            })
            ->first();
    }

    private function importPodcastEpisode(SimpleXMLElement $item, FeedSource $source): void
    {
        $title         = $this->extractTitle($item);
        $description   = Str::limit(strip_tags($this->extractContent($item)), 1000);
        $pubDate       = $this->extractPubDate($item);
        $audioUrl      = $this->extractAudioUrl($item);
        $imageUrl      = $this->extractImage($item);
        $duration      = $this->extractDuration($item);
        $episodeNumber = $this->extractEpisodeNumber($item);

        if (! $audioUrl) {
            return; // no audio — skip
        }

        $localImage = $imageUrl ? $this->imageDownloader->download($imageUrl, 'podcasts') : null;

        PodcastEpisode::query()->create([
            'podcast_show_id' => $source->related_id,
            'title'           => $title,
            'slug'            => Str::slug($title) ?: Str::random(8),
            'description'     => $description,
            'audio_url'       => $audioUrl,
            'embed_type'      => 'html5',
            'thumbnail'       => $localImage ?? $imageUrl,
            'duration'        => $duration,
            'episode_number'  => $episodeNumber,
            'is_featured'     => false,
            'published_at'    => $pubDate,
        ]);
    }

    // ── iTunes search helper ──────────────────────────────────────────────────

    public function searchItunes(string $term, int $limit = 20): array
    {
        try {
            $response = Http::timeout(10)->get('https://itunes.apple.com/search', [
                'term'    => $term,
                'media'   => 'podcast',
                'limit'   => $limit,
                'country' => 'us',
            ]);

            if (! $response->successful()) {
                return [];
            }

            $results = collect($response->json('results', []))
                ->filter(fn ($r) => ! empty($r['feedUrl']))
                ->map(fn ($r) => [
                    'name'        => $r['collectionName'] ?? $r['trackName'] ?? 'Unknown',
                    'feed_url'    => $r['feedUrl'],
                    'artwork'     => $r['artworkUrl600'] ?? $r['artworkUrl100'] ?? null,
                    'artist'      => $r['artistName'] ?? '',
                    'genre'       => $r['primaryGenreName'] ?? '',
                    'episode_count' => $r['trackCount'] ?? 0,
                ])
                ->values()
                ->all();

            return $results;
        } catch (\Throwable) {
            return [];
        }
    }
}
