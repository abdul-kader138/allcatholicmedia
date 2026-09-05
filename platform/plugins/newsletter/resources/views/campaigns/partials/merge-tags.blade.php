<div class="alert alert-info mb-3">
    <p class="mb-2"><strong>{{ trans('plugins/newsletter::newsletter.campaigns.form.merge_tags_title') }}</strong></p>
    <p class="mb-2 text-muted">{{ trans('plugins/newsletter::newsletter.campaigns.form.merge_tags_description') }}</p>
    <ul class="mb-0 ps-3">
        @foreach ([
            'subscriber_name',
            'subscriber_email',
            'unsubscribe_url',
            'view_in_browser_url',
            'site_title',
            'site_url',
        ] as $tag)
            <li><code>&#123;&#123; {{ $tag }} &#125;&#125;</code> &mdash; {{ trans("plugins/newsletter::newsletter.campaigns.form.merge_tags.$tag") }}</li>
        @endforeach
    </ul>
</div>
