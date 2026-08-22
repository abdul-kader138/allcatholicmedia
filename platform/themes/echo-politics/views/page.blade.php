@php
    $pageTemplate = $page->template ?? '';

    if ($pageTemplate === 'about-us') {
        Theme::layout('full-width');
        SeoHelper::setTitle('About Us — All Catholic Media');
        SeoHelper::setDescription('Welcome to All Catholic Media — your home for Daily Saints, inspiring stories, and timeless Catholic teachings, all in one place.');
    } else {
        Theme::set('pageTemplate', $page->template);
        Theme::set('pageTitle', $page->name);
        Theme::set('breadcrumb_background_image', $page->getMetaData('breadcrumb_background_image', true));
        Theme::set('breadcrumb_background_color', $page->getMetaData('breadcrumb_background_color', true));
        Theme::set('breadcrumb_text_color', $page->getMetaData('breadcrumb_text_color', true));
        Theme::set('isHomepage', $isHomepage = BaseHelper::isHomepage($page->getKey()));
    }
@endphp

@if ($pageTemplate === 'about-us')
    {!! Theme::partial('page-about-us', compact('page')) !!}
    @if (trim(strip_tags($page->content ?? '')))
        <div style="background:#06111d; padding: 60px 24px 80px;">
            <div style="max-width:860px; margin:0 auto;">
                <style>
                .about-cms-content { color: rgba(200,220,242,.8); font-family: 'Inter', sans-serif; font-size: 1.02rem; line-height: 1.85; }
                .about-cms-content h1,.about-cms-content h2,.about-cms-content h3 { color: #fff; font-family: 'Playfair Display', serif; margin-bottom: 14px; margin-top: 32px; }
                .about-cms-content h2 { font-size: 1.7rem; }
                .about-cms-content h3 { font-size: 1.3rem; color: #c9a227; }
                .about-cms-content p { margin-bottom: 18px; }
                .about-cms-content a { color: #c9a227; }
                .about-cms-content strong { color: #eef3fa; }
                .about-cms-content ul, .about-cms-content ol { color: rgba(200,220,242,.8); padding-left: 22px; margin-bottom: 18px; }
                .about-cms-content li { margin-bottom: 8px; }
                .about-cms-content blockquote { border-left: 3px solid #c9a227; padding: 12px 20px; margin: 24px 0; background: rgba(201,162,39,.06); border-radius: 0 10px 10px 0; font-style: italic; }
                </style>
                <div class="about-cms-content ck-content">
                    {!! BaseHelper::clean($page->content) !!}
                </div>
            </div>
        </div>
    @endif
@else
    <style>.ck-content p,.ck-content li,.ck-content h1,.ck-content h2,.ck-content h3,.ck-content h4,.ck-content h5,.ck-content h6{display:block!important;height:auto!important;line-height:inherit!important;margin-bottom:1rem!important;}</style>
    <div class="main" style="min-height: 300px">
        {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div',
            BaseHelper::clean($page->content), ['class' => ! $isHomepage ? 'ck-content' : ''])->toHtml(), $page)
        !!}
    </div>
@endif
