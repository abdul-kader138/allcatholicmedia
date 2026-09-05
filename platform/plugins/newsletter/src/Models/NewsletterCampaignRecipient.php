<?php

namespace Botble\Newsletter\Models;

use Botble\Base\Models\BaseModel;
use Botble\Newsletter\Enums\CampaignRecipientStatusEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsletterCampaignRecipient extends BaseModel
{
    protected $table = 'newsletter_campaign_recipients';

    protected $fillable = [
        'campaign_id',
        'subscriber_id',
        'email',
        'name',
        'status',
        'error',
        'attempts',
        'token',
        'sent_at',
        'opened_at',
        'clicked_at',
    ];

    protected $casts = [
        'status' => CampaignRecipientStatusEnum::class,
        'sent_at' => 'datetime',
        'opened_at' => 'datetime',
        'clicked_at' => 'datetime',
        'open_count' => 'int',
        'click_count' => 'int',
        'attempts' => 'int',
    ];

    public function campaign(): BelongsTo
    {
        return $this->belongsTo(NewsletterCampaign::class, 'campaign_id');
    }

    public function subscriber(): BelongsTo
    {
        return $this->belongsTo(Newsletter::class, 'subscriber_id');
    }

    public function scopePending(Builder $query): Builder
    {
        return $query->where('status', CampaignRecipientStatusEnum::PENDING);
    }
}
