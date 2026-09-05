<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CategoryResource;
use App\Http\Resources\Api\ChannelResource;
use App\Http\Resources\Api\LiveStreamResource;
use App\Http\Resources\Api\PodcastEpisodeResource;
use App\Http\Resources\Api\PodcastShowResource;
use App\Http\Resources\Api\PostResource;
use App\Http\Resources\Api\VideoResource;
use App\Services\AppContentService;
use App\Support\Api\ApiResponse;
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
            $counts = $this->content->homeCounts();

            $sections = [
                ['key' => 'channels', 'title' => 'Channels', 'path' => '/channels', 'count' => $counts['channels']],
                ['key' => 'live_now', 'title' => 'Live Now', 'path' => '/live-now', 'count' => $counts['live_now']],
                ['key' => 'listen', 'title' => 'Listen', 'path' => '/listen', 'count' => $counts['listen']],
                ['key' => 'read', 'title' => 'Read', 'path' => '/read', 'count' => $counts['read']],
                ['key' => 'saints', 'title' => 'Saints', 'path' => '/saints', 'count' => $counts['saints']],
                ['key' => 'donate', 'title' => 'Donate', 'path' => '/donate', 'count' => null],
                ['key' => 'prayer_requests', 'title' => 'Prayer Request', 'path' => '/prayer-request', 'count' => null],
            ];

            return ['data' => ['sections' => $sections]];
        });
    }

    public function channels(Request $request): JsonResponse
    {
        return $this->respond($request, 'channels', 300, function () use ($request) {
            return ['data' => ChannelResource::collection($this->content->channels())->resolve($request)];
        });
    }

    public function channelDetail(Request $request, string $slug): JsonResponse
    {
        return $this->respond($request, "channel:{$slug}:p" . $request->integer('page', 1), 120, function () use ($request, $slug) {
            $channel = $this->content->channel($slug);
            $videos = $this->content->channelVideos($channel);

            return [
                'data' => [
                    'channel' => (new ChannelResource($channel))->resolve($request),
                    'videos' => VideoResource::collection($videos->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($videos),
            ];
        });
    }

    public function listen(Request $request): JsonResponse
    {
        $category = trim((string) $request->input('category', ''));
        $sort = (string) $request->input('sort', 'name');

        return $this->respond($request, "listen:{$category}:{$sort}", 300, function () use ($request, $category, $sort) {
            return [
                'data' => [
                    'categories' => $this->content->showCategories()->all(),
                    'shows' => PodcastShowResource::collection($this->content->shows($category, $sort))->resolve($request),
                ],
            ];
        });
    }

    public function listenDetail(Request $request, string $slug): JsonResponse
    {
        return $this->respond($request, "show:{$slug}:p" . $request->integer('page', 1), 120, function () use ($request, $slug) {
            $show = $this->content->show($slug);
            $episodes = $this->content->showEpisodes($show);

            return [
                'data' => [
                    'show' => (new PodcastShowResource($show))->resolve($request),
                    'episodes' => PodcastEpisodeResource::collection($episodes->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($episodes),
            ];
        });
    }

    public function liveNow(Request $request): JsonResponse
    {
        return $this->respond($request, 'live-now', 30, function () use ($request) {
            return [
                'data' => [
                    'live_now' => LiveStreamResource::collection($this->content->liveNow())->resolve($request),
                    'upcoming' => LiveStreamResource::collection($this->content->upcomingStreams())->resolve($request),
                ],
            ];
        });
    }

    public function read(Request $request): JsonResponse
    {
        $categoryId = $request->integer('category');
        $search = trim((string) $request->input('q', ''));
        $sort = (string) $request->input('sort', 'latest');
        $key = "read:{$categoryId}:{$sort}:" . md5($search) . ':p' . $request->integer('page', 1);

        return $this->respond($request, $key, 120, function () use ($request, $categoryId, $search, $sort) {
            $articles = $this->content->articles($categoryId, $search, $sort);

            return [
                'data' => [
                    'categories' => CategoryResource::collection($this->content->articleCategories())->resolve($request),
                    'articles' => PostResource::collection($articles->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($articles),
            ];
        });
    }

    public function saints(Request $request): JsonResponse
    {
        $search = trim((string) $request->input('q', ''));
        $letter = strtoupper(trim((string) $request->input('letter', '')));
        $key = 'saints:' . md5($search) . ":{$letter}:p" . $request->integer('page', 1);

        return $this->respond($request, $key, 300, function () use ($request, $search, $letter) {
            $saints = $this->content->saints($search, $letter);

            return [
                'data' => [
                    'available_letters' => $this->content->saintLetters()->all(),
                    'saints' => PostResource::collection($saints->getCollection())->resolve($request),
                ],
                'meta' => $this->pageMeta($saints),
            ];
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

    /**
     * Cache the payload (keyed to the site-wide content version), wrap it in the
     * standard envelope, and attach revalidation headers.
     */
    private function respond(Request $request, string $keySuffix, int $ttl, \Closure $build): JsonResponse
    {
        $version = (int) Cache::get('acm_homepage_cache_version', 1);
        $payload = Cache::remember("api.v1.{$version}.{$keySuffix}", $ttl, $build);

        $response = ApiResponse::ok($payload['data'], $payload['meta'] ?? []);

        return ApiResponse::cache($response, $request, $ttl);
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
