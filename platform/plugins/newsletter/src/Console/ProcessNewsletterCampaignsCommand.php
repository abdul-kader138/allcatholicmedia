<?php

namespace Botble\Newsletter\Console;

use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Services\CampaignDispatcher;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Attribute\AsCommand;
use Throwable;

/**
 * The heartbeat of the newsletter system. Scheduled every minute; each tick
 * does three things, in order:
 *
 *   1. starts campaigns whose scheduled time has passed,
 *   2. releases the next rate-limited slice of mail onto the queue,
 *   3. closes out campaigns that have nothing left to send.
 *
 * Because all state lives in the database rather than in the queue, running
 * this command is always safe and always resumes cleanly.
 */
#[AsCommand('cms:newsletter:campaigns:process', 'Start scheduled newsletter campaigns and dispatch pending emails')]
class ProcessNewsletterCampaignsCommand extends Command
{
    public function handle(CampaignDispatcher $dispatcher): int
    {
        $started = $dispatcher->startDueCampaigns();

        if ($started) {
            $this->components->info(sprintf('Started %d scheduled campaign(s).', $started));
        }

        $limit = (int) config('plugins.newsletter.campaign.emails_per_minute', 120);
        $remaining = $limit;

        // Fetched in one go rather than chunked: finalise() can move a campaign
        // out of the `inProgress` set mid-loop, which would shift a cursor.
        $campaigns = NewsletterCampaign::query()
            ->inProgress()
            ->orderBy('started_at')
            ->get();

        foreach ($campaigns as $campaign) {
            if ($remaining <= 0) {
                break;
            }

            try {
                $queued = $dispatcher->dispatchPending($campaign, $remaining);
                $remaining -= $queued;

                if ($queued) {
                    $this->components->info(sprintf(
                        'Campaign #%d "%s": queued %d email(s).',
                        $campaign->getKey(),
                        $campaign->name,
                        $queued
                    ));
                }

                $dispatcher->finalise($campaign);
            } catch (Throwable $throwable) {
                Log::error(sprintf(
                    'Newsletter campaign #%d could not be processed: %s',
                    $campaign->getKey(),
                    $throwable->getMessage()
                ));

                $this->components->error(sprintf(
                    'Campaign #%d failed: %s',
                    $campaign->getKey(),
                    $throwable->getMessage()
                ));
            }
        }

        return self::SUCCESS;
    }
}
