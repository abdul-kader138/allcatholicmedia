<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Supports\BaseSeeder;
use Botble\Newsletter\Enums\CampaignRecipientStatusEnum;
use Botble\Newsletter\Enums\CampaignStatusEnum;
use Botble\Newsletter\Enums\NewsletterStatusEnum;
use Botble\Newsletter\Models\Newsletter;
use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Models\NewsletterCampaignRecipient;
use Botble\Newsletter\Services\CampaignDispatcher;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 * Sample newsletter campaigns covering every point of the lifecycle
 * (draft / scheduled / sending / paused / canceled / sent / failed), each with
 * a banner image, full envelope details and tracking flags. Campaigns that have
 * already gone out also get a matching subscriber list and per-recipient
 * delivery rows, with the campaign counters rolled up by the real
 * CampaignDispatcher so the reporting screens always agree with production.
 *
 * Deterministic: Faker is seeded, so repeated runs produce identical data.
 *
 * Run with:
 *   php artisan db:seed --class="Database\Seeders\NewsletterCampaignSeeder"
 */
class NewsletterCampaignSeeder extends BaseSeeder
{
    protected int $insertChunk = 200;

    public function run(): void
    {
        if (! Schema::hasTable('newsletter_campaigns') || ! Schema::hasTable('newsletter_campaign_recipients')) {
            $this->command->warn(
                'Newsletter tables not found — activate the newsletter plugin and run its migrations first. Skipping.'
            );

            return;
        }

        $this->now = Carbon::now();

        $faker = $this->faker;
        $faker->seed(20260905);

        DB::transaction(function () use ($faker): void {
            $authorId = User::query()->orderBy('id')->value('id');

            $subscribers = $this->seedSubscribers($faker);

            $summary = [];

            foreach ($this->campaigns($authorId) as $data) {
                $plan = $data['recipients'] ?? null;
                unset($data['recipients']);

                $data['image'] = $this->banner($data['image']);

                /** @var NewsletterCampaign $campaign */
                $campaign = NewsletterCampaign::query()->updateOrCreate(
                    ['name' => $data['name']],
                    $data
                );

                if ($plan) {
                    $this->seedRecipients($campaign, $subscribers, $plan, $faker);
                } else {
                    $campaign->recipients()->delete();
                    $campaign->forceFill([
                        'total_recipients' => 0,
                        'sent_count' => 0,
                        'failed_count' => 0,
                        'open_count' => 0,
                        'click_count' => 0,
                    ])->save();
                }

                $campaign->refresh();

                $summary[] = [
                    Str::limit($campaign->name, 40),
                    $campaign->status->getValue(),
                    $campaign->total_recipients,
                    $campaign->sent_count,
                    $campaign->failed_count,
                    $campaign->open_count,
                    $campaign->click_count,
                ];
            }

            $this->command->table(
                ['Campaign', 'Status', 'Recipients', 'Sent', 'Failed', 'Opens', 'Clicks'],
                $summary
            );
        });

        $this->command->info('Seeded ' . NewsletterCampaign::query()->count() . ' newsletter campaigns.');
    }

