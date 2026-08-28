<style>
    .channel-spotlight-section {
        padding: 72px 0;
        background:
            radial-gradient(circle at top left, rgba(201, 162, 39, 0.12), transparent 28%),
            linear-gradient(135deg, #081524 0%, #0d223a 50%, #081524 100%);
    }

    .channel-spotlight-card {
        background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02));
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(0,0,0,.22);
    }

    .channel-spotlight-media {
        min-height: 340px;
        position: relative;
        height: 100%;
    }

    .channel-spotlight-embed {
        aspect-ratio: 16/9;
        background: #020617;
        height: 100%;
        min-height: 340px;
        position: relative;
        width: 100%;
    }

    .channel-spotlight-embed iframe {
        border: 0;
        display: block;
        height: 100%;
        width: 100%;
    }

    .channel-spotlight-badge,
    .channel-spotlight-media-type {
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

    .channel-spotlight-badge {
        left: 20px;
        top: 20px;
    }

    .channel-spotlight-media-type {
        right: 20px;
        top: 20px;
    }

    .channel-spotlight-body {
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: center;
        padding: 34px 34px 36px;
    }

    .channel-spotlight-label {
        color: #c9a227;
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .22em;
        margin-bottom: 12px;
        text-transform: uppercase;
    }

    .channel-spotlight-title {
        color: #fff;
        font-family: 'Playfair Display', serif;
        font-size: clamp(2rem, 4vw, 3.2rem);
        line-height: 1.06;
        margin-bottom: 14px;
    }

    .channel-spotlight-video-title {
        color: rgba(220,232,244,.82);
        font-size: 1.02rem;
        line-height: 1.85;
        margin-bottom: 16px;
    }

    .channel-spotlight-excerpt {
        color: rgba(220,232,244,.68);
        font-size: 1rem;
        line-height: 1.9;
        margin-bottom: 26px;
    }

    .channel-spotlight-actions {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .channel-spotlight-btn {
        align-items: center;
        border-radius: 999px;
        display: inline-flex;
        font-weight: 700;
        gap: 8px;
        padding: 13px 22px;
        text-decoration: none;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }

    .channel-spotlight-btn-primary {
        background: linear-gradient(135deg, #c9a227, #a07818);
        box-shadow: 0 12px 28px rgba(201,162,39,.22);
        color: #08111c;
    }

    .channel-spotlight-btn-primary:hover {
        color: #08111c;
        transform: translateY(-2px);
    }

    .channel-spotlight-btn-secondary {
        background: rgba(255,255,255,.03);
        border: 1px solid rgba(255,255,255,.14);
        color: rgba(255,255,255,.84);
    }

    .channel-spotlight-btn-secondary:hover {
        border-color: rgba(201,162,39,.36);
        color: #e8cf7b;
        transform: translateY(-2px);
    }

    @media (max-width: 991px) {
        .channel-spotlight-body {
            padding: 26px 22px 28px;
        }

        .channel-spotlight-media,
        .channel-spotlight-embed {
            min-height: 280px;
        }
    }
</style>

@php
    $embedUrl = 'https://www.youtube.com/embed/' . $video['video_id'] . '?autoplay=0&rel=0&modestbranding=1';
    $description = $shortcode->description ?: $channel->description;
@endphp

<section class="channel-spotlight-section">
    <div class="container">
        <div class="row g-0 channel-spotlight-card">
            <div class="col-lg-6">
                <div class="channel-spotlight-media">
                    <span class="channel-spotlight-badge">{{ $title }}</span>
                    <span class="channel-spotlight-media-type">{{ __('Video') }}</span>

                    <div class="channel-spotlight-embed">
                        <iframe
                            src="{{ $embedUrl }}"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            loading="lazy"
                            title="{{ $video['title'] ?: $title }}"
                        ></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="channel-spotlight-body">
                    <div class="channel-spotlight-label">{{ $subtitle }}</div>

                    <h2 class="channel-spotlight-title">{{ $title }}</h2>

                    @if ($video['title'])
                        <p class="channel-spotlight-video-title">
                            {{ \Illuminate\Support\Str::limit($video['title'], 160) }}
                        </p>
                    @endif

                    @if ($description)
                        <p class="channel-spotlight-excerpt">
                            {{ \Illuminate\Support\Str::limit(strip_tags($description), 180) }}
                        </p>
                    @endif

                    <div class="channel-spotlight-actions">
                        <a href="{{ $showAllUrl }}" class="channel-spotlight-btn channel-spotlight-btn-primary">
                            {{ $showAllLabel }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
