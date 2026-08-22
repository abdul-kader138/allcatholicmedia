@php
    Theme::layout('full-width');
    SeoHelper::setTitle('Donation Confirmed — Thank You!');
@endphp

<style>
.guest-success-wrap {
    max-width: 620px;
    margin: 48px auto 80px;
    padding: 0 16px;
}
.success-hero {
    background: linear-gradient(135deg, #0a417a 0%, #0d1f3c 100%);
    border-radius: 20px 20px 0 0;
    overflow: hidden;
    padding: 48px 40px 36px;
    position: relative;
    text-align: center;
}
.success-hero::before {
    background: radial-gradient(ellipse, rgba(201,162,39,0.20) 0%, transparent 70%);
    border-radius: 50%;
    content: '';
    height: 200px;
    pointer-events: none;
    position: absolute;
    right: -40px;
    top: -40px;
    width: 200px;
}
.success-icon {
    align-items: center;
    background: rgba(201,162,39,0.15);
    border: 2px solid rgba(201,162,39,0.4);
    border-radius: 50%;
    display: flex;
    height: 80px;
    justify-content: center;
    margin: 0 auto 18px;
    width: 80px;
}
.success-hero h2 { color: #fff; font-size: 1.8rem; font-weight: 800; margin-bottom: 6px; }
.success-hero p  { color: rgba(255,255,255,0.74); font-size: 0.95rem; margin: 0; }

.success-body {
    background: #fff;
    border: 1px solid #e8eaf0;
    border-radius: 0 0 20px 20px;
    border-top: none;
    box-shadow: 0 12px 40px rgba(10,65,122,0.10);
    padding: 36px 40px;
}
.amount-badge {
    background: linear-gradient(135deg, #0a417a, #0d1f3c);
    border-radius: 12px;
    color: #c9a227;
    font-size: 1.7rem;
    font-weight: 800;
    margin-bottom: 26px;
    padding: 18px;
    text-align: center;
}
.amount-badge small { color: rgba(201,162,39,0.7); display: block; font-size: 0.78rem; font-weight: 500; margin-top: 2px; }
.receipt-row {
    align-items: center;
    border-bottom: 1px solid #f1f3f7;
    display: flex;
    font-size: 0.9rem;
    justify-content: space-between;
    padding: 10px 0;
}
.receipt-row:last-child { border-bottom: none; }
.receipt-row .lbl { color: #868e96; }
.receipt-row .val { color: #1a2b45; font-weight: 600; max-width: 60%; text-align: right; word-break: break-all; }
.msg-box {
    background: #f8f9fc;
    border: 1px solid #e8eaf0;
    border-radius: 10px;
    margin: 20px 0;
    padding: 14px 18px;
}
.msg-box .lbl { color: #c9a227; font-size: 0.72rem; font-weight: 700; letter-spacing: 1px; margin-bottom: 6px; text-transform: uppercase; }
.msg-box p { color: #555; font-size: 0.9rem; font-style: italic; margin: 0; }
.scripture {
    background: #f8f9fc;
    border-left: 4px solid #c9a227;
    border-radius: 0 8px 8px 0;
    color: #555;
    font-size: 0.85rem;
    font-style: italic;
    margin-top: 20px;
    padding: 12px 16px;
}
.email-note { color: #868e96; font-size: 0.82rem; margin: 18px 0 24px; text-align: center; }
.action-primary {
    background: linear-gradient(135deg, #0a417a, #0d1f3c);
    border: none;
    border-radius: 10px;
    color: #c9a227;
    display: inline-block;
    font-weight: 700;
    padding: 12px 24px;
    text-decoration: none;
    transition: opacity 0.2s;
}
.action-primary:hover { color: #c9a227; opacity: 0.88; }
.action-outline {
    border: 2px solid #dee2e6;
    border-radius: 10px;
    color: #495057;
    display: inline-block;
    font-size: 0.9rem;
    font-weight: 600;
    padding: 10px 20px;
    text-decoration: none;
    transition: border-color 0.2s;
}
.action-outline:hover { border-color: #0a417a; color: #0a417a; }

@media (max-width: 600px) {
    .success-hero, .success-body { padding: 28px 20px; }
    .guest-success-wrap { margin-top: 24px; }
}
</style>

<div class="guest-success-wrap">
    <div class="success-hero">
        <div class="success-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#c9a227" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </div>
        <h2>Thank You!</h2>
        <p>Your generous gift has been received. May God bless you abundantly.</p>
    </div>

    <div class="success-body">
        <div class="amount-badge">
            {{ $donation->formatted_amount }}
            <small>Donation Confirmed</small>
        </div>

        <div class="mb-3">
            <div class="receipt-row">
                <span class="lbl">Date</span>
                <span class="val">{{ $donation->created_at->format('F j, Y · g:i A') }}</span>
            </div>
            <div class="receipt-row">
                <span class="lbl">Donor</span>
                <span class="val">{{ $donation->getAttribute('donor_name') }}</span>
            </div>
            <div class="receipt-row">
                <span class="lbl">Email</span>
                <span class="val">{{ $donation->getAttribute('donor_email') }}</span>
            </div>
            @if ($donation->getAttribute('paypal_capture_id'))
                <div class="receipt-row">
                    <span class="lbl">Transaction ID</span>
                    <span class="val" style="font-family:monospace; font-size:.78rem">{{ $donation->getAttribute('paypal_capture_id') }}</span>
                </div>
            @endif
            <div class="receipt-row">
                <span class="lbl">Status</span>
                <span class="val">
                    <span style="background:#e9f7ef; color:#1a7a44; font-size:.75rem; font-weight:700; padding:3px 12px; border-radius:20px;">✓ Completed</span>
                </span>
            </div>
        </div>

        @if ($donation->getAttribute('message'))
            <div class="msg-box">
                <div class="lbl">Your Message</div>
                <p>"{{ $donation->getAttribute('message') }}"</p>
            </div>
        @endif

        <div class="scripture">"Well done, good and faithful servant!" — Matthew 25:21</div>

        <p class="email-note">A confirmation has been sent to <strong>{{ $donation->getAttribute('donor_email') }}</strong>.</p>

        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="{{ route('donation.guest.form') }}" class="action-primary">Give Again</a>
            <a href="{{ url('/') }}" class="action-outline">Back to Home</a>
            <a href="{{ route('public.member.login') }}" class="action-outline">Sign In</a>
        </div>
    </div>
</div>
