<?php

namespace App\Services;

use Acm\Community\Models\CommunityGroup;
use Acm\Community\Models\CommunityPost;
use Acm\Community\Models\CommunityPostLike;
use Acm\Community\Models\ForumCategory;
use Acm\Community\Models\ForumReply;
use Acm\Community\Models\ForumTopic;
use App\Support\Api\ListQuery;
use Botble\Member\Models\Member;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CommunityService
{
    // ---- Feed -----------------------------------------------------------

    public function feed(ListQuery $lq, string $group = ''): LengthAwarePaginator
    {
        return CommunityPost::query()
            ->published()
            ->with('member')
            ->when($lq->q !== '', fn (Builder $q) => $q->where('content', 'like', "%{$lq->q}%"))
            ->latest()
            ->paginate($lq->perPage);
    }

    public function createPost(Member $member, array $data): CommunityPost
    {
        return CommunityPost::query()->create([
            'member_id' => $member->getKey(),
            'type' => $data['type'] ?? 'text',
            'content' => $data['content'] ?? null,
            'media_url' => $data['media_url'] ?? null,
            'link_url' => $data['link_url'] ?? null,
            'link_title' => $data['link_title'] ?? null,
            'link_image' => $data['link_image'] ?? null,
            'likes_count' => 0,
            'comments_count' => 0,
            'status' => 'published',
        ])->load('member');
    }

    public function deletePost(Member $member, int $id): void
    {
        $post = CommunityPost::query()->where('member_id', $member->getKey())->findOrFail($id);
        $post->delete();
    }

    /** @return array{liked: bool, likes_count: int} */
    public function toggleLike(Member $member, int $postId): array
    {
        $post = CommunityPost::query()->published()->findOrFail($postId);

        $existing = CommunityPostLike::query()
            ->where('post_id', $post->getKey())
            ->where('member_id', $member->getKey())
            ->first();

        if ($existing) {
            $existing->delete();
            $post->decrement('likes_count');
            $liked = false;
        } else {
            CommunityPostLike::query()->create(['post_id' => $post->getKey(), 'member_id' => $member->getKey()]);
            $post->increment('likes_count');
            $liked = true;
        }

        return ['liked' => $liked, 'likes_count' => max(0, (int) $post->refresh()->likes_count)];
    }

    // ---- Groups -------------------------------------------------------

    public function groups(ListQuery $lq): LengthAwarePaginator
    {
        return CommunityGroup::query()
            ->published()
            ->when($lq->q !== '', fn (Builder $q) => $q->where('name', 'like', "%{$lq->q}%"))
            ->orderByDesc('members_count')
            ->paginate($lq->perPage);
    }

    public function group(string $slug): CommunityGroup
    {
        return CommunityGroup::query()->published()->where('slug', $slug)->firstOrFail();
    }

    public function joinGroup(Member $member, string $slug): CommunityGroup
    {
        $group = $this->group($slug);

        if (! $group->isMember($member)) {
            $group->members()->attach($member->getKey(), ['role' => 'member', 'joined_at' => Carbon::now()]);
            $group->increment('members_count');
        }

        return $group->refresh();
    }

    public function leaveGroup(Member $member, string $slug): CommunityGroup
    {
        $group = $this->group($slug);

        if ($group->isMember($member)) {
            $group->members()->detach($member->getKey());
            $group->decrement('members_count');
        }

        return $group->refresh();
    }

    // ---- Forum ------------------------------------------------------

    public function forumCategories(): \Illuminate\Support\Collection
    {
        return ForumCategory::query()->orderBy('order_column')->orderBy('name')->get();
    }

    public function forumTopics(ListQuery $lq, string $categorySlug = ''): LengthAwarePaginator
    {
        return ForumTopic::query()
            ->published()
            ->with(['member', 'category'])
            ->when($categorySlug !== '', fn (Builder $q) => $q->whereHas('category', fn (Builder $c) => $c->where('slug', $categorySlug)))
            ->when($lq->q !== '', fn (Builder $q) => $q->where('title', 'like', "%{$lq->q}%"))
            ->orderByDesc('is_pinned')
            ->orderByDesc('last_reply_at')
            ->orderByDesc('created_at')
            ->paginate($lq->perPage);
    }

    public function forumTopic(string $slug): ForumTopic
    {
        $topic = ForumTopic::query()->published()->with('member')->where('slug', $slug)->firstOrFail();
        $topic->increment('views');

        return $topic;
    }

    public function forumReplies(ForumTopic $topic, ListQuery $lq): LengthAwarePaginator
    {
        return ForumReply::query()
            ->published()
            ->with('member')
            ->where('topic_id', $topic->getKey())
            ->orderBy('created_at')
            ->paginate($lq->perPage);
    }

    public function createTopic(Member $member, string $categorySlug, array $data): ForumTopic
    {
        $category = ForumCategory::query()->where('slug', $categorySlug)->firstOrFail();

        $topic = ForumTopic::query()->create([
            'category_id' => $category->getKey(),
            'member_id' => $member->getKey(),
            'title' => $data['title'],
            'slug' => $this->uniqueTopicSlug($data['title']),
            'content' => $data['content'],
            'views' => 0,
            'replies_count' => 0,
            'is_pinned' => false,
            'is_locked' => false,
            'status' => 'published',
            'last_reply_at' => Carbon::now(),
        ]);

        $category->increment('topics_count');

        return $topic->load('member');
    }

    public function createReply(Member $member, string $topicSlug, string $content): ForumReply
    {
        $topic = ForumTopic::query()->published()->where('slug', $topicSlug)->firstOrFail();

        abort_if($topic->is_locked, 423, 'This topic is locked.');

        $reply = ForumReply::query()->create([
            'topic_id' => $topic->getKey(),
            'member_id' => $member->getKey(),
            'content' => $content,
            'status' => 'published',
        ]);

        $topic->increment('replies_count');
        $topic->forceFill(['last_reply_at' => Carbon::now()])->save();

        return $reply->load('member');
    }

    private function uniqueTopicSlug(string $title): string
    {
        $base = Str::slug($title) ?: 'topic';
        $slug = $base;
        $i = 2;

        while (ForumTopic::query()->where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}
