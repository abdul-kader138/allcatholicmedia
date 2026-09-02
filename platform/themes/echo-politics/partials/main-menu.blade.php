<ul {!! $options !!}>
    @foreach ($menu_nodes->loadMissing(['metadata', 'parent']) as $key => $row)
        @php
            $title = trim(strip_tags((string) $row->title));
            $customActive = match ($title) {
                'Home' => request()->routeIs('public.index'),
                'Channels', 'Watch' => request()->routeIs('public.watch*'),
                'Listen' => request()->routeIs('public.listen*'),
                default => false,
            };

            $isActive = $row->active || $customActive;
        @endphp
        <li @class([
            'menu-item',
            'nav-item' => $row->parent,
            'echo-has-dropdown' => $row->has_child,
            'active' => $isActive,
            'current-menu-item' => $isActive,
            'current' => $isActive,
            'current_page_item' => $isActive,
        ])>
            <a
                @class(['echo-dropdown-main-element' => ! $row->parent])
                href="{{ url($row->url) }}"
                title="{{ $row->title }}"
                @if ($isActive) aria-current="page" @endif
                @if ($row->target !== '_self') target="{{ $row->target }}" @endif
            >
                {!! $row->icon_html !!}

                {{ $row->title }}
            </a>
            @if ($row->has_child)
                {!! Menu::generateMenu([
                    'menu' => $menu,
                    'menu_nodes' => $row->child,
                    'view' => 'main-menu',
                    'options' => ['class' => 'echo-submenu'],
                ]) !!}
            @endif
        </li>
    @endforeach

    @php($isPrayerRequestActive = request()->routeIs('public.prayer-request'))

    <li @class([
        'menu-item',
        'active' => $isPrayerRequestActive,
        'current-menu-item' => $isPrayerRequestActive,
        'current' => $isPrayerRequestActive,
        'current_page_item' => $isPrayerRequestActive,
    ])>
        <a class="echo-dropdown-main-element" href="{{ route('public.prayer-request') }}" title="Prayer request" @if ($isPrayerRequestActive) aria-current="page" @endif>
            Prayer request
        </a>
    </li>

    <li class="menu-item">
        <a class="echo-dropdown-main-element" href="{{ url('/search') }}" title="{{ __('Search') }}">
            <span aria-hidden="true">⌕</span> {{ __('Search') }}
        </a>
    </li>

    <li class="menu-item">
        <a class="echo-dropdown-main-element" href="{{ url('/about') }}" title="{{ __('About All Catholic Media') }}">
            {{ __('About') }}
        </a>
    </li>
</ul>
