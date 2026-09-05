<?php

namespace Botble\Newsletter\Services;

use Botble\Newsletter\Enums\CampaignRecipientStatusEnum;
use Botble\Newsletter\Enums\CampaignStatusEnum;
use Botble\Newsletter\Enums\NewsletterStatusEnum;
use Botble\Newsletter\Jobs\SendNewsletterCampaignJob;
use Botble\Newsletter\Models\Newsletter;
use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Models\NewsletterCampaignRecipient;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Owns every state transition a campaign can make.
 *
 * The design is deliberately poll-driven rather than fire-and-forget: the
 * recipient table is the single source of truth, so a worker crash, a redeploy
 * mid-send or a queue flush costs nothing - the next tick picks up exactly
 * where the previous one stopped, and the unique index on
 * (campaign_id, email) makes a double send impossible.
 */
class CampaignDispatcher
{
    /**
     * Promote every campaign whose scheduled time has arrived.
     *
     * @return int Number of campaigns started.
     */
    public function startDueCampaigns(): int
    {
        // Materialised up front: start() moves each campaign out of the `due`
        // set, which would make a chunked cursor skip every other row.
        $campaigns = NewsletterCampaign::query()->due()->orderBy('scheduled_at')->get();

        foreach ($campaigns as $campaign) {
            $this->start($campaign);
        }

        return $campaigns->count();
    }

    /**
     * Move a campaign into `sending` and snapshot its audience.
     *
     * The audience is frozen at this moment: subscribers who join later are not
     * retroactively added, and subscribers who leave later are not re-mailed -
     * which is what makes the campaign report meaningful after the fact.
     */
    public function start(NewsletterCampaign $campaign): NewsletterCampaign
    {
        $campaign->forceFill([
            'status' => CampaignStatusEnum::SENDING,
            'started_at' => $campaign->started_at ?: Carbon::now(),
        ])->save();

        $this->materialiseRecipients($campaign);

        $campaign->forceFill([
            'total_recipients' => $campaign->recipients()->count(),
        ])->save();

        return $campaign->refresh();
    }

    /**
     * Copy the current subscriber list into the campaign's delivery log.
     * `insertOrIgnore` plus the unique index makes this safe to re-run.
     */
    public function materialiseRecipients(NewsletterCampaign $campaign): int
    {
        $inserted = 0;
        $now = Carbon::now();

        Newsletter::query()
            ->where('status', NewsletterStatusEnum::SUBSCRIBED)
            ->whereNotNull('email')
            ->where('email', '!=', '')
            ->select(['id', 'email', 'name'])
            ->orderBy('id')
            ->chunkById((int) config('plugins.newsletter.campaign.chunk_size', 500), function ($subscribers) use ($campaign, $now, &$inserted): void {
                $rows = [];

                foreach ($subscribers as $subscriber) {
                    if (! filter_var($subscriber->email, FILTER_VALIDATE_EMAIL)) {
                        continue;
                    }

                    $rows[] = [
                        'campaign_id' => $campaign->getKey(),
                        'subscriber_id' => $subscriber->getKey(),
                        'email' => $subscriber->email,
                        'name' => $subscriber->name,
                        'status' => CampaignRecipientStatusEnum::PENDING,
                        'token' => Str::random(40),
                        'created_at' => $now,
                        'updated_at' => $now,
                    ];
                }

                if ($rows) {
                    $inserted += NewsletterCampaignRecipient::query()->insertOrIgnore($rows);
                }
            });

        return $inserted;
    }

    /**
     * Release the next slice of pending recipients onto the queue.
     *
     * The slice size is the per-minute rate limit, and the scheduler calls this
     * once a minute - that is the whole throttle. It works identically on the
     * database, Redis and SQS queue drivers.
     *
     * @return int Number of messages queued.
     */
    public function dispatchPending(NewsletterCampaign $campaign, ?int $limit = null): int
    {
        if ($campaign->status->getValue() !== CampaignStatusEnum::SENDING) {
            return 0;
        }

        $limit ??= (int) config('plugins.newsletter.campaign.emails_per_minute', 120);

        $queued = 0;

        $campaign->recipients()
            ->pending()
            ->orderBy('id')
            ->limit($limit)
            ->get(['id'])
            ->each(function (NewsletterCampaignRecipient $recipient) use ($campaign, &$queued): void {
                SendNewsletterCampaignJob::dispatch($campaign->getKey(), $recipient->getKey())
                    ->onQueue(config('plugins.newsletter.campaign.queue', 'newsletter'))
                    ->onConnection(config('plugins.newsletter.campaign.connection') ?: config('queue.default'));

                $queued++;
            });

        return $queued;
    }

