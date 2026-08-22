@php
    $videoUrl = function_exists('echo_get_post_video_url') ? echo_get_post_video_url($post) : null;

    if (! $videoUrl && function_exists('echo_politics_extract_video_url_from_html')) {
        $videoUrl = echo_politics_extract_video_url_from_html((string) ($post->content ?? ''));
    }

    $embedUrl = null;

    if ($videoUrl && \Botble\Theme\Supports\Youtube::isYoutubeURL($videoUrl)) {
        $videoId = \Botble\Theme\Supports\Youtube::getYoutubeVideoID($videoUrl);
        $embedUrl = $videoId ? 'https://www.youtube.com/embed/' . $videoId : null;
    } elseif ($videoUrl && str_contains($videoUrl, 'vimeo.com')) {
        preg_match('/vimeo\.com\/(\d+)/', $videoUrl, $matches);
        $embedUrl = ! empty($matches[1]) ? 'https://player.vimeo.com/video/' . $matches[1] : null;
    }
@endphp

<style>
    .acm-post-wrap {
        background: transparent !important;
        margin: 0 auto;
        max-width: 960px;
        padding: 32px 20px 64px;
    }

    .acm-post-head h1 {
        color: #0f172a;
        font-family: var(--heading-font, 'Playfair Display', serif);
        font-size: clamp(2rem, 4vw, 3rem);
        line-height: 1.08;
        margin: 0 0 14px;
    }

    .acm-post-meta {
        color: #64748b;
        display: flex;
        flex-wrap: wrap;
        gap: 12px 18px;
        margin-bottom: 24px;
    }

    .acm-post-meta a {
        color: #046bd2;
        text-decoration: none;
    }

    .acm-post-embed {
        aspect-ratio: 16/9;
        background: #020617;
        border-radius: 18px;
        margin: 0 0 28px;
        overflow: hidden;
    }

    .acm-post-embed iframe {
        border: 0;
        display: block;
        height: 100%;
        width: 100%;
    }

    .acm-post-content {
        color: #334155;
    }

    .acm-post-content img {
        border-radius: 14px;
        display: block;
        height: auto;
        margin: 0 0 24px;
        width: 100%;
    }

    .acm-post-content h2,
    .acm-post-content h3 {
        color: #0f172a;
        line-height: 1.25 !important;
        margin: 32px 0 16px;
    }

    .acm-post-related {
        margin-top: 40px;
    }

    .acm-post-related-grid {
        display: grid;
        gap: 18px;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .acm-post-related-card {
        text-decoration: none;
    }

    .acm-post-related-card img {
        border-radius: 14px;
        display: block;
        height: 160px;
        object-fit: cover;
        width: 100%;
    }

    .acm-post-related-card-title {
        color: #0f172a;
        font-weight: 700;
        margin-top: 10px;
    }

    /* ── Comment section — dark theme ────────────────── */
    .fob-comment-list-section,
    .fob-comment-form-section {
        background: #0d1b2a !important;
        border: 1px solid rgba(255,255,255,0.08) !important;
        border-radius: 16px !important;
        box-shadow: none !important;
        margin-top: 40px;
        padding: 28px 24px !important;
    }

    .fob-comment-title {
        color: #e7eef7 !important;
        font-size: 1.2rem !important;
        font-weight: 700;
        margin-bottom: 1.4rem !important;
    }

    .fob-comment-form-note {
        color: rgba(231,238,247,0.55) !important;
        font-size: 0.88rem !important;
    }

    /* Each comment item */
    .fob-comment-item {
        border-bottom: 1px solid rgba(255,255,255,0.07);
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .fob-comment-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .fob-comment-item-avatar img {
        border-radius: 50% !important;
        height: 44px !important;
        object-fit: cover;
        width: 44px !important;
    }

    /* Comment text — visible on dark bg */
    .fob-comment-item-body,
    .fob-comment-item-body p {
        color: rgba(231,238,247,0.88) !important;
        font-size: 0.97rem !important;
        line-height: 1.75;
        margin-bottom: 10px !important;
    }

    .fob-comment-item-pending {
        background: rgba(251,191,36,0.12);
        border-radius: 6px;
        color: #fbbf24 !important;
        display: inline-block !important;
        font-size: 0.82rem;
        margin-bottom: 8px !important;
        padding: 3px 10px;
    }

    /* Author name + date */
    .fob-comment-item-author {
        color: #e7eef7 !important;
        font-size: 0.88rem !important;
        font-weight: 700 !important;
        margin: 0 !important;
    }

    .fob-comment-item-date {
        color: rgba(231,238,247,0.4) !important;
        font-size: 0.82rem !important;
    }

    .fob-comment-item-reply {
        border: 1px solid rgba(212,176,75,0.35) !important;
        border-radius: 6px;
        color: #d4b04b !important;
        font-size: 0.82rem !important;
        font-style: normal !important;
        padding: 3px 14px;
        text-decoration: none;
        transition: background 0.15s, border-color 0.15s;
    }

    .fob-comment-item-reply:hover {
        background: rgba(212,176,75,0.10);
        border-color: #d4b04b !important;
    }

    /* Nested reply indent */
    .fob-comment-item .fob-comment-list {
        border-left: 2px solid rgba(212,176,75,0.3);
        margin-inline-start: 0 !important;
        margin-top: 16px;
        padding-left: 18px;
    }

    /* Form inputs — all types including autofill */
    .fob-comment-form-section input,
    .fob-comment-form-section textarea,
    .fob-comment-form-section select,
    .fob-comment-form-section .form-control {
        background: rgba(255,255,255,0.05) !important;
        border: 1px solid rgba(255,255,255,0.12) !important;
        border-radius: 10px !important;
        color: #e7eef7 !important;
        -webkit-text-fill-color: #e7eef7 !important;
    }

    .fob-comment-form-section input::placeholder,
    .fob-comment-form-section textarea::placeholder,
    .fob-comment-form-section select::placeholder {
        color: rgba(231,238,247,0.35) !important;
        -webkit-text-fill-color: rgba(231,238,247,0.35) !important;
    }

    /* Fix browser autofill overriding background/text color */
    .fob-comment-form-section input:-webkit-autofill,
    .fob-comment-form-section input:-webkit-autofill:hover,
    .fob-comment-form-section input:-webkit-autofill:focus,
    .fob-comment-form-section textarea:-webkit-autofill {
        -webkit-text-fill-color: #e7eef7 !important;
        -webkit-box-shadow: 0 0 0 1000px #0d1b2a inset !important;
        transition: background-color 5000s ease-in-out 0s;
    }

    .fob-comment-form-section .form-control:focus,
    .fob-comment-form-section textarea:focus,
    .fob-comment-form-section input:focus {
        background: rgba(255,255,255,0.08) !important;
        border-color: rgba(212,176,75,0.5) !important;
        box-shadow: 0 0 0 3px rgba(212,176,75,0.10) !important;
        outline: none !important;
    }

    .fob-comment-form-section label,
    .fob-comment-form-section .form-label {
        color: rgba(231,238,247,0.80) !important;
        font-size: 0.9rem !important;
    }

    .fob-comment-form-section .btn,
    .fob-comment-form-section button[type="submit"] {
        background: linear-gradient(135deg, #d4b04b, #b4871b) !important;
        border: none !important;
        border-radius: 10px !important;
        color: #081524 !important;
        font-weight: 700;
        padding: 10px 28px !important;
    }

    .fob-comment-form-section .btn:hover,
    .fob-comment-form-section button[type="submit"]:hover {
        filter: brightness(1.08);
    }

    /* Cancel reply link */
    .cancel-comment-reply-link {
        color: rgba(231,238,247,0.55) !important;
    }

    .cancel-comment-reply-link:hover {
        color: #e7eef7 !important;
    }
</style>

<script>
(function () {
    var DARK_BG   = '#0d1b2a';
    var DARK_BDR  = '1px solid rgba(255,255,255,0.08)';
    var DARK_RAD  = '16px';

    function applyDark(el) {
        if (!el) return;
        el.style.setProperty('background',      DARK_BG,  'important');
        el.style.setProperty('background-color',DARK_BG,  'important');
        el.style.setProperty('border',          DARK_BDR, 'important');
        el.style.setProperty('border-radius',   DARK_RAD, 'important');
        el.style.setProperty('box-shadow',      'none',   'important');
    }

    function darkifyComments() {
        applyDark(document.querySelector('.fob-comment-list-section'));
        applyDark(document.querySelector('.fob-comment-form-section'));
    }

    /* Run once DOM is ready */
    document.addEventListener('DOMContentLoaded', darkifyComments);

    /* Re-run after fob-comment AJAX loads the list (it calls .show() after ~300ms) */
    var _orig = window.$ && window.$.fn && window.$.fn.show;
    document.addEventListener('DOMContentLoaded', function () {
        if (window.$) {
            var orig = window.$.fn.show;
            window.$.fn.show = function () {
                var result = orig.apply(this, arguments);
                this.each(function () {
                    if (this.classList &&
                        (this.classList.contains('fob-comment-list-section') ||
                         this.classList.contains('fob-comment-form-section'))) {
                        applyDark(this);
                    }
                });
                return result;
            };
        }
        /* Fallback: poll for 3 seconds after page load */
        var ticks = 0;
        var poll = setInterval(function () {
            darkifyComments();
            if (++ticks >= 6) clearInterval(poll);
        }, 500);
    });
})();
</script>

<div class="acm-post-wrap">
    {!! Theme::breadcrumb()->render() !!}

    <header class="acm-post-head">
        <h1>{{ $post->name }}</h1>

        <div class="acm-post-meta">
            @if ($post->categories->isNotEmpty())
                <span>
                    <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                </span>
            @endif

            <span>{{ $post->created_at->format('M d, Y') }}</span>

            @if ($post->tags->isNotEmpty())
                <span>
                    @foreach ($post->tags as $tag)
                        <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                    @endforeach
                </span>
            @endif
        </div>
    </header>

    @if ($embedUrl)
        <div class="acm-post-embed">
            <iframe
                src="{{ $embedUrl }}?autoplay=0&rel=0&modestbranding=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                title="{{ $post->name }}"
            ></iframe>
        </div>
    @endif

    <div class="ck-content acm-post-content">
        {!! BaseHelper::clean($post->content) !!}
    </div>

    {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $post) !!}

    @php $relatedPosts = get_related_posts($post->getKey(), 2); @endphp

    @if ($relatedPosts->isNotEmpty())
        <section class="acm-post-related">
            <h3>{{ __('Related Posts') }}</h3>

            <div class="acm-post-related-grid">
                @foreach ($relatedPosts as $relatedItem)
                    <a class="acm-post-related-card" href="{{ $relatedItem->url }}">
                        <img
                            src="{{ RvMedia::getImageUrl($relatedItem->image, null, false, RvMedia::getDefaultImage()) }}"
                            alt="{{ $relatedItem->name }}"
                        >

                        <div class="acm-post-related-card-title">{{ $relatedItem->name }}</div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif
</div>
