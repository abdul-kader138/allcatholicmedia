<?php

namespace Botble\Newsletter\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Models\BaseModel;
use Botble\Newsletter\Enums\CampaignStatusEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NewsletterCampaign extends BaseModel
{
    protected $table = 'newsletter_campaigns';

    protected $fillable = [
        'name',
        'subject',
        'preheader',
        'content',
        'image',
        'from_name',
        'from_address',
        'reply_to',
        'status',
        'scheduled_at',
        'track_opens',
        'track_clicks',
        'created_by',
    ];

    protected $casts = [
        'name' => SafeContent::class,
        'subject' => SafeContent::class,
        'preheader' => SafeContent::class,
        'status' => CampaignStatusEnum::class,
        'scheduled_at' => 'datetime',
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
        'track_opens' => 'bool',
        'track_clicks' => 'bool',
        'total_recipients' => 'int',
        'sent_count' => 'int',
        'failed_count' => 'int',
        'open_count' => 'int',
        'click_count' => 'int',
    ];

    public function recipients(): HasMany
    {
        return $this->hasMany(NewsletterCampaignRecipient::class, 'campaign_id');
    }

    /**
     * Campaigns whose scheduled moment has arrived and which are still waiting
     * to be picked up by the dispatcher.
     */
    public function scopeDue(Builder $query): Builder
    {
        return $query
            ->where('status', CampaignStatusEnum::SCHEDULED)
            ->whereNotNull('scheduled_at')
            ->where('scheduled_at', '<=', $this->freshTimestamp());
    }

    public function scopeInProgress(Builder $query): Builder
    {
        return $query->where('status', CampaignStatusEnum::SENDING);
    }

    /**
     * A campaign can only be edited while it has not started going out.
     */
    protected function isEditable(): Attribute
    {
        return Attribute::get(fn () => in_array($this->status->getValue(), [
            CampaignStatusEnum::DRAFT,
            CampaignStatusEnum::SCHEDULED,
            CampaignStatusEnum::PAUSED,
            CampaignStatusEnum::FAILED,
            CampaignStatusEnum::CANCELED,
        ], true));
    }

    protected function isDispatchable(): Attribute
    {
        return Attribute::get(fn () => in_array($this->status->getValue(), [
            CampaignStatusEnum::DRAFT,
            CampaignStatusEnum::SCHEDULED,
            CampaignStatusEnum::PAUSED,
            CampaignStatusEnum::FAILED,
        ], true));
    }

    protected function isCancellable(): Attribute
    {
        return Attribute::get(fn () => in_array($this->status->getValue(), [
            CampaignStatusEnum::SCHEDULED,
            CampaignStatusEnum::SENDING,
            CampaignStatusEnum::PAUSED,
        ], true));
    }

    protected function progressPercentage(): Attribute
    {
        return Attribute::get(function (): int {
            if (! $this->total_recipients) {
                return 0;
            }

            return (int) round((($this->sent_count + $this->failed_count) / $this->total_recipients) * 100);
        });
    }

    /**
     * Unique opens / clicks as a percentage of delivered mail - the two numbers
     * every campaign report is judged on.
     */
    protected function openRate(): Attribute
    {
        return Attribute::get(fn (): float => $this->sent_count
            ? round(($this->open_count / $this->sent_count) * 100, 2)
            : 0.0);
    }

    protected function clickRate(): Attribute
    {
        return Attribute::get(fn (): float => $this->sent_count
            ? round(($this->click_count / $this->sent_count) * 100, 2)
            : 0.0);
    }
}
