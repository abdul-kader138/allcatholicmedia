@php
$founderImage = $founderImageOverride
?? (isset($page) && ! empty($page->image) ? \RvMedia::url($page->image) : null);

$offerCards = [
[
'title' => 'Daily Saints',
'copy' => 'Begin each day with holy witnesses whose lives still steady, challenge, and encourage the faithful.',
'icon' => '
<circle cx="12" cy="8" r="4" />
<path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
<path d="M12 12v3" />
<path d="M10 15h4" />',
],
[
'title' => 'Stories and Teaching',
'copy' => 'Read reflections, testimonies, and Catholic formation written to nourish both seekers and lifelong
believers.',
'icon' => '
<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />',
],
[
'title' => 'Mass and Video',
'copy' => 'Stay close to the rhythm of the Church through streamed Masses, homilies, and visual catechesis.',
'icon' => '
<polygon points="23 7 16 12 23 17 23 7" />
<rect x="1" y="5" width="15" height="14" rx="2" />',
],
[
'title' => 'Podcasts and Audio',
'copy' => 'Listen anywhere with talks, prayer, and conversations that carry timeless truth into daily life.',
'icon' => '
<circle cx="12" cy="12" r="2" />
<path
    d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14" />
',
],
];

$founderRoles = [
'Ordained Priest, SAC',
'Major Seminary Lecturer',
'Parish Pastor and Missionary',
'US Army Chaplain',
'Hospital Chaplain',
'Federal Bureau of Prisons Chaplain',
];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<style>
.about-elegant {
    --bg: #06111d;
    --bg-soft: #0b1c2d;
    --panel: rgba(10, 24, 39, 0.72);
    --panel-strong: rgba(9, 20, 33, 0.92);
    --line: rgba(222, 198, 128, 0.18);
    --line-strong: rgba(222, 198, 128, 0.34);
    --gold: #dec680;
    --gold-deep: #b9963b;
    --text: #f5f1e8;
    --muted: rgba(232, 238, 244, 0.74);
    --soft: rgba(232, 238, 244, 0.54);
    background:
        radial-gradient(circle at top left, rgba(222, 198, 128, 0.12), transparent 30%),
        radial-gradient(circle at bottom right, rgba(42, 88, 138, 0.18), transparent 34%),
        var(--bg);
    color: var(--text);
    font-family: 'Inter', sans-serif;
    overflow-x: hidden;
}

.about-elegant p {
    font-family: 'Inter', sans-serif;
    font-size: 1.04rem;
    line-height: 1.85;
}

.about-shell {
    margin: 0 auto;
    max-width: 1220px;
    padding: 0 24px;
    position: relative;
    z-index: 1;
}

.about-elegant h1,
.about-elegant h2,
.about-elegant h3,
.about-elegant blockquote {
    font-family: 'Playfair Display', serif;
    letter-spacing: -0.02em;
}

.about-kicker {
    color: var(--gold);
    display: inline-flex;
    font-size: 0.78rem;
    font-weight: 600;
    gap: 12px;
    letter-spacing: 0.24em;
    text-transform: uppercase;
}

.about-kicker::before,
.about-kicker::after {
    align-self: center;
    background: linear-gradient(90deg, transparent, var(--line-strong));
    content: '';
    display: block;
    height: 1px;
    width: 42px;
}

.about-kicker::after {
    transform: scaleX(-1);
}

.about-button-row {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
}

.about-button-primary,
.about-button-secondary {
    align-items: center;
    border-radius: 999px;
    display: inline-flex;
    font-size: 0.96rem;
    font-weight: 600;
    gap: 10px;
    padding: 14px 24px;
    text-decoration: none;
    transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
}

.about-button-primary {
    background: linear-gradient(135deg, var(--gold), var(--gold-deep));
    box-shadow: 0 14px 36px rgba(185, 150, 59, 0.22);
    color: #08111c;
}

.about-button-primary:hover {
    color: #08111c;
    transform: translateY(-2px);
}

.about-button-secondary {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.16);
    color: var(--text);
}

.about-button-secondary:hover {
    background: rgba(222, 198, 128, 0.08);
    border-color: var(--line-strong);
    color: var(--gold);
    transform: translateY(-2px);
}

.about-hero {
    padding: 92px 0 52px;
    position: relative;
}

.about-hero::before {
    background:
        linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
    background-size: 72px 72px;
    content: '';
    inset: 0;
    opacity: 0.24;
    pointer-events: none;
    position: absolute;
}