    /**
     * @return array<int, array{id: int|null, email: string, name: string|null}>
     */
    protected function seedSubscribers($faker): array
    {
        $named = [
            ['Maria Gonzalez', 'maria.gonzalez@example.com'],
            ['John Fisher', 'john.fisher@example.com'],
            ['Thérèse Nguyen', 'therese.nguyen@example.com'],
            ["Patrick O'Brien", 'patrick.obrien@example.com'],
            ['Anna Kowalski', 'anna.kowalski@example.com'],
            ['David Chen', 'david.chen@example.com'],
            ['Lucia Rossi', 'lucia.rossi@example.com'],
            ['Michael Adeyemi', 'michael.adeyemi@example.com'],
            ['Clare Dubois', 'clare.dubois@example.com'],
            ['Peter Novak', 'peter.novak@example.com'],
            ['Sofia Fernandes', 'sofia.fernandes@example.com'],
            ['James Whitfield', 'james.whitfield@example.com'],
        ];

        $rows = [];

        foreach ($named as [$name, $email]) {
            $rows[] = ['name' => $name, 'email' => $email];
        }

        for ($i = 0; $i < 28; $i++) {
            $rows[] = ['name' => $faker->name(), 'email' => $faker->unique()->safeEmail()];
        }

        $total = count($rows);
        $subscribers = [];

        foreach ($rows as $i => $row) {
            $isUnsubscribed = $i >= $total - 4;                 // last four opted out
            $isNameless = in_array($i, [13, 21, 30], true);     // exercise the name fallback

            $createdAt = Carbon::instance($faker->dateTimeBetween('-14 months', '-2 days'));

            /** @var Newsletter $model */
            $model = Newsletter::query()->updateOrCreate(
                ['email' => $row['email']],
                [
                    'name' => $isNameless ? null : $row['name'],
                    'status' => $isUnsubscribed
                        ? NewsletterStatusEnum::UNSUBSCRIBED
                        : NewsletterStatusEnum::SUBSCRIBED,
                ]
            );

            $model->timestamps = false;
            $model->forceFill([
                'created_at' => $createdAt,
                'updated_at' => $isUnsubscribed
                    ? Carbon::instance($faker->dateTimeBetween('-20 days', '-1 day'))
                    : $createdAt,
            ])->save();

            $subscribers[] = ['id' => $model->id, 'email' => $model->email, 'name' => $model->name];
        }

        return $subscribers;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    protected function campaigns(?int $authorId): array
    {
        $common = [
            'from_name' => 'All Catholic Media',
            'from_address' => 'newsletter@allcatholicmedia.com',
            'reply_to' => 'editor@allcatholicmedia.com',
            'track_opens' => true,
            'track_clicks' => true,
            'created_by' => $authorId,
        ];

        return [
            // 1. DRAFT — still being written, never scheduled.
            array_merge($common, [
                'name' => 'Welcome to All Catholic Media',
                'subject' => 'Welcome, {{ subscriber_name }} — here\'s what to expect',
                'preheader' => 'A quick hello and a look at what lands in your inbox each week.',
                'content' => $this->content(
                    'Welcome aboard',
                    '<p>Hello {{ subscriber_name }},</p>' .
                    '<p>Thank you for subscribing to the <strong>All Catholic Media</strong> newsletter. ' .
                    'Every week we gather the best Catholic news, saint reflections, podcast picks and ' .
                    'long-form essays into a single email.</p>' .
                    '<p>Nothing to do right now — your first issue arrives next Sunday. In the meantime you ' .
                    'can browse the archive on <a href="{{ site_url }}">{{ site_title }}</a>.</p>'
                ),
                'image' => 'news/1.jpg',
                'status' => CampaignStatusEnum::DRAFT,
                'scheduled_at' => null,
                'started_at' => null,
                'completed_at' => null,
                'created_at' => $this->now->copy()->subDays(2),
            ]),

            // 2. SCHEDULED — queued for a future send, no delivery yet.
            array_merge($common, [
                'name' => 'Advent Reflections Begin This Sunday',
                'subject' => 'Your daily Advent companion starts Sunday',
                'preheader' => 'Four weeks of short reflections to prepare your heart for Christmas.',
                'content' => $this->content(
                    'A season of waiting',
                    '<p>Dear {{ subscriber_name }},</p>' .
                    '<p>Beginning this Sunday we will send a brief Advent reflection each morning — ' .
                    'Scripture, a paragraph of commentary, and a line to carry through your day.</p>' .
                    '<p><a href="{{ view_in_browser_url }}">Preview the first reflection</a> or ' .
                    'adjust your preferences any time.</p>'
                ),
                'image' => 'news/5.jpg',
                'status' => CampaignStatusEnum::SCHEDULED,
                'scheduled_at' => $this->now->copy()->addDays(3)->setTime(6, 0),
                'started_at' => null,
                'completed_at' => null,
                'created_at' => $this->now->copy()->subDay(),
            ]),

            // 3. SENDING — dispatch in progress, part of the list still pending.
            array_merge($common, [
                'name' => 'Christmas Mass Times & Parish Guide',
                'subject' => 'Christmas Mass times near you',
                'preheader' => 'Vigil, midnight and Christmas Day schedules for parishes in your area.',
                'content' => $this->content(
                    'Christmas at your parish',
                    '<p>Hello {{ subscriber_name }},</p>' .
                    '<p>Our parish guide is live. Find <strong>Christmas Eve vigil</strong>, ' .
                    '<strong>midnight Mass</strong> and <strong>Christmas Day</strong> times, plus ' .
                    'confession schedules for the days before.</p>' .
                    '<p><a href="{{ site_url }}/christmas">Open the guide</a></p>'
                ),
                'image' => 'news/8.jpg',
                'status' => CampaignStatusEnum::SENDING,
                'scheduled_at' => $this->now->copy()->subMinutes(20),
                'started_at' => $this->now->copy()->subMinutes(18),
                'completed_at' => null,
                'created_at' => $this->now->copy()->subHours(3),
                'recipients' => [
                    'audience' => 12,
                    'sent' => 6,
                    'opened' => 3,
                    'clicked' => 1,
                    'failed' => 0,
                    'skipped' => 1,
                ],
            ]),

            // 4. PAUSED — an admin stopped the send midway.
            array_merge($common, [
                'name' => 'Year-End Giving: Support Catholic Media',
                'subject' => '{{ subscriber_name }}, help us reach our year-end goal',
                'preheader' => 'Your gift keeps every article, podcast and newsletter free to read.',
                'content' => $this->content(
                    'Keep it free for everyone',
                    '<p>Dear {{ subscriber_name }},</p>' .
                    '<p>All Catholic Media is reader-supported. A year-end gift of any size helps us ' .
                    'commission new writing and keep the archive open to all.</p>' .
                    '<p><a href="{{ site_url }}/donate">Make a year-end gift</a></p>' .
                    '<p>Prefer not to hear about fundraising? <a href="{{ unsubscribe_url }}">Update your preferences</a>.</p>'
                ),
                'image' => 'news/12.jpg',
                'status' => CampaignStatusEnum::PAUSED,
                'scheduled_at' => $this->now->copy()->subDay(),
                'started_at' => $this->now->copy()->subDay()->addMinutes(2),
                'completed_at' => null,
                'created_at' => $this->now->copy()->subDays(2),
                'recipients' => [
                    'audience' => 12,
                    'sent' => 4,
                    'opened' => 2,
                    'clicked' => 1,
                    'failed' => 1,
                    'skipped' => 1,
                ],
            ]),

            // 5. CANCELED — scheduled, then called off before the send started.
            array_merge($common, [
                'name' => 'Parish Festival Reminder (event postponed)',
                'subject' => 'This weekend: the parish summer festival',
                'preheader' => 'Food, music and games on the parish green — Saturday from noon.',
                'content' => $this->content(
                    'Parish summer festival',
                    '<p>Hello {{ subscriber_name }},</p>' .
                    '<p>The parish summer festival is this Saturday from noon on the green — ' .
                    'food stalls, live music, games for the children and a raffle.</p>' .
                    '<p><a href="{{ site_url }}/events/parish-festival">Full schedule</a></p>'
                ),
                'image' => 'news/15.jpg',
                'status' => CampaignStatusEnum::CANCELED,
                'scheduled_at' => $this->now->copy()->subDays(6)->setTime(9, 0),
                'started_at' => null,
                'completed_at' => $this->now->copy()->subDays(7),
                'created_at' => $this->now->copy()->subDays(9),
            ]),

            // 6. SENT — a completed campaign with a full set of engagement data.
            array_merge($common, [
                'name' => 'October Newsletter: Saints, News & Reflections',
                'subject' => 'October at All Catholic Media',
                'preheader' => 'St Thérèse, the Synod, three essays and this month\'s podcast picks.',
                'content' => $this->content(
                    'This month\'s issue',
                    '<p>Hello {{ subscriber_name }},</p>' .
                    '<p>In this issue: a feature on <strong>St Thérèse of Lisieux</strong> and the Little Way, ' .
                    'our roundup of news from the Synod, three reader essays, and five podcast episodes ' .
                    'worth your commute.</p>' .
                    '<p><a href="{{ view_in_browser_url }}">Read the full issue in your browser</a></p>' .
                    '<p>You are receiving this as {{ subscriber_email }}. ' .
                    '<a href="{{ unsubscribe_url }}">Unsubscribe</a>.</p>'
                ),
                'image' => 'news/3.jpg',
                'status' => CampaignStatusEnum::SENT,
                'scheduled_at' => $this->now->copy()->subDays(10)->setTime(7, 0),
                'started_at' => $this->now->copy()->subDays(10)->setTime(7, 1),
                'completed_at' => $this->now->copy()->subDays(10)->setTime(7, 9),
                'created_at' => $this->now->copy()->subDays(12),
                'recipients' => [
                    'audience' => 12,
                    'sent' => 10,
                    'opened' => 7,
                    'clicked' => 4,
                    'failed' => 1,
                    'skipped' => 1,
                ],
            ]),

            // 7. SENT — a larger completed send so list size / rates look real.
            array_merge($common, [
                'name' => 'Weekly Digest — First Week of September',
                'subject' => 'Your weekly Catholic digest',
                'preheader' => 'The ten stories, reflections and episodes readers opened most this week.',
                'content' => $this->content(
                    'This week in review',
                    '<p>Hello {{ subscriber_name }},</p>' .
                    '<p>Here are the ten most-read pieces from the past seven days, plus the week\'s ' .
                    'liturgical calendar and three podcast episodes we think are worth your time.</p>' .
                    '<p><a href="{{ view_in_browser_url }}">Open the digest</a></p>' .
                    '<p><a href="{{ unsubscribe_url }}">Unsubscribe</a> &middot; ' .
                    '<a href="{{ site_url }}">{{ site_title }}</a></p>'
                ),
                'image' => 'news/7.jpg',
                'status' => CampaignStatusEnum::SENT,
                'scheduled_at' => $this->now->copy()->subDays(4)->setTime(7, 30),
                'started_at' => $this->now->copy()->subDays(4)->setTime(7, 31),
                'completed_at' => $this->now->copy()->subDays(4)->setTime(8, 12),
                'created_at' => $this->now->copy()->subDays(5),
                'recipients' => [
                    'audience' => 310,
                    'sent' => 300,
                    'opened' => 168,
                    'clicked' => 47,
                    'failed' => 6,
                    'skipped' => 4,
                ],
            ]),

            // 8. FAILED — the send aborted (SMTP misconfiguration).
            array_merge($common, [
                'name' => 'Test Broadcast (SMTP misconfiguration)',
                'subject' => 'Test — please ignore',
                'preheader' => 'Internal test send.',
                'content' => $this->content(
                    'Test broadcast',
                    '<p>This is a test broadcast used while configuring the mail transport. ' .
                    'If you received it, something is misconfigured — please let the editor know.</p>'
                ),
                'image' => 'news/19.jpg',
                'status' => CampaignStatusEnum::FAILED,
                'scheduled_at' => $this->now->copy()->subDays(4),
                'started_at' => $this->now->copy()->subDays(4)->addMinutes(1),
                'completed_at' => $this->now->copy()->subDays(4)->addMinutes(3),
                'track_opens' => false,
                'track_clicks' => false,
                'created_at' => $this->now->copy()->subDays(4),
                'recipients' => [
                    'audience' => 8,
                    'sent' => 0,
                    'opened' => 0,
                    'clicked' => 0,
                    'failed' => 8,
                    'skipped' => 0,
                    'failure' => 'smtp',
                ],
            ]),
        ];
    }

    /**
     * Build per-recipient delivery rows for a campaign, then let the real
     * CampaignDispatcher roll the totals back onto the campaign so the seeded
     * numbers match exactly what production would compute.
     *
     * @param  array<int, array{id: int|null, email: string, name: string|null}>  $subscribers
     * @param  array<string, mixed>  $plan
     */
    protected function seedRecipients(NewsletterCampaign $campaign, array $subscribers, array $plan, $faker): void
    {
        $campaign->recipients()->delete();

        $audience = (int) $plan['audience'];
        $sent = (int) ($plan['sent'] ?? 0);
        $opened = min((int) ($plan['opened'] ?? 0), $sent);
        $clicked = min((int) ($plan['clicked'] ?? 0), $opened);
        $failed = (int) ($plan['failed'] ?? 0);
        $skipped = (int) ($plan['skipped'] ?? 0);
        $pending = max(0, $audience - $sent - $failed - $skipped);

        $people = $this->buildAudience($audience, $subscribers, $faker);

        [$windowStart, $windowEnd] = $this->sendWindow($campaign, $sent);
        $span = max(60, $windowEnd->getTimestamp() - $windowStart->getTimestamp());

        $failureReasons = [
            'Hard bounce: 550 5.1.1 The email account that you tried to reach does not exist',
            'Mailbox full: 452 4.2.2 The recipient\'s inbox is over quota',
            'Greylisted: 451 4.7.1 Please try again later',
            'Connection timed out after 30s while talking to smtp.mailgun.org',
            'Blocked: 554 5.7.1 Message identified as spam by the recipient server',
            'Relay access denied: 554 5.7.1 <recipient>: Recipient address rejected',
        ];
        $smtpReason = 'Connection could not be established with host smtp.mailgun.org: '
            . 'stream_socket_client(): Unable to connect (Connection refused)';

        $rows = [];
        $index = 0;
        $nowTs = $this->now->getTimestamp();

        // --- Delivered -------------------------------------------------------
        for ($i = 0; $i < $sent; $i++, $index++) {
            $frac = $sent > 1 ? $i / ($sent - 1) : 0.0;
            $sentTs = min($nowTs, (int) ($windowStart->getTimestamp() + $frac * $span) + $faker->numberBetween(-20, 20));
            $sentAt = Carbon::createFromTimestamp(max($sentTs, $windowStart->getTimestamp()));

            $isOpened = $i < $opened;
            $isClicked = $i < $clicked;

            $openedAt = null;
            $clickedAt = null;
            $openCount = 0;
            $clickCount = 0;

            if ($isOpened) {
                $delay = $faker->randomElement([
                    $faker->numberBetween(2, 120),        // within a couple of hours
                    $faker->numberBetween(120, 1440),     // later that day / next day
                    $faker->numberBetween(1440, 5760),    // one to four days later
                ]);
                $openedAt = $sentAt->copy()->addMinutes($delay)->min($this->now);

                if ($openedAt->lte($sentAt)) {
                    $openedAt = $sentAt->copy()->addMinutes($faker->numberBetween(1, 20))->min($this->now);
                }

                $openCount = $isClicked ? $faker->numberBetween(2, 5) : $faker->numberBetween(1, 3);
            }

            if ($isClicked && $openedAt) {
                $clickedAt = $openedAt->copy()->addMinutes($faker->numberBetween(1, 120))->min($this->now);
                $clickCount = $faker->numberBetween(1, 3);
            }

            $rows[] = $this->row($campaign, $people[$index], CampaignRecipientStatusEnum::SENT, [
                'attempts' => $faker->randomElement([1, 1, 1, 2]),
                'sent_at' => $sentAt,
                'opened_at' => $openedAt,
                'clicked_at' => $clickedAt,
                'open_count' => $openCount,
                'click_count' => $clickCount,
                'stamp' => $clickedAt ?? $openedAt ?? $sentAt,
            ]);
        }

        // --- Failed --------------------------------------------------------
        for ($i = 0; $i < $failed; $i++, $index++) {
            $at = Carbon::createFromTimestamp(
                min($nowTs, $windowStart->getTimestamp() + $faker->numberBetween(5, (int) $span + 5))
            );

            $rows[] = $this->row($campaign, $people[$index], CampaignRecipientStatusEnum::FAILED, [
                'attempts' => $faker->numberBetween(2, 4),
                'error' => ($plan['failure'] ?? null) === 'smtp'
                    ? $smtpReason
                    : $faker->randomElement($failureReasons),
                'stamp' => $at,
            ]);
        }

        // --- Skipped -----------------------------------------------------
        for ($i = 0; $i < $skipped; $i++, $index++) {
            $rows[] = $this->row($campaign, $people[$index], CampaignRecipientStatusEnum::SKIPPED, [
                'error' => 'Subscriber is not subscribed',
                'stamp' => $windowStart,
            ]);
        }

        // --- Pending -----------------------------------------------------
        for ($i = 0; $i < $pending; $i++, $index++) {
            $rows[] = $this->row($campaign, $people[$index], CampaignRecipientStatusEnum::PENDING, [
                'stamp' => $windowStart,
            ]);
        }

        foreach (array_chunk($rows, $this->insertChunk) as $chunk) {
            NewsletterCampaignRecipient::query()->insert($chunk);
        }

        // Single source of truth: the same routine the dispatcher runs.
        app(CampaignDispatcher::class)->recalculateStats($campaign->refresh());
    }

    /**
     * A shuffled list of real subscribers, topped up with synthetic addresses
     * when the requested audience is larger than the seeded list.
     *
     * @param  array<int, array{id: int|null, email: string, name: string|null}>  $subscribers
     * @return array<int, array{id: int|null, email: string, name: string|null}>
     */
    protected function buildAudience(int $size, array $subscribers, $faker): array
    {
        $pool = $subscribers;
        shuffle($pool);

        $people = array_slice($pool, 0, min($size, count($pool)));

        $used = [];
        foreach ($people as $person) {
            $used[Str::lower($person['email'])] = true;
        }

        $faker->unique(true);
        while (count($people) < $size) {
            do {
                $email = $faker->unique()->safeEmail();
            } while (isset($used[Str::lower($email)]));

            $used[Str::lower($email)] = true;

            $people[] = [
                'id' => null,
                'email' => $email,
                'name' => $faker->boolean(85) ? $faker->name() : null,
            ];
        }

        return $people;
    }

    /**
     * @return array{0: Carbon, 1: Carbon}
     */
    protected function sendWindow(NewsletterCampaign $campaign, int $sent): array
    {
        $start = ($campaign->started_at ?: $campaign->scheduled_at ?: $this->now)->copy();

        if ($campaign->completed_at) {
            $end = $campaign->completed_at->copy();
        } else {
            // Still sending: assume ~2.5s per message so far, capped at "now".
            $end = $start->copy()->addSeconds(max(60, (int) ($sent * 2.5)))->min($this->now);
        }

        if ($end->lte($start)) {
            $end = $start->copy()->addMinutes(1);
        }

        return [$start, $end];
    }

    /**
     * @param  array{id: int|null, email: string, name: string|null}  $person
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    protected function row(NewsletterCampaign $campaign, array $person, string $status, array $attributes): array
    {
        $stamp = $attributes['stamp'] ?? $this->now;
        unset($attributes['stamp']);

        $fmt = fn ($value) => $value instanceof \DateTimeInterface
            ? Carbon::instance($value)->format('Y-m-d H:i:s')
            : $value;

        return array_merge([
            'campaign_id' => $campaign->id,
            'subscriber_id' => $person['id'],
            'email' => $person['email'],
            'name' => $person['name'],
            'status' => $status,
            'error' => null,
            'attempts' => 0,
            'token' => Str::lower(Str::random(32)),
            'sent_at' => null,
            'opened_at' => null,
            'clicked_at' => null,
            'open_count' => 0,
            'click_count' => 0,
            'created_at' => $fmt($stamp),
            'updated_at' => $fmt($stamp),
        ], array_map($fmt, $attributes));
    }

    protected function content(string $heading, string $body): string
    {
        return sprintf(
            '<h2>%s</h2>%s<hr><p style="color:#888;font-size:13px">' .
            'All Catholic Media &middot; <a href="{{ site_url }}">{{ site_title }}</a><br>' .
            'You are receiving this because you subscribed at {{ site_url }}. ' .
            '<a href="{{ unsubscribe_url }}">Unsubscribe</a> &middot; ' .
            '<a href="{{ view_in_browser_url }}">View in browser</a></p>',
            $heading,
            $body
        );
    }

    /**
     * Resolve a bundled sample image to a media-library path, uploading it on
     * first run. Falls back to null if the file cannot be stored.
     */
    protected function banner(string $relativePath): ?string
    {
        try {
            return $this->filePath($relativePath, database_path('seeders/files/main'));
        } catch (\Throwable $exception) {
            $this->command->warn(
                'Newsletter seeder: could not attach banner "' . $relativePath . '" — ' . $exception->getMessage()
            );

            return null;
        }
    }
}
