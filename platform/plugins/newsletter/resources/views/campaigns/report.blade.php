@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')

    <div class="row mb-3">
        @foreach ([
            ['label' => trans('plugins/newsletter::newsletter.campaigns.stats.recipients'), 'value' => number_format($campaign->total_recipients), 'color' => 'secondary'],
            ['label' => trans('plugins/newsletter::newsletter.campaigns.stats.sent'), 'value' => number_format($stats['sent']), 'color' => 'success'],
            ['label' => trans('plugins/newsletter::newsletter.campaigns.stats.pending'), 'value' => number_format($stats['pending']), 'color' => 'info'],
            ['label' => trans('plugins/newsletter::newsletter.campaigns.stats.failed'), 'value' => number_format($stats['failed']), 'color' => 'danger'],
            ['label' => trans('plugins/newsletter::newsletter.campaigns.stats.open_rate'), 'value' => $campaign->open_rate . '%', 'color' => 'primary'],
            ['label' => trans('plugins/newsletter::newsletter.campaigns.stats.click_rate'), 'value' => $campaign->click_rate . '%', 'color' => 'primary'],
        ] as $card)
            <div class="col-6 col-md-4 col-xl-2 mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="h1 m-0 text-{{ $card['color'] }}">{{ $card['value'] }}</div>
                        <div class="text-muted small">{{ $card['label'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="mb-1">{{ $campaign->name }}</h3>
                    <div class="text-muted mb-2">{{ $campaign->subject }}</div>

                    <div>
                        {!! $campaign->status->toHtml() !!}

                        @if ($campaign->scheduled_at)
                            <span class="text-muted ms-2">
                                {{ trans('plugins/newsletter::newsletter.campaigns.form.scheduled_at') }}:
                                {{ BaseHelper::formatDateTime($campaign->scheduled_at) }}
                            </span>
                        @endif

                        @if ($campaign->completed_at)
                            <span class="text-muted ms-2">
                                {{ trans('plugins/newsletter::newsletter.campaigns.stats.completed_at') }}:
                                {{ BaseHelper::formatDateTime($campaign->completed_at) }}
                            </span>
                        @endif
                    </div>

                    @if ($campaign->total_recipients)
                        <div class="progress mt-3" style="height: 8px;">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: {{ $campaign->progress_percentage }}%"
                                aria-valuenow="{{ $campaign->progress_percentage }}"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                    @endif
                </div>

                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('newsletter.campaigns.preview', $campaign->getKey()) }}" target="_blank" class="btn btn-outline-secondary">
                        <i class="ti ti-eye"></i> {{ trans('plugins/newsletter::newsletter.campaigns.preview') }}
                    </a>

                    @if ($campaign->is_editable)
                        <a href="{{ route('newsletter.campaigns.edit', $campaign->getKey()) }}" class="btn btn-outline-secondary">
                            <i class="ti ti-edit"></i> {{ trans('core/base::tables.edit') }}
                        </a>
                    @endif

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

                    @if ($campaign->status->getValue() === \Botble\Newsletter\Enums\CampaignStatusEnum::SENDING)
                        <button
                            type="button"
                            class="btn btn-warning"
                            data-newsletter-action="{{ route('newsletter.campaigns.pause', $campaign->getKey()) }}"
                        >
                            <i class="ti ti-player-pause"></i> {{ trans('plugins/newsletter::newsletter.campaigns.pause') }}
                        </button>
                    @elseif ($campaign->status->getValue() === \Botble\Newsletter\Enums\CampaignStatusEnum::PAUSED)
                        <button
                            type="button"
                            class="btn btn-success"
                            data-newsletter-action="{{ route('newsletter.campaigns.resume', $campaign->getKey()) }}"
                        >
                            <i class="ti ti-player-play"></i> {{ trans('plugins/newsletter::newsletter.campaigns.resume') }}
                        </button>
                    @endif

                    @if ($campaign->is_cancellable)
                        <button
                            type="button"
                            class="btn btn-outline-danger"
                            data-newsletter-action="{{ route('newsletter.campaigns.cancel', $campaign->getKey()) }}"
                            data-newsletter-confirm="{{ trans('plugins/newsletter::newsletter.campaigns.delivery.confirm_cancel') }}"
                        >
                            <i class="ti ti-ban"></i> {{ trans('plugins/newsletter::newsletter.campaigns.cancel') }}
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('plugins/newsletter::campaigns.partials.actions-script')

    {!! $table->renderTable() !!}
@endsection
