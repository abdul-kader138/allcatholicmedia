<?php

namespace App\Services;

use Acm\LiveStream\Models\LiveStream;
use App\Models\Donation;
use App\Models\PodcastEpisode;
use App\Models\PodcastShow;
use App\Models\PrayerRequest;
use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use App\Support\Api\ListQuery;
use ArchiElite\Announcement\Models\Announcement;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Gallery\Models\Gallery;
use Botble\Gallery\Models\GalleryMeta;
use Botble\Member\Models\Member;
use Botble\Newsletter\Enums\NewsletterStatusEnum;
use Botble\Newsletter\Models\Newsletter;
use Botble\Page\Models\Page;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Models\Comment;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
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

    public function channelsPaginated(ListQuery $lq): LengthAwarePaginator
    {
        return YouTubeChannel::query()
            ->active()
            ->withCount('videos')
            ->with('latestVideo')
            ->when($lq->q !== '', fn (Builder $q) => $q->where('name', 'like', "%{$lq->q}%"))
            ->when(
                $lq->sort === 'videos',
                fn (Builder $q) => $q->orderByDesc('videos_count'),
                fn (Builder $q) => $q->orderBy('sort_order')->orderBy('name')
            )
            ->paginate($lq->perPage);
    }

    /** Cross-channel video feed / search ("watch"). */
    public function videos(ListQuery $lq, string $channelSlug = '', ?bool $live = null): LengthAwarePaginator
    {
        return YouTubeChannelVideo::query()
            ->with('channel:id,name,slug,thumbnail')
            ->whereHas('channel', fn (Builder $q) => $q->active())
            ->when($channelSlug !== '', fn (Builder $q) => $q->whereHas('channel', fn (Builder $c) => $c->where('slug', $channelSlug)))
            ->when($live !== null, fn (Builder $q) => $q->where('is_live', $live))
            ->when($lq->q !== '', fn (Builder $q) => $q->where('title', 'like', "%{$lq->q}%"))
            ->when(
                $lq->sort === 'views',
                fn (Builder $q) => $q->orderByDesc('view_count'),
                fn (Builder $q) => $q->orderByDesc('is_live')->orderByDesc('published_at')
            )
            ->paginate($lq->perPage);
    }

    public function video(int $id): YouTubeChannelVideo
    {
        return YouTubeChannelVideo::query()
            ->with('channel:id,name,slug,thumbnail,banner,description')
            ->whereHas('channel', fn (Builder $q) => $q->active())
            ->findOrFail($id);
    }

    public function episode(int $id): PodcastEpisode
    {
        return PodcastEpisode::query()
            ->with('show:id,name,slug,thumbnail,banner,description,category')
            ->whereHas('show', fn (Builder $q) => $q->active())
            ->findOrFail($id);
    }

    public function channel(string $slug): YouTubeChannel
    {
        return YouTubeChannel::query()
            ->active()
            ->withCount('videos')
            ->where('slug', $slug)
            ->firstOrFail();
    }

    /**
     * The newest video(s) for one channel — live broadcasts first, then by
     * publish date. Returns up to $limit rows (1 = just the latest).
     */
    public function channelLatestVideos(YouTubeChannel $channel, int $limit = 1, bool $includeLive = true): Collection
    {
        return YouTubeChannelVideo::query()
            ->where('youtube_channel_id', $channel->id)
            ->when(! $includeLive, fn (Builder $q) => $q->where('is_live', false))
            ->orderByDesc('is_live')
            ->orderByDesc('published_at')
            ->limit(max(1, min($limit, 20)))
            ->get();
    }

    public function channelVideos(YouTubeChannel $channel, ListQuery $lq, ?bool $live = null): LengthAwarePaginator
    {
        return YouTubeChannelVideo::query()
            ->where('youtube_channel_id', $channel->id)
            ->when($live !== null, fn (Builder $q) => $q->where('is_live', $live))
            ->when($lq->q !== '', fn (Builder $q) => $q->where('title', 'like', "%{$lq->q}%"))
            ->orderByDesc('is_live')
            ->orderByDesc('published_at')
            ->paginate($lq->perPage);
    }

    public function shows(string $category = '', string $sort = 'name', string $search = ''): Collection
    {
        return $this->showsQuery($category, $sort, $search)->get();
    }

    public function showsPaginated(ListQuery $lq, string $category = ''): LengthAwarePaginator
    {
        return $this->showsQuery($category, $lq->sort ?: 'name', $lq->q)->paginate($lq->perPage);
    }

    private function showsQuery(string $category, string $sort, string $search): Builder
    {
        return PodcastShow::query()
            ->active()
            ->withCount('episodes')
            ->when($category !== '', fn (Builder $q) => $q->where('category', $category))
            ->when($search !== '', fn (Builder $q) => $q->where('name', 'like', "%{$search}%"))
            ->when(
                $sort === 'episodes',
                fn (Builder $q) => $q->orderByDesc('episodes_count')->orderBy('name'),
                fn (Builder $q) => $q->orderBy('sort_order')->orderBy('name')
            );
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

    public function showEpisodes(PodcastShow $show, ListQuery $lq): LengthAwarePaginator
    {
        return PodcastEpisode::query()
            ->where('podcast_show_id', $show->id)
            ->when($lq->q !== '', fn (Builder $q) => $q->where('title', 'like', "%{$lq->q}%"))
            ->orderByDesc('is_featured')
            ->orderByDesc('published_at')
            ->orderByDesc('episode_number')
            ->paginate($lq->perPage);
    }

    public function liveNow(): Collection
    {
        return LiveStream::live()->orderBy('order_column')->get();
    }

    public function upcomingStreams(int $limit = 20): Collection
    {
        return LiveStream::upcoming()->orderBy('scheduled_at')->limit($limit)->get();
    }

    public function articles(ListQuery $lq, int $categoryId = 0): LengthAwarePaginator
    {
        return $this->readBaseQuery()
            ->when($categoryId > 0, fn (Builder $q) => $q->whereHas('categories', fn (Builder $c) => $c->where('id', $categoryId)))
            ->when($lq->q !== '', fn (Builder $q) => $q->where('name', 'like', "%{$lq->q}%"))
            ->when(
                $lq->sort === 'popular',
                fn (Builder $q) => $q->orderByDesc('views'),
                fn (Builder $q) => $q->latest()
            )
            ->paginate($lq->perPage);
    }

    /** Any published post by slug (used for both article and saint detail). */
    public function postBySlug(string $slug, ?int $categoryId = null): Post
    {
        return Post::query()
            ->with(['slugable', 'categories', 'tags'])
            ->wherePublished()
            ->whereHas('slugable', fn (Builder $q) => $q->where('key', $slug))
            ->when($categoryId !== null, fn (Builder $q) => $q->whereHas('categories', fn (Builder $c) => $c->where('id', $categoryId)))
            ->firstOrFail();
    }

    public function articleCategories(): Collection
    {
        return Category::query()
            ->whereHas('posts', fn (Builder $q) => $q->wherePublished())
            ->where('id', '!=', self::SAINTS_CATEGORY_ID)
            ->orderBy('name')
            ->get(['id', 'name']);
    }

    public function saints(ListQuery $lq, string $letter = ''): LengthAwarePaginator
    {
        return $this->saintsBaseQuery()
            ->when($lq->q !== '', fn (Builder $q) => $q->where('name', 'like', "%{$lq->q}%"))
            ->when($letter !== '', fn (Builder $q) => $q->where('name', 'like', $letter . '%'))
            ->orderBy('name')
            ->paginate($lq->perPage);
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

    /**
     * Grouped cross-content search preview. Use the section list endpoints
     * (read?q=, listen?q=, saints?q=, videos?q=) for paginated results.
     *
     * @return array<string, Collection>
     */
    public function search(string $term, int $limit = 8): array
    {
        $term = trim($term);
        $like = "%{$term}%";

        return [
            'articles' => $this->readBaseQuery()
                ->where('name', 'like', $like)->latest()->limit($limit)->get(),
            'saints' => $this->saintsBaseQuery()
                ->where('name', 'like', $like)->orderBy('name')->limit($limit)->get(),
            'shows' => PodcastShow::query()->active()->withCount('episodes')
                ->where('name', 'like', $like)->orderBy('name')->limit($limit)->get(),
            'channels' => YouTubeChannel::query()->active()->withCount('videos')
                ->where('name', 'like', $like)->orderBy('name')->limit($limit)->get(),
            'videos' => YouTubeChannelVideo::query()
                ->whereHas('channel', fn (Builder $q) => $q->active())
                ->where('title', 'like', $like)->orderByDesc('published_at')->limit($limit)->get(),
            'episodes' => PodcastEpisode::query()
                ->whereHas('show', fn (Builder $q) => $q->active())
                ->where('title', 'like', $like)->orderByDesc('published_at')->limit($limit)->get(),
        ];
    }

    public function announcements(): Collection
    {
        return Announcement::query()->available()->latest()->get();
    }

    public function galleries(ListQuery $lq): LengthAwarePaginator
    {
        return Gallery::query()
            ->with('slugable')
            ->wherePublished()
            ->when($lq->q !== '', fn (Builder $q) => $q->where('name', 'like', "%{$lq->q}%"))
            ->orderByDesc('is_featured')
            ->orderBy('order')
            ->orderByDesc('created_at')
            ->paginate($lq->perPage);
    }

    public function gallery(string $slug): Gallery
    {
        $gallery = Gallery::query()
            ->with('slugable')
            ->wherePublished()
            ->where(function (Builder $q) use ($slug): void {
                $q->whereHas('slugable', fn (Builder $s) => $s->where('key', $slug));

                if (ctype_digit($slug)) {
                    $q->orWhere('id', (int) $slug);
                }
            })
            ->firstOrFail();

        $gallery->setAttribute('images', $this->galleryImages($gallery));

        return $gallery;
    }

    /** @return array<int, mixed> */
    public function galleryImages(Gallery $gallery): array
    {
        $meta = GalleryMeta::query()
            ->where('reference_type', Gallery::class)
            ->where('reference_id', $gallery->getKey())
            ->first();

        return (array) ($meta->images ?? []);
    }

    public function liveStream(int $id): LiveStream
    {
        return LiveStream::query()->findOrFail($id);
    }

    public function prayerWall(ListQuery $lq): LengthAwarePaginator
    {
        return PrayerRequest::query()
            ->where('is_private', false)
            ->whereNotIn('status', ['spam', 'rejected', 'archived'])
            ->latest()
            ->paginate($lq->perPage);
    }

    public function recordPrayer(int $id): PrayerRequest
    {
        $request = PrayerRequest::query()->where('is_private', false)->findOrFail($id);
        $request->increment('prayed_count');

        return $request->refresh();
    }

    // ---- Comments (fob-comment) ------------------------------------

    public function comments(Post $post, ListQuery $lq): LengthAwarePaginator
    {
        return Comment::query()
            ->where('reference_type', Post::class)
            ->where('reference_id', $post->getKey())
            ->where('status', CommentStatus::APPROVED)
            ->whereNull('reply_to')
            ->with(['replies' => fn ($q) => $q->where('status', CommentStatus::APPROVED)->orderBy('created_at')])
            ->orderByDesc('created_at')
            ->paginate($lq->perPage);
    }

    public function addComment(Post $post, Member $member, string $content, ?int $replyTo = null): Comment
    {
        $moderated = (bool) setting('fob_comment_comment_moderation', false);

        return Comment::query()->create([
            'name' => $member->name,
            'email' => $member->email,
            'content' => $content,
            'status' => $moderated ? CommentStatus::PENDING : CommentStatus::APPROVED,
            'author_id' => $member->getKey(),
            'author_type' => $member->getMorphClass(),
            'reference_id' => $post->getKey(),
            'reference_type' => Post::class,
            'reply_to' => $replyTo,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public function page(string $slug): Page
    {
        return Page::query()
            ->with('slugable')
            ->wherePublished()
            ->whereHas('slugable', fn (Builder $q) => $q->where('key', $slug))
            ->firstOrFail();
    }

    public function subscribeNewsletter(string $email, string $name = ''): Newsletter
    {
        return Newsletter::query()->updateOrCreate(
            ['email' => $email],
            ['name' => $name ?: null, 'status' => NewsletterStatusEnum::SUBSCRIBED]
        );
    }

    public function unsubscribeNewsletter(string $email): void
    {
        Newsletter::query()
            ->where('email', $email)
            ->update(['status' => NewsletterStatusEnum::UNSUBSCRIBED]);
    }

    public function memberDonations(Member $member, ListQuery $lq): LengthAwarePaginator
    {
        return Donation::query()
            ->where('member_id', $member->getKey())
            ->latest()
            ->paginate($lq->perPage);
    }

    public function memberPrayerRequests(Member $member, ListQuery $lq): LengthAwarePaginator
    {
        // PrayerRequest is email-keyed, not member-keyed.
        return PrayerRequest::query()
            ->where('email', $member->email)
            ->latest()
            ->paginate($lq->perPage);
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
