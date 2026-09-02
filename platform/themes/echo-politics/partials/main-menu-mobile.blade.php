<ul {!! $options !!}>
    @foreach ($menu_nodes->loadMissing('metadata') as $row)
        <li @class([
            'menu-item' => ! $row->has_child,
            'has-droupdown' => $row->has_child,
        ])>
            <a
                @class(['main', 'mobile-menu-link' => ! $row->has_child])
                href="{{ $row->has_child ? '#' : url($row->url) }}"
                title="{{ $row->title }}"
                @if ($row->target !== '_self') target="{{ $row->target }}" @endif
            >
                <span class="acm-menu-label">{{ $row->title }}</span>
                @if ($row->has_child)
                    <span class="acm-arrow" aria-hidden="true">⌄</span>
                @endif
            </a>

            @if ($row->has_child)
                {!! Menu::generateMenu([
                    'menu' => $menu,
                    'menu_nodes' => $row->child,
                    'view' => 'main-menu-mobile',
                    'options' => ['class' => 'submenu mm-collapse', 'id' => 'mobile-menu-active'],
                ]) !!}
            @endif
        </li>
    @endforeach

    <li @class([
        'menu-item' => true,
        'mm-active' => request()->routeIs('public.prayer-request'),
    ])>
        <a
            class="main mobile-menu-link"
            href="{{ route('public.prayer-request') }}"
            title="Prayer request"
        >
            Prayer request
        </a>
    </li>

    <li @class([
        'menu-item' => true,
        'mm-active' => request()->is('search'),
    ])>
        <a class="main mobile-menu-link" href="{{ url('/search') }}" title="{{ __('Search All Catholic Media') }}">
            {{ __('Search') }}
        </a>
    </li>

    <li @class([
        'menu-item' => true,
        'mm-active' => request()->is('about'),
    ])>
        <a class="main mobile-menu-link" href="{{ url('/about') }}" title="{{ __('About All Catholic Media') }}">
            {{ __('About') }}
        </a>
    </li>

    <li @class([
        'menu-item' => true,
        'mm-active' => request()->routeIs('public.editorial-policy'),
    ])>
        <a class="main mobile-menu-link" href="{{ route('public.editorial-policy') }}" title="{{ __('Editorial Policy') }}">
            {{ __('Editorial Policy') }}
        </a>
    </li>

    <li @class([
        'menu-item' => true,
        'mm-active' => request()->routeIs('public.corrections-policy'),
    ])>
        <a class="main mobile-menu-link" href="{{ route('public.corrections-policy') }}" title="{{ __('Corrections Policy') }}">
            {{ __('Corrections Policy') }}
        </a>
    </li>
</ul>
