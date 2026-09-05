<?php

return [
    [
        'name' => 'Newsletters',
        'flag' => 'newsletter.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'newsletter.destroy',
        'parent_flag' => 'newsletter.index',
    ],
    [
        'name' => 'Campaigns',
        'flag' => 'newsletter.campaigns.index',
    ],
    [
        'name' => 'Create',
        'flag' => 'newsletter.campaigns.create',
        'parent_flag' => 'newsletter.campaigns.index',
    ],
    [
        'name' => 'Edit',
        'flag' => 'newsletter.campaigns.edit',
        'parent_flag' => 'newsletter.campaigns.index',
    ],
    [
        'name' => 'Delete',
        'flag' => 'newsletter.campaigns.destroy',
        'parent_flag' => 'newsletter.campaigns.index',
    ],
    [
        'name' => 'Send & schedule',
        'flag' => 'newsletter.campaigns.send',
        'parent_flag' => 'newsletter.campaigns.index',
    ],
    [
        'name' => 'Newsletters',
        'flag' => 'newsletter.settings',
        'parent_flag' => 'settings.others',
    ],
];
