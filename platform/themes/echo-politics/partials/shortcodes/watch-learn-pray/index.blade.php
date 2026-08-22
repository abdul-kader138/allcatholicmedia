@php
    $heading  = $shortcode->heading  ?: theme_option('watch_learn_pray_heading',  'Watch, Learn, Pray.');
    $subtext  = $shortcode->subtext  ?: theme_option('watch_learn_pray_subtext',  'AllCatholicMedia.com is your digital home for everything Catholic. From live Mass and news to videos, podcasts, and prayer resources — we unite faithful voices in one trusted space. Join us in celebrating our one faith, one family, one place.');
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

<section class="wlp-section" style="--wlp-bg: url('{{ $bgImage }}');">
    <div class="wlp-overlay" aria-hidden="true"></div>

    <div class="container wlp-container">
        <div class="wlp-grid">

            {{-- Left column: mission statement --}}
            <div class="wlp-mission">
                <span class="wlp-eyebrow">Our Mission</span>
                <h2 class="wlp-heading">{{ $heading }}</h2>
                <p class="wlp-subtext">{{ $subtext }}</p>
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
