<?php

namespace Botble\Newsletter\Tables;

use Botble\Newsletter\Enums\CampaignRecipientStatusEnum;
use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Models\NewsletterCampaignRecipient;
use Botble\Table\Abstracts\TableAbstract;
use Botble\Table\Columns\Column;
use Botble\Table\Columns\DateTimeColumn;
use Botble\Table\Columns\EmailColumn;
use Botble\Table\Columns\EnumColumn;
use Botble\Table\Columns\IdColumn;
use Illuminate\Database\Eloquent\Builder;

class NewsletterCampaignRecipientTable extends TableAbstract
{
    protected ?NewsletterCampaign $campaign = null;

    public function forCampaign(NewsletterCampaign $campaign): static
    {
        $this->campaign = $campaign;

        return $this;
    }

    public function setup(): void
    {
        $this
            ->model(NewsletterCampaignRecipient::class)
            ->addColumns([
                IdColumn::make(),
                EmailColumn::make()->alignLeft(),
                Column::make('name')->title(trans('core/base::forms.name'))->alignLeft(),
                EnumColumn::make('status')->title(trans('core/base::tables.status')),
                DateTimeColumn::make('sent_at')
                    ->title(trans('plugins/newsletter::newsletter.campaigns.recipients.sent_at')),
                DateTimeColumn::make('opened_at')
                    ->title(trans('plugins/newsletter::newsletter.campaigns.recipients.opened_at')),
                DateTimeColumn::make('clicked_at')
                    ->title(trans('plugins/newsletter::newsletter.campaigns.recipients.clicked_at')),
                Column::make('error')
                    ->title(trans('plugins/newsletter::newsletter.campaigns.recipients.error'))
                    ->alignLeft()
                    ->orderable(false),
            ])
            ->queryUsing(function (Builder $query) {
                return $query
                    ->when(
                        $this->campaign,
                        fn (Builder $query) => $query->where('campaign_id', $this->campaign->getKey())
                    )
                    ->select([
                        'id',
                        'campaign_id',
                        'email',
                        'name',
                        'status',
                        'sent_at',
                        'opened_at',
                        'clicked_at',
                        'error',
                    ]);
            });
    }

    public function getFilters(): array
    {
        return [
            'status' => [
                'title' => trans('core/base::tables.status'),
                'type' => 'select',
                'choices' => CampaignRecipientStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', CampaignRecipientStatusEnum::toArray()),
            ],
        ];
    }

    public function getDefaultButtons(): array
    {
        return array_unique(array_merge(['export'], parent::getDefaultButtons()));
    }
}
