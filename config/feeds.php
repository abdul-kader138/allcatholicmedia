<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pre-configured Catholic RSS feed sources
    |--------------------------------------------------------------------------
    | Seeded via Admin → Feed Sources → "Seed Catholic Feeds" button or
    | the artisan command `feeds:seed-catholic`.
    | Categories must match exact names in the blog categories table.
    */

    'sources' => [

        // ── Catholic News / Blog ──────────────────────────────────────────

        [
            'name'         => 'Catholic News Agency',
            'url'          => 'https://www.catholicnewsagency.com/feed',
            'type'         => 'post',
            'category'     => 'World News',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'National Catholic Register',
            'url'          => 'https://www.ncregister.com/rss',
            'type'         => 'post',
            'category'     => 'Catholic Culture',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Aleteia',
            'url'          => 'https://aleteia.org/feed/',
            'type'         => 'post',
            'category'     => 'Spirituality',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Crux Now',
            'url'          => 'https://cruxnow.com/feed/',
            'type'         => 'post',
            'category'     => 'World News',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'America Magazine',
            'url'          => 'https://www.americamagazine.org/rss.xml',
            'type'         => 'post',
            'category'     => 'Opinion & Commentary',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'The Pillar',
            'url'          => 'https://www.pillarcatholic.com/feed',
            'type'         => 'post',
            'category'     => 'World News',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Catholic Herald',
            'url'          => 'https://catholicherald.co.uk/feed/',
            'type'         => 'post',
            'category'     => 'World News',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'EWTN News',
            'url'          => 'https://www.ewtnews.com/feed',
            'type'         => 'post',
            'category'     => 'Vatican News',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Vatican News (RSS)',
            'url'          => 'https://www.vaticannews.va/en.rss.xml',
            'type'         => 'post',
            'category'     => 'Vatican News',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Catholic Culture',
            'url'          => 'https://www.catholicculture.org/news/feed.cfm',
            'type'         => 'post',
            'category'     => 'Catholic Culture',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Word on Fire Blog',
            'url'          => 'https://www.wordonfire.org/resources/feed/',
            'type'         => 'post',
            'category'     => 'Spirituality',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Catholic Exchange',
            'url'          => 'https://catholicexchange.com/feed/',
            'type'         => 'post',
            'category'     => 'Spirituality',
            'auto_publish' => true,
            'is_active'    => true,
        ],

        // ── Saints & Feast Days ───────────────────────────────────────────

        [
            'name'         => 'Franciscan Media — Saint of the Day',
            'url'          => 'https://www.franciscanmedia.org/saint-of-the-day/feed/',
            'type'         => 'post',
            'category'     => 'Saints & Feast Days',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'American Catholic — Saint of the Day',
            'url'          => 'https://www.americancatholic.org/Features/Saints/rss.asp',
            'type'         => 'post',
            'category'     => 'Saints & Feast Days',
            'auto_publish' => true,
            'is_active'    => true,
        ],
        [
            'name'         => 'Catholic Online — Saints',
            'url'          => 'https://www.catholic.org/saints/f_day/rss.php',
            'type'         => 'post',
            'category'     => 'Saints & Feast Days',
            'auto_publish' => true,
            'is_active'    => true,
        ],

    ],

];