.about-hero-grid {
    align-items: center;
    display: grid;
    gap: 34px;
    grid-template-columns: minmax(0, 1.15fr) minmax(320px, 0.85fr);
}

.about-hero-copy {
    max-width: 690px;
}

.about-hero-copy h1 {
    font-size: clamp(3rem, 7vw, 5.6rem);
    font-weight: 700;
    line-height: 1.04;
    margin: 22px 0 22px;
}

.about-hero-copy h1 span {
    color: var(--gold);
    display: block;
    font-style: italic;
    font-weight: 600;
}

.about-hero-rule {
    background: linear-gradient(90deg, var(--line-strong), transparent);
    border: 0;
    height: 1px;
    margin: 0 0 24px;
    width: 120px;
}

.about-hero-lead {
    color: var(--muted);
    font-size: 1.08rem;
    line-height: 1.88;
    margin: 0 0 14px;
    max-width: 620px;
}

.about-hero-sub {
    color: var(--soft);
    font-size: 1.04rem;
    line-height: 1.88;
    margin: 0 0 30px;
    max-width: 560px;
}

.about-hero-card {
    background:
        linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02)),
        var(--panel);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 28px;
    box-shadow: 0 28px 70px rgba(0, 0, 0, 0.28);
    overflow: hidden;
    position: relative;
}

.about-hero-card::before {
    background: radial-gradient(circle at top right, rgba(222, 198, 128, 0.18), transparent 42%);
    content: '';
    inset: 0;
    pointer-events: none;
    position: absolute;
}

.about-hero-card-top {
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding: 28px 28px 24px;
    position: relative;
}

.about-hero-card-title {
    color: var(--gold);
    font-size: 0.78rem;
    font-weight: 600;
    line-height: 1.4;
    letter-spacing: 0.18em;
    margin: 0 0 14px;
    text-transform: uppercase;
}

.about-hero-card-top h2 {
    font-size: clamp(1.8rem, 3.2vw, 2.8rem);
    line-height: 1.12;
    margin: 0 0 16px;
}

.about-hero-card-top p {
    color: var(--muted);
    font-size: 1rem;
    line-height: 1.8;
    margin: 0;
}

.about-hero-points {
    display: grid;
    gap: 0;
}

.about-hero-point {
    align-items: flex-start;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    display: grid;
    gap: 14px;
    grid-template-columns: 44px 1fr;
    padding: 18px 28px;
}

.about-hero-point-icon {
    align-items: center;
    background: rgba(222, 198, 128, 0.1);
    border: 1px solid rgba(222, 198, 128, 0.16);
    border-radius: 14px;
    display: flex;
    height: 44px;
    justify-content: center;
    width: 44px;
}

.about-hero-point strong {
    color: var(--text);
    display: block;
    font-size: 0.95rem;
    margin-bottom: 4px;
}

.about-hero-point span {
    color: var(--soft);
    display: block;
    font-size: 1rem;
    line-height: 1.8;
}

.about-stats {
    padding: 10px 0 80px;
}

.about-stats-grid {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.02));
    border: 1px solid var(--line);
    border-radius: 24px;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    overflow: hidden;
}

.about-stat {
    padding: 28px 20px;
    position: relative;
    text-align: center;
}

.about-stat+.about-stat {
    border-left: 1px solid rgba(255, 255, 255, 0.06);
}

.about-stat strong {
    color: var(--gold);
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.1rem, 4vw, 3rem);
    font-weight: 700;
    line-height: 1;
    margin-bottom: 8px;
}

.about-stat span {
    color: var(--soft);
    font-size: 0.82rem;
    font-weight: 600;
    letter-spacing: 0.14em;
    text-transform: uppercase;
}

.about-section {
    padding: 0 0 96px;
}

.about-section-grid {
    display: grid;
    gap: 34px;
    grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
}

.about-section-copy {
    padding-top: 6px;
}

.about-section-copy h2 {
    font-size: clamp(2.2rem, 4vw, 3.7rem);
    line-height: 0.98;
    margin: 18px 0 18px;
}

.about-section-copy h2 span {
    color: var(--gold);
    display: block;
    font-style: italic;
}

.about-section-copy p {
    color: var(--muted);
    margin: 0 0 16px;
}

