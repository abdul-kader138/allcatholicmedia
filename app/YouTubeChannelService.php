<?php

namespace App;

use Acm\LiveStream\Models\LiveStream;
use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RuntimeException;

class YouTubeChannelService
{
    private const API_BASE = 'https://www.googleapis.com/youtube/v3';

    public function syncConfiguredChannels(): int
    {
        $count = 0;

        foreach (config('youtube.channels', []) as $definition) {
            if (! is_array($definition) || empty($definition['name'])) {
                continue;
            }

            YouTubeChannel::query()->updateOrCreate(
                ['slug' => $definition['slug'] ?: Str::slug($definition['name'])],
                [
                    'name' => $definition['name'],
                    'youtube_channel_id' => $definition['youtube_channel_id'] ?: null,
                    'youtube_handle' => $definition['youtube_handle'] ?: null,
                    'description' => $definition['description'] ?: null,
                    'is_active' => (bool) ($definition['is_active'] ?? true),
                    'sort_order' => (int) ($definition['sort_order'] ?? 0),
                ]
            );

            $count++;
        }

        $this->flushCaches();

        return $count;
    }

    public function syncAllActiveChannels(): int
    {
        $synced = 0;

        foreach (YouTubeChannel::query()->active()->orderBy('sort_order')->get() as $channel) {
            $this->syncChannel($channel);
            $synced++;
        }

        $this->flushCaches();

        return $synced;
    }

    public function syncLiveStreams(): array
    {
        // Source 1: YouTube Search API (eventType=live per channel)
        $apiStreams = [];
        try {
            $apiStreams = $this->fetchCurrentLiveStreams();
        } catch (RuntimeException $e) {
            Log::warning('youtube:fetch-live search API failed: ' . $e->getMessage());
        }

        // Source 2: Video table — hourly sync already marks is_live via liveBroadcastContent
        $videoTableStreams = YouTubeChannelVideo::query()
            ->where('is_live', true)
            ->with('channel')
            ->get()
            ->map(fn ($v) => [
                'channel'      => $v->channel,
                'channel_name' => $v->channel?->name ?? '',
                'video_id'     => $v->youtube_video_id,
                'title'        => $v->title,
                'thumbnail'    => $v->thumbnail,
                'description'  => $v->description,
            ])
            ->filter(fn ($s) => $s['video_id'])
            ->values()
            ->all();

        // Merge by video_id; API results overwrite video-table entries for same ID
        $allStreams = collect(array_merge($videoTableStreams, $apiStreams))
            ->keyBy('video_id')
            ->values()
            ->all();

        $foundWatchUrls = [];
        $synced = 0;

        foreach ($allStreams as $stream) {
            $watchUrl = 'https://www.youtube.com/watch?v=' . $stream['video_id'];
            $foundWatchUrls[] = $watchUrl;

            $sourceName = $stream['channel_name']
                ?? $stream['channel']?->name
                ?? data_get($stream, 'channel.name', '');

            LiveStream::updateOrCreate(
                ['embed_url' => $watchUrl],
                [
                    'title'       => $stream['title'],
                    'description' => $stream['description'],
                    'source_name' => $sourceName,
                    'thumbnail'   => $stream['thumbnail'],
                    'is_live'     => true,
                    'status'      => 'published',
                    'location'    => 'youtube-auto',
                ]
            );
            $synced++;
        }

        $expired = LiveStream::where('location', 'youtube-auto')
            ->where('is_live', true)
            ->when(! empty($foundWatchUrls), fn ($q) => $q->whereNotIn('embed_url', $foundWatchUrls))
            ->update(['is_live' => false]);

        return ['synced' => $synced, 'expired' => $expired];
    }

    public function resolveChannelIds(): int
    {
        $apiKey = $this->resolveApiKey();
        $resolved = 0;

        $this->syncConfiguredChannels();

        foreach (YouTubeChannel::query()->active()
            ->where(fn ($q) => $q->whereNull('youtube_channel_id')->orWhere('youtube_channel_id', ''))
            ->get() as $channel)
        {
            try {
                $meta = $this->resolveChannelMeta($channel, $apiKey);
                $channel->update([
                    'youtube_channel_id'  => $meta['channel_id'],
                    'uploads_playlist_id' => $meta['uploads_playlist_id'],
                    'thumbnail'           => $meta['thumbnail'],
                    'custom_url'          => $meta['custom_url'],
                    'last_synced_at'      => now(),
                ]);
                $resolved++;
            } catch (RuntimeException $e) {
                Log::warning("resolveChannelIds failed for [{$channel->name}]: " . $e->getMessage());
            }
        }

        return $resolved;
    }

