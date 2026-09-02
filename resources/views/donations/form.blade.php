@extends('plugins/member::themes.dashboard.layouts.master')

@push('header')
<style>
    .donation-page {
        color: #e8edf5;
    }

    .donation-page .page-content {
        background:
            radial-gradient(circle at top right, rgba(201, 162, 39, 0.14), transparent 24%),
            linear-gradient(180deg, #08111f 0%, #0b1728 55%, #0d1420 100%);
        border-radius: 24px;
        padding: 24px;
    }

    .donation-hero {
        background:
            radial-gradient(circle at top right, rgba(201, 162, 39, 0.16), transparent 32%),
            linear-gradient(135deg, #123f74 0%, #0a1e39 60%, #06111d 100%);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 24px;
        box-shadow: 0 26px 60px rgba(0, 0, 0, 0.28);
        margin-bottom: 28px;
        overflow: hidden;
        padding: 40px 36px;
        position: relative;
    }

    .donation-hero::before {
        background: radial-gradient(ellipse, rgba(201, 162, 39, 0.22) 0%, transparent 70%);
        border-radius: 50%;
        content: '';
        height: 240px;
        pointer-events: none;
        position: absolute;
        right: -40px;
        top: -40px;
        width: 240px;
    }

    .donation-hero::after {
        background: linear-gradient(90deg, transparent 5%, rgba(201, 162, 39, 0.18) 50%, transparent 95%);
        bottom: -60px;
        content: '';
        height: 120px;
        left: 20%;
        pointer-events: none;
        position: absolute;
        width: 320px;
    }

    .donation-hero h2 {
        color: #fff;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .donation-hero p {
        color: rgba(255, 255, 255, 0.76);
        font-size: 1rem;
        margin-bottom: 0;
        max-width: 680px;
    }

    .donation-hero .gold-line {
        background: #c9a227;
        border-radius: 2px;
        height: 3px;
        margin: 12px 0 16px;
        width: 48px;
    }

    .donation-layout {
        align-items: start;
    }

    .form-card,
    .mission-card,
    .recent-card,
    .donation-note {
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.24);
    }

    .form-card {
        background: linear-gradient(180deg, rgba(17, 28, 43, 0.97) 0%, rgba(10, 17, 27, 0.99) 100%);
        border-radius: 24px;
        padding: 32px;
    }

    .section-label {
        color: #9aa5b5;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 1.2px;
        margin-bottom: 14px;
        text-transform: uppercase;
    }

    .amount-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 14px;
    }

    .preset-btn {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 14px;
        color: #f7f2e4;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
        min-width: 72px;
        padding: 10px 18px;
        transition: all 0.2s ease;
    }

    .preset-btn:hover {
        background: rgba(201, 162, 39, 0.08);
        border-color: rgba(201, 162, 39, 0.55);
    }

    .preset-btn.active {
        background: linear-gradient(135deg, #c9a227 0%, #a7801c 100%);
        border-color: #c9a227;
        box-shadow: 0 10px 24px rgba(201, 162, 39, 0.22);
        color: #09111e;
    }

    .amount-input-wrap .input-group-text {
        background: #102844;
        border-color: rgba(255, 255, 255, 0.12);
        color: #d8ba65;
        font-size: 1.1rem;
        font-weight: 700;
    }

    .amount-input-wrap .form-control {
        border-left: none;
        font-size: 1.15rem;
        font-weight: 600;
    }

    .form-card .form-control {
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(255, 255, 255, 0.12);
        border-radius: 14px;
        color: #fff;
    }

    .form-card .form-control::placeholder {
        color: rgba(232, 237, 245, 0.42);
    }

    .form-card .form-control:focus {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(201, 162, 39, 0.45);
        box-shadow: 0 0 0 0.2rem rgba(201, 162, 39, 0.12);
        color: #fff;
    }

    .form-card hr {
        border-color: rgba(255, 255, 255, 0.08);
        margin: 26px 0;
    }

    .amount-help,
    .secure-note,
    .profile-note {
        color: rgba(232, 237, 245, 0.56) !important;
    }

    .form-label {
        color: #f3f6fa;
        font-size: 0.88rem;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .donor-info-field {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 14px;
        color: #dce3ee;
        font-size: 0.9rem;
        padding: 12px 14px;
        width: 100%;
    }

    .profile-note a,
    .recent-card .rc-header a {
        color: #d3b24f !important;
    }

    .paypal-btn {
        align-items: center;
        background: linear-gradient(135deg, #0070ba 0%, #003087 100%);
        border: none;
        border-radius: 14px;
        color: #fff;
        cursor: pointer;
        display: flex;
        font-size: 1.05rem;
        font-weight: 700;
        gap: 10px;
        justify-content: center;
        padding: 15px 24px;
        transition: opacity 0.2s ease, transform 0.15s ease;
        width: 100%;
    }

    .paypal-btn:hover {
        opacity: 0.92;
        transform: translateY(-1px);
    }

    .paypal-btn:active {
        transform: translateY(0);
    }

    .paypal-btn .pp-wordmark {
        font-size: 1.2rem;
        font-style: italic;
        letter-spacing: -0.5px;
    }

    .paypal-btn .pp-wordmark span {
        color: #009cde;
    }

    .paypal-btn .pp-wordmark em {
        color: #012169;
        font-style: normal;
    }

    .donation-legal { color: rgba(220, 230, 242, .65); font-size: .75rem; line-height: 1.6; margin: 16px 0 0; text-align: center; }
    .donation-legal a { color: #d3b24f; }

    .mission-card {
        background:
            radial-gradient(circle at top right, rgba(201, 162, 39, 0.12), transparent 34%),
            linear-gradient(135deg, #143f73 0%, #102746 100%);
        border-radius: 22px;
        color: #fff;
        overflow: hidden;
        padding: 28px;
        position: relative;
    }

    .mission-card::before {
        background: rgba(201, 162, 39, 0.15);
        border-radius: 50%;
        content: '';
        height: 160px;
        pointer-events: none;
        position: absolute;
        right: -30px;
        top: -30px;
        width: 160px;
    }

    .mission-card h6 {
        color: #c9a227;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        margin-bottom: 12px;
        text-transform: uppercase;
    }

    .mission-card ul li {
        align-items: flex-start;
        color: rgba(255, 255, 255, 0.88);
        display: flex;
        font-size: 1rem;
        gap: 10px;
        margin-bottom: 12px;
    }

    .mission-card ul li .icon {
        color: #c9a227;
        flex-shrink: 0;
        font-size: 1rem;
        font-weight: 700;
        margin-top: 1px;
        width: 20px;
    }

    .donation-note {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.04) 0%, rgba(255, 255, 255, 0.02) 100%);
        border-left: 4px solid #c9a227;
        border-radius: 0 18px 18px 0;
        padding: 18px 20px;
    }

    .donation-note p {
        color: rgba(240, 244, 250, 0.88);
        font-size: 1rem;
        line-height: 1.8;
    }

    .donation-note small {
        color: #d3b24f;
        font-weight: 700;
    }

    .recent-card {
        background: linear-gradient(180deg, rgba(17, 28, 43, 0.96) 0%, rgba(12, 20, 31, 0.98) 100%);
        border-radius: 22px;
        overflow: hidden;
    }

    .recent-card .rc-header {
        align-items: center;
        background: rgba(255, 255, 255, 0.03);
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        display: flex;
        justify-content: space-between;
        padding: 14px 20px;
    }

    .recent-card .rc-header h6 {
        color: #f4f7fb;
        font-size: 0.88rem;
        font-weight: 700;
        margin: 0;
    }

    .recent-card .rc-row {
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        display: flex;
        justify-content: space-between;
        padding: 12px 20px;
        transition: background 0.15s;
    }

    .recent-card .rc-row:last-of-type {
        border-bottom: none;
    }

    .recent-card .rc-row:hover {
        background: rgba(255, 255, 255, 0.03);
    }

    .rc-amount {
        color: #fff;
        font-size: 1rem;
        font-weight: 700;
    }

    .rc-date {
        color: rgba(232, 237, 245, 0.56);
        font-size: 0.78rem;
    }

    .rc-badge {
        background: rgba(41, 122, 75, 0.16);
        border-radius: 20px;
        color: #7fe0a2;
        font-size: 0.72rem;
        font-weight: 600;
        padding: 3px 10px;
    }

    .secure-note {
        align-items: center;
        display: flex;
        font-size: 0.78rem;
        gap: 5px;
        justify-content: center;
        margin-top: 14px;
    }

    @media (max-width: 991px) {
        .donation-page .page-content {
            padding: 18px;
        }

        .form-card,
        .mission-card,
        .recent-card {
            padding: 24px;
        }
    }
</style>
@endpush

@section('content')
    <div class="donation-page">
        <div class="page-content">
            <div class="donation-hero">
                <div class="d-flex align-items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#c9a227" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    <div>
                        <h2 class="mb-0">Support Our Mission</h2>
                        <div class="gold-line"></div>
                        <p>Your generosity keeps Catholic media alive and free for the faithful worldwide.</p>
                    </div>
                </div>
            </div>

            @if (session('info'))
                <div class="alert alert-info alert-dismissible fade show mb-4 rounded-3" role="alert">
                    {{ session('info') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if ($errors->has('paypal'))
                <div class="alert alert-danger alert-dismissible fade show mb-4 rounded-3" role="alert">
                    <strong>Payment Error:</strong> {{ $errors->first('paypal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row g-4 donation-layout">
                <div class="col-lg-7">
                    <div class="form-card">
                        <div class="mb-4">
                            <div class="section-label">Step 1 - Choose Your Gift Amount</div>

                            <div class="amount-grid">
                                @foreach ($presetAmounts as $preset)
                                    <button type="button" class="preset-btn" data-amount="{{ $preset }}">${{ $preset }}</button>
                                @endforeach

                                <button type="button" class="preset-btn" data-custom="true">Custom</button>
                            </div>

                            <div class="amount-input-wrap">
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input
                                        type="number"
                                        name="amount"
                                        id="donation-amount"
                                        class="form-control @error('amount') is-invalid @enderror"
                                        placeholder="Enter amount"
                                        min="1"
                                        max="10000"
                                        step="0.01"
                                        value="{{ old('amount') }}"
                                        required
                                    >

                                    @error('amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-text mt-1 amount-help">Minimum $1 · Maximum $10,000 · Secured by PayPal</div>
                            </div>
                        </div>

                        <hr>

                        <form action="{{ route('donation.initiate') }}" method="POST" id="donation-form">
                            @csrf
                            <input type="hidden" name="amount" id="hidden-amount" value="{{ old('amount') }}">

                            <div class="mb-4">
                                <div class="section-label">Step 2 - Add a Message <span style="font-weight:400;text-transform:none;letter-spacing:0">(optional)</span></div>
                                <textarea
                                    name="message"
                                    id="message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    rows="4"
                                    placeholder="Share an intention, a prayer request, or simply say why you give..."
                                    maxlength="500"
                                    style="resize:none;"
                                >{{ old('message') }}</textarea>

                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <div class="form-text mt-1 amount-help"><span id="char-count">0</span>/500</div>
                            </div>

                            <div class="mb-4">
                                <div class="section-label">Step 3 - Donor Details</div>

                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label">Name</label>
                                        <div class="donor-info-field">{{ $member->getAttribute('name') }}</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Email</label>
                                        <div class="donor-info-field" style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap">{{ $member->getAttribute('email') }}</div>
                                    </div>
                                </div>

                                <p class="form-text mt-2 profile-note">Using your member account details. <a href="{{ route('public.member.settings') }}">Edit profile -></a></p>
                            </div>

                            <button type="submit" class="paypal-btn" id="paypal-submit-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="white"><path d="M7.076 21.337H2.47a.641.641 0 0 1-.633-.74L4.944 2.79A.859.859 0 0 1 5.79 2h7.078c2.468 0 4.177.577 5.076 1.714.417.527.68 1.09.803 1.718.13.666.098 1.46-.094 2.373l-.007.043v.557l.393.221c.327.177.62.403.872.673.46.493.757 1.13.887 1.893.137.81.095 1.782-.13 2.888-.262 1.278-.692 2.39-1.279 3.306a6.436 6.436 0 0 1-2.024 1.99c-.773.492-1.688.864-2.724 1.101-.994.226-2.127.34-3.37.34H9.899a.857.857 0 0 0-.847.722L7.076 21.337z"/></svg>
                                <span>Donate with <span class="pp-wordmark"><span>Pay</span><em>Pal</em></span></span>
                            </button>

                            <div class="secure-note">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                256-bit SSL encryption · You will be redirected to PayPal to complete payment
                            </div>
                            <p class="donation-legal">Donations support All Catholic Media’s ministry. No goods or services are provided in exchange for your gift. Tax deductibility depends on the donor’s circumstances and the organization’s legal status; please consult your tax adviser. For donation or refund questions, <a href="{{ url('/contact') }}">contact us</a>.</p>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 d-flex flex-column gap-4">
                    <div class="mission-card">
                        <h6>Why Your Gift Matters</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <span class="icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 3v18"/>
                                        <path d="M8 7h8"/>
                                    </svg>
                                </span>
                                Expanding live Catholic Mass and worship streams
                            </li>
                            <li><span class="icon">O</span> Funding our podcast and audio ministry</li>
                            <li><span class="icon">*</span> Reaching Catholics in every corner of the world</li>
                            <li><span class="icon">[]</span> Producing catechesis and formation content</li>
                            <li><span class="icon">^</span> Keeping the platform free and accessible for all</li>
                        </ul>
                    </div>

                    <div class="donation-note">
                        <p class="mb-1 fst-italic">"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."</p>
                        <small>- 2 Corinthians 9:7</small>
                    </div>

                    @if ($recentDonations->isNotEmpty())
                        <div class="recent-card">
                            <div class="rc-header">
                                <h6>Your Recent Gifts</h6>
                                <a href="{{ route('donation.history') }}" style="font-size:.78rem; font-weight:600;">View all -></a>
                            </div>

                            @foreach ($recentDonations as $d)
                                <div class="rc-row">
                                    <div>
                                        <div class="rc-amount">{{ $d->formatted_amount }}</div>
                                        <div class="rc-date">{{ $d->created_at->format('M d, Y') }}</div>
                                    </div>

                                    <div class="rc-badge">Completed</div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
(function () {
    const visibleInput = document.getElementById('donation-amount');
    const hiddenInput = document.getElementById('hidden-amount');
    const presetBtns = document.querySelectorAll('.preset-btn');
    const messageArea = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    const submitBtn = document.getElementById('paypal-submit-btn');

    function setActive(amount) {
        presetBtns.forEach((b) => b.classList.remove('active'));
        presetBtns.forEach((b) => {
            if (b.dataset.amount === String(amount)) {
                b.classList.add('active');
            }
        });
    }

    presetBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            if (btn.dataset.custom) {
                visibleInput.value = '';
                visibleInput.focus();
                presetBtns.forEach((b) => b.classList.remove('active'));
                btn.classList.add('active');
            } else {
                visibleInput.value = btn.dataset.amount;
                hiddenInput.value = btn.dataset.amount;
                setActive(btn.dataset.amount);
            }
        });
    });

    visibleInput.addEventListener('input', () => {
        hiddenInput.value = visibleInput.value;
        presetBtns.forEach((b) => {
            b.classList.toggle('active', !b.dataset.custom && b.dataset.amount === visibleInput.value);
        });
    });

    messageArea.addEventListener('input', () => {
        charCount.textContent = messageArea.value.length;
    });

    document.getElementById('donation-form').addEventListener('submit', function (e) {
        hiddenInput.value = visibleInput.value;

        if (!hiddenInput.value || parseFloat(hiddenInput.value) < 1) {
            e.preventDefault();
            visibleInput.focus();
            visibleInput.setCustomValidity('Please enter a donation amount of at least $1.');
            visibleInput.reportValidity();
            return;
        }

        visibleInput.setCustomValidity('');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="spin"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg> Redirecting to PayPal...';
    });

    const oldAmount = '{{ old('amount') }}';

    if (oldAmount) {
        setActive(oldAmount);
        hiddenInput.value = oldAmount;
    }

    const style = document.createElement('style');
    style.textContent = '@keyframes spin{to{transform:rotate(360deg)}} .spin{animation:spin 1s linear infinite}';
    document.head.appendChild(style);
})();
</script>
@endpush