    /**
     * Close out campaigns that have no pending recipients left and refresh the
     * denormalised counters used by the listing and report screens.
     */
    public function finalise(NewsletterCampaign $campaign): NewsletterCampaign
    {
        $stats = $this->recalculateStats($campaign);

        if ($stats['pending'] > 0) {
            return $campaign;
        }

        $campaign->forceFill([
            'status' => $stats['sent'] === 0 && $stats['failed'] > 0
                ? CampaignStatusEnum::FAILED
                : CampaignStatusEnum::SENT,
            'completed_at' => Carbon::now(),
        ])->save();

        return $campaign->refresh();
    }

    /**
     * @return array{sent: int, failed: int, pending: int, skipped: int, opened: int, clicked: int}
     */
    public function recalculateStats(NewsletterCampaign $campaign): array
    {
        $counts = $campaign->recipients()
            ->select('status', DB::raw('COUNT(*) as aggregate'))
            ->groupBy('status')
            ->pluck('aggregate', 'status');

        $opened = $campaign->recipients()->whereNotNull('opened_at')->count();
        $clicked = $campaign->recipients()->whereNotNull('clicked_at')->count();

        $stats = [
            'sent' => (int) $counts->get(CampaignRecipientStatusEnum::SENT, 0),
            'failed' => (int) $counts->get(CampaignRecipientStatusEnum::FAILED, 0),
            'pending' => (int) $counts->get(CampaignRecipientStatusEnum::PENDING, 0),
            'skipped' => (int) $counts->get(CampaignRecipientStatusEnum::SKIPPED, 0),
            'opened' => $opened,
            'clicked' => $clicked,
        ];

        $campaign->forceFill([
            'sent_count' => $stats['sent'],
            'failed_count' => $stats['failed'],
            'open_count' => $stats['opened'],
            'click_count' => $stats['clicked'],
            'total_recipients' => array_sum([$stats['sent'], $stats['failed'], $stats['pending'], $stats['skipped']]),
        ])->save();

        return $stats;
    }

    public function schedule(NewsletterCampaign $campaign, Carbon $when): NewsletterCampaign
    {
        $campaign->forceFill([
            'status' => CampaignStatusEnum::SCHEDULED,
            'scheduled_at' => $when,
            'completed_at' => null,
        ])->save();

        return $campaign->refresh();
    }

    public function pause(NewsletterCampaign $campaign): NewsletterCampaign
    {
        $campaign->forceFill(['status' => CampaignStatusEnum::PAUSED])->save();

        return $campaign->refresh();
    }

    /**
     * Resume a paused send. Already-sent recipients stay sent; only the pending
     * remainder goes back onto the queue.
     */
    public function resume(NewsletterCampaign $campaign): NewsletterCampaign
    {
        $campaign->forceFill([
            'status' => CampaignStatusEnum::SENDING,
            'started_at' => $campaign->started_at ?: Carbon::now(),
        ])->save();

        return $campaign->refresh();
    }

    public function cancel(NewsletterCampaign $campaign): NewsletterCampaign
    {
        $campaign->recipients()->pending()->update([
            'status' => CampaignRecipientStatusEnum::SKIPPED,
            'error' => trans('plugins/newsletter::newsletter.campaigns.canceled_by_admin'),
            'updated_at' => Carbon::now(),
        ]);

        $campaign->forceFill([
            'status' => CampaignStatusEnum::CANCELED,
            'completed_at' => Carbon::now(),
        ])->save();

        $this->recalculateStats($campaign);

        return $campaign->refresh();
    }
}