    public function syncChannel(YouTubeChannel $channel): void
    {
        $apiKey = $this->resolveApiKey();

        $meta = $this->resolveChannelMeta($channel, $apiKey);

        $channel->fill([
            'youtube_channel_id' => $meta['channel_id'],
            'uploads_playlist_id' => $meta['uploads_playlist_id'],
            'thumbnail' => $meta['thumbnail'],
            'banner' => $meta['banner'],
            'description' => $meta['description'] ?: $channel->description,
            'custom_url' => $meta['custom_url'],
            'last_synced_at' => now(),
        ])->save();

        $this->syncVideosForChannel($channel, $apiKey);
    }

    private function resolveChannelMeta(YouTubeChannel $channel, string $apiKey): array
    {
        if ($channel->youtube_channel_id) {
            $response = $this->get('channels', [
                'part' => 'snippet,contentDetails,brandingSettings',
                'id' => $channel->youtube_channel_id,
                'maxResults' => 1,
                'key' => $apiKey,
            ]);
        } elseif ($channel->youtube_handle) {
            $response = $this->get('channels', [
                'part' => 'snippet,contentDetails,brandingSettings',
                'forHandle' => ltrim($channel->youtube_handle, '@'),
                'maxResults' => 1,
                'key' => $apiKey,
            ]);
        } else {
            throw new RuntimeException("Channel [{$channel->name}] is missing youtube_channel_id or youtube_handle.");
        }

        $item = $response['items'][0] ?? null;

        if (! $item) {
            throw new RuntimeException("Unable to resolve YouTube channel metadata for [{$channel->name}].");
        }

        return [
            'channel_id' => data_get($item, 'id'),
            'uploads_playlist_id' => data_get($item, 'contentDetails.relatedPlaylists.uploads'),
            'thumbnail' => data_get($item, 'snippet.thumbnails.high.url')
                ?: data_get($item, 'snippet.thumbnails.medium.url')
                ?: data_get($item, 'snippet.thumbnails.default.url'),
            'banner' => data_get($item, 'brandingSettings.image.bannerExternalUrl'),
            'description' => data_get($item, 'snippet.description'),
            'custom_url' => data_get($item, 'snippet.customUrl'),
        ];
    }

    private function syncVideosForChannel(YouTubeChannel $channel, string $apiKey): void
    {
        $playlistId = $channel->uploads_playlist_id;

        if (! $playlistId) {
            throw new RuntimeException("Uploads playlist not found for channel [{$channel->name}].");
        }

        $limit = max(1, (int) config('youtube.sync.videos_per_channel', 24));
        $fetched = 0;
        $pageToken = null;
        $syncedVideoIds = [];

        do {
            $response = $this->get('playlistItems', [
                'part' => 'snippet,contentDetails',
                'playlistId' => $playlistId,
                'maxResults' => min(50, $limit - $fetched),
                'pageToken' => $pageToken,
                'key' => $apiKey,
            ]);

            $items = collect($response['items'] ?? []);
            $videoIds = $items->pluck('contentDetails.videoId')->filter()->values()->all();
            $videosById = $this->fetchVideoDetails($videoIds, $apiKey);

            foreach ($items as $item) {
                $videoId = data_get($item, 'contentDetails.videoId');

                if (! $videoId || ! isset($videosById[$videoId])) {
                    continue;
                }

                $video = $videosById[$videoId];
                $syncedVideoIds[] = $videoId;

                YouTubeChannelVideo::query()->updateOrCreate(
                    ['youtube_video_id' => $videoId],
                    [
                        'youtube_channel_id' => $channel->id,
                        'title' => data_get($video, 'snippet.title'),
                        'slug' => Str::slug(data_get($video, 'snippet.title', $videoId)),
                        'description' => data_get($video, 'snippet.description'),
                        'thumbnail' => data_get($video, 'snippet.thumbnails.maxres.url')
                            ?: data_get($video, 'snippet.thumbnails.high.url')
                            ?: data_get($video, 'snippet.thumbnails.medium.url')
                            ?: data_get($video, 'snippet.thumbnails.default.url'),
                        'published_at' => data_get($video, 'snippet.publishedAt')
                            ? Carbon::parse(data_get($video, 'snippet.publishedAt'))
                            : null,
                        'video_url' => 'https://www.youtube.com/watch?v=' . $videoId,
                        'embed_url' => 'https://www.youtube.com/embed/' . $videoId,
                        'duration' => data_get($video, 'contentDetails.duration'),
                        'view_count' => (int) data_get($video, 'statistics.viewCount', 0),
                        'is_live' => data_get($video, 'snippet.liveBroadcastContent') === 'live',
                        'position' => (int) data_get($item, 'snippet.position', 0),
                        'raw_payload' => $video,
                    ]
                );

                $fetched++;
            }

            $pageToken = $response['nextPageToken'] ?? null;
        } while ($pageToken && $fetched < $limit);

        if ($syncedVideoIds !== []) {
            YouTubeChannelVideo::query()
                ->where('youtube_channel_id', $channel->id)
                ->whereNotIn('youtube_video_id', array_unique($syncedVideoIds))
                ->delete();
        }
    }

