<style>
/* ── ACM Mobile Sidebar — echo-politics ── */

/* Force dark background so white text is readable */
#side-bar {
    background:
        radial-gradient(circle at top left, rgba(236, 201, 92, 0.18), transparent 24%),
        radial-gradient(circle at 85% 18%, rgba(129, 168, 255, 0.16), transparent 26%),
        linear-gradient(180deg, #244aa8 0%, #1d3f97 38%, #17347d 72%, #11285f 100%) !important;
    padding: 0 0 18px !important;
    display: flex !important;
    flex-direction: column !important;
    overflow: hidden !important;
    overflow-y: auto !important;
    width: min(340px, 88vw) !important;
    max-width: 88vw !important;
    left: 0 !important;
    right: auto !important;
    top: 0 !important;
    z-index: 99999 !important;
    box-shadow: 24px 0 60px rgba(0, 0, 0, 0.45) !important;
    transform: translateX(-100%) !important;
    transition: transform .35s ease, opacity .25s ease !important;
    opacity: 0 !important;
    visibility: hidden !important;
}

#side-bar.show {
    left: 0 !important;
    right: auto !important;
    transform: translateX(0) !important;
    opacity: 1 !important;
    visibility: visible !important;
}

#side-bar .menu-sidebar-loading-wrapper {
    display: none !important;
}

#side-bar .inner,
#side-bar .acm-sb-menu-wrap,
#side-bar .mobile-menu,
#side-bar .mobile-menu nav,
#side-bar .mainmenu {
    width: 100% !important;
}

/* Logo banner at top */
.acm-sb-logo-strip {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    padding: 18px 18px 14px;
    border-bottom: 1px solid rgba(255,255,255,.08);
    margin-bottom: 0;
    position: sticky;
    top: 0;
    z-index: 5;
    background: linear-gradient(180deg, rgba(8, 19, 43, 0.96), rgba(8, 19, 43, 0.88));
    backdrop-filter: blur(12px);
}

.acm-sb-logo-strip .echo-site-logo img,
.acm-sb-logo-strip img {
    height: 32px !important;
    width: auto;
    object-fit: contain;
}

.acm-sb-welcome {
    border-bottom: 1px solid rgba(255,255,255,.08);
    color: rgba(226,232,240,.72);
    padding: 16px 18px 14px;
}
.acm-sb-welcome strong {
    color: #f3d46d;
    display: block;
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 1.08rem;
    margin-bottom: 4px;
}
.acm-sb-welcome span { font-size: .76rem; line-height: 1.5; }

/* Close button */
.acm-sb-close-wrap {
    padding: 0 !important;
    margin: 0 !important;
}

#side-bar .close-icon-menu,
#side-bar button.close-icon-menu {
    background: rgba(255,255,255,.06) !important;
    border-radius: 6px !important;
    border: 1px solid rgba(255,255,255,.12) !important;
    position: static !important;
    top: auto !important;
    left: auto !important;
    width: 36px !important;
    height: 36px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
}
#side-bar .close-icon-menu i {
    color: #e2e8f0 !important;
    font-size: 16px !important;
}

/* ── Nav items ── */
.acm-sb-menu-wrap .mobile-menu {
    display: block !important;
    margin: 0;
}

.acm-sb-menu-wrap .nav-main {
    display: flex !important;
    flex-direction: column !important;
    width: 100% !important;
    margin-top: 0 !important;
}

.acm-sb-menu-wrap {
    padding: 14px 14px 0;
}

.acm-sb-menu-wrap .mobile-menu nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

/* Top-level links */
.acm-sb-menu-wrap .mobile-menu nav > ul > li > a {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    padding: 15px 16px !important;
    color: #e2e8f0 !important;
    font-size: 1rem !important;
    font-weight: 600 !important;
    text-decoration: none !important;
    border: 1px solid rgba(255,255,255,.07) !important;
    border-radius: 16px !important;
    background: rgba(255,255,255,.03) !important;
    margin-bottom: 10px !important;
    position: relative;
    transition: transform .18s ease, background .18s ease, border-color .18s ease, color .18s ease;
}

