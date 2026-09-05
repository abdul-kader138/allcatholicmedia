<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Throttling
    |--------------------------------------------------------------------------
    |
    | The dispatcher releases at most `emails_per_minute` messages onto the
    | queue each time it ticks (the scheduler runs it every minute), which keeps
    | sending inside the rate limit of the upstream SMTP / API provider. Raise
    | it only as high as your provider actually allows - exceeding the limit is
    | the fastest way to get an IP or domain throttled.
    |
    */
    'emails_per_minute' => (int) env('NEWSLETTER_EMAILS_PER_MINUTE', 120),

    // Rows pulled from the database per chunk while materialising recipients.
    'chunk_size' => (int) env('NEWSLETTER_CHUNK_SIZE', 500),

    /*
    |--------------------------------------------------------------------------
    | Queue
    |--------------------------------------------------------------------------
    |
    | Campaign mail runs on its own queue so a large send can never starve
    | transactional mail (password resets, order confirmations, ...).
    |
    */
    'queue' => env('NEWSLETTER_QUEUE', 'newsletter'),
    'connection' => env('NEWSLETTER_QUEUE_CONNECTION'),

    // Per-message delivery attempts before the recipient is marked as failed.
    'tries' => 3,
    'backoff' => [60, 300, 900],

    /*
    |--------------------------------------------------------------------------
    | Tracking
    |--------------------------------------------------------------------------
    */
    'tracking' => [
        'opens' => (bool) env('NEWSLETTER_TRACK_OPENS', true),
        'clicks' => (bool) env('NEWSLETTER_TRACK_CLICKS', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compliance
    |--------------------------------------------------------------------------
    |
    | CAN-SPAM (US) and comparable regimes require a physical postal address in
    | every commercial message. It is rendered in the campaign footer next to
    | the unsubscribe link. Leave null to fall back to the site contact address.
    |
    */
    'sender_postal_address' => env('NEWSLETTER_SENDER_ADDRESS'),

    // Links that must never be rewritten for click tracking.
    'untracked_link_patterns' => [
        'mailto:',
        'tel:',
        '#',
        '{{',
    ],
];
