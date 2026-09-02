@php
    $title    = $shortcode->title    ?: theme_option('hero_intro_title', 'Watch, Learn, Pray.');
    $heroHeading = str_contains(strtolower($title), 'all catholic media')
        ? $title
        : 'All Catholic Media — ' . $title;
    $link     = $shortcode->link     ?: theme_option('hero_intro_link', '');
    $bgImage  = $shortcode->background_image
        ? RvMedia::getImageUrl($shortcode->background_image)
        : (theme_option('hero_intro_background_image')
            ? RvMedia::getImageUrl(theme_option('hero_intro_background_image'))
            : null);

    $showCards = ($shortcode->show_cards ?: 'yes') !== 'no';

    $videoId = '';
    if ($link) {
        preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $link, $m);
        $videoId = $m[1] ?? '';
    }

    $defaultTexts = [
        1 => 'Sunday Mass — Live & On Demand',
        2 => 'Catholic Teaching & Formation',
        3 => 'Adoration, Rosary & Prayer',
        4 => 'Saints, Feasts & Sacred Music',
    ];

    $cards = [];
    for ($i = 1; $i <= 4; $i++) {
        $imgKey  = "card_{$i}_image";
        $textKey = "card_{$i}_text";
        $linkKey = "card_{$i}_link";

        $cardImg = $shortcode->$imgKey
            ? RvMedia::getImageUrl($shortcode->$imgKey)
            : (theme_option("hero_intro_card_{$i}_image")
                ? RvMedia::getImageUrl(theme_option("hero_intro_card_{$i}_image"))
                : null);

        $cards[] = [
            'image' => $cardImg,
            'text'  => $shortcode->$textKey ?: theme_option("hero_intro_card_{$i}_text", $defaultTexts[$i]),
            'link'  => $shortcode->$linkKey ?: theme_option("hero_intro_card_{$i}_link", ''),
        ];
    }
@endphp

<section class="hi-section">

    {{-- ── Main Hero Area ── --}}
    <div class="hi-hero" id="hi-hero" @if($bgImage) style="background-image: url('{{ $bgImage }}');" @endif>

        <div class="hi-hero-overlay" aria-hidden="true"></div>

        {{-- Inline background video (hidden until play clicked) --}}
        @if($videoId)
            <iframe class="hi-bg-video" id="hi-bg-video"
                src=""
                allow="autoplay; encrypted-media; fullscreen"
                allowfullscreen>
            </iframe>
            <button class="hi-video-close" id="hi-video-close" aria-label="Stop video">&#x2715;</button>
        @endif

        <div class="hi-hero-content">
            <div class="hi-hero-inner">

                @if($videoId)
                    <button class="hi-play-btn" id="hi-play-btn" aria-label="Play video">
                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none">
                            <path d="M2 2L18 11L2 20V2Z" fill="white" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                        </svg>
                    </button>
                @elseif($link)
                    <a href="{{ $link }}" class="hi-play-btn" aria-label="Play">
                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none">
                            <path d="M2 2L18 11L2 20V2Z" fill="white" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                        </svg>
                    </a>
                @endif

                <h1 class="hi-title">{{ $heroHeading }}</h1>

                <div class="hi-primary-actions">
                    <a href="{{ url('/live') }}" class="hi-primary-action hi-primary-action--gold">{{ __('Watch Live') }}</a>
                    <a href="{{ url('/read') }}" class="hi-primary-action">{{ __('Explore Catholic Stories') }}</a>
                </div>

            </div>
        </div>
    </div>

    {{-- ── Four Image Cards ── --}}
    @if($showCards)
    <div class="hi-cards">
        @foreach($cards as $card)
        <div class="hi-card">
            @if(!empty($card['image']))
                <img src="{{ $card['image'] }}" alt="{{ $card['text'] }}" class="hi-card-img">
            @endif

            <div class="hi-card-overlay" aria-hidden="true"></div>

            @if(!empty($card['text']))
            <div class="hi-card-body">
                @if(!empty($card['link']))
                    <a href="{{ $card['link'] }}" class="hi-card-link">
                        <svg class="hi-card-icon" width="13" height="14" viewBox="0 0 14 15" fill="none">
                            <path d="M1.5 1.5L12.5 7.5L1.5 13.5V1.5Z" fill="currentColor" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
                        </svg>
                        <span class="hi-card-text">{!! html_entity_decode($card['text']) !!}</span>
                    </a>
                @else
                    <div class="hi-card-nolink">
                        <svg class="hi-card-icon" width="13" height="14" viewBox="0 0 14 15" fill="none">
                            <path d="M1.5 1.5L12.5 7.5L1.5 13.5V1.5Z" fill="currentColor" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
                        </svg>
                        <span class="hi-card-text">{!! html_entity_decode($card['text']) !!}</span>
                    </div>
                @endif
            </div>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    @if($videoId)
    <script>
    (function () {
        var hero     = document.getElementById('hi-hero');
        var iframe   = document.getElementById('hi-bg-video');
        var playBtn  = document.getElementById('hi-play-btn');
        var closeBtn = document.getElementById('hi-video-close');
        var embedUrl = 'https://www.youtube.com/embed/{{ $videoId }}?autoplay=1&rel=0&enablejsapi=1';

        function play() {
            iframe.src = embedUrl;
            hero.classList.add('hi-hero--playing');
        }

        function stop() {
            hero.classList.remove('hi-hero--playing');
            iframe.src = '';
        }

        playBtn.addEventListener('click', play);
        closeBtn.addEventListener('click', stop);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && hero.classList.contains('hi-hero--playing')) {
                stop();
            }
        });
    })();
    </script>
    @endif

</section>
