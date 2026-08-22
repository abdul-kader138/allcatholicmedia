@php
    Theme::set('pageTitle', __('Register'));
    Theme::layout('full-width');
    SeoHelper::setTitle('Register | AllCatholicMedia');

    $form->setFormOption('has_wrapper', 'no');
    $form->setFormOption('banner', null);
@endphp

<section class="member-register-shell">
    <style>
        .member-register-shell {
            overflow: hidden;
            padding: 72px 0 96px;
            position: relative;
        }

        .member-register-shell::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 0, rgba(200, 166, 70, 0.16), transparent 36%);
            pointer-events: none;
        }

        .member-register-layout--single {
            display: flex;
            justify-content: center;
            max-width: 760px;
            margin: 0 auto;
        }

        .member-register-form--single {
            width: 100%;
            max-width: 620px;
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        .member-register-form__panel {
            max-width: 560px;
            margin: 0 auto;
        }

        .member-register-form__panel .auth-card {
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
            border-radius: 28px;
            background: linear-gradient(180deg, rgba(25, 30, 44, 0.96), rgba(18, 22, 34, 0.98)) !important;
            box-shadow: 0 28px 70px rgba(0, 0, 0, 0.34), inset 0 1px 0 rgba(255, 255, 255, 0.04);
        }

        .member-register-form__panel .auth-card .card-header {
            padding: 34px 34px 8px !important;
            background: transparent !important;
        }

        .member-register-form__panel .auth-card .card-body {
            padding: 20px 34px 34px !important;
        }

        .member-register-form__panel .auth-card .bg-white {
            border: 1px solid rgba(85, 122, 255, 0.22);
            border-radius: 18px !important;
            background: linear-gradient(180deg, rgba(38, 65, 166, 0.32), rgba(38, 65, 166, 0.14)) !important;
        }

        .member-register-form__panel .auth-card .text-primary {
            color: #d8b95f !important;
        }

        .member-register-form__panel .auth-card h3 {
            margin-bottom: 10px !important;
            color: #f7f1e7;
            font-family: var(--heading-font);
            font-size: 2rem;
            line-height: 1.08;
        }

        .member-register-form__panel .auth-card p.text-muted {
            margin: 0;
            color: rgba(229, 232, 239, 0.72) !important;
            font-size: 0.98rem;
            line-height: 1.7;
        }

        .member-register-form__panel .auth-card .form-label {
            margin-bottom: 10px;
            color: #f3f0ea;
            font-size: 0.95rem;
            font-weight: 600;
        }

        .member-register-form__panel .auth-card .form-group,
        .member-register-form__panel .auth-card .mb-3 {
            margin-bottom: 18px !important;
        }

        .member-register-form__panel .auth-card .form-control {
            height: 58px;
            padding-right: 18px;
            padding-left: 60px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.03) !important;
            box-shadow: none;
            color: #f8fafc;
            transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .member-register-form__panel .auth-card .form-control::placeholder {
            color: rgba(226, 232, 240, 0.42);
        }

        .member-register-form__panel .auth-card .form-control:focus {
            border-color: rgba(216, 185, 95, 0.72);
            background: rgba(255, 255, 255, 0.05) !important;
            box-shadow: 0 0 0 4px rgba(216, 185, 95, 0.12);
        }

        .member-register-form__panel .auth-card .slug-field-wrapper {
            margin-bottom: 18px;
        }

        .member-register-form__panel .auth-card .slug-field-wrapper .input-group {
            display: flex !important;
            align-items: stretch;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            border-radius: 16px !important;
            background: rgba(255, 255, 255, 0.03) !important;
            overflow: hidden;
        }

        .member-register-form__panel .auth-card .slug-field-wrapper .input-group:focus-within {
            border-color: rgba(216, 185, 95, 0.72) !important;
            background: rgba(255, 255, 255, 0.05) !important;
            box-shadow: 0 0 0 4px rgba(216, 185, 95, 0.12);
        }

        .member-register-shell .member-register-form__panel .auth-card .slug-field-wrapper .input-group .input-group-text {
            display: flex !important;
            align-items: center !important;
            height: 58px !important;
            border: 0 !important;
            border-radius: 0 !important;
            background: rgba(255, 255, 255, 0.03) !important;
            color: rgba(226, 232, 240, 0.55) !important;
            font-size: 13px !important;
            padding: 0 0 0 18px !important;
            white-space: nowrap;
        }

        .member-register-shell .member-register-form__panel .auth-card .slug-field-wrapper .input-group .input-group-text.slug-actions {
            padding: 0 14px 0 6px !important;
        }

        .member-register-form__panel .auth-card .slug-field-wrapper .input-group .input-group-text a {
            color: rgba(216, 185, 95, 0.9);
        }

        .member-register-shell .member-register-form__panel .auth-card .slug-field-wrapper .input-group .form-control {
            height: 58px !important;
            border: 0 !important;
            border-radius: 0 !important;
            background: rgba(255, 255, 255, 0.03) !important;
            box-shadow: none !important;
            padding-left: 4px !important;
            width: auto;
            flex: 1 1 auto;
            appearance: none !important;
            -webkit-appearance: none !important;
            position: static !important;
            z-index: auto !important;
            isolation: auto !important;
            filter: none !important;
            backdrop-filter: none !important;
            mix-blend-mode: normal !important;
        }

        .member-register-form__panel .auth-card .auth-input-icon {
            top: 10px !important;
            left: 14px !important;
            color: rgba(216, 185, 95, 0.9);
        }

        .member-register-form__panel .auth-card form svg {
            width: 22px;
            height: 22px;
        }

        .member-register-form__panel .auth-card .row.g-0 {
            align-items: center;
            row-gap: 12px;
            margin-top: 4px !important;
            margin-bottom: 24px !important;
        }

        .member-register-form__panel .auth-card .form-check-label {
            color: rgba(236, 240, 247, 0.84);
            font-size: 0.95rem;
        }

        .member-register-form__panel .auth-card .form-check-label a {
            color: #d8b95f;
            text-underline-offset: 4px;
        }

        .member-register-form__panel .auth-card .form-check-label a:hover {
            color: #f2d27c;
        }

        .member-register-form__panel .auth-card .btn-auth-submit {
            min-height: 56px;
            border: 0;
            border-radius: 16px;
            background: linear-gradient(135deg, #d7b24d, #f0d382) !important;
            box-shadow: 0 14px 30px rgba(216, 185, 95, 0.22);
            color: #111827 !important;
            font-size: 0.95rem;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
        }

        .member-register-form__panel .auth-card .btn-auth-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 34px rgba(216, 185, 95, 0.28);
            filter: saturate(1.05);
        }

        .member-register-form__panel .auth-card .btn-auth-submit .icon,
        .member-register-form__panel .auth-card .btn-auth-submit svg {
            stroke-width: 1.8;
        }

        .member-register-form__panel .auth-card .alert {
            border: 0;
            border-radius: 16px;
        }

        .member-register-form__panel .auth-card .form-check-input {
            background-color: rgba(255, 255, 255, 0.02);
            border-color: rgba(255, 255, 255, 0.22);
        }

        .member-register-form__panel .auth-card .form-check-input:focus {
            box-shadow: 0 0 0 3px rgba(216, 185, 95, 0.12);
        }

        .member-register-form__panel .auth-card .form-check-input:checked {
            background-color: #d8b95f !important;
            border-color: #d8b95f !important;
        }

        .member-register-form__panel .auth-card .mt-3.text-center a {
            color: #d8b95f;
            text-underline-offset: 4px;
        }

        .member-register-form__panel .auth-card .mt-3.text-center a:hover {
            color: #f2d27c;
        }

        @media (max-width: 767px) {
            .member-register-shell {
                padding: 48px 0 64px;
            }

            .member-register-form__panel .auth-card .card-header {
                padding: 26px 22px 6px !important;
            }

            .member-register-form__panel .auth-card .card-body {
                padding: 18px 22px 26px !important;
            }

            .member-register-form__panel .auth-card h3 {
                font-size: 1.6rem;
            }

            .member-register-form__panel .auth-card .form-control {
                height: 54px;
                border-radius: 14px;
            }

            .member-register-form__panel .auth-card .row.g-0 > [class*="col-"] {
                width: 100%;
            }
        }

        @media (max-width: 575px) {
            .member-register-layout--single {
                max-width: none;
            }

            .member-register-form__panel .auth-card {
                border-radius: 22px;
            }

            .member-register-form__panel .auth-card .card-header {
                padding: 24px 18px 6px !important;
            }

            .member-register-form__panel .auth-card .card-body {
                padding: 16px 18px 22px !important;
            }

            .member-register-form__panel .auth-card h3 {
                font-size: 1.4rem;
            }

            .member-register-form__panel .auth-card p.text-muted {
                font-size: 0.92rem;
            }

            .member-register-form__panel .auth-card .form-label {
                font-size: 0.9rem;
            }

            .member-register-form__panel .auth-card .form-control {
                height: 52px;
                padding-left: 54px;
            }
        }
    </style>

    <div class="container">
        <div class="member-register-layout member-register-layout--single">
            <div class="member-register-form member-register-form--single">
                <div class="member-register-form__panel">
                    {!! $form->renderForm() !!}
                </div>
            </div>
        </div>
    </div>
</section>
