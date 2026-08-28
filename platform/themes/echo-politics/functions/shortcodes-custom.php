<?php

use Acm\LiveStream\Models\LiveStream;
use App\Models\PodcastShow;
use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\FieldOptions\NumberFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Theme\Facades\Theme;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Cache;

/**
 * Shared page-level post deduplication tracker.
 * Tracks post IDs already rendered by any shortcode in the current request
 * so that the same article never appears twice on the same page.
 */
class AcmPageDeduper
{
    private static array $seenIds = [];

    public static function markSeen(array $ids): void
    {
        self::$seenIds = array_values(array_unique(array_merge(self::$seenIds, $ids)));
    }

    public static function exclude(): array
    {
        return self::$seenIds;
    }
}

app('events')->listen(RouteMatched::class, function (): void {

    /*
    |--------------------------------------------------------------------------
    | [blog-posts] — override the echo parent-theme handler
    |--------------------------------------------------------------------------
    | The echo parent uses a closure-local `static $shownPostIds` which only
    | prevents repeats among multiple blog-posts sections. It has no awareness
    | of posts already shown by video-posts or other custom shortcodes.
    |
    | This override replaces the parent handler with one that uses the shared
    | AcmPageDeduper so ALL shortcodes on the page contribute to and benefit
    | from the deduplication list.
    */
    if (is_plugin_active('blog')) {
        Shortcode::register(
            'blog-posts',
            __('Blog Posts'),
            __('Blog Posts'),
            function (ShortcodeCompiler $shortcode): ?string {
                // Lazy-loading path — just return the shell, AJAX will fill it
                if ($shortcode->enable_lazy_loading === 'yes') {
                    return Theme::partial('shortcodes.blog-posts.index', compact('shortcode'));
                }

                $limit       = (int) ($shortcode->limit ?: 4);
                $categoryIds = Shortcode::fields()->getIds('category_ids', $shortcode);
                $excludeIds  = AcmPageDeduper::exclude();

                $posts = Post::query()
                    ->with(['slugable', 'categories.slugable'])
                    ->wherePublished()
                    ->when(! empty($excludeIds), fn ($q) => $q->whereNotIn('id', $excludeIds))
                    ->when(! empty($categoryIds), fn ($q) => $q->whereHas('categories', fn ($q2) =>
                        $q2->whereIn('id', $categoryIds)
                    ))
                    ->latest()
                    ->limit($limit)
                    ->get();

                if ($posts->isEmpty()) {
                    return null;
                }

                AcmPageDeduper::markSeen($posts->pluck('id')->all());

                return Theme::partial('shortcodes.blog-posts.index', compact('shortcode', 'posts'));
            }
        );
    }

    /*
    |--------------------------------------------------------------------------
    | [video-posts] — Catholic Video Library section
    |--------------------------------------------------------------------------
    | Renders posts that have a video_url meta value (stored in meta_boxes).
    | After fetching, marks IDs in AcmPageDeduper so blog-posts sections
    | will not repeat the same articles.
    */
    Shortcode::register(
        'video-posts',
        'Video Posts',
        'Video Posts — posts with an embedded video URL',
        function (ShortcodeCompiler $shortcode): ?string {
            $limit      = (int) ($shortcode->limit ?: 6);
            $excludeIds = AcmPageDeduper::exclude();

            $posts = Post::query()
                ->with(['slugable', 'categories'])
                ->wherePublished()
                ->whereHas('metadata', fn ($q) => $q
                    ->where('meta_key', 'video_url')
                    ->whereNotNull('meta_value')
                    ->where('meta_value', '!=', '')
                )
                ->when(! empty($excludeIds), fn ($q) => $q->whereNotIn('id', $excludeIds))
                ->latest()
                ->limit($limit)
                ->get();

            if ($posts->isEmpty()) {
                return null;
            }

            AcmPageDeduper::markSeen($posts->pluck('id')->all());

            $title          = $shortcode->title ?: 'Videos';
            $variableStyles = [];

            return Theme::partial('shortcodes.video-posts.index', compact('shortcode', 'posts', 'title', 'variableStyles'));
        }
    );

    Shortcode::setAdminConfig('video-posts', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)
            ->add('title',  TextField::class, TextFieldOption::make()->label('Section Title')->defaultValue('Videos')->toArray())
            ->add('limit',  NumberField::class, NumberFieldOption::make()->label('Number of Videos')->defaultValue(6)->toArray());
    });

    /*
    |--------------------------------------------------------------------------
    | [podcast-shows] — Podcast / Listen section
    |--------------------------------------------------------------------------
    | Renders active podcast shows from the podcast_shows table.
    */
    Shortcode::register(
        'podcast-shows',
        'Podcast Shows',
        'Podcast Shows — grid of active podcast shows',
        function (ShortcodeCompiler $shortcode): ?string {
            $limit = (int) ($shortcode->limit ?: 6);

            $shows = PodcastShow::query()
                ->where('is_active', 1)
                ->withCount('episodes')
                ->orderBy('sort_order')
                ->orderBy('name')
                ->limit($limit)
                ->get();

            if ($shows->isEmpty()) {
                return null;
            }

            $title = $shortcode->title ?: 'Listen';

            return Theme::partial('shortcodes.podcast-shows.index', compact('shortcode', 'shows', 'title'));
        }
    );

    Shortcode::setAdminConfig('podcast-shows', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)
            ->add('title', TextField::class, TextFieldOption::make()->label('Section Title')->defaultValue('Listen')->toArray())
            ->add('limit', NumberField::class, NumberFieldOption::make()->label('Number of Shows')->defaultValue(6)->toArray());
    });

    /*
    |--------------------------------------------------------------------------
    | [live-streams-section] — Live Now section
    |--------------------------------------------------------------------------
    | Renders active live streams from the live_streams table.
    */
    Shortcode::register(
        'live-streams-section',
        'Live Streams Section',
        'Live Streams — shows currently live and upcoming streams',
        function (ShortcodeCompiler $shortcode): ?string {
            $liveNow  = LiveStream::query()->where('is_live', 1)->orderBy('order_column')->limit(6)->get();
            $upcoming = LiveStream::query()->where('is_live', 0)->whereNotNull('scheduled_at')
                ->where('scheduled_at', '>', now())->orderBy('scheduled_at')->limit(4)->get();

            if ($liveNow->isEmpty() && $upcoming->isEmpty()) {
                return null;
            }

            $title = $shortcode->title ?: 'Live Now';

            return Theme::partial('shortcodes.live-streams-section.index', compact('shortcode', 'liveNow', 'upcoming', 'title'));
        }
    );

    Shortcode::setAdminConfig('live-streams-section', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)
            ->add('title', TextField::class, TextFieldOption::make()->label('Section Title')->defaultValue('Live Now')->toArray());
    });

    /*
    |--------------------------------------------------------------------------
    | [youtube-channels] — Watch / YouTube Channels section
    |--------------------------------------------------------------------------
    | Renders YouTube channels with their latest videos.
    */
    Shortcode::register(
        'youtube-channels',
        'YouTube Channels',
        'YouTube Channels — grid of active YouTube channels',
        function (ShortcodeCompiler $shortcode): ?string {
            $limit = (int) ($shortcode->limit ?: 6);

            $channels = YouTubeChannel::query()
                ->where('is_active', 1)
                ->withCount('videos')
                ->orderBy('sort_order')
                ->orderBy('name')
                ->limit($limit)
                ->get();

            if ($channels->isEmpty()) {
                return null;
            }

            $title = $shortcode->title ?: 'Watch';

            return Theme::partial('shortcodes.youtube-channels.index', compact('shortcode', 'channels', 'title'));
        }
    );

    Shortcode::setAdminConfig('youtube-channels', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)
            ->add('title', TextField::class, TextFieldOption::make()->label('Section Title')->defaultValue('Watch')->toArray())
            ->add('limit', NumberField::class, NumberFieldOption::make()->label('Number of Channels')->defaultValue(6)->toArray());
    });

    /*
    |--------------------------------------------------------------------------
    | [latest-daily-saint] — Latest saint feature card
    |--------------------------------------------------------------------------
    | Pulls only the newest published saint post from category ID 3
    | (Saints & Feast Days) and caches the result for a short time so
    | the homepage can display it with minimal query overhead.
    */
    Shortcode::register(
        'latest-daily-saint',
        'Latest Daily Saint',
        'Featured block for the newest saint post',
        function (ShortcodeCompiler $shortcode): ?string {
            $categoryIds = Shortcode::fields()->getIds('category_ids', $shortcode);

            if (empty($categoryIds)) {
                $categoryIds = [3];
            }

            sort($categoryIds);

            $cacheKey = 'echo_politics.latest_daily_saint.' . implode('_', $categoryIds);

            $saint = Cache::remember(acm_homepage_cache_key($cacheKey), now()->addMinutes(10), function () use ($categoryIds) {
                return Post::query()
                    ->with(['slugable', 'categories.slugable'])
                    ->wherePublished()
                    ->whereHas('categories', fn ($q) => $q->whereIn('id', $categoryIds))
                    ->latest()
                    ->first();
            });

            if (! $saint) {
                return null;
            }

            $primaryCategory = $saint->categories->first(fn ($category) => in_array($category->id, $categoryIds, true))
                ?: $saint->categories->first();

            $title = $shortcode->title ?: 'Daily Saint';
            $subtitle = $shortcode->subtitle ?: 'Meet today\'s saint';
            $archiveUrl = $primaryCategory?->url ?: route('public.saints');
            $archiveLabel = $primaryCategory ? 'View All in ' . $primaryCategory->name : 'View All Saints';

            return Theme::partial('shortcodes.latest-daily-saint.index', compact(
                'shortcode',
                'saint',
                'title',
                'subtitle',
                'primaryCategory',
                'archiveUrl',
                'archiveLabel'
            ));
        }
    );

    Shortcode::setAdminConfig('latest-daily-saint', function (array $attributes) {
        $categories = Category::query()
            ->wherePublished()
            ->orderBy('name')
            ->pluck('name', 'id')
            ->all();

        $selectedCategoryIds = [];

        if (! empty($attributes['category_ids'])) {
            $selectedCategoryIds = array_filter(array_map('trim', explode(',', (string) $attributes['category_ids'])));
        }

        if (empty($selectedCategoryIds)) {
            $selectedCategoryIds = [3];
        }

        return ShortcodeForm::createFromArray($attributes)
            ->add(
                'category_ids',
                SelectField::class,
                SelectFieldOption::make()
                    ->label('Categories')
                    ->choices($categories)
                    ->selected($selectedCategoryIds)
                    ->searchable()
                    ->multiple()
                    ->toArray()
            )
            ->add('title', TextField::class, TextFieldOption::make()->label('Section Title')->defaultValue('Daily Saint')->toArray())
            ->add('subtitle', TextField::class, TextFieldOption::make()->label('Subtitle')->defaultValue('Meet today\'s saint')->toArray());
    });

    /*
    |--------------------------------------------------------------------------
    | [latest-daily-rosary] - Latest rosary feature card
    |--------------------------------------------------------------------------
    | Pulls the newest published post from a selected Rosary category and
    | renders it as a homepage feature block. This lets editors manage the
    | homepage feed entirely from the backend by publishing a new post.
    */
    Shortcode::register(
        'latest-daily-rosary',
        'Latest Daily Rosary',
        'Featured block for the newest rosary post',
        function (ShortcodeCompiler $shortcode): ?string {
            $categoryIds = Shortcode::fields()->getIds('category_ids', $shortcode);

            sort($categoryIds);

            $cacheKey = 'echo_politics.latest_daily_rosary.' . (empty($categoryIds) ? 'all' : implode('_', $categoryIds));

            $rosary = Cache::remember(acm_homepage_cache_key($cacheKey), now()->addMinutes(10), function () use ($categoryIds) {
                return Post::query()
                    ->with(['slugable', 'categories.slugable'])
                    ->wherePublished()
                    ->when(! empty($categoryIds), fn ($query) => $query->whereHas('categories', fn ($q) => $q->whereIn('id', $categoryIds)))
                    ->latest()
                    ->first();
            });

            if (! $rosary) {
                return null;
            }

            $primaryCategory = ! empty($categoryIds)
                ? ($rosary->categories->first(fn ($category) => in_array($category->id, $categoryIds, true)) ?: $rosary->categories->first())
                : $rosary->categories->first();

            $title = $shortcode->title ?: 'Daily Rosary';
            $subtitle = $shortcode->subtitle ?: 'Pray today\'s rosary';
            $archiveUrl = $primaryCategory?->url ?: $rosary->url;
            $archiveLabel = $primaryCategory ? 'View All in ' . $primaryCategory->name : 'View Rosary Archive';

            return Theme::partial('shortcodes.latest-daily-rosary.index', compact(
                'shortcode',
                'rosary',
                'title',
                'subtitle',
                'primaryCategory',
                'archiveUrl',
                'archiveLabel'
            ));
        }
    );

    Shortcode::setAdminConfig('latest-daily-rosary', function (array $attributes) {
        $categories = Category::query()
            ->wherePublished()
            ->orderBy('name')
            ->pluck('name', 'id')
            ->all();

        $selectedCategoryIds = [];

        if (! empty($attributes['category_ids'])) {
            $selectedCategoryIds = array_filter(array_map('trim', explode(',', (string) $attributes['category_ids'])));
        }

        return ShortcodeForm::createFromArray($attributes)
            ->add(
                'category_ids',
                SelectField::class,
                SelectFieldOption::make()
                    ->label('Categories')
                    ->choices($categories)
                    ->selected($selectedCategoryIds)
                    ->searchable()
                    ->multiple()
                    ->toArray()
            )
            ->add('title', TextField::class, TextFieldOption::make()->label('Section Title')->defaultValue('Daily Rosary')->toArray())
            ->add('subtitle', TextField::class, TextFieldOption::make()->label('Subtitle')->defaultValue('Pray today\'s rosary')->toArray());
    });

});
