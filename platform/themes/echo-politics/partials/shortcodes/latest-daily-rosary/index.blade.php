<style>
    .rosary-spotlight-section {
        padding: 72px 0;
        background:
            radial-gradient(circle at top left, rgba(201, 162, 39, 0.12), transparent 28%),
            linear-gradient(135deg, #081524 0%, #0d223a 50%, #081524 100%);
    }

    .rosary-spotlight-card {
        background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02));
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(0,0,0,.22);
    }

    .rosary-spotlight-media {
        min-height: 340px;
        position: relative;
        height: 100%;
    }

    .rosary-spotlight-media img {
        display: block;
        height: 100%;
        object-fit: cover;
        width: 100%;
    }

    .rosary-spotlight-embed {
        aspect-ratio: 16/9;
        background: #020617;
        height: 100%;
        min-height: 340px;
        position: relative;
        width: 100%;
    }

    .rosary-spotlight-embed iframe {
        border: 0;
        display: block;
        height: 100%;
        width: 100%;
    }

    .rosary-spotlight-badge,
    .rosary-spotlight-media-type {
        align-items: center;
        background: rgba(7, 17, 29, 0.76);
        border: 1px solid rgba(201,162,39,.28);
        border-radius: 999px;
        color: #f2da89;
        display: inline-flex;
        font-size: .78rem;
        font-weight: 700;
        gap: 8px;
        letter-spacing: .08em;
        padding: 8px 14px;
        position: absolute;
        text-transform: uppercase;
        z-index: 2;
    }

    .rosary-spotlight-badge {
        left: 20px;
        top: 20px;
    }

    .rosary-spotlight-media-type {
        right: 20px;
        top: 20px;
    }

    .rosary-spotlight-body {
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: center;
        padding: 34px 34px 36px;
    }

    .rosary-spotlight-label {
        color: #c9a227;
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .22em;
        margin-bottom: 12px;
        text-transform: uppercase;
    }

    .rosary-spotlight-title {
        color: #fff;
        font-family: 'Playfair Display', serif;
        font-size: clamp(2rem, 4vw, 3.2rem);
        line-height: 1.06;
        margin-bottom: 14px;
    }

    .rosary-spotlight-title a {
        color: inherit;
        text-decoration: none;
    }

    .rosary-spotlight-subtitle {
        color: rgba(220,232,244,.82);
        font-size: 1.02rem;
        line-height: 1.85;
        margin-bottom: 16px;
    }

    .rosary-spotlight-excerpt {
        color: rgba(220,232,244,.68);
        font-size: 1rem;
        line-height: 1.9;
        margin-bottom: 26px;
    }

    .rosary-spotlight-actions {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .rosary-spotlight-btn {
        align-items: center;
        border-radius: 999px;
        display: inline-flex;
        font-weight: 700;
        gap: 8px;
        padding: 13px 22px;
        text-decoration: none;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }

    .rosary-spotlight-btn-primary {
        background: linear-gradient(135deg, #c9a227, #a07818);
        box-shadow: 0 12px 28px rgba(201,162,39,.22);
        color: #08111c;
    }

    .rosary-spotlight-btn-primary:hover {
        color: #08111c;
        transform: translateY(-2px);
    }

    .rosary-spotlight-btn-secondary {
        background: rgba(255,255,255,.03);
        border: 1px solid rgba(255,255,255,.14);
        color: rgba(255,255,255,.84);
    }

    .rosary-spotlight-btn-secondary:hover {
        border-color: rgba(201,162,39,.36);
        color: #e8cf7b;
        transform: translateY(-2px);
    }

    @media (max-width: 991px) {
        .rosary-spotlight-body {
            padding: 26px 22px 28px;
        }

        .rosary-spotlight-media,
        .rosary-spotlight-embed {
            min-height: 280px;
        }
    }
</style>

@php
    $content = (string) ($rosary->content ?? '');

    $fallbackExtractVideoUrl = function (?string $html): ?string {
        if (! $html) {
            return null;
        }

        if (preg_match('/https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=[\w-]{11}|youtu\.be\/[\w-]{11}|youtube\.com\/embed\/[\w-]{11}|youtube\.com\/shorts\/[\w-]{11})/i', $html, $matches)) {
            return $matches[0] ?: null;
        }

        if (preg_match('/https?:\/\/(?:www\.)?player\.vimeo\.com\/video\/(\d+)/i', $html, $matches)) {
            return ! empty($matches[1]) ? 'https://vimeo.com/' . $matches[1] : null;
        }

        if (preg_match('/https?:\/\/(?:www\.)?vimeo\.com\/(\d+)/i', $html, $matches)) {
            return ! empty($matches[1]) ? 'https://vimeo.com/' . $matches[1] : null;
        }

        return null;
    };

    $fallbackExtractAudioUrl = function (?string $html): ?string {
        if (! $html) {
            return null;
        }

        if (preg_match('/<audio[^>]*src=["\']([^"\']+)["\']/i', $html, $matches)) {
            return $matches[1] ?: null;
        }

        if (preg_match('/<source[^>]+src=["\']([^"\']+\.(?:mp3|m4a|wav|ogg))["\']/i', $html, $matches)) {
            return $matches[1] ?: null;
        }

        if (preg_match('/https?:\/\/[^"\']+\.(?:mp3|m4a|wav|ogg)/i', $html, $matches)) {
            return $matches[0] ?: null;
        }

        return null;
    };

    $fallbackExtractImageUrl = function (?string $html): ?string {
        if (! $html) {
            return null;
        }

        if (preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $matches)) {
            return $matches[1] ?: null;
        }

        return null;
    };

    if (function_exists('echo_politics_resolve_post_media')) {
        $rosaryMedia = echo_politics_resolve_post_media($rosary, 'large');
    } else {
        $videoUrl = function_exists('echo_get_post_video_url') ? echo_get_post_video_url($rosary) : null;
        $audioUrl = function_exists('echo_get_post_audio_url') ? echo_get_post_audio_url($rosary) : null;

        $videoUrl = $videoUrl ?: $fallbackExtractVideoUrl($content);
        $audioUrl = $audioUrl ?: $fallbackExtractAudioUrl($content);

        $imageUrl = ! empty($rosary->image)
            ? RvMedia::getImageUrl($rosary->image, 'large')
            : ($fallbackExtractImageUrl($content) ?: RvMedia::getDefaultImage());

        $rosaryMedia = [
            'image_url' => $imageUrl,
            'media_type' => $videoUrl ? 'video' : ($audioUrl ? 'audio' : 'image'),
            'video_url' => $videoUrl,
            'audio_url' => $audioUrl,
        ];
    }

    $videoUrl = $rosaryMedia['video_url'] ?? null;
    $embedUrl = null;

    if ($videoUrl && \Botble\Theme\Supports\Youtube::isYoutubeURL($videoUrl)) {
        $videoId = \Botble\Theme\Supports\Youtube::getYoutubeVideoID($videoUrl);
        $embedUrl = $videoId ? 'https://www.youtube.com/embed/' . $videoId : null;
    } elseif ($videoUrl && str_contains($videoUrl, 'vimeo.com')) {
        preg_match('/vimeo\.com\/(\d+)/', $videoUrl, $matches);
        $embedUrl = ! empty($matches[1]) ? 'https://player.vimeo.com/video/' . $matches[1] : null;
    }

    $primaryActionLabel = match ($rosaryMedia['media_type']) {
        'video' => __('Watch Rosary'),
        'audio' => __('Listen to Rosary'),
        default => __('Read Rosary Reflection'),
    };
@endphp

<section class="rosary-spotlight-section">
    <div class="container">
        <div class="row g-0 rosary-spotlight-card">
            <div class="col-lg-5">
                <div class="rosary-spotlight-media">
                    <span class="rosary-spotlight-badge">{{ $primaryCategory?->name ?: $title }}</span>
                    @if ($rosaryMedia['media_type'] === 'video')
                        <span class="rosary-spotlight-media-type">{{ __('Video') }}</span>
                    @elseif ($rosaryMedia['media_type'] === 'audio')
                        <span class="rosary-spotlight-media-type">{{ __('Audio') }}</span>
                    @endif

                    @if ($rosaryMedia['media_type'] === 'video' && $embedUrl)
                        <div class="rosary-spotlight-embed">
                            <iframe
                                src="{{ $embedUrl }}?autoplay=0&rel=0&modestbranding=1"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                title="{{ $rosary->name }}"
                            ></iframe>
                        </div>
                    @else
                        <a href="{{ $rosary->url }}" title="{{ $rosary->name }}">
                            <img src="{{ $rosaryMedia['image_url'] }}" alt="{{ $rosary->name }}" loading="lazy" decoding="async">
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-lg-7">
                <div class="rosary-spotlight-body">
                    <div class="rosary-spotlight-label">{{ $subtitle }}</div>

                    <h2 class="rosary-spotlight-title">
                        <a href="{{ $rosary->url }}" title="{{ $rosary->name }}">
                            {{ $rosary->name }}
                        </a>
                    </h2>

                    @if ($rosary->description)
                        <p class="rosary-spotlight-subtitle">
                            {{ \Illuminate\Support\Str::limit(strip_tags($rosary->description), 180) }}
                        </p>
                    @endif

                    <p class="rosary-spotlight-excerpt">
                        Enter the daily mysteries with prayer, scripture, and reflection. The newest Rosary post is featured automatically on the homepage.
                    </p>

                    <div class="rosary-spotlight-actions">
                        <a href="{{ $rosary->url }}" class="rosary-spotlight-btn rosary-spotlight-btn-primary">
                            {{ $primaryActionLabel }}
                        </a>
                        <a href="{{ $archiveUrl }}" class="rosary-spotlight-btn rosary-spotlight-btn-secondary">
                            {{ $archiveLabel }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
