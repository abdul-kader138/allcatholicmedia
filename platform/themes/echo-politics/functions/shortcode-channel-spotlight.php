<?php

use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Theme\Facades\Theme;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

if (! function_exists('acm_homepage_cache_key')) {
    /**
     * Version-namespaced cache key for the dynamic homepage sections
     * (Vatican News / Daily Rosary / Daily Saint).
     *
     * The `homepage:refresh-sections` scheduled command bumps
     * `acm_homepage_cache_version`, which invalidates every section key at once
     * without relying on cache tagging (works on any cache store).
     */
    function acm_homepage_cache_key(string $base): string
    {
        try {
            $version = (int) Cache::get('acm_homepage_cache_version', 1);
        } catch (\Throwable) {
            $version = 1;
        }

        return $base . ':v' . $version;
    }
}

if (! function_exists('echo_politics_channel_latest_video')) {
    /**
     * Latest video for a YouTube channel (looked up by slug).
     *
     * Primary source: the youtube_channel_videos table (refreshed hourly by the
     * `youtube:sync-channels` command). Falls back to the channel's public RSS
     * feed (no API key needed) when the table has nothing yet.
     *
     * @return array{video_id:string,title:?string,url:string}|null
     */
    function echo_politics_channel_latest_video(YouTubeChannel $channel): ?array
    {
        return Cache::remember(
            acm_homepage_cache_key("echo_politics.channel_latest_video.{$channel->id}"),
            now()->addMinutes(30),
            function () use ($channel): ?array {
                $video = YouTubeChannelVideo::query()
                    ->where('youtube_channel_id', $channel->id)
                    ->orderByDesc('is_live')
                    ->orderByDesc('published_at')
                    ->orderByDesc('id')
                    ->first();

                if ($video) {
                    return [
                        'video_id' => $video->youtube_video_id,
                        'title' => $video->title,
                        'url' => $video->video_url ?: 'https://www.youtube.com/watch?v=' . $video->youtube_video_id,
                    ];
                }

                if (! $channel->youtube_channel_id) {
                    return null;
                }

                try {
                    $response = Http::withoutVerifying()
                        ->timeout(10)
                        ->get('https://www.youtube.com/feeds/videos.xml', [
                            'channel_id' => $channel->youtube_channel_id,
                        ]);

                    if (! $response->ok()) {
                        return null;
                    }

                    $xml = @simplexml_load_string($response->body());
                    $entry = $xml->entry[0] ?? null;

                    if (! $entry) {
                        return null;
                    }

                    $media = $entry->children('http://www.youtube.com/xml/schemas/2015');
                    $videoId = (string) ($media->videoId ?? '');

                    if ($videoId === '') {
                        return null;
                    }

                    return [
                        'video_id' => $videoId,
                        'title' => (string) $entry->title,
                        'url' => 'https://www.youtube.com/watch?v=' . $videoId,
                    ];
                } catch (\Throwable) {
                    return null;
                }
            }
        );
    }
}

app('events')->listen(RouteMatched::class, function (): void {
    Shortcode::register(
        'channel-spotlight',
        'Channel Spotlight',
        'Featured block for the latest video from a YouTube channel (Vatican News by default)',
        function (ShortcodeCompiler $shortcode): ?string {
            $channelSlug = $shortcode->channel ?: 'vatican-news';

            $channel = YouTubeChannel::query()
                ->where('slug', $channelSlug)
                ->first();

            if (! $channel) {
                return null;
            }

            $video = echo_politics_channel_latest_video($channel);

            if (! $video) {
                return null;
            }

            $title = $shortcode->title ?: $channel->name;
            $subtitle = $shortcode->subtitle ?: 'Latest from the ' . $channel->name . ' channel';
            $showAllLabel = $shortcode->show_all_label ?: __('Show all');
            $showAllUrl = route('public.watch.channel', $channel->slug);

            return Theme::partial('shortcodes.channel-spotlight.index', compact(
                'shortcode',
                'channel',
                'video',
                'title',
                'subtitle',
                'showAllLabel',
                'showAllUrl'
            ));
        }
    );

    Shortcode::setAdminConfig('channel-spotlight', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)
            ->add(
                'channel',
                TextField::class,
                TextFieldOption::make()
                    ->label('YouTube channel slug')
                    ->helperText('Slug of a channel from Admin → Watch Manager. Default: vatican-news')
                    ->defaultValue('vatican-news')
                    ->toArray()
            )
            ->add(
                'title',
                TextField::class,
                TextFieldOption::make()
                    ->label('Section Title')
                    ->defaultValue('Vatican News')
                    ->toArray()
            )
            ->add(
                'subtitle',
                TextField::class,
                TextFieldOption::make()
                    ->label('Subtitle')
                    ->defaultValue('Latest from the Vatican News channel')
                    ->toArray()
            )
            ->add(
                'show_all_label',
                TextField::class,
                TextFieldOption::make()
                    ->label('Show all button label')
                    ->defaultValue('Show all')
                    ->toArray()
            )
            ->add(
                'description',
                TextareaField::class,
                TextareaFieldOption::make()
                    ->label('Description (optional, overrides the channel description)')
                    ->toArray()
            );
    });
});
