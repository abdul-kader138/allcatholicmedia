{!! SeoHelper::render() !!}

@include('plugins/member::themes.dashboard.layouts.header-meta')

<link
    href="{{ asset('vendor/core/plugins/member/css/dashboard/style.css') }}"
    rel="stylesheet"
>

<style>
    .ps-main__wrapper .table-wrapper .card,
    .ps-main__wrapper .table-wrapper .table-responsive,
    .ps-main__wrapper .table-wrapper table {
        background: transparent;
    }

    .ps-main__wrapper .table-wrapper .card-header {
        background: transparent;
        border-bottom-color: rgba(255, 255, 255, 0.08);
    }

    .ps-main__wrapper .table-wrapper .btn:not(.btn-primary):not(.btn-info):not(.btn-danger):not(.btn-success),
    .ps-main__wrapper .table-wrapper .buttons-collection,
    .ps-main__wrapper .table-wrapper .btn-show-table-options,
    .ps-main__wrapper .table-wrapper .dropdown-toggle:not(.btn-primary) {
        background: #203759;
        border-color: rgba(255, 255, 255, 0.1);
        color: #eef4ff;
    }

    .ps-main__wrapper .table-wrapper .btn:not(.btn-primary):not(.btn-info):not(.btn-danger):not(.btn-success):hover,
    .ps-main__wrapper .table-wrapper .buttons-collection:hover,
    .ps-main__wrapper .table-wrapper .btn-show-table-options:hover,
    .ps-main__wrapper .table-wrapper .dropdown-toggle:not(.btn-primary):hover {
        background: #29446d;
        border-color: rgba(255, 255, 255, 0.14);
        color: #ffffff;
    }

    .ps-main__wrapper .table-wrapper .form-control,
    .ps-main__wrapper .table-wrapper .table-search-input input,
    .ps-main__wrapper .table-wrapper .dropdown-menu,
    .ps-main__wrapper .table-wrapper .dropdown-item {
        background: #233a5f;
        border-color: rgba(255, 255, 255, 0.1);
        color: #eef4ff;
    }

    .ps-main__wrapper .table-wrapper .table-search-input input::placeholder {
        color: rgba(238, 244, 255, 0.55);
    }

    .ps-main__wrapper .table-wrapper .dropdown-item:hover,
    .ps-main__wrapper .table-wrapper .dropdown-item:focus {
        background: #2a4772;
        color: #ffffff;
    }

    .ps-main__wrapper .table-wrapper .form-check-input,
    .ps-main__wrapper .table-wrapper input[type="checkbox"] {
        background-color: rgba(255, 255, 255, 0.94);
        border-color: rgba(255, 255, 255, 0.94);
        box-shadow: none;
    }

    .ps-main__wrapper .table-wrapper .form-check-input:checked,
    .ps-main__wrapper .table-wrapper input[type="checkbox"]:checked {
        background-color: #c9a227;
        border-color: #c9a227;
    }

    .ps-main__wrapper .table-wrapper .search-icon,
    .ps-main__wrapper .table-wrapper .search-reset-icon {
        color: rgba(238, 244, 255, 0.7);
    }
</style>

@if (BaseHelper::isRtlEnabled())
    <link
        href="{{ asset('vendor/core/core/base/css/core.rtl.css') }}"
        rel="stylesheet"
    >
    <link
        href="{{ asset('vendor/core/plugins/member/css/dashboard/style-rtl.css') }}"
        rel="stylesheet"
    >
@endif

@if (File::exists($styleIntegration = Theme::getStyleIntegrationPath()))
    {!! Html::style(Theme::asset()->url('css/style.integration.css?v=' . filectime($styleIntegration))) !!}
@endif
