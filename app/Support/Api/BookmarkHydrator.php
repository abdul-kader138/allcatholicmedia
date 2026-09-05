<?php

namespace App\Support\Api;

use App\Http\Resources\Api\ChannelResource;
use App\Http\Resources\Api\PodcastEpisodeResource;
use App\Http\Resources\Api\PodcastShowResource;
use App\Http\Resources\Api\PostResource;
use App\Http\Resources\Api\VideoResource;
use App\Models\PodcastEpisode;
use App\Models\PodcastShow;
use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use Botble\Blog\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * Turns a page of MemberBookmark rows into hydrated content, in one batched
 * query per type, preserving the bookmark order.
 */
class BookmarkHydrator
{
    /**
     * @param  Collection<int, \App\Models\MemberBookmark>  $bookmarks
     * @return array<int, array<string, mixed>>
     */
    public function expand(Collection $bookmarks, Request $request): array
    {
        $byType = $bookmarks->groupBy('bookmarkable_type');
        $resolved = [];

        foreach ($byType as $type => $rows) {
            $ids = $rows->pluck('bookmarkable_id')->all();
            [$models, $resource] = $this->fetch($type, $ids);

            foreach ($models as $model) {
                $resolved[$type][$model->getKey()] = ($resource)($model, $request);
            }
        }

        return $bookmarks->map(function ($b) use ($resolved) {
            return [
                'id' => $b->id,
                'type' => $b->bookmarkable_type,
                'ref_id' => $b->bookmarkable_id,
                'created_at' => $b->created_at?->toIso8601String(),
                'item' => $resolved[$b->bookmarkable_type][$b->bookmarkable_id] ?? null,
            ];
        })->all();
    }

    /**
     * @param  array<int, int>  $ids
     * @return array{0: iterable, 1: callable}
     */
    private function fetch(string $type, array $ids): array
    {
        return match ($type) {
            'article', 'saint' => [
                Post::query()->with(['slugable', 'categories'])->wherePublished()->whereIn('id', $ids)->get(),
                fn ($m, $r) => (new PostResource($m))->resolve($r),
            ],
            'video' => [
                YouTubeChannelVideo::query()->whereIn('id', $ids)->get(),
                fn ($m, $r) => (new VideoResource($m))->resolve($r),
            ],
            'episode' => [
                PodcastEpisode::query()->whereIn('id', $ids)->get(),
                fn ($m, $r) => (new PodcastEpisodeResource($m))->resolve($r),
            ],
            'show' => [
                PodcastShow::query()->withCount('episodes')->whereIn('id', $ids)->get(),
                fn ($m, $r) => (new PodcastShowResource($m))->resolve($r),
            ],
            'channel' => [
                YouTubeChannel::query()->withCount('videos')->whereIn('id', $ids)->get(),
                fn ($m, $r) => (new ChannelResource($m))->resolve($r),
            ],
            default => [collect(), fn ($m, $r) => null],
        };
    }
}
