<div class="container">
    <div class="row echo-row">
        {!! dynamic_sidebar('footer_sidebar') !!}
    </div>

    <nav class="acm-footer-navigation" aria-label="{{ __('Footer navigation') }}">
        <a href="{{ route('public.about') }}">{{ __('About') }}</a>
        <a href="{{ route('public.editorial-policy') }}">{{ __('Editorial Policy') }}</a>
        <a href="{{ route('public.corrections-policy') }}">{{ __('Corrections') }}</a>
        <a href="{{ url('/contact') }}">{{ __('Contact') }}</a>
        @if (Route::has('donation.guest.form'))
            <a class="acm-footer-navigation__support" href="{{ route('donation.guest.form') }}">{{ __('Support the mission') }}</a>
        @endif
    </nav>

    <div class="echo-footer-copyright-area">
        <div class="copyright-area-inner">
            @if ($logo = theme_option('logo_dark'))
                <div class="footer-logo">
                    <a href="{{ route('public.index') }}" aria-label="{{ theme_option('site_title') }}">
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
                            <span class="footer-donate-link__icon" aria-hidden="true">♥</span>
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

<style>
.acm-footer-navigation {
    align-items: center;
    border-top: 1px solid rgba(255,255,255,.10);
    display: flex;
    flex-wrap: wrap;
    gap: 10px 22px;
    justify-content: center;
    padding: 18px 0;
}
.acm-footer-navigation a {
    color: rgba(255,255,255,.72);
    font-size: .82rem;
    text-decoration: none;
}
.acm-footer-navigation a:hover,
.acm-footer-navigation a:focus-visible { color: #e2c45e; text-decoration: underline; }
.acm-footer-navigation__support { font-weight: 700; }
</style>
