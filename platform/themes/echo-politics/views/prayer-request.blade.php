@php
    use Botble\Contact\Forms\Fronts\ContactForm;

    Theme::layout('full-width');
    SeoHelper::setTitle('Prayer Request - All Catholic Media');
    SeoHelper::setDescription('Share your prayer intention with All Catholic Media. We would be honored to pray with you and for you.');

    $contactForm = ContactForm::create();
@endphp

<style>
.prayer-request-page {
    background:
        radial-gradient(circle at top left, rgba(201, 162, 39, 0.14), transparent 28%),
        radial-gradient(circle at 85% 18%, rgba(66, 120, 201, 0.20), transparent 26%),
        linear-gradient(180deg, #081524 0%, #0d223a 40%, #07111d 100%);
    color: #e7eef7;
    overflow: hidden;
}

.prayer-request-page a {
    color: inherit;
}

.prayer-shell {
    margin: 0 auto;
    max-width: 1180px;
    padding: 0 24px;
    position: relative;
    z-index: 1;
}

.prayer-hero {
    padding: 88px 0 54px;
    position: relative;
}

.prayer-hero-grid {
    align-items: center;
    display: grid;
    gap: 34px;
    grid-template-columns: minmax(0, 1.2fr) minmax(320px, .8fr);
}

.prayer-kicker {
    color: #d4b04b;
    font-size: .84rem;
    font-weight: 800;
    letter-spacing: .22em;
    margin-bottom: 14px;
    text-transform: uppercase;
}

.prayer-title {
    color: #fff;
    font-family: var(--heading-font, 'Bona Nova', serif);
    font-size: clamp(2.5rem, 6vw, 4.7rem);
    font-weight: 700;
    letter-spacing: -.03em;
    line-height: 1.02;
    margin: 0 0 18px;
}

.prayer-title span {
    color: #d4b04b;
}

.prayer-lead {
    color: rgba(231, 238, 247, 0.78);
    font-size: 1.08rem;
    line-height: 1.9;
    margin: 0;
    max-width: 690px;
}

.prayer-hero-card {
    backdrop-filter: blur(14px);
    background: linear-gradient(180deg, rgba(255,255,255,0.10) 0%, rgba(255,255,255,0.04) 100%);
    border: 1px solid rgba(255,255,255,0.10);
    border-radius: 30px;
    box-shadow: 0 28px 70px rgba(0, 0, 0, 0.24);
    overflow: hidden;
    padding: 28px;
    position: relative;
}

.prayer-hero-card::before {
    background: linear-gradient(135deg, rgba(212,176,75,0.26), transparent 50%);
    content: '';
    inset: 0;
    pointer-events: none;
    position: absolute;
}

.prayer-hero-card > * {
    position: relative;
    z-index: 1;
}

.prayer-cross {
    align-items: center;
    background: rgba(212,176,75,0.12);
    border: 1px solid rgba(212,176,75,0.22);
    border-radius: 22px;
    display: inline-flex;
    height: 66px;
    justify-content: center;
    margin-bottom: 20px;
    width: 66px;
}

.prayer-hero-card h2 {
    color: #fff;
    font-family: var(--heading-font, 'Bona Nova', serif);
    font-size: 1.7rem;
    margin: 0 0 12px;
}

.prayer-hero-card p {
    color: rgba(231, 238, 247, 0.76);
    line-height: 1.8;
    margin: 0 0 18px;
}

.prayer-tag-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.prayer-tag {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 999px;
    color: #f7f2e2;
    font-size: .84rem;
    font-weight: 600;
    padding: 10px 14px;
}

.prayer-content {
    padding: 16px 0 90px;
}

.prayer-panels {
    display: grid;
    gap: 28px;
    grid-template-columns: minmax(0, 1.1fr) minmax(280px, .9fr);
}

.prayer-panel,
.prayer-side-card {
    backdrop-filter: blur(12px);
    background: linear-gradient(180deg, rgba(7,16,27,0.84) 0%, rgba(11,23,38,0.88) 100%);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 28px;
    box-shadow: 0 24px 60px rgba(0,0,0,0.22);
}

.prayer-panel {
    padding: 34px 34px 22px;
}

.prayer-side-stack {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.prayer-side-card {
    padding: 26px;
}

.panel-eyebrow {
    color: #d4b04b;
    font-size: .78rem;
    font-weight: 800;
    letter-spacing: .18em;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.panel-title {
    color: #fff;
    font-family: var(--heading-font, 'Bona Nova', serif);
    font-size: 2rem;
    line-height: 1.12;
    margin: 0 0 14px;
}

.panel-copy {
    color: rgba(231, 238, 247, 0.74);
    line-height: 1.85;
    margin: 0 0 24px;
    max-width: 720px;
}

.prayer-points {
    display: grid;
    gap: 14px;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    margin-bottom: 28px;
}

.prayer-point {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 22px;
    padding: 18px;
}

.prayer-point strong {
    color: #fff;
    display: block;
    font-size: 1rem;
    margin-bottom: 8px;
}

.prayer-point span {
    color: rgba(231, 238, 247, 0.68);
    font-size: .94rem;
    line-height: 1.7;
}

.prayer-form-shell {
    background: linear-gradient(180deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.015) 100%);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 24px;
    padding: 26px 22px 8px;
}

.prayer-form-shell .echo-contact-area,
.prayer-form-shell .echo-contact-content,
.prayer-form-shell .echo-contact-full-content {
    background: transparent !important;
    padding: 0 !important;
}

.prayer-form-shell .echo-contact-title,
.prayer-form-shell .echo-contact-sub-title,
.prayer-form-shell .echo-info {
    display: none !important;
}

.prayer-form-shell .row > div {
    width: 100%;
}

.prayer-form-shell .echo-contact-input-field {
    padding: 0 !important;
}

.prayer-form-shell .contact-form .contact-form-group {
    margin-bottom: 16px;
}

.prayer-form-shell .contact-form .contact-label {
    color: #eef4fb;
    font-size: .93rem;
    font-weight: 600;
    margin-bottom: 8px;
}

.prayer-form-shell .contact-form .contact-form-input,
.prayer-form-shell .contact-form .form-control {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.11);
    border-radius: 18px;
    box-shadow: none;
    color: #fff;
    min-height: 56px;
    padding: 15px 18px;
}

.prayer-form-shell .contact-form textarea.contact-form-input {
    min-height: 180px;
    padding-top: 18px;
}

.prayer-form-shell .contact-form .contact-form-input::placeholder {
    color: rgba(231, 238, 247, 0.36);
}

.prayer-form-shell .contact-form .contact-form-input:focus,
.prayer-form-shell .contact-form .form-control:focus {
    background: rgba(255,255,255,0.06);
    border-color: rgba(212,176,75,0.45);
    box-shadow: 0 0 0 4px rgba(212,176,75,0.10);
}

.prayer-form-shell .contact-form .form-check {
    align-items: flex-start;
    background: rgba(255,255,255,0.035);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 18px;
    display: flex;
    gap: 14px;
    margin: 4px 0 18px;
    min-height: 0;
    padding: 16px 18px;
}

.prayer-form-shell .contact-form .form-check-input {
    -webkit-appearance: none !important;
    appearance: none !important;
    background-color: rgba(255,255,255,0.03) !important;
    background-image: none !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: 14px 14px !important;
    border: 1px solid rgba(212,176,75,0.45) !important;
    border-radius: 7px !important;
    box-shadow: none !important;
    cursor: pointer !important;
    flex: 0 0 auto !important;
    float: none !important;
    height: 22px !important;
    margin: 2px 0 0 !important;
    min-height: 22px !important;
    min-width: 22px !important;
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out !important;
    width: 22px !important;
}

.prayer-form-shell .contact-form .form-check-input:focus {
    border-color: rgba(212,176,75,0.7) !important;
    box-shadow: 0 0 0 4px rgba(212,176,75,0.12) !important;
    outline: none !important;
}

.prayer-form-shell .contact-form .form-check-input:checked {
    background-color: #d4b04b !important;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23081524' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m4.5 10 3.2 3.2 7.8-7.8'/%3e%3c/svg%3e") !important;
    border-color: #d4b04b !important;
}

.prayer-form-shell .contact-form .form-check {
    cursor: pointer;
}

.prayer-form-shell .contact-form .form-check-label,
.prayer-form-shell .contact-form .form-check .contact-label {
    color: #eef4fb;
    cursor: pointer;
    display: block;
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.6;
    margin: 0;
}

.prayer-form-shell .contact-form .contact-button {
    background: linear-gradient(135deg, #d4b04b 0%, #b4871b 100%) !important;
    border: none !important;
    border-radius: 18px !important;
    box-shadow: 0 16px 28px rgba(180, 135, 27, 0.24);
    color: #081524 !important;
    font-size: .96rem;
    font-weight: 800;
    letter-spacing: .04em;
    justify-content: center;
    min-height: 54px;
    padding: 15px 24px !important;
    width: 100%;
    text-transform: uppercase;
}

.prayer-form-shell .contact-form .contact-button:hover {
    filter: brightness(1.05);
    transform: translateY(-1px);
}

.prayer-form-shell .contact-form .contact-message {
    border-radius: 14px;
    font-weight: 600;
    margin-bottom: 20px;
    padding: 16px 20px;
}

.prayer-form-shell .contact-form .contact-error-message {
    background-color: rgba(220, 80, 80, 0.15);
    border-color: rgba(220, 80, 80, 0.4);
    border-left-width: 4px;
    color: #ffb3b3;
}

.prayer-form-shell .contact-form .contact-success-message {
    background-color: rgba(80, 200, 120, 0.15);
    border-color: rgba(80, 200, 120, 0.4);
    border-left-width: 4px;
    color: #a0f0b8;
}

.prayer-note {
    color: rgba(231, 238, 247, 0.58);
    font-size: .9rem;
    line-height: 1.8;
    margin: 14px 4px 0;
}

.prayer-side-card h3 {
    color: #fff;
    font-family: var(--heading-font, 'Bona Nova', serif);
    font-size: 1.45rem;
    margin: 0 0 14px;
}

.prayer-side-card p,
.prayer-side-card li,
.prayer-side-card blockquote {
    color: rgba(231, 238, 247, 0.72);
    line-height: 1.8;
}

.prayer-side-card ul {
    margin: 0;
    padding-left: 18px;
}

.prayer-side-card li + li {
    margin-top: 10px;
}

.prayer-side-card blockquote {
    border-left: 3px solid rgba(212,176,75,0.65);
    margin: 0;
    padding-left: 18px;
}

.prayer-side-card cite {
    color: #d4b04b;
    display: block;
    font-size: .86rem;
    font-style: normal;
    font-weight: 700;
    letter-spacing: .08em;
    margin-top: 12px;
    text-transform: uppercase;
}

@media (max-width: 991px) {
    .prayer-hero {
        padding-top: 72px;
    }

    .prayer-hero-grid,
    .prayer-panels,
    .prayer-points {
        grid-template-columns: 1fr;
    }

    .prayer-panel {
        padding: 28px 24px 18px;
    }
}

@media (max-width: 767px) {
    .prayer-shell {
        padding: 0 16px;
    }

    .prayer-hero {
        padding: 62px 0 40px;
    }

    .prayer-title {
        font-size: 2.3rem;
    }

    .panel-title {
        font-size: 1.72rem;
    }

    .prayer-hero-card,
    .prayer-side-card {
        padding: 22px;
    }

    .prayer-form-shell {
        padding: 20px 16px 4px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const applyUsPhoneCountry = function () {
        document.querySelectorAll('.prayer-request-page .js-phone-number-mask[data-country-code-selection="true"]').forEach(function (input) {
            if (!window.intlTelInputGlobals) {
                return;
            }

            const iti = window.intlTelInputGlobals.getInstance(input);

            if (!iti) {
                return;
            }

            iti.setCountry('us');
            input.dispatchEvent(new Event('countrychange', { bubbles: true }));
        });
    };

    applyUsPhoneCountry();
    window.setTimeout(applyUsPhoneCountry, 300);

    // Force checkbox visual state via inline styles (beats any CSS specificity)
    var termsCheckbox = document.querySelector('.prayer-form-shell input[name="agree_terms_and_policy"][type="checkbox"]');
    if (termsCheckbox) {
        var tickSvg = "url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23081524' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m4.5 10 3.2 3.2 7.8-7.8'/%3e%3c%2fsvg%3e\")";
        function syncCheckbox() {
            if (termsCheckbox.checked) {
                termsCheckbox.style.setProperty('background-color', '#d4b04b', 'important');
                termsCheckbox.style.setProperty('background-image', tickSvg, 'important');
                termsCheckbox.style.setProperty('border-color', '#d4b04b', 'important');
            } else {
                termsCheckbox.style.removeProperty('background-color');
                termsCheckbox.style.removeProperty('background-image');
                termsCheckbox.style.removeProperty('border-color');
            }
        }
        termsCheckbox.addEventListener('change', syncCheckbox);
        syncCheckbox();
    }

    // Move success/error messages to the top of the form so they are visible after submit
    const prayerShell = document.querySelector('.prayer-form-shell');
    if (prayerShell) {
        const observer = new MutationObserver(function (mutations) {
            mutations.forEach(function (mutation) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                    const el = mutation.target;
                    if (el.style.display !== 'none') {
                        el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }
                }
            });
        });

        prayerShell.querySelectorAll('.contact-error-message, .contact-success-message').forEach(function (msg) {
            observer.observe(msg, { attributes: true, attributeFilter: ['style'] });
        });
    }
});
</script>

