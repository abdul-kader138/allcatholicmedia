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
                        {{ RvMedia::image($saint->image, $saint->name, 'large', attributes: ['class' => 'img-hover']) }}
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
