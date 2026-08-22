<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PodcastEpisode;
use App\Models\PodcastShow;
use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use Acm\LiveStream\Models\LiveStream;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppContentController extends Controller
{
    private const DONATION_PRESETS = [5, 10, 25, 50, 100];
    private const DONATION_MIN = 1;
    private const DONATION_MAX = 10000;

    public function home(): JsonResponse
    {
        $liveNowCount = LiveStream::live()->count();
        $channelCount = YouTubeChannel::query()->active()->count();
        $podcastCount = PodcastShow::query()->active()->count();
        $articleCount = $this->readBaseQuery()->count();
        $saintCount = $this->saintsBaseQuery()->count();

        return response()->json([
            'data' => [
                'sections' => [
                    ['key' => 'channels', 'title' => 'Channels', 'count' => $channelCount, 'path' => '/channels'],
                    ['key' => 'live_now', 'title' => 'Live Now', 'count' => $liveNowCount, 'path' => '/live-now'],
                    ['key' => 'listen', 'title' => 'Listen', 'count' => $podcastCount, 'path' => '/listen'],
                    ['key' => 'read', 'title' => 'Read', 'count' => $articleCount, 'path' => '/read'],
                    ['key' => 'saints', 'title' => 'Saints', 'count' => $saintCount, 'path' => '/saints'],
                    ['key' => 'donate', 'title' => 'Donate', 'path' => '/donate'],
                    ['key' => 'prayer_requests', 'title' => 'Prayer Request', 'path' => '/prayer-request'],
                ],
            ],
        ]);
    }

    public function channels(): JsonResponse
    {
        $channels = YouTubeChannel::query()
            ->active()
            ->withCount('videos')
            ->with(['videos' => fn ($query) => $query->latest('published_at')->limit(1)])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return response()->json([
            'data' => $channels->map(fn (YouTubeChannel $channel) => [
                'name' => $channel->name,
                'slug' => $channel->slug,
                'thumbnail' => $channel->thumbnail,
                'banner' => $channel->banner,
                'description' => $channel->description,
                'videos_count' => $channel->videos_count,
                'latest_video' => $channel->videos->first() ? $this->transformVideo($channel->videos->first()) : null,
            ]),
        ]);
    }

    public function channelDetail(string $slug): JsonResponse
    {
        $channel = YouTubeChannel::query()
            ->active()
            ->withCount('videos')
            ->where('slug', $slug)
            ->firstOrFail();

        $videos = YouTubeChannelVideo::query()
            ->where('youtube_channel_id', $channel->id)
            ->orderByDesc('is_live')
            ->orderByDesc('published_at')
            ->paginate(18);

        return response()->json([
            'data' => [
                'channel' => [
                    'name' => $channel->name,
                    'slug' => $channel->slug,
                    'thumbnail' => $channel->thumbnail,
                    'banner' => $channel->banner,
                    'description' => $channel->description,
                    'videos_count' => $channel->videos_count,
                ],
                'videos' => $videos->getCollection()->map(fn (YouTubeChannelVideo $video) => $this->transformVideo($video))->values(),
                'meta' => $this->paginationMeta($videos),
            ],
        ]);
    }

    public function listen(Request $request): JsonResponse
    {
        $category = trim((string) $request->input('category', ''));
        $sort = $request->input('sort', 'name');

        $shows = PodcastShow::query()
            ->active()
            ->withCount('episodes')
            ->when($category !== '', fn ($query) => $query->where('category', $category))
            ->when(
                $sort === 'episodes',
                fn ($query) => $query->orderByDesc('episodes_count')->orderBy('name'),
                fn ($query) => $query->orderBy('sort_order')->orderBy('name')
            )
            ->get();

        $categories = PodcastShow::query()
            ->active()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->orderBy('category')
            ->pluck('category')
            ->values();

        return response()->json([
            'data' => [
                'categories' => $categories,
                'shows' => $shows->map(fn (PodcastShow $show) => [
                    'name' => $show->name,
                    'slug' => $show->slug,
                    'thumbnail' => $show->thumbnail,
                    'banner' => $show->banner,
                    'description' => $show->description,
                    'category' => $show->category,
                    'episodes_count' => $show->episodes_count,
                ]),
            ],
        ]);
    }

    public function listenDetail(string $slug): JsonResponse
    {
        $show = PodcastShow::query()
            ->active()
            ->withCount('episodes')
            ->where('slug', $slug)
            ->firstOrFail();

        $episodes = PodcastEpisode::query()
            ->where('podcast_show_id', $show->id)
            ->orderByDesc('is_featured')
            ->orderByDesc('published_at')
            ->orderByDesc('episode_number')
            ->paginate(18);

        return response()->json([
            'data' => [
                'show' => [
                    'name' => $show->name,
                    'slug' => $show->slug,
                    'thumbnail' => $show->thumbnail,
                    'banner' => $show->banner,
                    'description' => $show->description,
                    'category' => $show->category,
                    'episodes_count' => $show->episodes_count,
                ],
                'episodes' => $episodes->getCollection()->map(fn (PodcastEpisode $episode) => [
                    'id' => $episode->id,
                    'title' => $episode->title,
                    'slug' => $episode->slug,
                    'description' => $episode->description,
                    'thumbnail' => $episode->thumbnail,
                    'audio_url' => $episode->audio_url,
                    'embed_url' => $episode->embed_url,
                    'duration' => $episode->duration,
                    'episode_number' => $episode->episode_number,
                    'is_featured' => $episode->is_featured,
                    'published_at' => $episode->published_at?->toIso8601String(),
                ])->values(),
                'meta' => $this->paginationMeta($episodes),
            ],
        ]);
    }

    public function liveNow(): JsonResponse
    {
        $liveNow = LiveStream::live()->orderBy('order_column')->get();
        $upcoming = LiveStream::upcoming()->orderBy('scheduled_at')->limit(20)->get();

        return response()->json([
            'data' => [
                'live_now' => $liveNow->map(fn (LiveStream $stream) => [
                    'id' => $stream->id,
                    'title' => $stream->title,
                    'embed_url' => $stream->embed_url,
                    'source_name' => $stream->source_name,
                    'location' => $stream->location,
                    'thumbnail' => $stream->thumbnail,
                    'scheduled_at' => $stream->scheduled_at?->toIso8601String(),
                    'is_live' => (bool) $stream->is_live,
                ]),
                'upcoming' => $upcoming->map(fn (LiveStream $stream) => [
                    'id' => $stream->id,
                    'title' => $stream->title,
                    'embed_url' => $stream->embed_url,
                    'source_name' => $stream->source_name,
                    'location' => $stream->location,
                    'thumbnail' => $stream->thumbnail,
                    'scheduled_at' => $stream->scheduled_at?->toIso8601String(),
                    'is_live' => (bool) $stream->is_live,
                ]),
            ],
        ]);
    }

    public function read(Request $request): JsonResponse
    {
        $categoryId = $request->integer('category');
        $query = trim((string) $request->input('q', ''));
        $sort = $request->input('sort', 'latest');

        $articles = $this->readBaseQuery()
            ->when($categoryId > 0, fn ($builder) => $builder->whereHas('categories', fn ($categoryQuery) => $categoryQuery->where('id', $categoryId)))
            ->when($query !== '', fn ($builder) => $builder->where('name', 'like', '%' . $query . '%'))
            ->when($sort === 'popular', fn ($builder) => $builder->orderByDesc('views'), fn ($builder) => $builder->latest())
            ->paginate(12);

        $categories = Category::query()
            ->whereHas('posts', fn ($builder) => $builder->wherePublished())
            ->where('id', '!=', 3)
            ->orderBy('name')
            ->get(['id', 'name']);

        return response()->json([
            'data' => [
                'categories' => $categories->map(fn (Category $category) => [
                    'id' => $category->id,
                    'name' => $category->name,
                ]),
                'articles' => $articles->getCollection()->map(fn (Post $post) => $this->transformPost($post))->values(),
                'meta' => $this->paginationMeta($articles),
            ],
        ]);
    }

    public function saints(Request $request): JsonResponse
    {
        $query = trim((string) $request->input('q', ''));
        $letter = strtoupper(trim((string) $request->input('letter', '')));

        $saints = $this->saintsBaseQuery()
            ->when($query !== '', fn ($builder) => $builder->where('name', 'like', '%' . $query . '%'))
            ->when($letter !== '', fn ($builder) => $builder->where('name', 'like', $letter . '%'))
            ->orderBy('name')
            ->paginate(18);

        $availableLetters = Post::query()
            ->wherePublished()
            ->whereHas('categories', fn ($builder) => $builder->where('id', 3))
            ->selectRaw('UPPER(LEFT(name, 1)) as letter')
            ->distinct()
            ->orderBy('letter')
            ->pluck('letter')
            ->values();

        return response()->json([
            'data' => [
                'available_letters' => $availableLetters,
                'saints' => $saints->getCollection()->map(fn (Post $post) => $this->transformPost($post))->values(),
                'meta' => $this->paginationMeta($saints),
            ],
        ]);
    }

    public function donateConfig(): JsonResponse
    {
        return response()->json([
            'data' => [
                'currency' => 'USD',
                'minimum_amount' => self::DONATION_MIN,
                'maximum_amount' => self::DONATION_MAX,
                'preset_amounts' => self::DONATION_PRESETS,
                'guest_checkout_url' => url('/donate'),
                'member_checkout_url' => url('/account/donate'),
                'supports_prayer_message' => true,
            ],
        ]);
    }

    private function readBaseQuery()
    {
        return Post::query()
            ->with(['slugable', 'categories', 'tags'])
            ->wherePublished()
            ->whereDoesntHave('metadata', fn ($query) => $query
                ->where('meta_key', 'video_url')
                ->whereNotNull('meta_value')
                ->where('meta_value', '!=', ''))
            ->whereDoesntHave('metadata', fn ($query) => $query
                ->where('meta_key', 'audio')
                ->whereNotNull('meta_value')
                ->where('meta_value', '!=', ''))
            ->whereDoesntHave('categories', fn ($query) => $query->where('id', 3));
    }

    private function saintsBaseQuery()
    {
        return Post::query()
            ->with(['slugable', 'categories', 'tags'])
            ->wherePublished()
            ->whereHas('categories', fn ($query) => $query->where('id', 3));
    }

    private function paginationMeta(LengthAwarePaginator $paginator): array
    {
        return [
            'current_page' => $paginator->currentPage(),
            'last_page' => $paginator->lastPage(),
            'per_page' => $paginator->perPage(),
            'total' => $paginator->total(),
        ];
    }

    private function transformVideo(YouTubeChannelVideo $video): array
    {
        return [
            'id' => $video->id,
            'youtube_video_id' => $video->youtube_video_id,
            'title' => $video->title,
            'slug' => $video->slug,
            'description' => $video->description,
            'thumbnail' => $video->thumbnail,
            'video_url' => $video->video_url,
            'embed_url' => $video->embed_url,
            'duration' => $video->duration,
            'view_count' => $video->view_count,
            'is_live' => $video->is_live,
            'published_at' => $video->published_at?->toIso8601String(),
        ];
    }

    private function transformPost(Post $post): array
    {
        return [
            'id' => $post->id,
            'title' => $post->name,
            'description' => $post->description,
            'image' => $post->image,
            'url' => $post->url,
            'published_at' => $post->created_at?->toIso8601String(),
            'categories' => $post->categories->map(fn (Category $category) => [
                'id' => $category->id,
                'name' => $category->name,
            ])->values(),
        ];
    }
}
