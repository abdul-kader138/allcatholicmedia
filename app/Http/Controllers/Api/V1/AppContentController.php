<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CategoryResource;
use App\Http\Resources\Api\ChannelResource;
use App\Http\Resources\Api\LiveStreamResource;
use App\Http\Resources\Api\PageResource;
use App\Http\Resources\Api\PodcastEpisodeResource;
use App\Http\Resources\Api\PodcastShowResource;
use App\Http\Resources\Api\PostDetailResource;
use App\Http\Resources\Api\PostResource;
use App\Http\Resources\Api\VideoResource;
use App\Services\AppContentService;
use App\Support\Api\ApiResponse;
use App\Support\Api\ListQuery;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AppContentController extends Controller
{
    private const DONATION_PRESETS = [5, 10, 25, 50, 100];
    private const DONATION_MIN = 1;
    private const DONATION_MAX = 10000;

    public function __construct(private readonly AppContentService $content)
    {
    }

    public function home(Request $request): JsonResponse
    {
        return $this->respond($request, 'home', 300, function () {
            $c = $this->content->homeCounts();

            return ['data' => ['sections' => [
                ['key' => 'channels', 'title' => 'Channels', 'path' => '/channels', 'count' => $c['channels']],
                ['key' => 'live_now', 'title' => 'Live Now', 'path' => '/live-now', 'count' => $c['live_now']],
                ['key' => 'listen', 'title' => 'Listen', 'path' => '/listen', 'count' => $c['listen']],
                ['key' => 'read', 'title' => 'Read', 'path' => '/read', 'count' => $c['read']],
                ['key' => 'saints', 'title' => 'Saints', 'path' => '/saints', 'count' => $c['saints']],
                ['key' => 'donate', 'title' => 'Donate', 'path' => '/donate', 'count' => null],
                ['key' => 'prayer_requests', 'title' => 'Prayer Request', 'path' => '/prayer-request', 'count' => null],
            ]]];
        });
    }

    public function channels(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 20, defaultSort: 'sort');

        return $this->respond($request, 'channels:' . $lq->cacheKey(), 300, function () use ($request, $lq) {
            $channels = $this->content->channelsPaginated($lq);

            return [
                'data' => ChannelResource::collection($channels->getCollection())->resolve($request),
                'meta' => $this->pageMeta($channels),
            ];
        });
    }

    public function channelDetail(Request $request, string $slug): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 18);
        $live = $request->has('live') ? $request->boolean('live') : null;

        return $this->respond($request, "channel:{$slug}:" . $lq->cacheKey() . ':l' . var_export($live, true), 120, function () use ($request, $slug, $lq, $live) {
            $channel = $this->content->channel($slug);
            $videos = $this->content->channelVideos($channel, $lq, $live);

            return [
                'data' => [
                    'channel' => (new ChannelResource($channel))->resolve($request),
                    'videos' => VideoResource::collection($videos->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($videos),
            ];
        });
    }

    /** "Watch" — cross-channel video feed / search. */
    public function videos(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 18);
        $channel = trim((string) $request->input('channel', ''));
        $live = $request->has('live') ? $request->boolean('live') : null;

        return $this->respond($request, "videos:{$channel}:" . $lq->cacheKey() . ':l' . var_export($live, true), 120, function () use ($request, $lq, $channel, $live) {
            $videos = $this->content->videos($lq, $channel, $live);

            return [
                'data' => VideoResource::collection($videos->getCollection())->resolve($request),
                'meta' => $this->pageMeta($videos),
            ];
        });
    }

    public function videoDetail(Request $request, int $id): JsonResponse
    {
        return $this->respond($request, "video:{$id}", 300, function () use ($request, $id) {
            $video = $this->content->video($id);

            return ['data' => array_merge(
                (new VideoResource($video))->resolve($request),
                ['channel' => (new ChannelResource($video->channel))->resolve($request)]
            )];
        });
    }

    public function listen(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 20, defaultSort: 'name');
        $category = trim((string) $request->input('category', ''));

        return $this->respond($request, "listen:{$category}:" . $lq->cacheKey(), 300, function () use ($request, $lq, $category) {
            $shows = $this->content->showsPaginated($lq, $category);

            return [
                'data' => [
                    'categories' => $this->content->showCategories()->all(),
                    'shows' => PodcastShowResource::collection($shows->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($shows),
            ];
        });
    }

    public function listenDetail(Request $request, string $slug): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 18);

        return $this->respond($request, "show:{$slug}:" . $lq->cacheKey(), 120, function () use ($request, $slug, $lq) {
            $show = $this->content->show($slug);
            $episodes = $this->content->showEpisodes($show, $lq);

            return [
                'data' => [
                    'show' => (new PodcastShowResource($show))->resolve($request),
                    'episodes' => PodcastEpisodeResource::collection($episodes->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($episodes),
            ];
        });
    }

    public function episodeDetail(Request $request, int $id): JsonResponse
    {
        return $this->respond($request, "episode:{$id}", 300, function () use ($request, $id) {
            $episode = $this->content->episode($id);

            return ['data' => array_merge(
                (new PodcastEpisodeResource($episode))->resolve($request),
                ['show' => (new PodcastShowResource($episode->show))->resolve($request)]
            )];
        });
    }

    public function liveNow(Request $request): JsonResponse
    {
        $status = (string) $request->input('status', '');

        return $this->respond($request, "live-now:{$status}", 30, function () use ($request, $status) {
            $data = [];

            if ($status === '' || $status === 'live') {
                $data['live_now'] = LiveStreamResource::collection($this->content->liveNow())->resolve($request);
            }

            if ($status === '' || $status === 'upcoming') {
                $data['upcoming'] = LiveStreamResource::collection($this->content->upcomingStreams(50))->resolve($request);
            }

            return ['data' => $data];
        });
    }

    public function read(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 12, defaultSort: 'latest');
        $categoryId = $request->integer('category');

        return $this->respond($request, "read:{$categoryId}:" . $lq->cacheKey(), 120, function () use ($request, $lq, $categoryId) {
            $articles = $this->content->articles($lq, $categoryId);

            return [
                'data' => [
                    'categories' => CategoryResource::collection($this->content->articleCategories())->resolve($request),
                    'articles' => PostResource::collection($articles->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($articles),
            ];
        });
    }

    public function articleDetail(Request $request, string $slug): JsonResponse
    {
        return $this->respond($request, "article:{$slug}", 120, function () use ($request, $slug) {
            return ['data' => (new PostDetailResource($this->content->postBySlug($slug)))->resolve($request)];
        });
    }

    public function saints(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 18);
        $letter = strtoupper(trim((string) $request->input('letter', '')));

        return $this->respond($request, "saints:{$letter}:" . $lq->cacheKey(), 300, function () use ($request, $lq, $letter) {
            $saints = $this->content->saints($lq, $letter);

            return [
                'data' => [
                    'available_letters' => $this->content->saintLetters()->all(),
                    'saints' => PostResource::collection($saints->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($saints),
            ];
        });
    }

    public function saintDetail(Request $request, string $slug): JsonResponse
    {
        return $this->respond($request, "saint:{$slug}", 300, function () use ($request, $slug) {
            $saint = $this->content->postBySlug($slug, AppContentService::SAINTS_CATEGORY_ID);

            return ['data' => (new PostDetailResource($saint))->resolve($request)];
        });
    }

    public function search(Request $request): JsonResponse
    {
        $term = trim((string) $request->input('q', ''));

        if (mb_strlen($term) < 2) {
            return ApiResponse::error('Provide at least 2 characters to search.', 422, 'query_too_short');
        }

        return $this->respond($request, 'search:' . md5(mb_strtolower($term)), 120, function () use ($request, $term) {
            $r = $this->content->search($term);

            return ['data' => [
                'query' => $term,
                'articles' => PostResource::collection($r['articles'])->resolve($request),
                'saints' => PostResource::collection($r['saints'])->resolve($request),
                'shows' => PodcastShowResource::collection($r['shows'])->resolve($request),
                'channels' => ChannelResource::collection($r['channels'])->resolve($request),
            ]];
        });
    }

    public function page(Request $request, string $slug): JsonResponse
    {
        return $this->respond($request, "page:{$slug}", 600, function () use ($request, $slug) {
            return ['data' => (new PageResource($this->content->page($slug)))->resolve($request)];
        });
    }

    public function donateConfig(Request $request): JsonResponse
    {
        return ApiResponse::cache(ApiResponse::ok([
            'currency' => 'USD',
            'minimum_amount' => self::DONATION_MIN,
            'maximum_amount' => self::DONATION_MAX,
            'preset_amounts' => self::DONATION_PRESETS,
            'guest_checkout_url' => url('/donate'),
            'member_checkout_url' => url('/account/donate'),
            'supports_prayer_message' => true,
        ]), $request, 3600);
    }

    public function newsletterSubscribe(Request $request): JsonResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:120'],
            'name' => ['nullable', 'string', 'max:120'],
        ]);

        $this->content->subscribeNewsletter($data['email'], (string) ($data['name'] ?? ''));

        return ApiResponse::ok(['message' => 'You are subscribed.'], status: 201);
    }

    private function respond(Request $request, string $keySuffix, int $ttl, \Closure $build): JsonResponse
    {
        $version = (int) Cache::get('acm_homepage_cache_version', 1);
        $payload = Cache::remember("api.v1.{$version}.{$keySuffix}", $ttl, $build);

        return ApiResponse::cache(
            ApiResponse::ok($payload['data'], $payload['meta'] ?? []),
            $request,
            $ttl
        );
    }

    private function pageMeta(LengthAwarePaginator $paginator): array
    {
        return [
            'pagination' => [
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'total' => $paginator->total(),
                'has_more' => $paginator->hasMorePages(),
            ],
        ];
    }
}
