<?php

namespace App\Services;

use Acm\LiveStream\Models\LiveStream;
use App\Models\PodcastEpisode;
use App\Models\PodcastShow;
use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

/**
 * All read queries behind the mobile API, in one place so the versioned
 * controllers only deal with shaping the response.
 */
class AppContentService
{
    public const SAINTS_CATEGORY_ID = 3;

    /** @return array<string, int> */
    public function homeCounts(): array
    {
        return [
            'channels' => YouTubeChannel::query()->active()->count(),
            'live_now' => LiveStream::live()->count(),
            'listen' => PodcastShow::query()->active()->count(),
            'read' => $this->readBaseQuery()->count(),
            'saints' => $this->saintsBaseQuery()->count(),
        ];
    }

    public function channels(): Collection
    {
        return YouTubeChannel::query()
            ->active()
            ->withCount('videos')
            ->with('latestVideo')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
    }

    public function channel(string $slug): YouTubeChannel
    {
        return YouTubeChannel::query()
            ->active()
            ->withCount('videos')
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function channelVideos(YouTubeChannel $channel, int $perPage = 18): LengthAwarePaginator
    {
        return YouTubeChannelVideo::query()
            ->where('youtube_channel_id', $channel->id)
            ->orderByDesc('is_live')
            ->orderByDesc('published_at')
            ->paginate($perPage);
    }

    public function shows(string $category = '', string $sort = 'name'): Collection
    {
        return PodcastShow::query()
            ->active()
            ->withCount('episodes')
            ->when($category !== '', fn (Builder $q) => $q->where('category', $category))
            ->when(
                $sort === 'episodes',
                fn (Builder $q) => $q->orderByDesc('episodes_count')->orderBy('name'),
                fn (Builder $q) => $q->orderBy('sort_order')->orderBy('name')
            )
            ->get();
    }

    public function showCategories(): Collection
    {
        return PodcastShow::query()
            ->active()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->orderBy('category')
            ->pluck('category')
            ->values();
    }

    public function show(string $slug): PodcastShow
    {
        return PodcastShow::query()
            ->active()
            ->withCount('episodes')
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function showEpisodes(PodcastShow $show, int $perPage = 18): LengthAwarePaginator
    {
        return PodcastEpisode::query()
            ->where('podcast_show_id', $show->id)
            ->orderByDesc('is_featured')
            ->orderByDesc('published_at')
            ->orderByDesc('episode_number')
            ->paginate($perPage);
    }

    public function liveNow(): Collection
    {
        return LiveStream::live()->orderBy('order_column')->get();
    }

    public function upcomingStreams(int $limit = 20): Collection
    {
        return LiveStream::upcoming()->orderBy('scheduled_at')->limit($limit)->get();
    }

    public function articles(int $categoryId = 0, string $search = '', string $sort = 'latest', int $perPage = 12): LengthAwarePaginator
    {
        return $this->readBaseQuery()
            ->when($categoryId > 0, fn (Builder $q) => $q->whereHas('categories', fn (Builder $c) => $c->where('id', $categoryId)))
            ->when($search !== '', fn (Builder $q) => $q->where('name', 'like', '%' . $search . '%'))
            ->when(
                $sort === 'popular',
                fn (Builder $q) => $q->orderByDesc('views'),
                fn (Builder $q) => $q->latest()
            )
            ->paginate($perPage);
    }

    public function articleCategories(): Collection
    {
        return Category::query()
            ->whereHas('posts', fn (Builder $q) => $q->wherePublished())
            ->where('id', '!=', self::SAINTS_CATEGORY_ID)
            ->orderBy('name')
            ->get(['id', 'name']);
    }

    public function saints(string $search = '', string $letter = '', int $perPage = 18): LengthAwarePaginator
    {
        return $this->saintsBaseQuery()
            ->when($search !== '', fn (Builder $q) => $q->where('name', 'like', '%' . $search . '%'))
            ->when($letter !== '', fn (Builder $q) => $q->where('name', 'like', $letter . '%'))
            ->orderBy('name')
            ->paginate($perPage);
    }

    public function saintLetters(): Collection
    {
        return Post::query()
            ->wherePublished()
            ->whereHas('categories', fn (Builder $q) => $q->where('id', self::SAINTS_CATEGORY_ID))
            ->selectRaw('UPPER(LEFT(name, 1)) as letter')
            ->distinct()
            ->orderBy('letter')
            ->pluck('letter')
            ->values();
    }

    public function readBaseQuery(): Builder
    {
        return Post::query()
            ->with(['slugable', 'categories'])
            ->wherePublished()
            ->whereDoesntHave('metadata', fn (Builder $q) => $q
                ->where('meta_key', 'video_url')
                ->whereNotNull('meta_value')
                ->where('meta_value', '!=', ''))
            ->whereDoesntHave('metadata', fn (Builder $q) => $q
                ->where('meta_key', 'audio')
                ->whereNotNull('meta_value')
                ->where('meta_value', '!=', ''))
            ->whereDoesntHave('categories', fn (Builder $q) => $q->where('id', self::SAINTS_CATEGORY_ID));
    }

    public function saintsBaseQuery(): Builder
    {
        return Post::query()
            ->with(['slugable', 'categories'])
            ->wherePublished()
            ->whereHas('categories', fn (Builder $q) => $q->where('id', self::SAINTS_CATEGORY_ID));
    }
}
