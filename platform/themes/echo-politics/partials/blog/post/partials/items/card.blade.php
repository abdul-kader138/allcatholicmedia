@php
    $category = $post->categories->first() ?? null;
    $postMedia = function_exists('echo_politics_resolve_post_media')
        ? echo_politics_resolve_post_media($post, 'medium')
        : [
            'image_url' => ! empty($post->image) ? RvMedia::getImageUrl($post->image, 'medium') : RvMedia::getDefaultImage(),
            'media_type' => 'image',
        ];
@endphp
<div class="acm-post-card">

    {{-- Image --}}
    <div class="acm-post-img">
        <a href="{{ $post->url }}" title="{{ $post->name }}">
            <img src="{{ $postMedia['image_url'] }}" alt="{{ $post->name }}" loading="lazy">
        </a>
        @if(($postMedia['media_type'] ?? null) === 'video')
            <span class="acm-post-cat" style="left:auto;right:16px;background:#0f172a;border:1px solid rgba(255,255,255,.18);">
                Video
            </span>
        @endif
        @if($category)
            <a href="{{ $category->url }}" class="acm-post-cat">{{ $category->name }}</a>
        @endif
    </div>

    {{-- Body --}}
    <div class="acm-post-body">
        <span class="acm-post-date">{{ $post->created_at->format('M d, Y') }}</span>

        <a href="{{ $post->url }}" class="acm-post-title">{{ $post->name }}</a>

        @if($post->description)
            <p class="acm-post-desc">{{ $post->description }}</p>
        @endif

        <a href="{{ $post->url }}" class="acm-post-read">
            Read more
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                <path d="M1 7h12M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>

</div>