.about-offers-grid {
    display: grid;
    gap: 18px;
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.about-offer {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 24px;
    padding: 24px;
    transition: transform 0.2s ease, border-color 0.2s ease, background 0.2s ease;
}

.about-offer:hover {
    background: linear-gradient(180deg, rgba(222, 198, 128, 0.08), rgba(255, 255, 255, 0.02));
    border-color: rgba(222, 198, 128, 0.18);
    transform: translateY(-3px);
}

.about-offer-icon {
    align-items: center;
    background: rgba(222, 198, 128, 0.1);
    border: 1px solid rgba(222, 198, 128, 0.2);
    border-radius: 16px;
    display: inline-flex;
    height: 52px;
    justify-content: center;
    margin-bottom: 18px;
    width: 52px;
}

.about-offer h3 {
    font-size: 1.55rem;
    margin: 0 0 10px;
}

.about-offer p {
    color: var(--soft);
    margin: 0;
}

.about-quote {
    padding: 0 0 96px;
}

.about-quote-panel {
    background:
        radial-gradient(circle at top center, rgba(222, 198, 128, 0.14), transparent 48%),
        linear-gradient(135deg, rgba(11, 28, 45, 0.96), rgba(8, 18, 30, 0.96));
    border: 1px solid var(--line);
    border-radius: 32px;
    overflow: hidden;
    padding: 60px 32px;
    position: relative;
    text-align: center;
}

.about-quote-mark {
    color: rgba(222, 198, 128, 0.08);
    font-family: 'Playfair Display', serif;
    font-size: clamp(8rem, 18vw, 14rem);
    left: 50%;
    line-height: 0.7;
    position: absolute;
    top: -18px;
    transform: translateX(-50%);
}

.about-quote blockquote {
    border: 0;
    font-size: clamp(2rem, 4vw, 3.5rem);
    line-height: 1.05;
    margin: 0 auto 14px;
    max-width: 860px;
    padding: 0;
    position: relative;
}

.about-quote blockquote em {
    color: var(--gold);
    font-style: italic;
}

.about-quote p {
    color: var(--soft);
    font-size: 0.88rem;
    font-weight: 600;
    letter-spacing: 0.18em;
    margin: 0;
    position: relative;
    text-transform: uppercase;
}

.about-founder {
    padding: 0 0 96px;
}

.about-founder-grid {
    display: grid;
    gap: 32px;
    grid-template-columns: minmax(320px, 0.82fr) minmax(0, 1.18fr);
}

.about-founder-card,
.about-founder-copy {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 30px;
    overflow: hidden;
}

.about-founder-card-visual {
    aspect-ratio: 0.86;
    background: linear-gradient(160deg, #133152, #0a1f33);
    overflow: hidden;
    position: relative;
}

.about-founder-card-visual img {
    height: 100%;
    object-fit: cover;
    object-position: center top;
    width: 100%;
}

.about-founder-fallback {
    align-items: center;
    color: var(--gold);
    display: flex;
    flex-direction: column;
    gap: 14px;
    height: 100%;
    justify-content: center;
}

.about-founder-fallback span:first-child {
    align-items: center;
    border: 2px solid rgba(222, 198, 128, 0.32);
    border-radius: 999px;
    display: flex;
    font-family: 'Playfair Display', serif;
    font-size: 3.4rem;
    font-weight: 700;
    height: 128px;
    justify-content: center;
    width: 128px;
}

.about-founder-fallback span:last-child {
    font-size: 1.3rem;
}

.about-founder-card-body {
    padding: 24px 24px 26px;
}

.about-founder-card-body h3 {
    font-size: 2.35rem;
    margin: 0 0 6px;
}

.about-founder-card-role {
    color: var(--gold);
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.16em;
    margin: 0 0 18px;
    text-transform: uppercase;
}

.about-founder-pill {
    align-items: center;
    background: rgba(222, 198, 128, 0.08);
    border: 1px solid rgba(222, 198, 128, 0.18);
    border-radius: 999px;
    color: var(--gold);
    display: inline-flex;
    font-size: 0.9rem;
    font-weight: 600;
    gap: 8px;
    padding: 10px 16px;
}

.about-founder-copy {
    padding: 34px 34px 36px;
}

.about-founder-copy h2 {
    font-size: clamp(2.6rem, 4.6vw, 4.35rem);
    line-height: 0.97;
    margin: 18px 0 18px;
}

.about-founder-copy h2 span {
    color: var(--gold);
    display: block;
    font-style: italic;
}

.about-founder-copy p {
    color: var(--muted);
    font-size: 1.18rem;
    line-height: 2;
    margin: 0 0 16px;
}

.about-founder-roles {
    display: grid;
    gap: 12px;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    margin-top: 26px;
}

.about-founder-role {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 18px;
    color: var(--text);
    padding: 16px 16px 16px 18px;
    position: relative;
}

.about-founder-role::before {
    background: linear-gradient(180deg, var(--gold), rgba(222, 198, 128, 0.15));
    border-radius: 999px;
    content: '';
    height: 26px;
    left: 0;
    position: absolute;
    top: 18px;
    width: 3px;
}

.about-founder-role span {
    color: var(--soft);
    display: block;
    font-size: 0.74rem;
    font-weight: 600;
    letter-spacing: 0.14em;
    margin-bottom: 6px;
    text-transform: uppercase;
}

.about-founder-role strong {
    display: block;
    font-size: 1.06rem;
    line-height: 1.55;
    padding-left: 8px;
}

.about-cta {
    padding: 0 0 96px;
}

.about-cta-panel {
    background:
        radial-gradient(circle at top left, rgba(222, 198, 128, 0.16), transparent 32%),
        linear-gradient(135deg, #0f2437, #08121d);
    border: 1px solid var(--line);
    border-radius: 32px;
    overflow: hidden;
    padding: 54px 32px;
    position: relative;
    text-align: center;
}

.about-cta-panel::before {
    background: linear-gradient(90deg, transparent, rgba(222, 198, 128, 0.2), transparent);
    content: '';
    height: 1px;
    left: 10%;
    position: absolute;
    right: 10%;
    top: 0;
}

.about-cta-panel h2 {
    font-size: clamp(2.4rem, 5vw, 4.2rem);
    line-height: 0.98;
    margin: 16px auto 12px;
    max-width: 760px;
}

.about-cta-panel h2 span {
    color: var(--gold);
    font-style: italic;
}

.about-cta-panel p {
    color: var(--muted);
    margin: 0 auto 28px;
    max-width: 580px;
}

.about-cta-panel .about-button-row {
    justify-content: center;
}

@media (max-width: 1024px) {

    .about-hero-grid,
    .about-section-grid,
    .about-founder-grid {
        grid-template-columns: 1fr;
    }

    .about-hero-copy {
        max-width: none;
    }
}

@media (max-width: 768px) {
    .about-shell {
        padding: 0 16px;
    }

    .about-hero {
        padding: 72px 0 34px;
    }

    .about-stats-grid,
    .about-offers-grid,
    .about-founder-roles {
        grid-template-columns: 1fr;
    }

    .about-stat+.about-stat {
        border-left: 0;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
    }

    .about-quote-panel,
    .about-founder-copy,
    .about-cta-panel {
        padding-left: 22px;
        padding-right: 22px;
    }
}
</style>

<div class="about-elegant">
    <section class="about-hero">
        <div class="about-shell">
            <div class="about-hero-grid">
                <div class="about-hero-copy">
                    <span class="about-kicker">All Catholic Media</span>
                    <h1>
                        A more beautiful place
                        <span>to meet the faith</span>
                    </h1>
                    <hr class="about-hero-rule">
                    <p class="about-hero-lead">
                        All Catholic Media brings Daily Saints, thoughtful teaching, prayerful media, and a sense of
                        Catholic belonging into one calm, welcoming home.
                    </p>
                    <p class="about-hero-sub">
                        Whether you are lifelong in the Church, quietly returning, or simply searching for truth, this
                        space was made to feel reverent, clear, and close to the heart of the Gospel.
                    </p>

                    <div class="about-button-row">
                        <a href="{{ url('/') }}" class="about-button-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.2">
                                <circle cx="12" cy="12" r="10" />
                                <polygon points="10 8 16 12 10 16 10 8" />
                            </svg>
                            Explore Now
                        </a>
                        <a href="{{ route('donation.guest.form') }}" class="about-button-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                            Support Our Mission
                        </a>
                    </div>
                </div>

                <aside class="about-hero-card">
                    <div class="about-hero-card-top">
                        <p class="about-hero-card-title">What makes this space different</p>
                        <h2>Rooted in reverence. Built for daily life.</h2>
                        <p>We are not just publishing Catholic content. We are shaping a digital place that feels
                            thoughtful, trustworthy, and deeply human.</p>
                    </div>

                    <div class="about-hero-points">
                        <div class="about-hero-point">
                            <div class="about-hero-point-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="#dec680" stroke-width="2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                            </div>
                            <div>
                                <strong>Faithful in tone</strong>
                                <span>Every page is meant to feel prayerful, dignified, and welcoming rather than noisy
                                    or overwhelming.</span>
                            </div>
                        </div>
                        <div class="about-hero-point">
                            <div class="about-hero-point-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="#dec680" stroke-width="2">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                </svg>
                            </div>
                            <div>
                                <strong>Rich in formation</strong>
                                <span>Scripture, saints, teaching, and reflection are gathered in a way that helps
                                    people stay close to truth.</span>
                            </div>
                        </div>
                        <div class="about-hero-point">
                            <div class="about-hero-point-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="#dec680" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                </svg>
                            </div>
                            <div>
                                <strong>Open to all</strong>
                                <span>People arrive from different places in life, but the invitation is the same: you
                                    belong here.</span>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="about-founder">
        <div class="about-shell">
            <div class="about-founder-grid">
                <div class="about-founder-card">
                    <div class="about-founder-card-visual">
                        @if ($founderImage)
                        <img src="{{ $founderImage }}" alt="Fr. Morson Livingston">
                        @else
                        <div class="about-founder-fallback">
                            <span>ML</span>
                            <span>Cross and witness</span>
                        </div>
                        @endif
                    </div>

                    <div class="about-founder-card-body">
                        <h3>Fr. Morson Livingston</h3>
                        <p class="about-founder-card-role">SAC | Founder and Media Director</p>
                        <span class="about-founder-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.2">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                            41+ years of priestly service
                        </span>
                    </div>
                </div>

                <div class="about-founder-copy">
                    <span class="about-kicker">Meet Our Founder</span>
                    <h2>A shepherd with a life of service <span>and a heart for mission</span></h2>
                    <p>Fr. Morson Livingston, SAC, is the pastoral heart behind All Catholic Media. His ministry has
                        carried him through classrooms, parishes, hospitals, military service, and correctional
                        institutions, always with the same desire to remain present where faith is most needed.</p>
                    <p>That same pastoral instinct now shapes this digital apostolate. The goal is not simply to publish
                        more content, but to create a faithful Catholic presence online that forms, consoles, and
                        invites people deeper into the life of the Church.</p>

                    <div class="about-founder-roles">
                        @foreach ($founderRoles as $role)
                        <div class="about-founder-role">
                            <span>Ministry</span>
                            <strong>{{ $role }}</strong>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-stats">
        <div class="about-shell">
            <div class="about-stats-grid">
                <div class="about-stat">
                    <strong>41+</strong>
                    <span>Years of ministry</span>
                </div>
                <div class="about-stat">
                    <strong>1</strong>
                    <span>Clear mission</span>
                </div>
                <div class="about-stat">
                    <strong>4</strong>
                    <span>Core media paths</span>
                </div>
                <div class="about-stat">
                    <strong>Global</strong>
                    <span>Catholic community</span>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="about-shell">
            <div class="about-section-grid">
                <div class="about-section-copy">
                    <span class="about-kicker">Our Mission</span>
                    <h2>To make Catholic media feel <span>clear, beautiful, and alive</span></h2>
                    <p>All Catholic Media was born from a simple conviction: the riches of the Catholic faith should be
                        easier to encounter, easier to trust, and easier to return to every single day.</p>
                    <p>That means giving people more than information. It means giving them a place where saints,
                        teaching, prayer, and community are presented with warmth, beauty, and steady spiritual focus.
                    </p>
                    <p>We want the experience of visiting this page, and every page after it, to feel less like browsing
                        and more like being gently led toward something lasting.</p>
                </div>

                <div class="about-offers-grid">
                    @foreach ($offerCards as $card)
                    <article class="about-offer">
                        <div class="about-offer-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="#dec680" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">{!! $card['icon'] !!}</svg>
                        </div>
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['copy'] }}</p>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="about-quote">
        <div class="about-shell">
            <div class="about-quote-panel">
                <div class="about-quote-mark">"</div>
                <blockquote>
                    Whether you are lifelong Catholic, quietly curious, or searching for something more,
                    <em>you belong here.</em>
                </blockquote>
                <p>All Catholic Media</p>
            </div>
        </div>
    </section>

    <section class="about-cta">
        <div class="about-shell">
            <div class="about-cta-panel">
                <span class="about-kicker">Join The Mission</span>
                <h2>Faith is alive. <span>Come explore it.</span></h2>
                <p>Walk with us through daily inspiration, deeper formation, and a Catholic media experience designed to
                    feel more peaceful, more elegant, and more meaningful.</p>

                <div class="about-button-row">
                    <a href="{{ url('/') }}" class="about-button-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.2">
                            <circle cx="12" cy="12" r="10" />
                            <polygon points="10 8 16 12 10 16 10 8" />
                        </svg>
                        Start Exploring
                    </a>
                    <a href="{{ route('donation.guest.form') }}" class="about-button-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                        </svg>
                        Support This Mission
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
