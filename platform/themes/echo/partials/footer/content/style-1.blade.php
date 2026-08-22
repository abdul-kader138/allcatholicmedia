<style>
.footer-donate-link {
    align-items: center;
    background:
        radial-gradient(circle at top left, rgba(255, 232, 164, 0.22), transparent 42%),
        linear-gradient(135deg, rgba(201, 162, 39, 0.3) 0%, rgba(201, 162, 39, 0.12) 60%, rgba(255, 255, 255, 0.03) 100%);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(232, 199, 110, 0.58);
    border-radius: 999px;
    box-shadow:
        inset 0 1px 0 rgba(255, 255, 255, 0.1),
        0 16px 34px rgba(0, 0, 0, 0.2);
    color: #ffe7a0 !important;
    display: inline-flex;
    font-size: 12px;
    font-weight: 700;
    gap: 10px;
    letter-spacing: 0.14em;
    padding: 9px 18px 9px 10px;
    position: relative;
    text-decoration: none !important;
    text-transform: uppercase;
    transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease, background 0.22s ease;
    overflow: hidden;
}

.footer-donate-link::before {
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.18), transparent);
    content: "";
    height: 100%;
    left: -140%;
    position: absolute;
    top: 0;
    transform: skewX(-22deg);
    transition: left 0.5s ease;
    width: 60%;
}

.footer-donate-link:hover {
    background:
        radial-gradient(circle at top left, rgba(255, 232, 164, 0.16), transparent 42%),
        linear-gradient(135deg, rgba(201, 162, 39, 0.22) 0%, rgba(201, 162, 39, 0.08) 55%, rgba(255, 255, 255, 0.02) 100%);
    border-color: rgba(215, 181, 86, 0.34);
    box-shadow:
        inset 0 1px 0 rgba(255, 255, 255, 0.08),
        0 10px 30px rgba(0, 0, 0, 0.16);
    color: #f6d97b !important;
    text-decoration: none !important;
    transform: translateY(-1px);
}

.footer-donate-link:hover::before {
    left: 140%;
}

.footer-donate-link__icon {
    align-items: center;
    background: linear-gradient(180deg, rgba(255, 232, 164, 0.22) 0%, rgba(201, 162, 39, 0.14) 100%);
    border: 1px solid rgba(255, 232, 164, 0.2);
    border-radius: 50%;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.14);
    display: inline-flex;
    flex-shrink: 0;
    height: 32px;
    justify-content: center;
    position: relative;
    width: 32px;
}

.footer-donate-link__icon svg {
    display: block;
    filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.16));
}

.footer-donate-link span:last-child {
    position: relative;
    top: 1px;
}

@media (max-width: 767px) {
    .footer-donate-link {
        font-size: 11px;
        gap: 8px;
        letter-spacing: 0.1em;
        padding: 8px 14px 8px 9px;
    }

    .footer-donate-link__icon {
        height: 30px;
        width: 30px;
    }
}
</style>

<div class="container">
    <div class="row echo-row">
        {!! dynamic_sidebar('footer_sidebar') !!}
    </div>
    <div class="echo-footer-copyright-area">
        <div class="copyright-area-inner">
            @if ($logo = theme_option('logo_dark'))
            <div class="footer-logo">
                <a href="{{ route('public.index') }}">
                    {{ RvMedia::image($logo, theme_option('site_title')) }}
                </a>
            </div>
            @endif

            @if ($siteCopyright = Theme::getSiteCopyright())
            <div class="copyright-content">
                <div class="title">{!! $siteCopyright !!}</div>
            </div>
            @endif

            @if (Route::has('donation.guest.form'))
            <div class="copyright-content">
                <div class="title">
                    <a href="{{ route('donation.guest.form') }}" class="footer-donate-link">
                        <span class="footer-donate-link__icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M12 21s-6.716-4.35-9.192-8.165C.18 8.79 1.31 4.64 5.356 3.48c2.35-.674 4.41.19 5.644 1.855 1.234-1.665 3.293-2.529 5.644-1.855 4.046 1.16 5.176 5.31 2.548 9.355C18.716 16.65 12 21 12 21z" />
                            </svg>
                        </span>
                        <span>{{ __('Donate') }}</span>
                    </a>
                </div>
            </div>
            @endif

            @if (is_plugin_active('language'))
            {!! Theme::partial('language-switcher', ['location' => 'footer']) !!}
            @endif
        </div>
    </div>
</div>