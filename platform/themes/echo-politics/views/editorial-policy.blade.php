@php
    Theme::set('pageTitle', __('Editorial Policy'));
    SeoHelper::setTitle('Editorial Policy | All Catholic Media');
    SeoHelper::setDescription('How All Catholic Media selects, prepares, attributes, and reviews Catholic media and editorial content.');
@endphp

<div class="acm-policy-page">
    <div class="acm-policy-inner">
        <span class="acm-policy-kicker">{{ __('All Catholic Media') }}</span>
        <h1>{{ __('Editorial Policy') }}</h1>
        <p class="acm-policy-lead">{{ __('Our purpose is to help people encounter faithful Catholic prayer, teaching, news, and media in a clear and welcoming place.') }}</p>
        <h2>{{ __('What we publish') }}</h2>
        <p>{{ __('We publish original reflections, Catholic formation, prayer resources, live streams, podcasts, and selected material from established Catholic publishers. We aim for accuracy, charity, clarity, and respect for the teaching and life of the Church.') }}</p>
        <h2>{{ __('Sourcing and attribution') }}</h2>
        <p>{{ __('Imported or adapted material retains a visible source attribution and links to the original publication whenever available. Original reporting and commentary are identified by their author or by the All Catholic Media editorial team.') }}</p>
        <h2>{{ __('Review and standards') }}</h2>
        <p>{{ __('Editors review titles, descriptions, links, and dates before publication when practical. We correct material errors and welcome reports from readers through our Corrections Policy.') }}</p>
        <p class="acm-policy-updated">{{ __('Last updated: September 2, 2026') }}</p>
    </div>
</div>

<style>
.acm-policy-page{background:#06111d;min-height:60vh;padding:72px 20px;color:#dce8f5}.acm-policy-inner{max-width:820px;margin:0 auto}.acm-policy-kicker{color:#c9a227;font-size:.75rem;font-weight:800;letter-spacing:.16em;text-transform:uppercase}.acm-policy-page h1{color:#fff;font:700 clamp(2.2rem,5vw,4rem)/1.1 'Playfair Display',Georgia,serif;margin:12px 0 18px}.acm-policy-page h2{color:#f3d46d;font:700 1.35rem 'Playfair Display',Georgia,serif;margin:34px 0 10px}.acm-policy-page p{font:1rem/1.85 Inter,system-ui,sans-serif;margin:0 0 16px}.acm-policy-lead{color:#fff;font-size:1.15rem!important}.acm-policy-updated{color:rgba(220,232,245,.55);font-size:.8rem!important;margin-top:34px!important}
</style>
