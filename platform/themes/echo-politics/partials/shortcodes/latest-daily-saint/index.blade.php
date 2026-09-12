<style>
    .saint-spotlight-section {
        padding: 72px 0;
        background:
            radial-gradient(circle at top left, rgba(201, 162, 39, 0.12), transparent 28%),
            linear-gradient(135deg, #07111d 0%, #0a1b2d 50%, #07111d 100%);
    }

    .saint-spotlight-card {
        background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02));
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(0,0,0,.22);
    }

    .saint-spotlight-media {
        position: relative;
        height: 100%;
        min-height: 340px;
    }

    .saint-spotlight-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Fallback shown when the saint post has no image */
    .saint-spotlight-fallback {
        width: 100%;
        height: 100%;
        min-height: 340px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 12px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(145deg, #0d1f3c 0%, #142540 38%, #1a2f52 60%, #0a1628 100%);
    }

    .saint-spotlight-fallback::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 35% 40%, rgba(201, 162, 39, .12) 0%, transparent 50%),
            radial-gradient(circle at 65% 60%, rgba(4, 107, 210, .08) 0%, transparent 50%);
    }

    .saint-spotlight-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(201, 162, 39, .22) 0%, rgba(201, 162, 39, .06) 50%, transparent 80%);
        animation: saintHaloGlow 4.5s ease-in-out infinite;
        pointer-events: none;
    }

    .saint-spotlight-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        border: 1px solid rgba(201, 162, 39, .16);
        animation: saintPhRing 4s ease-in-out infinite;
    }

    .saint-spotlight-ring--1 { width: 96px; height: 96px; margin: -48px 0 0 -48px; animation-delay: 0s; }
    .saint-spotlight-ring--2 { width: 148px; height: 148px; margin: -74px 0 0 -74px; border-color: rgba(201, 162, 39, .10); animation-delay: .8s; }
    .saint-spotlight-ring--3 { width: 210px; height: 210px; margin: -105px 0 0 -105px; border-color: rgba(201, 162, 39, .06); animation-delay: 1.6s; }
    .saint-spotlight-ring--4 { width: 280px; height: 280px; margin: -140px 0 0 -140px; border-color: rgba(201, 162, 39, .03); animation-delay: 2.4s; }

    .saint-spotlight-glyph {
        position: relative;
        z-index: 1;
        font-size: 4.2rem;
        color: rgba(201, 162, 39, .48);
        line-height: 1;
    }

    .saint-spotlight-glyph-label {
        position: relative;
        z-index: 1;
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .28em;
        text-transform: uppercase;
        color: rgba(201, 162, 39, .34);
    }

    @keyframes saintHaloGlow {
        0%, 100% { box-shadow: 0 0 28px rgba(201,162,39,.22), 0 0 60px rgba(201,162,39,.08); }
        50% { box-shadow: 0 0 50px rgba(201,162,39,.42), 0 0 100px rgba(201,162,39,.16); }
    }

    @keyframes saintPhRing {
        0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: .18; }
        50% { transform: translate(-50%, -50%) scale(1.12); opacity: .06; }
    }

    .saint-spotlight-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(7, 17, 29, 0.76);
        border: 1px solid rgba(201,162,39,.28);
        color: #e8cf7b;
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    .saint-spotlight-body {
        padding: 34px 34px 36px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .saint-spotlight-label {
        color: #c9a227;
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .22em;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .saint-spotlight-title {
        color: #fff;
        font-family: 'Playfair Display', serif;
        font-size: clamp(2rem, 4vw, 3.35rem);
        line-height: 1.06;
        margin-bottom: 14px;
    }

    .saint-spotlight-title a {
        color: inherit;
        text-decoration: none;
    }

    .saint-spotlight-subtitle {
        color: rgba(220,232,244,.82);
        font-size: 1.02rem;
        line-height: 1.85;
        margin-bottom: 16px;
    }

    .saint-spotlight-excerpt {
        color: rgba(220,232,244,.68);
        font-size: 1rem;
        line-height: 1.9;
        margin-bottom: 26px;
    }

    .saint-spotlight-actions {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        align-items: center;
    }

    .saint-spotlight-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border-radius: 999px;
        padding: 13px 22px;
        text-decoration: none;
        font-weight: 700;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }

    .saint-spotlight-btn-primary {
        background: linear-gradient(135deg, #c9a227, #a07818);
        color: #08111c;
        box-shadow: 0 12px 28px rgba(201,162,39,.22);
    }

    .saint-spotlight-btn-primary:hover {
        color: #08111c;
        transform: translateY(-2px);
    }

    .saint-spotlight-btn-secondary {
        border: 1px solid rgba(255,255,255,.14);
        color: rgba(255,255,255,.84);
        background: rgba(255,255,255,.03);
    }

    .saint-spotlight-btn-secondary:hover {
        border-color: rgba(201,162,39,.36);
        color: #e8cf7b;
        transform: translateY(-2px);
    }

    @media (max-width: 991px) {
        .saint-spotlight-body {
            padding: 26px 22px 28px;
        }

        .saint-spotlight-media {
            min-height: 280px;
        }
    }
</style>

@php($saintUrl = route('public.saint', $saint->slugable?->key ?: \Illuminate\Support\Str::slug($saint->name)))

<section class="saint-spotlight-section">
    <div class="container">
        <div class="row g-0 saint-spotlight-card">
            <div class="col-lg-5">
                <div class="saint-spotlight-media">
                    <span class="saint-spotlight-badge">{{ $isTodaySaint ? ($primaryCategory?->name ?: $title) : 'Featured Saint' }}</span>
                    <a href="{{ $saintUrl }}" title="{{ $saint->name }}">
                        @if ($saint->image)
                            {{ RvMedia::image($saint->image, $saint->name, 'large', attributes: ['class' => 'img-hover']) }}
                        @else
                            <div class="saint-spotlight-fallback" role="img" aria-label="{{ $saint->name }}">
                                <div class="saint-spotlight-glow" aria-hidden="true"></div>
                                <div class="saint-spotlight-ring saint-spotlight-ring--1" aria-hidden="true"></div>
                                <div class="saint-spotlight-ring saint-spotlight-ring--2" aria-hidden="true"></div>
                                <div class="saint-spotlight-ring saint-spotlight-ring--3" aria-hidden="true"></div>
                                <div class="saint-spotlight-ring saint-spotlight-ring--4" aria-hidden="true"></div>
                                <span class="saint-spotlight-glyph">✝</span>
                                <span class="saint-spotlight-glyph-label">{{ __('Sanctus') }}</span>
                            </div>
                        @endif
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="saint-spotlight-body">
                    <div class="saint-spotlight-label">{{ $isTodaySaint ? $subtitle : 'Explore the saints' }}</div>
                    <h2 class="saint-spotlight-title">
                        <a href="{{ $saintUrl }}" title="{{ $saint->name }}">
                            {{ $saint->name }}
                        </a>
                    </h2>

                    @if ($saint->description)
                        <p class="saint-spotlight-subtitle">
                            {{ \Illuminate\Support\Str::limit(strip_tags($saint->description), 180) }}
                        </p>
                    @endif

                    <p class="saint-spotlight-excerpt">
                        {{ $isTodaySaint ? 'Discover the life, witness, and feast of today’s saint, and bring a moment of reflection to the top of your homepage.' : 'Discover the life and witness of a saint, and bring a moment of reflection to your day.' }}
                    </p>

                    <div class="saint-spotlight-actions">
                        <a href="{{ $saintUrl }}" class="saint-spotlight-btn saint-spotlight-btn-primary">
                            Read Saint Story
                        </a>
                        <a href="{{ $archiveUrl }}" class="saint-spotlight-btn saint-spotlight-btn-secondary">
                            {{ $archiveLabel }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
