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
     * widest real country code instead.
     */
    .iti--separate-dial-code input[type="text"],
    .iti--separate-dial-code input[type="tel"] {
        padding-left: 88px;
    }

    /* Give the country-code segment a visible divider from the number input. */
    .iti--separate-dial-code .iti__flag-container {
        border-right: 1px solid rgba(127, 127, 127, 0.35);
    }

    .iti--separate-dial-code .iti__selected-flag {
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
        padding-left: 6px;
        padding-right: 88px;
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

                if (hasCountryCodeSelection) {
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