    private function fetchVideoDetails(array $videoIds, string $apiKey): array
    {
        if ($videoIds === []) {
            return [];
        }

        $response = $this->get('videos', [
            'part' => 'snippet,contentDetails,statistics,liveStreamingDetails',
            'id' => implode(',', $videoIds),
            'maxResults' => count($videoIds),
            'key' => $apiKey,
        ]);

        return collect($response['items'] ?? [])->keyBy('id')->all();
    }

    private function get(string $endpoint, array $query): array
    {
        try {
            return Http::withoutVerifying()
                ->acceptJson()
                ->timeout(20)
                ->get(self::API_BASE . '/' . $endpoint, array_filter($query, fn ($value) => $value !== null && $value !== ''))
                ->throw()
                ->json();
        } catch (RequestException $exception) {
            $message = $exception->response?->json('error.message') ?: $exception->getMessage();

            throw new RuntimeException($message, previous: $exception);
        }
    }

    public function fetchCurrentLiveStreams(): array
    {
        $apiKey = $this->resolveApiKey();

        // Build a lookup of our known channels keyed by YouTube channel ID
        $knownChannels = YouTubeChannel::query()->active()->whereNotNull('youtube_channel_id')
            ->get()->keyBy('youtube_channel_id');

        $found = [];

        // --- Source A: per-channel search (precise, targets our 12 channels) ---
        foreach ($knownChannels as $channel) {
            try {
                $items = $this->searchLive(['channelId' => $channel->youtube_channel_id], $apiKey);
            } catch (RuntimeException $e) {
                Log::warning("youtube:fetch-live channel [{$channel->name}]: " . $e->getMessage());
                continue;
            }

            foreach ($items as $item) {
                $videoId = data_get($item, 'id.videoId');
                if (! $videoId || isset($found[$videoId])) {
                    continue;
                }
                $found[$videoId] = $this->mapSearchItem($item, $channel);
            }
        }

        // --- Source B: general keyword searches (catches 24/7 streams & parishes) ---
        $keywords = [
            'EWTN live',
            'CatholicTV live',
            'Catholic Mass live',
            'Holy Rosary live',
            'Adoration live Catholic',
        ];

        foreach ($keywords as $q) {
            try {
                $items = $this->searchLive(['q' => $q, 'relevanceLanguage' => 'en'], $apiKey);
            } catch (RuntimeException $e) {
                Log::warning("youtube:fetch-live keyword [{$q}]: " . $e->getMessage());
                continue;
            }

            foreach ($items as $item) {
                $videoId    = data_get($item, 'id.videoId');
                $channelId  = data_get($item, 'snippet.channelId');

                if (! $videoId || isset($found[$videoId])) {
                    continue;
                }

                // Map to a known channel if we have one; otherwise use snippet title as source
                $channel = $knownChannels[$channelId] ?? null;
                $found[$videoId] = $this->mapSearchItem($item, $channel);
            }
        }

        return array_values($found);
    }

    private function mapSearchItem(array $item, ?YouTubeChannel $channel): array
    {
        $channelTitle = data_get($item, 'snippet.channelTitle', '');

        return [
            'channel'     => $channel,
            'channel_name' => $channel?->name ?? $channelTitle,
            'video_id'    => data_get($item, 'id.videoId'),
            'title'       => data_get($item, 'snippet.title'),
            'thumbnail'   => data_get($item, 'snippet.thumbnails.high.url')
                ?: data_get($item, 'snippet.thumbnails.medium.url')
                ?: data_get($item, 'snippet.thumbnails.default.url'),
            'description' => data_get($item, 'snippet.description'),
        ];
    }

    private function searchLive(array $extra, string $apiKey): array
    {
        $response = $this->get('search', array_merge([
            'part'       => 'snippet',
            'eventType'  => 'live',
            'type'       => 'video',
            'maxResults' => 10,
            'key'        => $apiKey,
        ], $extra));

        return $response['items'] ?? [];
    }

    private function resolveApiKey(): string
    {
        $key = config('youtube.api_key') ?: setting('youtube_api_key');

        if (! $key) {
            throw new RuntimeException('No YouTube API key configured. Set one in Admin → Live Streams → YouTube Settings.');
        }

        return $key;
    }

    private function flushCaches(): void
    {
        Cache::forget('watch.channels');
    }
}
