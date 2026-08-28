<?php

use App\Models\YouTubeChannel;
use App\Models\YouTubeChannelVideo;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\ColorField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FormFieldOptions;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Theme\Facades\Theme;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

if (! function_exists('echo_daily_rosary_video')) {
    /**
     * Resolve the latest video for a YouTube channel (looked up by its slug).
     *
     * Primary source is the youtube_channel_videos table, which the
     * `youtube:sync-channels` command refreshes hourly. If that table has no
     * rows yet (e.g. before the first sync) it falls back to the channel's
     * public RSS feed, which needs no API key.
     *
     * @return array{video_id:string,title:?string,published_at:?string,url:string}|null
     */
    function echo_daily_rosary_video(string $channelSlug): ?array
    {
        return Cache::remember(
            "echo_daily_rosary_video:{$channelSlug}",
            now()->addMinutes(30),
            function () use ($channelSlug): ?array {
                try {
                    $video = YouTubeChannelVideo::query()
                        ->whereHas('channel', fn ($query) => $query->where('slug', $channelSlug))
                        ->orderByDesc('published_at')
                        ->orderByDesc('id')
                        ->first();
                } catch (\Throwable) {
                    $video = null;
                }

                if ($video) {
                    return [
                        'video_id' => $video->youtube_video_id,
                        'title' => $video->title,
                        'published_at' => optional($video->published_at)->toIso8601String(),
                        'url' => $video->video_url ?: 'https://www.youtube.com/watch?v=' . $video->youtube_video_id,
                    ];
                }

                return echo_daily_rosary_video_from_feed($channelSlug);
            }
        );
    }
}

if (! function_exists('echo_daily_rosary_video_from_feed')) {
    function echo_daily_rosary_video_from_feed(string $channelSlug): ?array
    {
        try {
            $channel = YouTubeChannel::query()->where('slug', $channelSlug)->first();
            $youtubeChannelId = $channel?->youtube_channel_id;

            if (! $youtubeChannelId) {
                return null;
            }

            $response = Http::withoutVerifying()
                ->timeout(10)
                ->get('https://www.youtube.com/feeds/videos.xml', ['channel_id' => $youtubeChannelId]);

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
                'published_at' => (string) $entry->published,
                'url' => 'https://www.youtube.com/watch?v=' . $videoId,
            ];
        } catch (\Throwable) {
            return null;
        }
    }
}

app('events')->listen(RouteMatched::class, function (): void {
    Shortcode::register(
        'daily-rosary',
        __('Daily Rosary'),
        __('Latest video from a Catholic YouTube channel (Vatican News by default)'),
        function (ShortcodeCompiler $shortcode): ?string {
            $channelSlug = $shortcode->channel ?: 'vatican-news';
            $video = echo_daily_rosary_video($channelSlug);

            return Theme::partial('shortcodes.daily-rosary.index', compact('shortcode', 'video', 'channelSlug'));
        }
    );

    Shortcode::setAdminConfig('daily-rosary', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)
            ->add(
                'title',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Title'))
                    ->defaultValue(__('Daily Rosary'))
                    ->toArray()
            )
            ->add(
                'subtitle',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Subtitle'))
                    ->defaultValue(__('Pray along with the latest from Vatican News'))
                    ->toArray()
            )
            ->add(
                'description',
                TextareaField::class,
                TextareaFieldOption::make()
                    ->label(__('Description'))
                    ->toArray()
            )
            ->add(
                'channel',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('YouTube channel slug'))
                    ->helperText(__('Slug of a channel from Admin → YouTube Channels. Default: vatican-news'))
                    ->defaultValue('vatican-news')
                    ->toArray()
            )
            ->add(
                'button_label',
                TextField::class,
                TextFieldOption::make()
                    ->label(__('Button label'))
                    ->defaultValue(__('Watch on YouTube'))
                    ->toArray()
            )
            ->add(
                'background_color',
                ColorField::class,
                FormFieldOptions::make()
                    ->label(__('Background color'))
                    ->toArray()
            );
    });
});
