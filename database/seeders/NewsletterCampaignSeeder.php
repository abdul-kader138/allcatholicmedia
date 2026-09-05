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
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Sample newsletter campaigns covering every point of the lifecycle
 * (draft / scheduled / sending / paused / sent / failed), each with a banner
 * image, full envelope details, tracking flags and — for the campaigns that
 * have already gone out — a matching set of subscribers and per-recipient
 * delivery rows so the reporting screens have real numbers to show.
 *
 * Run with:
 *   php artisan db:seed --class="Database\Seeders\NewsletterCampaignSeeder"
 */
class NewsletterCampaignSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->now = Carbon::now();

        $authorId = User::query()->orderBy('id')->value('id');

        $subscribers = $this->seedSubscribers();

        foreach ($this->campaigns($authorId) as $data) {
            $recipients = $data['recipients'] ?? null;
            unset($data['recipients']);

            $data['image'] = $this->banner($data['image']);

            /** @var NewsletterCampaign $campaign */
            $campaign = NewsletterCampaign::query()->updateOrCreate(
                ['name' => $data['name']],
                $data
            );

            if ($recipients) {
                $this->seedRecipients($campaign, $subscribers, $recipients);
            }
        }

        $this->command->info('Seeded ' . NewsletterCampaign::query()->count() . ' newsletter campaigns.');
    }

    /**
     * @return array<int, Newsletter>
     */
    protected function seedSubscribers(): array
    {
        $people = [
            ['name' => 'Maria Gonzalez', 'email' => 'maria.gonzalez@example.com'],
            ['name' => 'John Fisher', 'email' => 'john.fisher@example.com'],
            ['name' => 'Thérèse Nguyen', 'email' => 'therese.nguyen@example.com'],
            ['name' => 'Patrick O\'Brien', 'email' => 'patrick.obrien@example.com'],
            ['name' => 'Anna Kowalski', 'email' => 'anna.kowalski@example.com'],
            ['name' => 'David Chen', 'email' => 'david.chen@example.com'],
            ['name' => 'Lucia Rossi', 'email' => 'lucia.rossi@example.com'],
            ['name' => 'Michael Adeyemi', 'email' => 'michael.adeyemi@example.com'],
            ['name' => 'Clare Dubois', 'email' => 'clare.dubois@example.com'],
            ['name' => 'Peter Novak', 'email' => 'peter.novak@example.com'],
            ['name' => 'Sofia Fernandes', 'email' => 'sofia.fernandes@example.com'],
            ['name' => 'James Whitfield', 'email' => 'james.whitfield@example.com'],
        ];

        $subscribers = [];

        foreach ($people as $index => $person) {
            $subscribers[] = Newsletter::query()->updateOrCreate(
                ['email' => $person['email']],
                [
                    'name' => $person['name'],
                    // Keep one unsubscribed so the "skipped" delivery path has data.
                    'status' => $index === count($people) - 1
                        ? NewsletterStatusEnum::UNSUBSCRIBED
                        : NewsletterStatusEnum::SUBSCRIBED,
                ]
            );
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
                'total_recipients' => 0,
                'sent_count' => 0,
                'failed_count' => 0,
                'open_count' => 0,
                'click_count' => 0,
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
                'total_recipients' => 0,
                'sent_count' => 0,
                'failed_count' => 0,
                'open_count' => 0,
                'click_count' => 0,
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
                'track_clicks' => true,
                'recipients' => [
                    'sent' => 6,
                    'opened' => 3,
                    'clicked' => 1,
                    'failed' => 0,
                    'pending' => 5,
                    'skipped' => 1,
                ],
                'created_at' => $this->now->copy()->subHours(3),
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
                'recipients' => [
                    'sent' => 4,
                    'opened' => 2,
                    'clicked' => 1,
                    'failed' => 1,
                    'pending' => 6,
                    'skipped' => 1,
                ],
                'created_at' => $this->now->copy()->subDays(2),
            ]),

            // 5. SENT — a completed campaign with a full set of engagement data.
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
                'recipients' => [
                    'sent' => 10,
                    'opened' => 7,
                    'clicked' => 4,
                    'failed' => 1,
                    'pending' => 0,
                    'skipped' => 1,
                ],
                'created_at' => $this->now->copy()->subDays(12),
            ]),

            // 6. FAILED — the send aborted (e.g. SMTP misconfiguration).
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
                'recipients' => [
                    'sent' => 0,
                    'opened' => 0,
                    'clicked' => 0,
                    'failed' => 8,
                    'pending' => 0,
                    'skipped' => 0,
                ],
                'created_at' => $this->now->copy()->subDays(4),
            ]),
        ];
    }

    /**
     * Build the per-recipient delivery rows for a campaign and roll the totals
     * back up onto the campaign so the two always agree.
     *
     * @param  array<int, Newsletter>  $subscribers
     * @param  array<string, int>  $mix
     */
    protected function seedRecipients(NewsletterCampaign $campaign, array $subscribers, array $mix): void
    {
        $campaign->recipients()->delete();

        $pool = $subscribers;
        $cursor = 0;
        $next = function () use (&$cursor, $pool, $campaign) {
            // Wrap around the subscriber pool, synthesising extras if we run out.
            if (isset($pool[$cursor])) {
                $subscriber = $pool[$cursor++];

                return [$subscriber->id, $subscriber->email, $subscriber->name];
            }

            $n = $cursor++ + 1;

            return [null, "guest{$n}+{$campaign->id}@example.com", "Guest Subscriber {$n}"];
        };

        $start = ($campaign->started_at ?: $this->now)->copy();
        $rows = [];

        $make = function (string $status, callable $mutator = null) use (&$rows, $next, $start) {
            [$subscriberId, $email, $name] = $next();

            $row = [
                'subscriber_id' => $subscriberId,
                'email' => $email,
                'name' => $name,
                'status' => $status,
                'error' => null,
                'attempts' => 0,
                'token' => Str::lower(Str::random(32)),
                'sent_at' => null,
                'opened_at' => null,
                'clicked_at' => null,
                'open_count' => 0,
                'click_count' => 0,
            ];

            if ($mutator) {
                $mutator($row);
            }

            $rows[] = $row;
        };

        $sent = $mix['sent'] ?? 0;
        $opened = $mix['opened'] ?? 0;
        $clicked = $mix['clicked'] ?? 0;

        for ($i = 0; $i < $sent; $i++) {
            $isOpened = $i < $opened;
            $isClicked = $i < $clicked;

            $make(CampaignRecipientStatusEnum::SENT, function (array &$row) use ($i, $start, $isOpened, $isClicked) {
                $sentAt = $start->copy()->addSeconds(30 * $i + 10);
                $row['attempts'] = 1;
                $row['sent_at'] = $sentAt;

                if ($isOpened) {
                    $row['opened_at'] = $sentAt->copy()->addMinutes(12 + $i * 3);
                    $row['open_count'] = $isClicked ? 3 : 1;
                }

                if ($isClicked) {
                    $row['clicked_at'] = $sentAt->copy()->addMinutes(18 + $i * 3);
                    $row['click_count'] = 2;
                }
            });
        }

        for ($i = 0; $i < ($mix['failed'] ?? 0); $i++) {
            $make(CampaignRecipientStatusEnum::FAILED, function (array &$row) {
                $row['attempts'] = 3;
                $row['sent_at'] = null;
                $row['error'] = 'Connection could not be established with host smtp.mailgun.org: '
                    . 'stream_socket_client(): Unable to connect (Connection refused)';
            });
        }

        for ($i = 0; $i < ($mix['pending'] ?? 0); $i++) {
            $make(CampaignRecipientStatusEnum::PENDING);
        }

        for ($i = 0; $i < ($mix['skipped'] ?? 0); $i++) {
            $make(CampaignRecipientStatusEnum::SKIPPED, function (array &$row) {
                $row['error'] = 'Subscriber is not subscribed';
            });
        }

        foreach ($rows as $row) {
            $stamp = $row['sent_at'] ?? $start;

            $recipient = new NewsletterCampaignRecipient();
            $recipient->timestamps = false;
            $recipient->campaign_id = $campaign->id;
            $recipient->forceFill($row + [
                'created_at' => $stamp,
                'updated_at' => $stamp,
            ]);
            $recipient->save();
        }

        $campaign->forceFill([
            'total_recipients' => count($rows),
            'sent_count' => $sent,
            'failed_count' => $mix['failed'] ?? 0,
            'open_count' => array_sum(array_column($rows, 'open_count')),
            'click_count' => array_sum(array_column($rows, 'click_count')),
        ])->save();
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
            $this->command->warn('Newsletter seeder: could not attach banner "' . $relativePath . '" — ' . $exception->getMessage());

            return null;
        }
    }
}
