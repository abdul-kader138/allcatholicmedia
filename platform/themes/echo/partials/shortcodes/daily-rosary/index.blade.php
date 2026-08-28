@php
    $title = $shortcode->title ?: __('Daily Rosary');
    $subtitle = $shortcode->subtitle;
    $description = $shortcode->description;
    $buttonLabel = $shortcode->button_label ?: __('Watch on YouTube');

    $backgroundColor = $shortcode->background_color;
    if (function_exists('echo_check_transparent_color') && echo_check_transparent_color($backgroundColor)) {
        $backgroundColor = null;
    }
@endphp

<section
    class="echo-daily-rosary-area inner"
    @if ($backgroundColor) style="background-color: {{ $backgroundColor }};" @endif
>
    <div class="container">
        <div class="echo-daily-rosary-heading text-center">
            @if ($subtitle)
                <span class="echo-daily-rosary-subtitle">{{ $subtitle }}</span>
            @endif
            <h2 class="echo-daily-rosary-title">{{ $title }}</h2>
            @if ($description)
                <p class="echo-daily-rosary-description">{{ $description }}</p>
            @endif
        </div>

        @if (! empty($video['video_id']))
            <div class="echo-daily-rosary-player">
                <div class="echo-daily-rosary-embed">
                    <iframe
                        src="https://www.youtube-nocookie.com/embed/{{ $video['video_id'] }}?rel=0"
                        title="{{ $video['title'] ?: $title }}"
                        loading="lazy"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>
                </div>

                @if ($video['title'] || ! empty($video['url']))
                    <div class="echo-daily-rosary-meta">
                        @if ($video['title'])
                            <span class="echo-daily-rosary-video-title">{{ $video['title'] }}</span>
                        @endif
                        @if (! empty($video['url']))
                            <a
                                class="echo-daily-rosary-button"
                                href="{{ $video['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                {{ $buttonLabel }}
                            </a>
                        @endif
                    </div>
                @endif
            </div>
        @else
            <p class="echo-daily-rosary-empty text-center">
                {{ __('The latest video is not available right now. Please check back soon.') }}
            </p>
        @endif
    </div>
</section>

<style>
    .echo-daily-rosary-area {
        padding: 60px 0;
    }

    .echo-daily-rosary-heading {
        max-width: 720px;
        margin: 0 auto 32px;
    }

    .echo-daily-rosary-subtitle {
        display: inline-block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--primary-color, #537FE7);
    }

    .echo-daily-rosary-title {
        margin: 0;
        font-size: clamp(24px, 3vw, 34px);
        line-height: 1.2;
    }

    .echo-daily-rosary-description {
        margin: 12px 0 0;
        opacity: .8;
    }

    .echo-daily-rosary-player {
        max-width: 900px;
        margin: 0 auto;
    }

    .echo-daily-rosary-embed {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        border-radius: 12px;
        overflow: hidden;
        background: #000;
        box-shadow: 0 20px 45px rgba(0, 0, 0, .18);
    }

    .echo-daily-rosary-embed iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .echo-daily-rosary-meta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-top: 18px;
    }

    .echo-daily-rosary-video-title {
        font-weight: 600;
    }

    .echo-daily-rosary-button {
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        padding: 10px 22px;
        border-radius: 999px;
        font-weight: 600;
        color: #fff;
        background-color: var(--primary-color, #537FE7);
    }

    .echo-daily-rosary-button:hover {
        opacity: .9;
        color: #fff;
    }

    @media (max-width: 575px) {
        .echo-daily-rosary-area {
            padding: 40px 0;
        }

        .echo-daily-rosary-meta {
            justify-content: center;
            text-align: center;
        }
    }
</style>
