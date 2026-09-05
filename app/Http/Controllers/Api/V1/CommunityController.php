<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CommunityGroupResource;
use App\Http\Resources\Api\CommunityPostResource;
use App\Http\Resources\Api\ForumCategoryResource;
use App\Http\Resources\Api\ForumReplyResource;
use App\Http\Resources\Api\ForumTopicResource;
use App\Services\CommunityService;
use App\Support\Api\ApiResponse;
use App\Support\Api\ListQuery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function __construct(private readonly CommunityService $community)
    {
    }

    // ---- Feed --------------------------------------------------------

    public function feed(Request $request): JsonResponse
    {
        $posts = $this->community->feed(new ListQuery($request, defaultPerPage: 20));

        return ApiResponse::paginated(
            CommunityPostResource::collection($posts->getCollection())->resolve($request),
            $posts
        );
    }

    public function storePost(Request $request): JsonResponse
    {
        $data = $request->validate([
            'type' => ['sometimes', 'string', 'in:text,image,link'],
            'content' => ['required_without:media_url', 'nullable', 'string', 'max:5000'],
            'media_url' => ['nullable', 'string', 'max:500'],
            'link_url' => ['nullable', 'url', 'max:500'],
            'link_title' => ['nullable', 'string', 'max:255'],
            'link_image' => ['nullable', 'string', 'max:500'],
        ]);

        $post = $this->community->createPost($request->user(), $data);

        return ApiResponse::ok((new CommunityPostResource($post))->resolve($request), status: 201);
    }

    public function destroyPost(Request $request, int $id): JsonResponse
    {
        $this->community->deletePost($request->user(), $id);

        return ApiResponse::ok(['message' => 'Post deleted.']);
    }

    public function toggleLike(Request $request, int $id): JsonResponse
    {
        return ApiResponse::ok($this->community->toggleLike($request->user(), $id));
    }

    // ---- Groups ---------------------------------------------------

    public function groups(Request $request): JsonResponse
    {
        $groups = $this->community->groups(new ListQuery($request, defaultPerPage: 20));

        return ApiResponse::paginated(
            CommunityGroupResource::collection($groups->getCollection())->resolve($request),
            $groups
        );
    }

    public function group(Request $request, string $slug): JsonResponse
    {
        return ApiResponse::ok((new CommunityGroupResource($this->community->group($slug)))->resolve($request));
    }

    public function joinGroup(Request $request, string $slug): JsonResponse
    {
        return ApiResponse::ok((new CommunityGroupResource($this->community->joinGroup($request->user(), $slug)))->resolve($request));
    }

    public function leaveGroup(Request $request, string $slug): JsonResponse
    {
        return ApiResponse::ok((new CommunityGroupResource($this->community->leaveGroup($request->user(), $slug)))->resolve($request));
    }

    // ---- Forum --------------------------------------------------

    public function forumCategories(Request $request): JsonResponse
    {
        return ApiResponse::ok(
            ForumCategoryResource::collection($this->community->forumCategories())->resolve($request)
        );
    }

    public function forumTopics(Request $request): JsonResponse
    {
        $category = trim((string) $request->input('category', ''));
        $topics = $this->community->forumTopics(new ListQuery($request, defaultPerPage: 20), $category);

        return ApiResponse::paginated(
            ForumTopicResource::collection($topics->getCollection())->resolve($request),
            $topics
        );
    }

    public function forumTopic(Request $request, string $slug): JsonResponse
    {
        $topic = $this->community->forumTopic($slug);
        $replies = $this->community->forumReplies($topic, new ListQuery($request, defaultPerPage: 20));

        return ApiResponse::ok([
            'topic' => (new ForumTopicResource($topic))->resolve($request),
            'replies' => ForumReplyResource::collection($replies->getCollection())->resolve($request),
        ], ['pagination' => [
            'current_page' => $replies->currentPage(),
            'last_page' => $replies->lastPage(),
            'per_page' => $replies->perPage(),
            'total' => $replies->total(),
            'has_more' => $replies->hasMorePages(),
        ]]);
    }

    public function storeTopic(Request $request, string $categorySlug): JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:20000'],
        ]);

        $topic = $this->community->createTopic($request->user(), $categorySlug, $data);

        return ApiResponse::ok((new ForumTopicResource($topic))->resolve($request), status: 201);
    }

    public function storeReply(Request $request, string $topicSlug): JsonResponse
    {
        $data = $request->validate(['content' => ['required', 'string', 'max:20000']]);

        $reply = $this->community->createReply($request->user(), $topicSlug, $data['content']);

        return ApiResponse::ok((new ForumReplyResource($reply))->resolve($request), status: 201);
    }
}
