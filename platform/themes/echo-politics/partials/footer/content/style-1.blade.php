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
