@extends('plugins/member::themes.dashboard.layouts.master')

@push('header')
    <style>
        .ps-main__wrapper .card-header .card-header-tabs {
            align-items: center;
            background: #162847;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px 16px 0 0;
            gap: 0.5rem;
            padding: 0.75rem 1rem 0;
        }

        .ps-main__wrapper .card-header .card-header-tabs .nav-link {
            background: transparent;
            border: 0;
            border-bottom: 3px solid transparent;
            border-radius: 10px 10px 0 0;
            color: rgba(255, 255, 255, 0.76);
            font-weight: 600;
            padding: 0.9rem 1.15rem;
        }

        .ps-main__wrapper .card-header .card-header-tabs .nav-link:hover,
        .ps-main__wrapper .card-header .card-header-tabs .nav-link:focus {
            color: #ffffff;
        }

        .ps-main__wrapper .card-header .card-header-tabs .nav-link.active {
            background: rgba(255, 255, 255, 0.04);
            border-bottom-color: #c9a227;
            color: #ffffff;
        }
    </style>
@endpush

@section('content')
    <x-core::card>
        <x-core::card.header>
            <x-core::tab class="card-header-tabs">
                <x-core::tab.item
                    id="profile-tab"
                    :label="trans('plugins/member::dashboard.account_field_title')"
                    :is-active="true"
                />
                <x-core::tab.item
                    id="avatar-tab"
                    :label="trans('plugins/member::dashboard.profile-picture')"
                />
                <x-core::tab.item
                    id="change-password-tab"
                    :label="trans('plugins/member::dashboard.change_password')"
                />
                {!! apply_filters('member_dashboard_sidebar_menu', null) !!}
                {!! apply_filters('member_settings_register_content_tabs', null) !!}
            </x-core::tab>
        </x-core::card.header>

        <x-core::card.body>
            <x-core::tab.content>
                <x-core::tab.pane
                    id="profile-tab"
                    :is-active="true"
                >
                    {!! $profileForm !!}
                </x-core::tab.pane>
                <x-core::tab.pane id="avatar-tab">
                    <x-core::crop-image
                        :label="trans('plugins/member::dashboard.profile-picture')"
                        name="avatar_file"
                        :value="auth('member')->user()->avatar_url"
                        :action="route('public.member.avatar')"
                    />
                </x-core::tab.pane>
                <x-core::tab.pane id="change-password-tab">
                    {!! $changePasswordForm !!}
                </x-core::tab.pane>
                {!! apply_filters('member_settings_register_content_tab_inside', null) !!}
            </x-core::tab.content>
        </x-core::card.body>
    </x-core::card>
@endsection

@push('scripts')
    {!! JsValidator::formRequest(Botble\Member\Http\Requests\SettingRequest::class) !!}
    {!! JsValidator::formRequest(Botble\Member\Http\Requests\UpdatePasswordRequest::class) !!}
@endpush