.acm-sb-menu-wrap .mobile-menu nav > ul > li,
.acm-sb-menu-wrap .mobile-menu nav ul ul li {
    margin: 0 !important;
}
.acm-sb-menu-wrap .mobile-menu nav > ul > li > a:hover {
    background: rgba(255,255,255,.06) !important;
    border-color: rgba(201,162,39,.22) !important;
    color: #fff !important;
    transform: translateX(2px);
}

.acm-sb-menu-wrap .mobile-menu nav > ul > li.mm-active > a {
    background: linear-gradient(180deg, rgba(201,162,39,.14), rgba(255,255,255,.04)) !important;
    border-color: rgba(201,162,39,.3) !important;
    color: #fff !important;
}

.acm-sb-menu-wrap .mobile-menu nav a:focus-visible,
#side-bar .close-icon-menu:focus-visible,
.acm-sb-quick-actions a:focus-visible {
    outline: 3px solid rgba(243,212,109,.9) !important;
    outline-offset: 2px;
}

.acm-sb-quick-actions {
    display: grid;
    gap: 8px;
    grid-template-columns: 1fr 1fr;
    padding: 16px 14px calc(12px + env(safe-area-inset-bottom));
}
.acm-sb-quick-actions a {
    align-items: center;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 12px;
    color: #f8fafc;
    display: flex;
    font-size: .78rem;
    font-weight: 700;
    justify-content: center;
    min-height: 44px;
    padding: 8px 10px;
    text-align: center;
    text-decoration: none;
}
.acm-sb-quick-actions a:first-child { background: #c9a227; border-color: #c9a227; color: #101a2b; }

/* Hide the base ::after arrow on all links, add our own for parents */
.acm-sb-menu-wrap .mobile-menu nav ul li a::after {
    display: none !important;
}
.acm-sb-menu-wrap .mobile-menu nav ul li.has-droupdown > a .acm-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    border: 1px solid rgba(255,255,255,.16);
    border-radius: 999px;
    font-size: .7rem;
    color: rgba(201,162,39,.88);
    background: rgba(255,255,255,.03);
    transition: transform .22s;
    flex-shrink: 0;
}
.acm-sb-menu-wrap .mobile-menu nav ul li.has-droupdown.mm-active > a .acm-arrow {
    transform: rotate(180deg);
}

/* Sub-menu */
.acm-sb-menu-wrap .mobile-menu nav ul ul {
    background: rgba(255,255,255,.03);
    border: 1px solid rgba(255,255,255,.06);
    border-radius: 14px;
    margin: 0 4px 10px;
    overflow: hidden;
    padding-left: 0;
}
.acm-sb-menu-wrap .mobile-menu nav ul ul li a {
    padding: 11px 16px 11px 36px !important;
    color: #cbd5e1 !important;
    font-size: .85rem !important;
    border-bottom: 1px solid rgba(255,255,255,.04) !important;
    display: block !important;
}
.acm-sb-menu-wrap .mobile-menu nav ul ul li a:hover {
    color: #fff !important;
    background: rgba(255,255,255,.04) !important;
}

