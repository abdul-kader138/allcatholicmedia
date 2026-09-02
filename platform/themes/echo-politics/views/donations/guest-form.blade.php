@php
    Theme::layout('full-width');
    SeoHelper::setTitle('Donate — Support Our Mission');
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ===== Reset / Base ===== */
.donate-page { background: #06111d; min-height: 100vh; padding-bottom: 80px; }

/* ===== Hero Banner ===== */
.donate-hero-banner {
    background: linear-gradient(155deg, #0f2d52 0%, #071929 55%, #040d16 100%);
    overflow: hidden;
    padding: 68px 0 72px;
    position: relative;
}
.donate-hero-banner::before {
    background: radial-gradient(ellipse at 78% 35%, rgba(201,162,39,0.17) 0%, transparent 60%);
    content: ''; inset: 0; pointer-events: none; position: absolute;
}
.donate-hero-banner::after {
    background: radial-gradient(ellipse at 18% 85%, rgba(10,60,120,0.38) 0%, transparent 55%);
    content: ''; inset: 0; pointer-events: none; position: absolute;
}
.hero-inner {
    align-items: center;
    display: flex;
    gap: 52px;
    margin: 0 auto;
    max-width: 1100px;
    padding: 0 24px;
    position: relative;
    z-index: 1;
}
.hero-cross {
    align-items: center;
    display: flex;
    flex-shrink: 0;
    justify-content: center;
    opacity: 0.88;
}
.hero-text h1 { color: #fff; font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 14px; }
.hero-text h1 em { color: #c9a227; font-style: normal; }
.hero-text p { color: rgba(255,255,255,0.72); font-size: 1.18rem; line-height: 1.75; margin-bottom: 30px; max-width: 560px; }
.hero-gold-bar {
    background: linear-gradient(90deg, #c9a227, #f0d060 50%, #c9a227);
    border-radius: 3px; height: 3px; margin-bottom: 18px; width: 60px;
}

/* ===== Main Wrap ===== */
.donate-wrap { margin: 0 auto; max-width: 1100px; padding: 32px 16px 0; position: relative; z-index: 2; }

/* ===== Form Card ===== */
.form-card {
    animation: fadeInUp 0.42s ease both;
    background: linear-gradient(180deg, #111c2b 0%, #0a1422 100%);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 24px;
    box-shadow: 0 24px 60px rgba(0,0,0,0.38);
    padding: 40px;
}

/* ===== Step Header ===== */
.step-header { align-items: center; display: flex; gap: 14px; margin-bottom: 18px; }
.step-num {
    align-items: center;
    background: linear-gradient(135deg, #c9a227, #9e6f10);
    border-radius: 50%;
    color: #09111e;
    display: flex;
    flex-shrink: 0;
    font-size: 0.92rem;
    font-weight: 800;
    height: 32px;
    justify-content: center;
    width: 32px;
}
.step-num.optional { background: rgba(255,255,255,0.08); color: rgba(200,215,232,0.5); }
.step-title { color: #eef3fa; font-size: 1.2rem; font-weight: 700; }
.step-sub { color: rgba(180,200,220,0.5); font-size: 1rem; margin-top: 1px; }

/* ===== Amount Grid ===== */
.amount-grid {
    display: grid;
    gap: 10px;
    grid-template-columns: repeat(auto-fill, minmax(105px, 1fr));
    margin-bottom: 16px;
}
.preset-btn {
    background: rgba(255,255,255,0.03);
    border: 1.5px solid rgba(255,255,255,0.12);
    border-radius: 16px;
    color: #eef3fa;
    cursor: pointer;
    font-size: 1.2rem;
    font-weight: 700;
    padding: 15px 8px 14px;
    position: relative;
    text-align: center;
    transition: all 0.22s ease;
}
.preset-btn .ilbl {
    color: rgba(180,200,220,0.45);
    display: block;
    font-size: 0.88rem;
    font-weight: 400;
    letter-spacing: 0.2px;
    margin-top: 3px;
    text-transform: none;
}
.preset-btn .pop-badge {
    background: linear-gradient(135deg, #c9a227, #a07818);
    border-radius: 0 0 0 8px;
    color: #09111e;
    font-size: 0.68rem;
    font-weight: 800;
    letter-spacing: 0.6px;
    padding: 2px 6px;
    position: absolute;
    right: -1px;
    text-transform: uppercase;
    top: -1px;
    border-top-right-radius: 14px;
}
.preset-btn:hover { background: rgba(201,162,39,0.08); border-color: rgba(201,162,39,0.5); transform: translateY(-2px); }
.preset-btn.active {
    background: linear-gradient(135deg, #c9a227, #a7801c);
    border-color: #c9a227;
    box-shadow: 0 8px 22px rgba(201,162,39,0.28);
    color: #09111e;
}
.preset-btn.active .ilbl { color: rgba(9,17,30,0.55); }
.preset-btn.active .pop-badge { background: rgba(0,0,0,0.2); color: #fff; }
.custom-btn {
    background: rgba(255,255,255,0.02);
    border: 1.5px dashed rgba(255,255,255,0.18);
    border-radius: 16px;
    color: rgba(180,200,220,0.6);
    cursor: pointer;
    font-size: 0.95rem;
    font-weight: 600;
    padding: 14px 8px 13px;
    transition: all 0.22s ease;
}
.custom-btn:hover, .custom-btn.active { border-color: rgba(201,162,39,0.55); color: #c9a227; }

/* ===== Form Inputs ===== */
.form-card .form-control,
.form-card .form-select {
    background: rgba(255,255,255,0.04);
    border: 1.5px solid rgba(255,255,255,0.11);
    border-radius: 14px;
    color: #fff;
    font-size: 1rem;
    padding: 13px 16px;
    transition: all 0.2s;
}
.form-card .form-control::placeholder { color: rgba(180,210,240,0.32); }
.form-card .form-control:focus,
.form-card .form-select:focus {
    background: rgba(255,255,255,0.06);
    border-color: rgba(201,162,39,0.5);
    box-shadow: 0 0 0 3px rgba(201,162,39,0.1);
    color: #fff;
}
.form-card .input-group-text {
    background: rgba(201,162,39,0.13);
    border: 1.5px solid rgba(201,162,39,0.28);
    border-radius: 14px 0 0 14px;
    color: #c9a227;
    font-size: 1.15rem;
    font-weight: 800;
}
.form-card .input-group .form-control { border-left: none; border-radius: 0 14px 14px 0; }
.form-card .form-label { color: #d8e4f0; font-size: 0.97rem; font-weight: 600; margin-bottom: 7px; }
.form-card hr { border-color: rgba(255,255,255,0.07); margin: 28px 0; }
.help-text { color: rgba(160,185,210,0.5) !important; font-size: 0.88rem; margin-top: 6px; }

/* ===== Textarea ===== */
.msg-wrap { position: relative; }
.msg-wrap textarea { padding-bottom: 30px !important; resize: none; }
.char-display { bottom: 9px; color: rgba(160,185,210,0.38); font-size: 0.82rem; position: absolute; right: 13px; }

/* ===== Submit Area ===== */
.submit-area {
    background: linear-gradient(180deg, rgba(201,162,39,0.06) 0%, rgba(201,162,39,0.02) 100%);
    border: 1px solid rgba(201,162,39,0.14);
    border-radius: 20px;
    padding: 24px;
}
.paypal-btn {
    align-items: center;
    background: linear-gradient(135deg, #0070ba 0%, #003087 100%);
    border: none;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,112,186,0.3);
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 1.2rem;
    font-weight: 700;
    gap: 12px;
    justify-content: center;
    letter-spacing: 0.2px;
    padding: 18px 24px;
    transition: all 0.22s ease;
    width: 100%;
}
.paypal-btn:hover { box-shadow: 0 14px 36px rgba(0,112,186,0.42); transform: translateY(-2px); }
.paypal-btn:active { transform: none; }
.trust-row { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; margin-top: 15px; }
.donation-legal { margin: 18px 0 0; color: rgba(180,200,220,.62); font-size: .72rem; line-height: 1.65; text-align: center; }
.donation-legal a { color: #c9a227; }
.trust-item { align-items: center; color: rgba(160,185,210,0.5); display: flex; font-size: 0.87rem; gap: 6px; }
.trust-item svg { flex-shrink: 0; opacity: 0.65; }

/* ===== Login Hint ===== */
.login-hint {
    background: rgba(201,162,39,0.06);
    border: 1px solid rgba(201,162,39,0.18);
    border-radius: 16px;
    color: rgba(210,225,242,0.72);
    font-size: 0.97rem;
    padding: 13px 18px;
    text-align: center;
}
.login-hint a { color: #c9a227; font-weight: 600; text-decoration: none; }
.login-hint a:hover { text-decoration: underline; }

/* ===== Sidebar ===== */
.impact-card {
    animation: fadeInUp 0.48s 0.1s ease both;
    background: linear-gradient(155deg, #122848 0%, #0a1f38 100%);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 22px;
    overflow: hidden;
    position: relative;
}
.impact-card::before {
    background: radial-gradient(ellipse at 90% 8%, rgba(201,162,39,0.11) 0%, transparent 55%);
    content: ''; inset: 0; pointer-events: none; position: absolute;
}
.impact-card-head {
    border-bottom: 1px solid rgba(255,255,255,0.07);
    padding: 22px 24px 17px;
    position: relative;
}
.impact-card-head h6 {
    color: #c9a227;
    font-size: 0.82rem;
    font-weight: 800;
    letter-spacing: 1.6px;
    margin: 0;
    text-transform: uppercase;
}
.impact-card-head p { color: #eef3fa; font-size: 1.12rem; font-weight: 700; margin: 4px 0 0; }
.impact-list { padding: 6px 24px 18px; position: relative; }
.impact-row {
    align-items: flex-start;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    display: flex;
    gap: 14px;
    padding: 14px 0;
}
.impact-row:last-child { border-bottom: none; }
.impact-icon-box {
    align-items: center;
    background: rgba(201,162,39,0.1);
    border: 1px solid rgba(201,162,39,0.18);
    border-radius: 11px;
    display: flex;
    flex-shrink: 0;
    height: 38px;
    justify-content: center;
    width: 38px;
}
.impact-row strong { color: #eef3fa; display: block; font-size: 1rem; margin-bottom: 2px; }
.impact-row span { color: rgba(170,195,220,0.55); font-size: 0.9rem; line-height: 1.5; }

.quote-card {
    animation: fadeInUp 0.5s 0.18s ease both;
    background: rgba(255,255,255,0.025);
    border: 1px solid rgba(255,255,255,0.07);
    border-left: 4px solid #c9a227;
    border-radius: 0 18px 18px 0;
    padding: 20px 22px;
}
.quote-card p { color: rgba(225,238,252,0.84); font-size: 1.07rem; line-height: 1.8; margin: 0 0 8px; }
.quote-card cite { color: #c9a227; font-size: 0.92rem; font-style: normal; font-weight: 700; }

.testimonial-card {
    animation: fadeInUp 0.52s 0.22s ease both;
    background: rgba(255,255,255,0.025);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 18px;
    padding: 20px 22px;
}
.t-stars { color: #c9a227; font-size: 1rem; letter-spacing: 2px; margin-bottom: 9px; }
.t-text {
    color: rgba(215,230,248,0.78);
    font-size: 1rem;
    font-style: italic;
    line-height: 1.72;
    margin-bottom: 14px;
}
.t-author { align-items: center; display: flex; gap: 11px; }
.t-avatar {
    align-items: center;
    background: linear-gradient(135deg, #1a4a80, #0d2845);
    border-radius: 50%;
    color: #c9a227;
    display: flex;
    flex-shrink: 0;
    font-size: 0.9rem;
    font-weight: 800;
    height: 38px;
    justify-content: center;
    width: 38px;
}
.t-name { color: #eef3fa; font-size: 0.97rem; font-weight: 700; }
.t-loc { color: rgba(160,185,210,0.5); font-size: 0.87rem; margin-top: 1px; }

/* ===== Animation ===== */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes spin { to { transform: rotate(360deg); } }
.spin { animation: spin 1s linear infinite; }

/* ===== Responsive ===== */
@media (max-width: 991px) {
    .hero-inner { flex-direction: column; gap: 20px; text-align: center; }
    .hero-cross { display: none; }
    .hero-text p { margin-inline: auto; }
    .donate-wrap { padding-top: 20px; }
}
@media (max-width: 767px) {
    .donate-hero-banner { padding: 46px 0 52px; }
    .hero-text h1 { font-size: 1.85rem; }
    .form-card { padding: 24px 18px; }
    .amount-grid { grid-template-columns: repeat(3, 1fr); }
}

/* ACM brand/readability refinement */
.donate-page {
    --donate-navy: #0d1f3c;
    --donate-blue: #046bd2;
    --donate-gold: #c9a227;
    --donate-heading: 'Playfair Display', Georgia, serif;
    font-family: 'Inter', system-ui, sans-serif;
}

.hero-text h1,
.step-title,
.impact-card-head p,
.quote-card p,
.t-text {
    font-family: var(--donate-heading);
}

.donate-hero-banner {
    padding: 56px 0 48px;
    background: linear-gradient(158deg, #060e1d 0%, #0d1f3c 48%, #071426 100%);
}

.hero-text h1 {
    font-size: clamp(3rem, 5.8vw, 4.8rem);
    line-height: 1.03;
}

.hero-text p {
    color: rgba(255, 255, 255, .84);
    font-size: 1rem;
    line-height: 1.82;
}

.form-card .form-label,
.step-title { color: #f8fbff; }

.step-sub,
.help-text,
.trust-item,
.login-hint,
.impact-row span,
.t-loc {
    color: rgba(200, 218, 236, .72) !important;
}

.form-card .form-control,
.form-card .form-select {
    border-color: rgba(255, 255, 255, .20);
}

.form-card .form-control::placeholder { color: rgba(180, 210, 240, .56); }

.form-card .form-control:focus,
.form-card .form-select:focus,
.preset-btn:focus-visible,
.custom-btn:focus-visible,
.paypal-btn:focus-visible {
    outline: none;
    box-shadow: 0 0 0 3px rgba(201, 162, 39, .28);
}

.form-card .invalid-feedback {
    color: #ffb8b8;
    font-size: .88rem;
    line-height: 1.5;
}

.donate-page .alert {
    color: #0d1f3c;
    font-weight: 600;
    line-height: 1.6;
}

@media (prefers-reduced-motion: reduce) {
    .donate-page *,
    .donate-page *::before,
    .donate-page *::after {
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
        scroll-behavior: auto !important;
        transition-duration: .01ms !important;
    }
}

@media (max-width: 767px) {
    .donate-hero-banner { padding: 40px 0 32px; }
    .hero-text h1 { font-size: 2.4rem; }
}
</style>

<div class="donate-page">

    {{-- ===== Hero ===== --}}
    <div class="donate-hero-banner">
        <div class="hero-inner">

            {{-- Decorative Cross --}}
            <div class="hero-cross">
                <svg width="104" height="124" viewBox="0 0 104 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="42" y="0" width="20" height="124" rx="10" fill="rgba(201,162,39,0.13)"/>
                    <rect x="0" y="34" width="104" height="20" rx="10" fill="rgba(201,162,39,0.13)"/>
                    <rect x="44" y="2" width="16" height="120" rx="8" fill="rgba(201,162,39,0.28)"/>
                    <rect x="2" y="36" width="100" height="16" rx="8" fill="rgba(201,162,39,0.28)"/>
                    <rect x="46" y="4" width="12" height="116" rx="6" fill="rgba(201,162,39,0.55)"/>
                    <rect x="4" y="38" width="96" height="12" rx="6" fill="rgba(201,162,39,0.55)"/>
                    <circle cx="52" cy="44" r="11" fill="rgba(201,162,39,0.35)"/>
                    <circle cx="52" cy="44" r="6" fill="#c9a227"/>
                </svg>
            </div>

            <div class="hero-text">
                <div class="hero-gold-bar"></div>
                <h1>Support <em>Catholic Media</em><br>That Transforms Lives</h1>
                <p>Your gift keeps the faith alive — streaming Holy Mass, producing Catholic podcasts, and reaching the faithful in every corner of the world. No account needed.</p>
            </div>
        </div>
    </div>

    {{-- ===== Main Content ===== --}}
    <div class="donate-wrap">

        @if (session('info'))
            <div class="alert alert-info alert-dismissible fade show mb-4 rounded-3 mt-4">
                {{ session('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if ($errors->has('paypal'))
            <div class="alert alert-danger alert-dismissible fade show mb-4 rounded-3 mt-4">
                <strong>Payment Error:</strong> {{ $errors->first('paypal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row g-4 align-items-start mt-0">

            {{-- ===== Form ===== --}}
            <div class="col-lg-7">
                <div class="form-card">
                    <form action="{{ route('donation.guest.initiate') }}" method="POST" id="donation-form">
                        @csrf

                        {{-- Step 1: Amount --}}
                        <div class="mb-4">
                            <div class="step-header">
                                <div class="step-num">1</div>
                                <div>
                                    <div class="step-title">Choose Your Gift Amount</div>
                                    <div class="step-sub">Select a preset or enter a custom amount</div>
                                </div>
                            </div>

                            @php
                                $impacts = [
                                    5  => '1 day of content',
                                    10 => '1 week streaming',
                                    25 => 'podcast episode',
                                    50 => 'Mass production',
                                    100 => 'formation series',
                                    250 => 'monthly support',
                                ];
                                $popular = 25;
                            @endphp

                            <div class="amount-grid">
                                @foreach ($presetAmounts as $preset)
                                    <button type="button"
                                        class="preset-btn {{ old('amount') == $preset ? 'active' : '' }}"
                                        data-amount="{{ $preset }}">
                                        ${{ $preset }}
                                        @if (isset($impacts[$preset]))
                                            <span class="ilbl">{{ $impacts[$preset] }}</span>
                                        @endif
                                        @if ($preset == $popular)
                                            <span class="pop-badge">Popular</span>
                                        @endif
                                    </button>
                                @endforeach
                                <button type="button" class="custom-btn" data-custom="true">✏ Custom</button>
                            </div>

                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input
                                    type="number"
                                    name="amount"
                                    id="donation-amount"
                                    class="form-control @error('amount') is-invalid @enderror"
                                    placeholder="Enter amount"
                                    min="1" max="10000" step="0.01"
                                    value="{{ old('amount') }}"
                                    required
                                >
                                @error('amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="help-text">Minimum $1 &middot; Maximum $10,000 &middot; Secured by PayPal</div>
                        </div>

                        <hr>

                        {{-- Step 2: Donor Info --}}
                        <div class="mb-4">
                            <div class="step-header">
                                <div class="step-num">2</div>
                                <div>
                                    <div class="step-title">Your Details</div>
                                    <div class="step-sub">Your receipt will be sent to this email address</div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="donor_name">Full Name <span style="color:#e05c5c">*</span></label>
                                    <input
                                        type="text"
                                        name="donor_name"
                                        id="donor_name"
                                        class="form-control @error('donor_name') is-invalid @enderror"
                                        placeholder="Your name"
                                        value="{{ old('donor_name') }}"
                                        required
                                    >
                                    @error('donor_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="donor_email">Email Address <span style="color:#e05c5c">*</span></label>
                                    <input
                                        type="email"
                                        name="donor_email"
                                        id="donor_email"
                                        class="form-control @error('donor_email') is-invalid @enderror"
                                        placeholder="your@email.com"
                                        value="{{ old('donor_email') }}"
                                        required
                                    >
                                    @error('donor_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>

                        {{-- Step 3: Message --}}
                        <div class="mb-5">
                            <div class="step-header">
                                <div class="step-num optional">3</div>
                                <div>
                                    <div class="step-title">
                                        Add a Message
                                        <span style="color:rgba(180,200,220,0.4);font-weight:400;font-size:0.8rem;">(optional)</span>
                                    </div>
                                    <div class="step-sub">Share an intention or prayer request</div>
                                </div>
                            </div>
                            <div class="msg-wrap">
                                <textarea
                                    name="message"
                                    id="message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    rows="3"
                                    placeholder="Share an intention, a prayer request, or simply say why you give..."
                                    maxlength="500"
                                >{{ old('message') }}</textarea>
                                <span class="char-display"><span id="char-count">0</span>/500</span>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="submit-area">
                            <button type="submit" class="paypal-btn mb-1" id="paypal-submit-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="white">
                                    <path d="M7.076 21.337H2.47a.641.641 0 0 1-.633-.74L4.944 2.79A.859.859 0 0 1 5.79 2h7.078c2.468 0 4.177.577 5.076 1.714.417.527.68 1.09.803 1.718.13.666.098 1.46-.094 2.373l-.007.043v.557l.393.221c.327.177.62.403.872.673.46.493.757 1.13.887 1.893.137.81.095 1.782-.13 2.888-.262 1.278-.692 2.39-1.279 3.306a6.436 6.436 0 0 1-2.024 1.99c-.773.492-1.688.864-2.724 1.101-.994.226-2.127.34-3.37.34H9.899a.857.857 0 0 0-.847.722L7.076 21.337z"/>
                                </svg>
                                Donate with&nbsp;<span style="font-style:italic;letter-spacing:-0.5px"><span style="color:#7ec8ef">Pay</span><span style="color:#b3d9f5">Pal</span></span>
                            </button>
                            <div class="trust-row">
                                <span class="trust-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                    256-bit SSL
                                </span>
                                <span class="trust-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                    PayPal Verified
                                </span>
                                <span class="trust-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                                    Instant Confirmation
                                </span>
                                <span class="trust-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                    No Account Required
                                </span>
                            </div>
                        </div>

                        <p class="donation-legal">Donations are voluntary contributions to support All Catholic Media’s ministry. No goods or services are provided in exchange for your gift. Tax deductibility depends on the donor’s circumstances and the organization’s legal status; please consult your tax adviser. For donation or refund questions, <a href="{{ url('/contact') }}">contact us</a>.</p>

                    </form>

                    <hr>

                    <div class="login-hint">
                        Already have an account?
                        <a href="{{ Route::has('public.member.login') ? route('public.member.login') : '/account/login' }}">Sign in</a> to track your donation history and manage your giving.
                    </div>
                </div>
            </div>

            {{-- ===== Sidebar ===== --}}
            <div class="col-lg-5 d-flex flex-column gap-4">

                {{-- Impact Card --}}
                <div class="impact-card">
                    <div class="impact-card-head">
                        <h6>Your Gift's Impact</h6>
                        <p>Every dollar reaches the faithful</p>
                    </div>
                    <div class="impact-list">
                        <div class="impact-row">
                            <div class="impact-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c9a227" stroke-width="2"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
                            </div>
                            <div>
                                <strong>Live Mass Streaming</strong>
                                <span>Expanding live Catholic Mass and worship streams to reach more parishes and homes</span>
                            </div>
                        </div>
                        <div class="impact-row">
                            <div class="impact-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c9a227" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="10 8 16 12 10 16 10 8"/></svg>
                            </div>
                            <div>
                                <strong>Podcast &amp; Audio Ministry</strong>
                                <span>Funding our weekly Catholic podcast and audio formation series</span>
                            </div>
                        </div>
                        <div class="impact-row">
                            <div class="impact-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c9a227" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                            </div>
                            <div>
                                <strong>Global Outreach</strong>
                                <span>Reaching Catholics in 50+ countries — keeping the platform free for all</span>
                            </div>
                        </div>
                        <div class="impact-row">
                            <div class="impact-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c9a227" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                            </div>
                            <div>
                                <strong>Catechesis &amp; Formation</strong>
                                <span>Producing faith education content for families and new believers</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Scripture --}}
                <div class="quote-card">
                    <p class="fst-italic">"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."</p>
                    <cite>— 2 Corinthians 9:7</cite>
                </div>

                {{-- Testimonial --}}
                <div class="testimonial-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-text">"AllCatholicMedia has been a lifeline for our family. When we couldn't attend Mass in person, we streamed it here every Sunday. This ministry deserves every bit of support we can give."</p>
                    <div class="t-author">
                        <div class="t-avatar">MR</div>
                        <div>
                            <div class="t-name">Maria R.</div>
                            <div class="t-loc">Chicago, Illinois</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
(function () {
    const amountInput = document.getElementById('donation-amount');
    const presetBtns  = document.querySelectorAll('.preset-btn');
    const customBtn   = document.querySelector('.custom-btn');
    const messageArea = document.getElementById('message');
    const charCount   = document.getElementById('char-count');
    const submitBtn   = document.getElementById('paypal-submit-btn');

    function clearActive() {
        presetBtns.forEach(b => b.classList.remove('active'));
        if (customBtn) customBtn.classList.remove('active');
    }

    function setActive(val) {
        clearActive();
        presetBtns.forEach(b => { if (b.dataset.amount === String(val)) b.classList.add('active'); });
    }

    presetBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            amountInput.value = btn.dataset.amount;
            setActive(btn.dataset.amount);
        });
    });

    if (customBtn) {
        customBtn.addEventListener('click', () => {
            clearActive();
            customBtn.classList.add('active');
            amountInput.value = '';
            amountInput.focus();
        });
    }

    amountInput.addEventListener('input', () => {
        const v = amountInput.value;
        clearActive();
        presetBtns.forEach(b => { if (b.dataset.amount === v) b.classList.add('active'); });
        if (v && !document.querySelector('.preset-btn.active') && customBtn) customBtn.classList.add('active');
    });

    if (messageArea) {
        messageArea.addEventListener('input', () => { charCount.textContent = messageArea.value.length; });
    }

    document.getElementById('donation-form').addEventListener('submit', function (e) {
        if (!amountInput.value || parseFloat(amountInput.value) < 1) {
            e.preventDefault();
            amountInput.focus();
            amountInput.setCustomValidity('Please enter a donation amount of at least $1.');
            amountInput.reportValidity();
            return;
        }
        amountInput.setCustomValidity('');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="spin"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg> Redirecting to PayPal…';
    });

    const oldAmount = '{{ old('amount') }}';
    if (oldAmount) setActive(oldAmount);
})();
</script>
