@php
    Theme::set('pageTitle', __('Corrections Policy'));
    SeoHelper::setTitle('Corrections Policy | All Catholic Media');
    SeoHelper::setDescription('How to report factual errors and how All Catholic Media handles corrections.');
@endphp

<div class="acm-policy-page">
    <div class="acm-policy-inner">
        <span class="acm-policy-kicker">{{ __('All Catholic Media') }}</span>
        <h1>{{ __('Corrections Policy') }}</h1>
        <p class="acm-policy-lead">{{ __('Accuracy matters, especially when content concerns the faith, the Church, and the people we serve.') }}</p>
        <h2>{{ __('Report an error') }}</h2>
        <p>{{ __('Please use our contact page to report a factual error, incorrect date, broken source link, misleading headline, or attribution issue. Include the page URL and a brief explanation of the correction needed.') }}</p>
        <h2>{{ __('How we respond') }}</h2>
        <p>{{ __('We review credible reports, correct material errors promptly, and update the page when appropriate. Significant corrections may include a short editor’s note. We do not silently change published quotations or alter a source’s meaning.') }}</p>
        <h2>{{ __('Daily dates') }}</h2>
        <p>{{ __('Saint and feast-day information can vary by calendar, country, diocese, and liturgical year. When a date is uncertain or unavailable, we label content as featured rather than presenting it as the Saint of the Day.') }}</p>
    </div>
</div>

<style>
.acm-policy-page{background:#06111d;min-height:60vh;padding:72px 20px;color:#dce8f5}.acm-policy-inner{max-width:820px;margin:0 auto}.acm-policy-kicker{color:#c9a227;font-size:.75rem;font-weight:800;letter-spacing:.16em;text-transform:uppercase}.acm-policy-page h1{color:#fff;font:700 clamp(2.2rem,5vw,4rem)/1.1 'Playfair Display',Georgia,serif;margin:12px 0 18px}.acm-policy-page h2{color:#f3d46d;font:700 1.35rem 'Playfair Display',Georgia,serif;margin:34px 0 10px}.acm-policy-page p{font:1rem/1.85 Inter,system-ui,sans-serif;margin:0 0 16px}.acm-policy-lead{color:#fff;font-size:1.15rem!important}
</style>