@media (max-width: 479px) {
    #side-bar {
        width: min(300px, 90vw) !important;
        max-width: 90vw !important;
    }

    .acm-sb-logo-strip {
        padding: 16px 14px 12px;
    }

    .acm-sb-menu-wrap .mobile-menu nav > ul > li > a {
        padding: 13px 14px !important;
        font-size: .9rem !important;
    }

    .acm-sb-menu-wrap .mobile-menu nav ul ul li a {
        padding: 10px 14px 10px 28px !important;
    }
}
/* Brand-aligned small-screen treatment */
#side-bar {
    background: radial-gradient(circle at 100% 0, rgba(201,162,39,.12), transparent 30%), linear-gradient(180deg, #06111d 0%, #0a1b2d 52%, #06111d 100%) !important;
    box-shadow: 24px 0 60px rgba(0,0,0,.55) !important;
    width: min(360px, 92vw) !important;
    max-width: 92vw !important;
}
.acm-sb-logo-strip { background: rgba(6,17,29,.97); border-bottom-color: rgba(201,162,39,.22); }
#side-bar .close-icon-menu { background: transparent !important; border-color: rgba(201,162,39,.45) !important; border-radius: 50% !important; }
#side-bar .close-icon-menu i { color: #f3d46d !important; }
.acm-sb-welcome { padding: 22px 22px 18px; }
.acm-sb-welcome strong { color: #c9a227; }
.acm-sb-menu-wrap { padding: 10px 18px 0; }
.acm-sb-menu-wrap .mobile-menu nav > ul > li > a { background: transparent !important; border: 0 !important; border-bottom: 1px solid rgba(255,255,255,.09) !important; border-radius: 0 !important; margin-bottom: 0 !important; padding: 16px 10px !important; }
.acm-sb-menu-wrap .mobile-menu nav > ul > li > a:hover { background: rgba(255,255,255,.04) !important; }
.acm-sb-menu-wrap .mobile-menu nav > ul > li.mm-active > a { background: rgba(201,162,39,.08) !important; border-color: #c9a227 !important; box-shadow: inset 3px 0 0 #c9a227; color: #f3d46d !important; }
.acm-sb-menu-wrap .mobile-menu nav ul ul { background: rgba(255,255,255,.025); border: 0; border-left: 1px solid rgba(201,162,39,.3); border-radius: 0; margin: 0 0 0 10px; }
.acm-sb-menu-wrap .mobile-menu nav ul ul li a { padding: 13px 16px 13px 20px !important; }
.acm-sb-quick-actions { border-top: 1px solid rgba(201,162,39,.2); padding-left: 0; padding-right: 0; }
.acm-sb-quick-actions a { border-radius: 4px; }
@media (max-width: 479px) {
    #side-bar { width: 100vw !important; max-width: 100vw !important; }
    .acm-sb-menu-wrap .mobile-menu nav > ul > li > a { padding: 15px 10px !important; }
}
</style>

{{-- Logo --}}
<div class="acm-sb-logo-strip">
    {!! Theme::partial('header.partials.logo', ['onlyLogoLight' => true]) !!}

    <div class="inner acm-sb-close-wrap">
        <button class="close-icon-menu" type="button">
            <span class="sr-only">{{ __('Close') }}</span>
            <i class="far fa-times"></i>
        </button>
    </div>
</div>

<div class="acm-sb-welcome">
    <strong>{{ __('All Catholic Media') }}</strong>
    <span>{{ __('Watch, learn, pray, and stay connected wherever you are.') }}</span>
</div>

{{-- Navigation --}}
<div class="acm-sb-menu-wrap" style="flex:1; overflow-y:auto;">
    <div class="mobile-menu">
        <nav class="nav-main mainmenu-nav d-flex flex-column justify-content-center">
            {!!
               Menu::renderMenuLocation('main-menu', [
                   'options' => ['class' => 'mainmenu', 'id' => 'mobile-menu-active'],
                    'view' => 'main-menu-mobile',
               ])
            !!}
        </nav>
        <div class="acm-sb-quick-actions" aria-label="{{ __('Quick actions') }}">
            <a href="{{ route('donation.guest.form') }}">{{ __('Support Us') }}</a>
            <a href="{{ route('public.prayer-request') }}">{{ __('Prayer Request') }}</a>
        </div>
    </div>
</div>

<script>
// Re-init metisMenu after AJAX injection (id no longer used — target by class)
(function() {
    var el = document.querySelector('#side-bar .mainmenu');
    if (el && typeof jQuery !== 'undefined' && jQuery.fn.metisMenu) {
        jQuery(el).metisMenu();
    }
})();
</script>
