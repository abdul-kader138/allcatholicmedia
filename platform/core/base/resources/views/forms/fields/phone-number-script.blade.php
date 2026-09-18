<link
    rel="stylesheet"
    href="{{ asset('vendor/core/core/base/libraries/intl-tel-input/css/intlTelInput.min.css') }}"
>

<style>
    .iti {
        width: 100%;
        display: block;
    }

    .iti__input {
        width: 100% !important;
    }

    .position-relative .iti {
        width: 100%;
    }

    .auth-input-icon+.iti {
        padding-left: 2.5rem;
    }

    .auth-input-icon+.iti .iti__input {
        padding-left: 3rem;
    }

    .iti__country-list {
        z-index: 1050;
        max-width: 300px;
        list-style: none !important;
        padding: 0 !important;
    }

    .contact-form .iti {
        --phone-menu-bg: #fff;
        --phone-menu-text: #172b49;
        --phone-menu-muted: #475569;
        --phone-menu-border: #64748b;
        --phone-menu-hover: #e2e8f0;
        --phone-menu-scheme: light;
    }

    html[data-theme='dark'] .contact-form .iti,
    .prayer-form-shell .contact-form .iti {
        --phone-menu-bg: var(--background-color-dark, #181823);
        --phone-menu-text: #e7eef7;
        --phone-menu-muted: #a8b5c7;
        --phone-menu-border: #475569;
        --phone-menu-hover: #2b3548;
        --phone-menu-scheme: dark;
    }

    .contact-form .iti__country-list {
        background: var(--phone-menu-bg);
        color: var(--phone-menu-text);
        border-color: var(--phone-menu-border);
        color-scheme: var(--phone-menu-scheme);
        scrollbar-color: var(--phone-menu-muted) var(--phone-menu-bg);
        white-space: normal;
        width: min(300px, calc(100vw - 32px));
    }

    .contact-form .iti__country-search-row {
        position: sticky;
        top: 0;
        z-index: 1;
        padding: 8px !important;
        background: var(--phone-menu-bg);
    }

    .contact-form .iti__country-search-row input[type="search"] {
        width: 100%;
        height: 40px !important;
        padding: 8px 10px !important;
        border: 1px solid var(--phone-menu-border) !important;
        border-radius: 4px !important;
        background: var(--phone-menu-bg) !important;
        color: var(--phone-menu-text) !important;
        font-size: 14px !important;
    }

    .contact-form .iti__country-search-row input::placeholder {
        color: var(--phone-menu-muted) !important;
    }

    .contact-form .iti__country-list [hidden] {
        display: none !important;
    }

    .contact-form .iti__country-empty {
        padding: 10px;
        color: var(--phone-menu-muted);
    }

    .contact-form .iti__country-list .iti__dial-code {
        color: var(--phone-menu-muted);
    }

    .contact-form .iti__country-list .iti__country:hover,
    .contact-form .iti__country-list .iti__country.iti__highlight {
        background: var(--phone-menu-hover);
        color: var(--phone-menu-text);
    }

    .contact-form .iti__country-search-row input[type="search"]:focus {
        outline: 2px solid var(--phone-menu-muted);
        outline-offset: -2px;
    }

    .iti__country-list li {
        list-style: none !important;
    }

    .iti--separate-dial-code .iti__selected-dial-code {
        padding-left: 6px;
        white-space: nowrap;
    }

    /*
     * The vendored intl-tel-input build has no JS-side auto-measurement of the
     * dial-code chip, so it falls back to a fixed 52px input padding-left.
     * That's only wide enough for 2-digit codes like +1/+44; 3-4 digit codes
     * (+994, +998, ...) overlap the typed number. Reserve enough room for the
     * widest real country code instead. !important is needed here because
     * page-level styling (e.g. the prayer-request theme's own
     * `.contact-form .contact-form-input` shorthand padding override) has
     * higher selector specificity and would otherwise clobber padding-left
     * and reintroduce the overlap.
     */
    .iti--separate-dial-code input[type="text"],
    .iti--separate-dial-code input[type="tel"] {
        padding-left: 88px !important;
    }

    /*
     * Give the country-code segment a visible divider from the number input,
     * and make it span the full input height explicitly via flex stretch
     * rather than relying on the library's own `height: 100%` (which needs
     * the percentage to resolve against the absolutely-positioned
     * .iti__flag-container and can end up collapsed to content height
     * depending on the browser/layout context).
     */
    .iti--separate-dial-code .iti__flag-container {
        top: 0 !important;
        bottom: 0 !important;
        height: auto !important;
        display: flex !important;
        border-right: 1px solid rgba(127, 127, 127, 0.35);
    }

    .iti--separate-dial-code .iti__selected-flag {
        height: auto !important;
        align-self: stretch !important;
        background-color: rgba(127, 127, 127, 0.12);
    }

    .iti--separate-dial-code .iti__selected-flag:hover {
        background-color: rgba(127, 127, 127, 0.2);
    }

    body[dir="rtl"] .iti {
        direction: ltr;
        text-align: left;
    }

    body[dir="rtl"] .iti__input {
        direction: ltr;
        text-align: left;
    }

    body[dir="rtl"] .auth-input-icon+.iti {
        padding-left: 0;
        padding-right: 2.5rem;
    }

    body[dir="rtl"] .auth-input-icon+.iti .iti__input {
        padding-left: 0;
        padding-right: 3rem;
    }

    body[dir="rtl"] .iti--separate-dial-code .iti__selected-dial-code {
        padding-left: 0;
        padding-right: 6px;
    }

    body[dir="rtl"] .iti--separate-dial-code input[type="text"],
    body[dir="rtl"] .iti--separate-dial-code input[type="tel"] {
        padding-left: 6px !important;
        padding-right: 88px !important;
    }

    body[dir="rtl"] .iti__country-list {
        text-align: left;
    }
</style>

<script src="{{ asset('vendor/core/core/base/libraries/intl-tel-input/js/intlTelInput.min.js') }}"></script>

<script>
    (function() {
        if (window.bbPhoneNumberFieldInitialized) {
            return;
        }

        window.bbPhoneNumberFieldInitialized = true;

        function addCountrySearch(element) {
            const wrapper = element.closest('.iti');
            const list = wrapper.querySelector('.iti__country-list');
            if (!list) return;

            const countries = Array.from(list.querySelectorAll('.iti__country'));
            const dividers = Array.from(list.querySelectorAll('.iti__divider'));
            const row = document.createElement('li');
            row.className = 'iti__country-search-row';
            row.setAttribute('role', 'presentation');
            const search = document.createElement('input');
            search.type = 'search';
            search.placeholder = @json(__('Search country or dial code'));
            search.setAttribute('aria-label', search.placeholder);
            search.autocomplete = 'off';
            row.appendChild(search);
            list.prepend(row);
            const empty = document.createElement('li');
            empty.className = 'iti__country-empty';
            empty.setAttribute('role', 'status');
            empty.textContent = @json(__('No countries found'));
            empty.hidden = true;
            list.appendChild(empty);
            let matches = countries;
            let active = -1;

            const filter = function() {
                const query = search.value.trim().toLocaleLowerCase();
                const seen = new Set();
                matches = countries.filter(function(country) {
                    const code = country.dataset.countryCode;
                    const text = country.textContent.toLocaleLowerCase();
                    const match = (!query || text.includes(query) || code.includes(query)) && !seen.has(code);
                    country.hidden = !match;
                    country.classList.remove('iti__highlight');
                    if (match) seen.add(code);
                    return match;
                });
                dividers.forEach(divider => { divider.hidden = true; });
                empty.hidden = matches.length > 0;
                active = -1;
                list.scrollTop = 0;
            };

            // Keep typing/clicks in the search box away from the legacy dropdown handlers.
            search.addEventListener('click', event => event.stopPropagation());
            search.addEventListener('input', filter);
            search.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') return;
                event.stopPropagation();
                if (event.key === 'Tab') {
                    document.dispatchEvent(new KeyboardEvent('keydown', {key: 'Escape'}));
                    wrapper.querySelector('.iti__selected-flag').focus();
                } else if (event.key === 'ArrowDown' || event.key === 'ArrowUp') {
                    event.preventDefault();
                    if (!matches.length) return;
                    active = (active + (event.key === 'ArrowDown' ? 1 : -1) + matches.length) % matches.length;
                    countries.forEach(country => country.classList.remove('iti__highlight'));
                    matches[active].classList.add('iti__highlight');
                    matches[active].scrollIntoView({block: 'nearest'});
                } else if (event.key === 'Enter') {
                    event.preventDefault();
                    if (matches.length) matches[Math.max(0, active)].click();
                }
            });
            element.addEventListener('open:countrydropdown', function() {
                search.value = '';
                filter();
                search.focus({preventScroll: true});
            });
        }

        function initPhoneNumberFields() {
            document.querySelectorAll('.js-phone-number-mask[data-country-code-selection="true"]').forEach(function(element) {
                if (element.dataset.itiInitialized === 'true') {
                    return;
                }

                const hasCountryCodeSelection = element.dataset.countryCodeSelection === 'true';

                @php
                    $selectedCountries = json_decode(setting('phone_number_available_countries', '[]'), true) ?: [];
                    $availableCountries = array_map('strtolower', $selectedCountries);
                @endphp

                const availableCountries = @json($availableCountries);

                const getDefaultCountry = function() {
                    if (availableCountries.length === 0) {
                        return 'us';
                    }
                    return availableCountries.includes('us') ? 'us' : availableCountries[0];
                };

                const defaultCountry = getDefaultCountry();

                const config = {
                    geoIpLookup: function(callback) {
                        const cacheKey = 'ipinfo_country_code';
                        const cacheExpiry = 'ipinfo_country_expiry';
                        const cachedCountry = localStorage.getItem(cacheKey);
                        const cachedExpiry = localStorage.getItem(cacheExpiry);
                        const now = new Date().getTime();

                        if (cachedCountry && cachedExpiry && now < parseInt(cachedExpiry)) {
                            const isCountryAvailable = availableCountries.length === 0 || availableCountries.includes(cachedCountry.toLowerCase());
                            callback(isCountryAvailable ? cachedCountry : defaultCountry);
                            return;
                        }

                        fetch('https://ipinfo.io/json', {
                                credentials: 'omit',
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(function(response) {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(function(data) {
                                let countryCode = data && data.country ? data.country.toLowerCase() : defaultCountry;

                                const isCountryAvailable = availableCountries.length === 0 || availableCountries.includes(countryCode);

                                if (!isCountryAvailable) {
                                    countryCode = defaultCountry;
                                }

                                if (countryCode && countryCode !== defaultCountry) {
                                    try {
                                        localStorage.setItem(cacheKey, countryCode);
                                        localStorage.setItem(cacheExpiry, (now + 24 * 60 * 60 *
                                            1000).toString());
                                    } catch (e) {
                                        console.warn('Could not cache country code:', e);
                                    }
                                }

                                callback(countryCode);
                            })
                            .catch(function() {
                                callback(defaultCountry);
                            });
                    },
                    initialCountry: 'auto',
                    utilsScript: '{{ asset('vendor/core/core/base/libraries/intl-tel-input/js/utils.js') }}',
                };

                if (availableCountries && availableCountries.length > 0) {
                    config.onlyCountries = availableCountries;
                }

                if (hasCountryCodeSelection) {
                    config.separateDialCode = true;
                    config.nationalMode = false;
                    config.autoHideDialCode = false;
                }

                const iti = window.intlTelInput(element, config);
                element.dataset.itiInitialized = 'true';

                if (element.closest('.contact-form')) {
                    addCountrySearch(element);
                }

                if (hasCountryCodeSelection && element.closest('.contact-form')) {
                    const wrapper = element.closest('.iti');
                    const selector = wrapper.querySelector('.iti__selected-flag');

                    // Measure the actual selector, including the flag, dial code and arrow.
                    // Inline priority also protects this spacing from theme padding shorthands.
                    const updatePhoneSpacing = function() {
                        if (!element.isConnected || !selector) {
                            return;
                        }

                        const inputBounds = element.getBoundingClientRect();
                        const selectorBounds = selector.getBoundingClientRect();
                        if (!inputBounds.width || !selectorBounds.width) {
                            return;
                        }

                        const onLeft = Math.abs(selectorBounds.left - inputBounds.left)
                            <= Math.abs(inputBounds.right - selectorBounds.right);
                        const reservedSpace = onLeft
                            ? selectorBounds.right - inputBounds.left
                            : inputBounds.right - selectorBounds.left;

                        element.style.setProperty('padding-left', onLeft ? Math.ceil(reservedSpace + 12) + 'px' : '12px', 'important');
                        element.style.setProperty('padding-right', onLeft ? '12px' : Math.ceil(reservedSpace + 12) + 'px', 'important');
                    };

                    updatePhoneSpacing();
                    element.addEventListener('countrychange', updatePhoneSpacing);
                    window.addEventListener('resize', updatePhoneSpacing);
                    if (window.ResizeObserver && selector) {
                        const spacingObserver = new ResizeObserver(updatePhoneSpacing);
                        spacingObserver.observe(selector);
                        spacingObserver.observe(element);
                    }
                    if (document.fonts) {
                        document.fonts.ready.then(updatePhoneSpacing);
                    }
                }

                if (hasCountryCodeSelection) {
                    if (element.closest('.contact-form')) {
                        const countryField = document.createElement('input');
                        countryField.type = 'hidden';
                        countryField.name = element.name.replace(/_display$/, '') + '_country';
                        element.after(countryField);
                        element.inputMode = 'tel';

                        const phoneError = document.createElement('div');
                        phoneError.id = element.id + '-country-error';
                        phoneError.className = 'invalid-feedback';
                        phoneError.setAttribute('aria-live', 'polite');
                        phoneError.style.display = 'none';
                        element.closest('.iti').after(phoneError);
                        const describedBy = element.getAttribute('aria-describedby');
                        element.setAttribute('aria-describedby', [describedBy, phoneError.id].filter(Boolean).join(' '));

                        const validatePhone = function() {
                            const country = iti.getSelectedCountryData();
                            countryField.value = (country.iso2 || '').toUpperCase();
                            const value = element.value.trim();
                            const valid = !value || (/^\+?[0-9 () .-]+$/.test(value)
                                && (!window.intlTelInputUtils || iti.isValidNumber()));
                            phoneError.textContent = valid ? '' : @json(__('Please enter a valid phone number for the selected country.'));
                            phoneError.style.display = valid ? 'none' : 'block';
                            element.classList.toggle('is-invalid', !valid);
                            element.setAttribute('aria-invalid', valid ? 'false' : 'true');
                            return valid;
                        };
                        element.addEventListener('input', validatePhone);
                        element.addEventListener('countrychange', validatePhone);
                        element.addEventListener('blur', validatePhone);
                        iti.promise.then(validatePhone);
                        validatePhone();
                        element.closest('form').addEventListener('submit', function(event) {
                            if (!validatePhone()) {
                                event.preventDefault();
                                event.stopImmediatePropagation();
                                // Show the other field errors through the existing form validator too.
                                const validator = window.jQuery && window.jQuery(element.form).data('validator');
                                if (validator) validator.form();
                                element.setAttribute('aria-invalid', 'true');
                                element.focus();
                            }
                        }, true);
                        element.closest('form').addEventListener('reset', function() {
                            setTimeout(validatePhone, 0);
                        });
                    }

                    const hiddenFieldId = element.id + '-full';
                    const hiddenField = document.getElementById(hiddenFieldId);

                    if (hiddenField) {
                        const updateHiddenField = function() {
                            const fullNumber = iti.getNumber();
                            const oldValue = hiddenField.value;
                            let newValue = '';

                            if (fullNumber) {
                                newValue = fullNumber;
                            } else if (element.value) {
                                const selectedCountryData = iti.getSelectedCountryData();
                                if (selectedCountryData && selectedCountryData.dialCode) {
                                    newValue = '+' + selectedCountryData.dialCode + element.value
                                        .replace(/\D/g, '');
                                } else {
                                    newValue = element.value;
                                }
                            }

                            hiddenField.value = newValue;

                            if (oldValue !== newValue) {
                                const changeEvent = new Event('change', {
                                    bubbles: true
                                });
                                element.dispatchEvent(changeEvent);
                            }
                        };

                        const initialValue = hiddenField.value || element.value;

                        if (initialValue) {
                            if (initialValue.startsWith('+')) {
                                iti.setNumber(initialValue);
                            } else if (initialValue) {
                                element.value = initialValue;
                            }

                            setTimeout(function() {
                                updateHiddenField();
                            }, 100);
                        }

                        element.addEventListener('countrychange', updateHiddenField);
                        element.addEventListener('input', updateHiddenField);
                        element.addEventListener('blur', updateHiddenField);

                        const form = element.closest('form');
                        if (form) {
                            form.addEventListener('submit', function() {
                                updateHiddenField();
                            });
                        }
                    }
                }
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initPhoneNumberFields);
        } else {
            initPhoneNumberFields();
        }

        document.addEventListener('payment-form-reloaded', function() {
            initPhoneNumberFields();
        });
    })();
</script>
