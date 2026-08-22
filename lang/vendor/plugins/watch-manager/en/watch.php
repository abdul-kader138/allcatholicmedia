<?php

return [
    'admin' => [
        'menu' => 'Watch',
        'breadcrumb' => 'YouTube Channels',
        'page_title' => 'YouTube Channels',
        'hero_title' => 'Watch Page Hero',
        'preview' => 'Preview',
        'preview_note' => 'This is how the hero title appears on the frontend Watch page.',
        'image_url' => 'Hero Background Image URL',
        'image_url_hint' => 'Paste a direct image URL, or upload a file below.',
        'upload_title' => 'Upload Background Image',
        'upload_hint' => 'Recommended size: 1920x600px. JPG or PNG, max 5MB.',
        'update_background' => 'Update Background',
        'channels_title' => 'Channels',
        'sync_all' => 'Sync All Channels',
        'add_channel' => 'Add Channel',

        'stats' => [
            'total_channels' => 'Total Channels',
            'active_channels' => 'Active Channels',
            'synced_videos' => 'Synced Videos',
        ],

        'table' => [
            'channel' => 'Channel',
            'handle_or_id' => 'Handle / Channel ID',
            'videos' => 'Videos',
            'status' => 'Status',
            'last_sync' => 'Last Sync',
            'actions' => 'Actions',
            'not_available' => 'N/A',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'empty' => 'No YouTube channels found.',
        ],

        'actions' => [
            'sync' => 'Sync',
            'edit' => 'Edit',
            'delete' => 'Delete',
            'delete_confirm' => 'Are you sure you want to delete this channel?',
            'back' => 'Back',
        ],

        'form' => [
            'create_title' => 'Add YouTube Channel',
            'edit_title' => 'Edit YouTube Channel',
            'channel_name' => 'Channel Name',
            'slug' => 'Slug',
            'youtube_handle' => 'YouTube Handle',
            'youtube_channel_id' => 'YouTube Channel ID',
            'description' => 'Description',
            'sort_order' => 'Sort Order',
            'active_channel' => 'Active',
            'update_channel' => 'Update Channel',
            'create_channel' => 'Create Channel',
        ],

        'messages' => [
            'created' => 'Channel created successfully.',
            'updated' => 'Channel updated successfully.',
            'deleted' => 'Channel deleted successfully.',
            'synced_channel' => 'Successfully synced :channel.',
            'synced_all' => 'Successfully synced :count channel(s).',
            'hero_updated' => 'Watch page hero updated successfully.',
        ],
    ],

    'seo' => [
        'channels_title' => 'Watch',
        'channels_description' => 'Watch the latest videos from our YouTube channels.',
        'channel_title' => 'Watch :channel',
        'channel_description' => 'Watch the latest videos from :channel.',
    ],

    'frontend' => [
        'eyebrow' => 'All Catholic Media',
        'title' => 'Watch',
        'subtitle' => 'Watch the latest videos from our YouTube channels.',
        'empty_title' => 'No Channels Yet',
        'empty_description' => 'Check back soon for new channels and videos.',
        'channel_fallback_description' => 'Watch the latest videos from this channel.',
        'channel_fallback_watch_description' => 'Watch the latest videos from this channel.',
        'open_channel' => 'View Channel',
        'back_to_channels' => 'Back to Channels',
        'open_on_youtube' => 'Watch on YouTube',
        'views' => 'views',
        'live_now' => 'Live Now',
        'no_videos_title' => 'No Videos Yet',
        'no_videos_description' => 'This channel has not synced any videos yet.',
        'live' => 'Live',
        'watch' => 'Watch',
    ],

    'video_count' => '1 video|:count videos',
];
