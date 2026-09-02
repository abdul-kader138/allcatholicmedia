<style>
    [v-cloak],
    [x-cloak] {
        display: none;
    }
</style>

<style>
    /* All Catholic Media member dashboard skin */
    :root {
        --bb-primary: #c9a227;
        --bb-primary-rgb: 201, 162, 39;
        --acm-navy: #06111d;
        --acm-panel: #0d1b2a;
        --acm-panel-soft: #132841;
        --acm-gold: #f3d46d;
        --acm-text: #e8eef7;
        --acm-muted: rgba(232, 238, 247, .68);
    }

    body:has(.ps-main) { background: var(--acm-navy); color: var(--acm-text); }
    .header--dashboard { background: var(--acm-navy); border-bottom: 1px solid rgba(201, 162, 39, .22); }
    .header--dashboard .header__site-link,
    .header--dashboard .header__site-link i { color: var(--acm-gold); }
    .header--mobile { background: var(--acm-navy); border-bottom: 1px solid rgba(201, 162, 39, .22); }
    .header--mobile .navbar-toggler,
    .header--mobile .header__right a { color: var(--acm-gold); }

    .ps-main__sidebar { align-self: stretch; background: #081827; flex: 0 0 320px; max-width: 320px; padding: 0 !important; }
    .ps-sidebar { background: #081827; color: var(--acm-text); display: flex; flex-direction: column; }
    .ps-sidebar { min-height: 100vh; }
    .ps-sidebar__top { background: linear-gradient(180deg, #102944, #0b1e32); border-bottom: 1px solid rgba(201, 162, 39, .2); padding: 24px !important; }
    .ps-sidebar .ps-sidebar__top { margin-bottom: 0 !important; }
    .ps-sidebar .ps-sidebar__top .ps-block--user-wellcome { background: rgba(255, 255, 255, .045); border: 1px solid rgba(201, 162, 39, .2); border-radius: 16px; margin-bottom: 18px !important; padding: 14px; }
    .ps-block--user-wellcome .ps-block__right p,
    .ps-block--user-wellcome .ps-block__right p a,
    .ps-block--earning-count h3 { color: var(--acm-text); }
    .ps-block--user-wellcome .ps-block__right { min-width: 0; overflow: hidden; }
    .ps-block--user-wellcome .ps-block__right p,
    .ps-block--user-wellcome .ps-block__right p a,
    .ps-block--user-wellcome .ps-block__right small { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    .ps-block--user-wellcome .ps-block__right small,
    .ps-block--earning-count small { color: var(--acm-muted); }
    .ps-block--user-wellcome .ps-block__action i { color: var(--acm-gold); }
    .acm-dashboard-avatar { align-items: center; background: #132841; border: 2px solid rgba(201, 162, 39, .55); border-radius: 50%; display: flex; flex: 0 0 58px; height: 58px; justify-content: center; overflow: hidden; width: 58px; }
    .acm-dashboard-avatar img { border: 0 !important; border-radius: 50%; display: block; height: 100%; object-fit: cover; width: 100%; }
    .acm-dashboard-avatar.acm-avatar-fallback::before { color: var(--acm-gold); content: '✦'; font-size: 1.2rem; }

    .ps-sidebar .menu li a,
    .ps-drawer--mobile .menu li a { border-radius: 10px; color: var(--acm-muted); margin: 4px 12px; transition: background .2s, color .2s, transform .2s; }
    .ps-sidebar .menu li a:hover,
    .ps-sidebar .menu li a.active,
    .ps-drawer--mobile .menu li a:hover,
    .ps-drawer--mobile .menu li a.active { background: rgba(201, 162, 39, .12); color: var(--acm-gold); transform: translateX(2px); }
    .ps-sidebar .menu li a.active:before { background: var(--acm-gold); }
    .ps-sidebar__footer { border-top: 1px solid rgba(255, 255, 255, .08); }
    .ps-sidebar__center { padding: 18px 12px 24px; }
    .ps-sidebar__footer { padding: 20px 24px; }
    .ps-sidebar__footer .ps-copyright p { color: var(--acm-muted); }

    .ps-main__wrapper { background: var(--acm-navy); color: var(--acm-text); padding: 32px; }
    .ps-main__wrapper > header h3 { color: #fff; font-family: 'Playfair Display', Georgia, serif; font-weight: 700; }
    .ps-main__wrapper > header a { color: var(--acm-gold); font-weight: 700; }
    .ps-block--stat,
    .ps-card,
    .ps-block--form-box { background: var(--acm-panel) !important; border: 1px solid rgba(255, 255, 255, .08); border-radius: 16px; box-shadow: 0 16px 36px rgba(0, 0, 0, .16); color: var(--acm-text); }
    .ps-block--stat p,
    .ps-card p,
    .ps-card small { color: var(--acm-muted); }
    .ps-block--stat h4,
    .ps-card h4,
    .ps-card h5 { color: #fff; }
    .ps-block--stat .ps-block__left span { background: var(--acm-panel-soft); }
    .ps-block--stat .ps-block__left i { color: var(--acm-gold); }

    .ps-main__wrapper .form-control,
    .ps-main__wrapper select,
    .ps-main__wrapper textarea { background: #102944; border-color: rgba(255, 255, 255, .14); border-radius: 10px; color: #fff; }
    .ps-main__wrapper select,
    .ps-main__wrapper select.form-control { color-scheme: dark; }
    .ps-main__wrapper select option,
    .ps-main__wrapper .form-select option { background: #102944; color: #fff; }
    .ps-main__wrapper input::placeholder,
    .ps-main__wrapper textarea::placeholder { color: rgba(232, 238, 247, .5); }
    .ps-main__wrapper .form-control:focus,
    .ps-main__wrapper select:focus,
    .ps-main__wrapper textarea:focus { border-color: var(--acm-gold); box-shadow: 0 0 0 3px rgba(201, 162, 39, .16); }
    .ps-main__wrapper label { color: var(--acm-text); font-weight: 600; }
    .ps-main__wrapper .form-check-label,
    .ps-main__wrapper .form-text,
    .ps-main__wrapper .text-muted { color: var(--acm-muted) !important; }
    .ps-main__wrapper .card,
    .ps-main__wrapper .card-header,
    .ps-main__wrapper .card-body,
    .ps-main__wrapper .card-footer { background: var(--acm-panel) !important; border-color: rgba(255, 255, 255, .08); color: var(--acm-text); }
    .ps-main__wrapper .card-header h4,
    .ps-main__wrapper .card-header h5,
    .ps-main__wrapper .card-body h4,
    .ps-main__wrapper .card-body h5 { color: #fff; }
    .ps-main__wrapper .btn-primary,
    .ps-main__wrapper button[type="submit"] { background: #c9a227 !important; border-color: #c9a227 !important; border-radius: 999px; color: #07111d !important; font-weight: 800; }
    .ps-main__wrapper .btn-primary:hover,
    .ps-main__wrapper button[type="submit"]:hover { background: var(--acm-gold) !important; border-color: var(--acm-gold) !important; transform: translateY(-1px); }

    .crop-image-container .crop-image-modal { z-index: 1060; }
    .crop-image-container .crop-image-modal .modal-dialog { max-width: 860px; }
    .crop-image-container .crop-image-modal .modal-content { background: #0d1b2a; border: 1px solid rgba(201, 162, 39, .3); border-radius: 18px; box-shadow: 0 24px 70px rgba(0, 0, 0, .45); color: var(--acm-text); overflow: hidden; }
    .crop-image-container .crop-image-modal .modal-header { background: #102944; border-bottom-color: rgba(201, 162, 39, .2); padding: 18px 22px; }
    .crop-image-container .crop-image-modal .modal-title { color: #fff; font-family: 'Playfair Display', Georgia, serif; font-weight: 700; }
    .crop-image-container .crop-image-modal .btn-close { filter: invert(1); opacity: .8; }
    .crop-image-container .crop-image-modal .modal-body { padding: 22px; }
    .crop-image-container .crop-image-modal .cropper-image-wrap { background: #06111d; border: 1px solid rgba(255, 255, 255, .12); border-radius: 12px; height: 360px !important; margin-top: 14px; min-height: 240px; overflow: hidden; width: 100%; }
    .crop-image-container .crop-image-modal .cropper-image { display: block; max-width: 100%; }
    .crop-image-container .crop-image-modal .img-preview { background: #132841 !important; border: 1px solid rgba(201, 162, 39, .35) !important; border-radius: 10px; margin: 14px auto; }
    .crop-image-container .crop-image-modal .modal-footer { background: #0a1725; border-top-color: rgba(255, 255, 255, .08); padding: 16px 22px; }
    .crop-image-container .crop-image-modal input[type="file"] { background: #102944; border-color: rgba(255, 255, 255, .14); border-radius: 10px; color: var(--acm-text); padding: 9px; }
    .crop-image-container .crop-image-modal input[type="file"]::file-selector-button { background: #c9a227; border: 0; border-radius: 999px; color: #07111d; font-weight: 700; margin-right: 10px; padding: 8px 12px; }
    .crop-image-container .crop-image-modal .modal-footer .btn-primary { background: #c9a227 !important; border-color: #c9a227 !important; border-radius: 999px; color: #07111d !important; font-weight: 800; }

    @media (max-width: 767px) {
        .crop-image-container .crop-image-modal .modal-body { padding: 16px; }
        .crop-image-container .crop-image-modal .cropper-image-wrap { height: 280px !important; }
    }

    .ps-drawer--mobile { background: #081827; color: var(--acm-text); }
    .ps-drawer--mobile .ps-drawer__header { border-bottom-color: rgba(201, 162, 39, .22); }
    .ps-drawer--mobile .ps-drawer__header h4,
    .ps-drawer--mobile .ps-drawer__close { color: var(--acm-gold); }

    .ps-block--earning-count { align-items: center; background: rgba(201, 162, 39, .09); border: 1px solid rgba(201, 162, 39, .26) !important; border-radius: 14px; display: flex; justify-content: space-between; padding: 14px 16px !important; }
    .ps-block--earning-count h3 { color: var(--acm-gold) !important; font-size: 1.75rem; font-weight: 800; line-height: 1; margin: 0; }
    .ps-block--earning-count small { color: var(--acm-muted) !important; }
    .ps-block--user-wellcome .ps-block__left img { border: 2px solid rgba(201, 162, 39, .55); }
    .ps-main__wrapper .invalid-feedback,
    .ps-main__wrapper .text-danger { color: #ffb4b4 !important; }
    .ps-main__wrapper .alert-success { background: rgba(34, 197, 94, .14); border-color: rgba(74, 222, 128, .3); color: #bbf7d0; }
    .ps-main__wrapper .alert-danger,
    .ps-main__wrapper .alert-warning { background: rgba(239, 68, 68, .14); border-color: rgba(248, 113, 113, .3); color: #fecaca; }

    @media (max-width: 767px) {
        .ps-main__wrapper { padding: 22px 16px; }
    }
</style>

{!! BaseHelper::googleFonts(
    'https://fonts.googleapis.com/' .
        sprintf(
            'css2?family=%s:wght@300;400;500;600;700&display=swap',
            urlencode(theme_option('primary_font', 'Inter')),
        ),
) !!}

<style>
    :root {
        --primary-font: "{{ theme_option('primary_font', 'Inter') }}";
        --primary-color: #c9a227;
        --primary-color-rgb: 201, 162, 39;
        --secondary-color: {{ $secondaryColor = '#6c7a91' }};
        --secondary-color-rgb: {{ implode(', ', BaseHelper::hexToRgb($secondaryColor)) }};
        --heading-color: inherit;
        --text-color: {{ $textColor = '#182433' }};
        --text-color-rgb: {{ implode(', ', BaseHelper::hexToRgb($textColor)) }};
        --link-color: #f3d46d;
        --link-color-rgb: 243, 212, 109;
        --link-hover-color: #fff;
        --link-hover-color-rgb: 255, 255, 255;
    }
</style>

{!! Assets::renderHeader(['core']) !!}

<style>
    /* Final layout guard: core dashboard CSS is loaded before this point. */
    @media screen and (min-width: 1200px) {
        .ps-main { align-items: stretch; display: flex; min-height: 100vh; }
        .ps-main .ps-main__sidebar { align-self: stretch; display: block !important; flex: 0 0 320px !important; max-width: 320px !important; min-width: 320px !important; padding: 0 !important; }
        .ps-main .ps-main__wrapper { flex: 1 1 auto; max-width: calc(100% - 320px) !important; min-width: 0; }
        .ps-main .ps-sidebar { min-height: 100vh; }
    }

    @media screen and (max-width: 1199px) {
        .ps-main .ps-main__sidebar { display: none !important; }
        .ps-main .ps-main__wrapper { max-width: 100%; width: 100%; }
    }
</style>
