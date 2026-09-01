@php
    $heading  = $shortcode->heading  ?: theme_option('watch_learn_pray_heading',  'Watch, Learn, Pray.');
    $subtext  = $shortcode->subtext  ?: theme_option('watch_learn_pray_subtext',  'All Catholic Media is one trusted Catholic platform bringing together prayer, formation, news, original programming, and faithful voices from around the world.');
    $subtext  = str_replace(['OnlyCatholic.org', 'OnlyCatholic'], 'All Catholic Media', $subtext);
    $prefix   = $shortcode->motto_prefix ?: theme_option('watch_learn_pray_motto_prefix', 'One');
    $word1    = $shortcode->motto_word_1  ?: theme_option('watch_learn_pray_motto_word_1', 'faith');
    $color1   = $shortcode->motto_color_1 ?: theme_option('watch_learn_pray_motto_color_1', '#7bb8f0');
    $word2    = $shortcode->motto_word_2  ?: theme_option('watch_learn_pray_motto_word_2', 'family');
    $color2   = $shortcode->motto_color_2 ?: theme_option('watch_learn_pray_motto_color_2', '#e88080');
    $word3    = $shortcode->motto_word_3  ?: theme_option('watch_learn_pray_motto_word_3', 'place');
    $color3   = $shortcode->motto_color_3 ?: theme_option('watch_learn_pray_motto_color_3', '#c9a227');
    $signature = $shortcode->signature   ?: theme_option('watch_learn_pray_signature', 'Fr. Morson Livingston');
    $bgImage   = $shortcode->background_image
        ? RvMedia::getImageUrl($shortcode->background_image)
        : (theme_option('watch_learn_pray_background_image')
            ? RvMedia::getImageUrl(theme_option('watch_learn_pray_background_image'))
            : 'https://images.unsplash.com/photo-1548625149-fc4a29cf7092?q=80&w=2000&auto=format&fit=crop');
@endphp

<style>
    .wlp-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 24px;
    }

    .wlp-action {
        display: inline-flex;
        align-items: center;
        min-height: 42px;
        padding: 0 15px;
        border: 1px solid rgba(201, 162, 39, .35);
        border-radius: 999px;
        color: #f3d46d;
        font: 700 .78rem/1 Inter, system-ui, sans-serif;
        text-decoration: none;
        transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease;
    }

    .wlp-action:hover {
        background: #c9a227;
        border-color: #c9a227;
        color: #060e1d;
        transform: translateY(-1px);
        text-decoration: none;
    }

    .wlp-action-primary {
        background: #c9a227;
        color: #060e1d;
    }

    @media (max-width: 575px) {
        .wlp-actions { gap: 8px; }
        .wlp-action { flex: 1 1 auto; justify-content: center; }
    }

    @media (prefers-reduced-motion: reduce) {
        .wlp-action { transition: none; }
    }
</style>

<section class="wlp-section" style="--wlp-bg: url('{{ $bgImage }}');">
    <div class="wlp-overlay" aria-hidden="true"></div>

    <div class="container wlp-container">
        <div class="wlp-grid">

            {{-- Left column: mission statement --}}
            <div class="wlp-mission">
                <span class="wlp-eyebrow">Our Mission</span>
                <h2 class="wlp-heading">{{ $heading }}</h2>
                <p class="wlp-subtext">{{ $subtext }}</p>
                <div class="wlp-actions" aria-label="Quick links">
                    <a class="wlp-action wlp-action-primary" href="{{ route('public.live') }}">Watch Live</a>
                    <a class="wlp-action" href="{{ route('public.prayer-request') }}">Submit a Prayer</a>
                    @if (is_plugin_active('newsletter'))
                        <a class="wlp-action" href="#newsletter">Subscribe Free</a>
                    @endif
                    <a class="wlp-action" href="{{ route('donation.guest.form') }}">Support the Mission</a>
                </div>
            </div>

            {{-- Vertical gold cross divider --}}
            <div class="wlp-divider" aria-hidden="true">
                <span class="wlp-divider-line"></span>
                <svg class="wlp-divider-cross" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                    <line x1="1" y1="12" x2="23" y2="12" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                    <circle cx="12" cy="12" r="3" fill="currentColor"/>
                </svg>
                <span class="wlp-divider-line"></span>
            </div>

            {{-- Right column: motto --}}
            <div class="wlp-motto-col">
                <div class="wlp-motto">
                    <div class="wlp-motto-row" style="--mc: {{ $color1 }};">
                        <span class="wlp-one">{{ $prefix }}</span>
                        <span class="wlp-word">{{ $word1 }}</span>
                    </div>
                    <div class="wlp-motto-row" style="--mc: {{ $color2 }};">
                        <span class="wlp-one">{{ $prefix }}</span>
                        <span class="wlp-word">{{ $word2 }}</span>
                    </div>
                    <div class="wlp-motto-row" style="--mc: {{ $color3 }};">
                        <span class="wlp-one">{{ $prefix }}</span>
                        <span class="wlp-word">{{ $word3 }}</span>
                    </div>
                </div>

                @if ($signature)
                    <p class="wlp-signature">— {{ $signature }}</p>
                @endif
            </div>

        </div>
    </div>
</section>
