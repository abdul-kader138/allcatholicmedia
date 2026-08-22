@php
    Theme::set('pageTitle', __('Sign In'));
    Theme::layout('full-width');
    SeoHelper::setTitle('Sign In | AllCatholicMedia');

    $form->setFormOption('has_wrapper', 'no');
    $form->setFormOption('banner', null);
@endphp

<section class="member-login-shell">
    <style>
        .member-login-shell {
            overflow: hidden;
            padding: 72px 0 96px;
            position: relative;
        }

        .member-login-shell::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 0, rgba(200, 166, 70, 0.16), transparent 36%);
            pointer-events: none;
        }

        .member-login-layout--single {
            display: flex;
            justify-content: center;
            max-width: 760px;
            margin: 0 auto;
        }

        .member-login-form--single {
            width: 100%;
            max-width: 620px;
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        .member-login-form__panel {
            max-width: 560px;
            margin: 0 auto;
        }

        .member-login-form__panel .auth-card {
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
            border-radius: 28px;
            background: linear-gradient(180deg, rgba(25, 30, 44, 0.96), rgba(18, 22, 34, 0.98)) !important;
            box-shadow: 0 28px 70px rgba(0, 0, 0, 0.34), inset 0 1px 0 rgba(255, 255, 255, 0.04);
        }

        .member-login-form__panel .auth-card .card-header {
            padding: 34px 34px 8px !important;
            background: transparent !important;
        }

        .member-login-form__panel .auth-card .card-body {
            padding: 20px 34px 34px !important;
        }

        .member-login-form__panel .auth-card .bg-white {
            border: 1px solid rgba(85, 122, 255, 0.22);
            border-radius: 18px !important;
            background: linear-gradient(180deg, rgba(38, 65, 166, 0.32), rgba(38, 65, 166, 0.14)) !important;
        }

        .member-login-form__panel .auth-card .text-primary {
            color: #d8b95f !important;
        }

        .member-login-form__panel .auth-card h3 {
            margin-bottom: 10px !important;
            color: #f7f1e7;
            font-family: var(--heading-font);
            font-size: 2rem;
            line-height: 1.08;
        }

        .member-login-form__panel .auth-card p.text-muted {
            margin: 0;
            color: rgba(229, 232, 239, 0.72) !important;
            font-size: 0.98rem;
            line-height: 1.7;
        }

        .member-login-form__panel .auth-card .form-label {
            margin-bottom: 10px;
            color: #f3f0ea;
            font-size: 0.95rem;
            font-weight: 600;
        }

        .member-login-form__panel .auth-card .form-group,
        .member-login-form__panel .auth-card .mb-3 {
            margin-bottom: 18px !important;
        }

        .member-login-form__panel .auth-card .form-control {
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

        .member-login-form__panel .auth-card .form-control::placeholder {
            color: rgba(226, 232, 240, 0.42);
        }

        .member-login-form__panel .auth-card .form-control:focus {
            border-color: rgba(216, 185, 95, 0.72);
            background: rgba(255, 255, 255, 0.05) !important;
            box-shadow: 0 0 0 4px rgba(216, 185, 95, 0.12);
        }

        .member-login-form__panel .auth-card .auth-input-icon {
            top: 10px !important;
            left: 14px !important;
            color: rgba(216, 185, 95, 0.9);
        }

        .member-login-form__panel .auth-card form svg {
            width: 22px;
            height: 22px;
        }

        .member-login-form__panel .auth-card .row.g-0 {
            align-items: center;
            row-gap: 12px;
            margin-top: 4px !important;
            margin-bottom: 24px !important;
        }

        .member-login-form__panel .auth-card .form-check-label {
            color: rgba(236, 240, 247, 0.84);
            font-size: 0.95rem;
        }

        .member-login-form__panel .auth-card .text-end a {
            color: #d8b95f;
            text-underline-offset: 4px;
        }

        .member-login-form__panel .auth-card .text-end a:hover {
            color: #f2d27c;
        }

        .member-login-form__panel .auth-card .btn-auth-submit {
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

        .member-login-form__panel .auth-card .btn-auth-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 18px 34px rgba(216, 185, 95, 0.28);
            filter: saturate(1.05);
        }

        .member-login-form__panel .auth-card .btn-auth-submit .icon,
        .member-login-form__panel .auth-card .btn-auth-submit svg {
            stroke-width: 1.8;
        }

        .member-login-form__panel .auth-card .alert {
            border: 0;
            border-radius: 16px;
        }

        .member-login-form__panel .auth-card .form-check-input {
            background-color: rgba(255, 255, 255, 0.02);
            border-color: rgba(255, 255, 255, 0.22);
        }

        .member-login-form__panel .auth-card .form-check-input:focus {
            box-shadow: 0 0 0 3px rgba(216, 185, 95, 0.12);
        }

        .member-login-form__panel .auth-card .form-check-input:checked {
            background-color: #d8b95f !important;
            border-color: #d8b95f !important;
        }

        @media (max-width: 767px) {
            .member-login-shell {
                padding: 48px 0 64px;
            }

            .member-login-form__panel .auth-card .card-header {
                padding: 26px 22px 6px !important;
            }

            .member-login-form__panel .auth-card .card-body {
                padding: 18px 22px 26px !important;
            }

            .member-login-form__panel .auth-card h3 {
                font-size: 1.6rem;
            }

            .member-login-form__panel .auth-card .form-control {
                height: 54px;
                border-radius: 14px;
            }

            .member-login-form__panel .auth-card .row.g-0 > [class*="col-"] {
                width: 100%;
            }

            .member-login-form__panel .auth-card .text-end {
                text-align: left !important;
            }
        }

        @media (max-width: 575px) {
            .member-login-layout--single {
                max-width: none;
            }

            .member-login-form__panel .auth-card {
                border-radius: 22px;
            }

            .member-login-form__panel .auth-card .card-header {
                padding: 24px 18px 6px !important;
            }

            .member-login-form__panel .auth-card .card-body {
                padding: 16px 18px 22px !important;
            }

            .member-login-form__panel .auth-card h3 {
                font-size: 1.4rem;
            }

            .member-login-form__panel .auth-card p.text-muted {
                font-size: 0.92rem;
            }

            .member-login-form__panel .auth-card .form-label {
                font-size: 0.9rem;
            }

            .member-login-form__panel .auth-card .form-control {
                height: 52px;
                padding-left: 54px;
            }
        }
    </style>

    <div class="container">
        <div class="member-login-layout member-login-layout--single">
            <div class="member-login-form member-login-form--single">
                <div class="member-login-form__panel">
                    {!! $form->renderForm() !!}
                </div>
            </div>
        </div>
    </div>
</section>
