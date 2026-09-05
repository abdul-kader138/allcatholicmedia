<?php

return [
    'name' => 'plugins/newsletter::newsletter.settings.email.templates.title',
    'description' => 'plugins/newsletter::newsletter.settings.email.templates.description',
    'templates' => [
        'campaign' => [
            'title' => 'plugins/newsletter::newsletter.campaigns.email.template_title',
            'description' => 'plugins/newsletter::newsletter.campaigns.email.template_description',
            'subject' => 'plugins/newsletter::newsletter.campaigns.email.template_subject',
            'can_off' => false,
            'variables' => [
                'campaign_subject' => 'plugins/newsletter::newsletter.campaigns.email.var_subject',
                'campaign_preheader' => 'plugins/newsletter::newsletter.campaigns.email.var_preheader',
                'campaign_content' => 'plugins/newsletter::newsletter.campaigns.email.var_content',
                'campaign_banner' => 'plugins/newsletter::newsletter.campaigns.email.var_banner',
                'subscriber_name' => 'plugins/newsletter::newsletter.campaigns.email.var_subscriber_name',
                'subscriber_email' => 'plugins/newsletter::newsletter.campaigns.email.var_subscriber_email',
                'unsubscribe_url' => 'plugins/newsletter::newsletter.campaigns.email.var_unsubscribe_url',
                'unsubscribe_link' => 'plugins/newsletter::newsletter.campaigns.email.var_unsubscribe_link',
                'view_in_browser_url' => 'plugins/newsletter::newsletter.campaigns.email.var_view_in_browser',
                'sender_postal_address' => 'plugins/newsletter::newsletter.campaigns.email.var_postal_address',
            ],
        ],
        'subscriber_email' => [
            'title' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.title',
            'description' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.description',
            'subject' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.subject',
            'can_off' => true,
            'variables' => [
                'newsletter_name' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_name',
                'newsletter_email' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_email',
                'newsletter_unsubscribe_link' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_unsubscribe_link',
                'newsletter_unsubscribe_url' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_unsubscribe_url',
            ],
        ],
        'admin_email' => [
            'title' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.title',
            'description' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.description',
            'subject' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.subject',
            'can_off' => true,
            'variables' => [
                'newsletter_email' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.newsletter_email',
            ],
        ],
    ],
    'variables' => [],
];
