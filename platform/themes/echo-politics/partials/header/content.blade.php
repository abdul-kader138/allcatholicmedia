<style>
/* Hide dark/light toggle from navbar */
.header-action .rts-darkmode {
    display: none !important;
}

/* Ensure hamburger button is visible and styled on mobile */
.echo-header-top-menu-bar button {
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 6px;
    color: var(--color-heading-1, #1e293b);
}

html[data-theme='dark'] .echo-header-top-menu-bar button {
    color: #ffffff;
}

.acm-header-actions {
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    flex-shrink: 0;
    gap: 12px;
    padding-right: 0;
}

.acm-header-actions .sign-in-area,
.acm-header-actions .action-buttons-content,
.acm-header-actions .action-buttons-inner,
.acm-header-actions .header-action,
.acm-header-actions .echo-header-top-social-media {
    margin: 0 !important;
}

.acm-header-actions .action-buttons-content,
.acm-header-actions .action-buttons-inner,
.acm-header-actions .echo-header-top-social-media {
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
}

.acm-header-actions .action-buttons-content,
.acm-header-actions .action-buttons-inner {
    gap: 0 !important;
}

.acm-header-actions .header-action {
    margin-left: 8px !important;
    margin-inline-start: 8px !important;
}

.acm-header-row {
    display: flex !important;
    position: relative;
    align-items: center !important;
    gap: 12px;
    flex-wrap: nowrap !important;
}

.acm-header-row .echo-home-1-menu {
    min-width: 0;
}

.echo-desktop-menu {
    flex-wrap: nowrap !important;
}

.echo-desktop-menu li.menu-item {
    flex-shrink: 0;
}

.echo-desktop-menu li.menu-item > a {
    padding: 0 10px !important;
}

.acm-header-actions .sign-in-area {
    flex-shrink: 0 !important;
}

.acm-header-actions .sign-in-area a.sign-in-btn {
    display: flex !important;
    align-items: center;
    gap: 8px !important;
    white-space: nowrap !important;
}

.acm-header-actions .sign-in-area .wrapper-avatar,
.acm-header-actions .sign-in-area span.wrapper-avatar {
    display: flex !important;
    align-items: center;
    justify-content: center;
    width: 32px !important;
    height: 32px !important;
    min-width: 32px !important;
    max-width: 32px !important;
    max-height: 32px !important;
    flex-shrink: 0 !important;
    border-radius: 50% !important;
    overflow: hidden !important;
    background: rgba(255, 255, 255, 0.12);
}

.acm-header-actions .sign-in-area .wrapper-avatar img.avatar {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
    max-width: 100% !important;
    max-height: 100% !important;
    min-width: 0 !important;
    object-fit: cover !important;
    position: static !important;
    inset: auto !important;
}

.acm-header-actions .sign-in-area .wrapper-avatar.acm-avatar-fallback::before {
    content: "\f007";
    font-family: "Font Awesome 6 Pro", "Font Awesome 6 Free";
    font-weight: 400;
    font-size: 14px;
    color: currentColor;
}

.acm-header-actions .sign-in-area .user-name {
    max-width: 110px !important;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

#acm-suggest-box {
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    right: 0;
    background: var(--bg-card, #fff);
    border: 1px solid var(--border-color, #e2e8f0);
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
    z-index: 9999;
    overflow: hidden;
    display: none;
}

.acm-suggest-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    font-size: .88rem;
    color: var(--color-heading-1, #1e293b);
    text-decoration: none;
    border-bottom: 1px solid var(--border-color, #e2e8f0);
}

.acm-suggest-item:last-child {
    border-bottom: none;
}

.acm-suggest-item:hover,
.acm-suggest-item.highlighted {
    background: var(--bg-light, #f0f5fa);
}

.acm-suggest-icon {
    font-size: 1rem;
    flex-shrink: 0;
}

.acm-suggest-label {
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.acm-suggest-type {
    font-size: .72rem;
    color: #94a3b8;
    flex-shrink: 0;
}

html[data-theme='dark'] #acm-suggest-box {
    background: #1a1d2e;
    border-color: rgba(255, 255, 255, .1);
}

html[data-theme='dark'] .acm-suggest-item {
    color: #f1f5f9;
    border-color: rgba(255, 255, 255, .06);
}

html[data-theme='dark'] .acm-suggest-item:hover,
.acm-suggest-item.highlighted {
    background: #0f172a;
}
</style>
<script>
(function() {
    'use strict';
    var SUGGEST_URL = '{{ route("api.search-suggest") }}';
    var timer = null;
    var activeIdx = -1;

    function initAutocomplete(input) {
        if (!input) return;

        // Wrap relative to the input's own container, NOT .search-input-area
        // (that element is the full-screen overlay panel and must stay position:fixed)
        var area = input.closest('.input-div') || input.parentElement;
        area.style.position = 'relative';

        var box = document.createElement('div');
        box.id = 'acm-suggest-box';
        area.appendChild(box);

        function showResults(items) {
            box.innerHTML = '';
            activeIdx = -1;
            if (!items.length) {
                box.style.display = 'none';
                return;
            }
            items.forEach(function(item, i) {
                var a = document.createElement('a');
                a.href = item.url;
                a.className = 'acm-suggest-item';
                a.dataset.idx = i;
                a.innerHTML = '<span class="acm-suggest-icon">' + item.icon + '</span>' +
                    '<span class="acm-suggest-label">' + item.label + '</span>' +
                    '<span class="acm-suggest-type">' + item.type + '</span>';
                box.appendChild(a);
            });
            box.style.display = 'block';
        }

        function fetch_suggest(q) {
            if (q.length < 2) {
                box.style.display = 'none';
                return;
            }
            fetch(SUGGEST_URL + '?q=' + encodeURIComponent(q), {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(function(r) {
                    return r.json();
                })
                .then(function(data) {
                    showResults(data.results || []);
                })
                .catch(function() {
                    box.style.display = 'none';
                });
        }

        input.addEventListener('input', function() {
            clearTimeout(timer);
            var q = this.value.trim();
            timer = setTimeout(function() {
                fetch_suggest(q);
            }, 260);
        });


        input.addEventListener('keydown', function(e) {
            var items = box.querySelectorAll('.acm-suggest-item');
            if (!items.length) return;
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                activeIdx = Math.min(activeIdx + 1, items.length - 1);
                items.forEach(function(el, i) {
                    el.classList.toggle('highlighted', i === activeIdx);
                });
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                activeIdx = Math.max(activeIdx - 1, -1);
                items.forEach(function(el, i) {
                    el.classList.toggle('highlighted', i === activeIdx);
                });
            } else if (e.key === 'Enter' && activeIdx >= 0) {
                e.preventDefault();
                items[activeIdx].click();
            } else if (e.key === 'Escape') {
                box.style.display = 'none';
            }
        });

        document.addEventListener('click', function(e) {
            if (!area.contains(e.target)) box.style.display = 'none';
        });
    }

    // Init on the header search input (may not exist until search overlay opens)
    document.addEventListener('DOMContentLoaded', function() {
        initAutocomplete(document.getElementById('searchInput1'));
    });
}());
</script>

<div class="echo-home-1-menu header-three">
    <div class="echo-site-main-logo-menu-social">
        <div class="hm-7-container">
            <div class="d-flex align-items-center justify-content-between acm-header-row">
                <div class="logo-header-sidebar" style="margin-right: 18px;">
                    {!! Theme::partial('header.partials.logo', ['onlyLogoLight' => true]) !!}
                </div>

                <div class="echo-home-1-menu d-none d-lg-flex justify-content-center">
                    {!!
                    Menu::renderMenuLocation('main-menu', [
                    'options' => ['class' => 'list-unstyled echo-desktop-menu'],
                    'view' => 'main-menu',
                    ])
                    !!}
                </div>

                <div class="d-flex align-items-center acm-header-actions">
                    @if (is_plugin_active('language') && theme_option('language_switcher_enabled', true))
                    {!! Theme::partial('language-switcher') !!}
                    @endif

                    {!! dynamic_sidebar('header_sidebar') !!}

                    {!! Theme::partial('account') !!}

                    {{-- Mobile hamburger menu button --}}
                    <div class="echo-header-top-menu-bar menu-btn d-lg-none d-block ms-2">
                        <button data-bb-toggle="menu-sidebar" type="button"
                            aria-label="{{ __('Toggle Sidebar Menu') }}">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.526001 0.953461H20V3.11724H0.526001V0.953461ZM7.01733 8.52668H20V10.6905H7.01733V8.52668ZM0.526001 16.0999H20V18.2637H0.526001V16.0999Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
