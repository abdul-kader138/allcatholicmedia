@php
    Theme::set('pageTitle', __('Reset Password'));
    Theme::layout('full-width');
    SeoHelper::setTitle('Reset Password | AllCatholicMedia');

    $form->setFormOption('has_wrapper', 'no');
    $form->setFormOption('banner', null);
@endphp

<style>
.acm-auth-wrap { position: relative; overflow: hidden; padding: 56px 0 96px; }
.acm-auth-wrap::before { content: ""; position: absolute; inset: 0; background: radial-gradient(circle at 50% 0, rgba(200, 166, 70, 0.16), transparent 36%); pointer-events: none; }
.acm-auth-panel { position: relative; width: 100%; max-width: 560px; margin: 0 auto; }

.acm-auth-panel .auth-card { overflow: hidden; border: 1px solid rgba(255, 255, 255, 0.08) !important; border-radius: 28px; background: linear-gradient(180deg, rgba(25, 30, 44, 0.96), rgba(18, 22, 34, 0.98)) !important; box-shadow: 0 28px 70px rgba(0, 0, 0, 0.34), inset 0 1px 0 rgba(255, 255, 255, 0.04); }
.acm-auth-panel .auth-card .card-header { padding: 34px 34px 8px !important; background: transparent !important; }
.acm-auth-panel .auth-card .card-body { padding: 20px 34px 34px !important; }
.acm-auth-panel .auth-card .bg-white { border: 1px solid rgba(201, 162, 39, 0.22); border-radius: 18px !important; background: linear-gradient(180deg, rgba(201, 162, 39, 0.12), rgba(201, 162, 39, 0.04)) !important; }
.acm-auth-panel .auth-card .text-primary { color: #d8b95f !important; }
.acm-auth-panel .auth-card h3 { margin-bottom: 10px !important; color: #f7f1e7; font-family: var(--heading-font); font-size: 1.7rem; line-height: 1.15; }
.acm-auth-panel .auth-card p.text-muted { margin: 0; color: rgba(229, 232, 239, 0.72) !important; font-size: 0.95rem; line-height: 1.7; }
.acm-auth-panel .auth-card .form-label { margin-bottom: 10px; color: #f3f0ea; font-size: 0.95rem; font-weight: 600; }
.acm-auth-panel .auth-card .form-group, .acm-auth-panel .auth-card .mb-3 { margin-bottom: 18px !important; }
.acm-auth-panel .auth-card .form-control { height: 58px; padding-right: 18px; padding-left: 60px; border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 16px; background: rgba(255, 255, 255, 0.03) !important; box-shadow: none; color: #f8fafc; transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease; }
.acm-auth-panel .auth-card .form-control::placeholder { color: rgba(226, 232, 240, 0.42); }
.acm-auth-panel .auth-card .form-control:focus { border-color: rgba(216, 185, 95, 0.72); background: rgba(255, 255, 255, 0.05) !important; box-shadow: 0 0 0 4px rgba(216, 185, 95, 0.12); }
.acm-auth-panel .auth-card .auth-input-icon { top: 10px !important; left: 14px !important; color: rgba(216, 185, 95, 0.9); }
.acm-auth-panel .auth-card form svg { width: 22px; height: 22px; }
.acm-auth-panel .auth-card .btn-auth-submit { min-height: 56px; border: 0; border-radius: 16px; background: linear-gradient(135deg, #d7b24d, #f0d382) !important; box-shadow: 0 14px 30px rgba(216, 185, 95, 0.22); color: #111827 !important; font-size: 0.95rem; font-weight: 800; letter-spacing: 0.06em; text-transform: uppercase; transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease; }
.acm-auth-panel .auth-card .btn-auth-submit:hover { transform: translateY(-1px); box-shadow: 0 18px 34px rgba(216, 185, 95, 0.28); filter: saturate(1.05); }
.acm-auth-panel .auth-card .alert { border: 0; border-radius: 16px; }
.acm-auth-panel .auth-card .mt-3.text-center a { color: #d8b95f; text-underline-offset: 4px; }
.acm-auth-panel .auth-card .mt-3.text-center a:hover { color: #f2d27c; }

@media (max-width: 767px) {
    .acm-auth-wrap { padding: 40px 0 64px; }
    .acm-auth-panel .auth-card .card-header { padding: 26px 22px 6px !important; }
    .acm-auth-panel .auth-card .card-body { padding: 18px 22px 26px !important; }
    .acm-auth-panel .auth-card h3 { font-size: 1.4rem; }
    .acm-auth-panel .auth-card .form-control { height: 54px; border-radius: 14px; }
}
</style>

<div class="acm-auth-wrap">
    <div class="container">
        <div class="acm-auth-panel">
            {!! $form->renderForm() !!}
        </div>
    </div>
</div>
