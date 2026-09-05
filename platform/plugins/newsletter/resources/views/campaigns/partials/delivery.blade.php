@php
    /** @var \Botble\Newsletter\Models\NewsletterCampaign $campaign */
    $status = $campaign->status->getValue();
@endphp

<div class="mb-3 text-muted">
    {{ trans('plugins/newsletter::newsletter.campaigns.delivery.description') }}
</div>

<div class="row g-2 align-items-end">
    <div class="col-md-6">
        <label class="form-label" for="newsletter-test-email">
            {{ trans('plugins/newsletter::newsletter.campaigns.delivery.test_email') }}
        </label>
        <div class="input-group">
            <input
                type="email"
                id="newsletter-test-email"
                class="form-control"
                value="{{ Auth::guard()->user()?->email }}"
                placeholder="you@example.com"
            >
            <button
                type="button"
                class="btn btn-outline-primary"
                data-newsletter-action="{{ route('newsletter.campaigns.test', $campaign->getKey()) }}"
                data-newsletter-email-from="#newsletter-test-email"
            >
                <i class="ti ti-send"></i> {{ trans('plugins/newsletter::newsletter.campaigns.delivery.send_test') }}
            </button>
        </div>
        <small class="form-hint">{{ trans('plugins/newsletter::newsletter.campaigns.delivery.test_email_helper') }}</small>
    </div>

    <div class="col-md-6 text-md-end">
        <a href="{{ route('newsletter.campaigns.preview', $campaign->getKey()) }}" target="_blank" class="btn btn-outline-secondary">
            <i class="ti ti-eye"></i> {{ trans('plugins/newsletter::newsletter.campaigns.preview') }}
        </a>

        <a href="{{ route('newsletter.campaigns.report', $campaign->getKey()) }}" class="btn btn-outline-secondary">
            <i class="ti ti-chart-bar"></i> {{ trans('plugins/newsletter::newsletter.campaigns.report') }}
        </a>

        @if ($campaign->is_dispatchable)
            <button
                type="button"
                class="btn btn-primary"
                data-newsletter-action="{{ route('newsletter.campaigns.send', $campaign->getKey()) }}"
                data-newsletter-confirm="{{ trans('plugins/newsletter::newsletter.campaigns.delivery.confirm_send') }}"
            >
                <i class="ti ti-mail-fast"></i> {{ trans('plugins/newsletter::newsletter.campaigns.delivery.send_now') }}
            </button>
        @endif

        @if ($status === \Botble\Newsletter\Enums\CampaignStatusEnum::SENDING)
            <button
                type="button"
                class="btn btn-warning"
                data-newsletter-action="{{ route('newsletter.campaigns.pause', $campaign->getKey()) }}"
            >
                <i class="ti ti-player-pause"></i> {{ trans('plugins/newsletter::newsletter.campaigns.pause') }}
            </button>
        @endif
    </div>
</div>

@include('plugins/newsletter::campaigns.partials.actions-script')