<div class="prayer-request-page">
    <section class="prayer-hero">
        <div class="prayer-shell">
            <div class="prayer-hero-grid">
                <div>
                    <div class="prayer-kicker">Prayer Request</div>
                    <h1 class="prayer-title">Bring Your Intention <span>Before God</span></h1>
                    <p class="prayer-lead">
                        Whether you are carrying grief, gratitude, fear, healing, or hope, you do not have to carry it alone.
                        Share your prayer request with us, and we will lift it up with reverence, compassion, and faith.
                    </p>
                </div>

                <div class="prayer-hero-card">
                    <div class="prayer-cross" aria-hidden="true">
                        <svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.9 0.75C10.9 0.336 11.236 0 11.65 0H14.35C14.764 0 15.1 0.336 15.1 0.75V9.2H25.25C25.664 9.2 26 9.536 26 9.95V12.65C26 13.064 25.664 13.4 25.25 13.4H15.1V29.25C15.1 29.664 14.764 30 14.35 30H11.65C11.236 30 10.9 29.664 10.9 29.25V13.4H0.75C0.336 13.4 0 13.064 0 12.65V9.95C0 9.536 0.336 9.2 0.75 9.2H10.9V0.75Z" fill="#D4B04B"/>
                        </svg>
                    </div>
                    <h2>How We Receive It</h2>
                    <p>Your message comes through as a private prayer intention. Share only what feels right, and keep details as simple or personal as you wish.</p>
                    <div class="prayer-tag-list">
                        <span class="prayer-tag">Healing</span>
                        <span class="prayer-tag">Family</span>
                        <span class="prayer-tag">Discernment</span>
                        <span class="prayer-tag">Peace</span>
                        <span class="prayer-tag">Thanksgiving</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prayer-content">
        <div class="prayer-shell">
            <div class="prayer-panels">
                <div class="prayer-panel">
                    <div class="panel-eyebrow">Share Your Intention</div>
                    <h2 class="panel-title">Tell Us How We Can Pray With You</h2>
                    <p class="panel-copy">
                        Use the form below to send your request. You can share a few words or a full intention. If you prefer,
                        leave out names and sensitive details. We simply want to stand with you in prayer.
                    </p>

                    <div class="prayer-points">
                        <div class="prayer-point">
                            <strong>Private by Default</strong>
                            <span>Your request is treated with care and is not displayed publicly on the site.</span>
                        </div>
                        <div class="prayer-point">
                            <strong>Any Intention Welcome</strong>
                            <span>Ask for prayers for healing, provision, wisdom, conversion, comfort, or gratitude.</span>
                        </div>
                        <div class="prayer-point">
                            <strong>Write Simply</strong>
                            <span>One sentence is enough. Honest prayer does not need perfect words.</span>
                        </div>
                    </div>

                    <div class="prayer-form-shell">
                        {!! $contactForm->renderForm() !!}
                    </div>

                    <p class="prayer-note">
                        If this request involves an urgent pastoral or medical situation, please also contact the appropriate local support directly.
                    </p>
                </div>

                <div class="prayer-side-stack">
                    <div class="prayer-side-card">
                        <h3>What You Might Write</h3>
                        <ul>
                            <li>Please pray for my mother as she begins treatment this week.</li>
                            <li>Please pray for peace in our marriage and wisdom for our family.</li>
                            <li>Please pray that I remain faithful and hopeful during a difficult season.</li>
                        </ul>
                    </div>

                    <div class="prayer-side-card">
                        <h3>A Promise of Hope</h3>
                        <blockquote>
                            Cast all your anxieties on him, because he cares for you.
                            <cite>1 Peter 5:7</cite>
                        </blockquote>
                    </div>

                    <div class="prayer-side-card">
                        <h3>Before You Send</h3>
                        <p>
                            Keep the request focused on the intention itself. If privacy matters, avoid phone numbers,
                            full addresses, medical record details, or anything you would not want shared in email.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
