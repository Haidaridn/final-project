<div style="font-family: 'DM Sans', sans-serif;">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Lora:ital,wght@0,500;0,600;0,700;1,500;1,700&display=swap" rel="stylesheet">

<style>
/* ════════════════════════════════════════════
   ROOT VARIABLES — Claude White Notes Theme
════════════════════════════════════════════ */
:root {
    --ns-bg:           #FFFFFF;
    --ns-soft:         #FAF7F2;
    --ns-card:         #FFFFFF;
    --ns-text:         #2B2B2B;
    --ns-muted:        #6B6B6B;
    --ns-border:       #EAE4DB;
    --ns-accent:       #C87A45;
    --ns-accent-h:     #B56835;
    --ns-accent-l:     #F5EEE5;
    --ns-hover:        #F5EEE5;
    --ns-success:      #4F7A5A;
    --ns-warning:      #D49A45;
    --ns-shadow-sm:    0 2px 12px rgba(43,43,43,0.05);
    --ns-shadow-md:    0 8px 32px rgba(43,43,43,0.08);
    --ns-shadow-lg:    0 24px 64px rgba(43,43,43,0.10);
    --ns-shadow-acc:   0 8px 28px rgba(200,122,69,0.30);
    --ns-radius-sm:    10px;
    --ns-radius-md:    16px;
    --ns-radius-lg:    24px;
    --ns-radius-xl:    32px;
    --ns-ease:         cubic-bezier(0.22, 1, 0.36, 1);
    --ns-spring:       cubic-bezier(0.34, 1.56, 0.64, 1);
}

/* ════════════════════════════════════════════
   RESET & BASE
════════════════════════════════════════════ */
*, *::before, *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* ════════════════════════════════════════════
   TYPOGRAPHY SYSTEM
════════════════════════════════════════════ */
.ns-display {
    font-family: 'Lora', Georgia, serif;
    font-weight: 700;
    letter-spacing: -0.025em;
    line-height: 1.08;
    color: var(--ns-text);
}
.ns-label {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.10em;
    text-transform: uppercase;
    color: #C0B4A8;
}
.ns-body {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--ns-muted);
    line-height: 1.65;
}

/* ════════════════════════════════════════════
   ANIMATION SYSTEM
════════════════════════════════════════════ */
@keyframes ns-fadeUp {
    from { opacity: 0; transform: translateY(22px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes ns-scaleIn {
    from { opacity: 0; transform: scale(0.94) translateY(14px); }
    to   { opacity: 1; transform: scale(1) translateY(0); }
}
@keyframes ns-shimmerPulse {
    0%, 100% { opacity: 1; }
    50%       { opacity: 0.6; }
}

.ns-a1 { animation: ns-fadeUp 0.55s var(--ns-ease) both 0.04s; }
.ns-a2 { animation: ns-fadeUp 0.55s var(--ns-ease) both 0.12s; }
.ns-a3 { animation: ns-fadeUp 0.55s var(--ns-ease) both 0.20s; }
.ns-a4 { animation: ns-fadeUp 0.55s var(--ns-ease) both 0.28s; }
.ns-a5 { animation: ns-fadeUp 0.55s var(--ns-ease) both 0.36s; }

/* ════════════════════════════════════════════
   LAYOUT WRAPPER
════════════════════════════════════════════ */
.ns-wrapper {
    max-width: 1280px;
    margin: 0 auto;
    padding: 32px 24px 64px;
}

/* ════════════════════════════════════════════
   HERO SECTION
════════════════════════════════════════════ */
.ns-hero {
    position: relative;
    background: var(--ns-soft);
    border: 1px solid var(--ns-border);
    border-radius: var(--ns-radius-xl);
    padding: 44px 48px;
    overflow: hidden;
    box-shadow: var(--ns-shadow-sm);
    margin-bottom: 20px;
}
.ns-hero-glow {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}
.ns-hero-glow-1 {
    width: 360px; height: 360px;
    top: -140px; right: -80px;
    background: radial-gradient(circle, rgba(200,122,69,0.13) 0%, transparent 68%);
}
.ns-hero-glow-2 {
    width: 220px; height: 220px;
    bottom: -90px; right: 200px;
    background: radial-gradient(circle, rgba(200,122,69,0.07) 0%, transparent 70%);
}
.ns-hero-inner {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 28px;
    flex-wrap: wrap;
}
.ns-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #fff;
    border: 1px solid var(--ns-border);
    border-radius: 100px;
    padding: 5px 14px;
    font-size: 11px;
    font-weight: 700;
    color: var(--ns-accent);
    margin-bottom: 14px;
    letter-spacing: 0.04em;
}
.ns-hero-title {
    font-family: 'Lora', Georgia, serif;
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 700;
    color: var(--ns-text);
    line-height: 1.08;
    letter-spacing: -0.025em;
    margin-bottom: 12px;
}
.ns-hero-sub {
    font-size: 14px;
    color: var(--ns-muted);
    line-height: 1.65;
    max-width: 400px;
}
.ns-hero-accent-name {
    color: var(--ns-accent);
    font-weight: 600;
}
.ns-hero-mini-cards {
    display: flex;
    gap: 10px;
    flex-shrink: 0;
}
.ns-hero-mini {
    background: #fff;
    border: 1px solid var(--ns-border);
    border-radius: 18px;
    padding: 18px 22px;
    text-align: center;
    min-width: 88px;
    box-shadow: var(--ns-shadow-sm);
    transition: transform 0.22s var(--ns-spring);
}
.ns-hero-mini:hover { transform: translateY(-4px); }
.ns-hero-mini-icon {
    font-family: 'Lora', serif;
    font-size: 24px;
    font-weight: 700;
    color: var(--ns-accent);
    line-height: 1;
}
.ns-hero-mini-label {
    font-size: 9.5px;
    font-weight: 700;
    color: var(--ns-muted);
    margin-top: 5px;
    text-transform: uppercase;
    letter-spacing: 0.07em;
}

/* ════════════════════════════════════════════
   STAT CARDS
════════════════════════════════════════════ */
.ns-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
    margin-bottom: 20px;
}
.ns-stat {
    background: var(--ns-card);
    border: 1px solid var(--ns-border);
    border-radius: 22px;
    padding: 22px 24px;
    transition: transform 0.24s var(--ns-spring), box-shadow 0.24s ease;
    cursor: default;
    position: relative;
    overflow: hidden;
}
.ns-stat::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 2px;
    border-radius: 0 0 22px 22px;
    background: var(--ns-accent);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.28s var(--ns-ease);
}
.ns-stat:hover { transform: translateY(-5px); box-shadow: var(--ns-shadow-md); }
.ns-stat:hover::after { transform: scaleX(1); }
.ns-stat-top {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 16px;
}
.ns-stat-icon {
    width: 40px; height: 40px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.ns-stat-icon-acc  { background: var(--ns-hover); border: 1px solid rgba(200,122,69,0.20); }
.ns-stat-icon-soft { background: var(--ns-soft);  border: 1px solid var(--ns-border); }
.ns-stat-badge {
    font-size: 10px;
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 100px;
}
.ns-stat-badge-green  { color: var(--ns-success); background: #EEF6F1; }
.ns-stat-badge-yellow { color: var(--ns-warning); background: #FEF9EE; }
.ns-stat-badge-muted  { color: var(--ns-muted);   background: var(--ns-soft); }
.ns-stat-num {
    font-family: 'Lora', Georgia, serif;
    font-size: 30px;
    font-weight: 700;
    color: var(--ns-text);
    line-height: 1;
    margin-bottom: 4px;
}
.ns-stat-name {
    font-size: 12.5px;
    font-weight: 600;
    color: var(--ns-text);
}
.ns-stat-desc {
    font-size: 11px;
    color: var(--ns-muted);
    margin-top: 2px;
}

/* ════════════════════════════════════════════
   PRODUCTIVITY BAR CHART
════════════════════════════════════════════ */
.ns-productivity {
    background: var(--ns-card);
    border: 1px solid var(--ns-border);
    border-radius: 22px;
    padding: 26px 30px;
    margin-bottom: 20px;
}
.ns-productivity-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 22px;
    flex-wrap: wrap;
    gap: 12px;
}
.ns-productivity-title {
    font-family: 'Lora', Georgia, serif;
    font-size: 17px;
    font-weight: 700;
    color: var(--ns-text);
}
.ns-chart-wrap {
    display: flex;
    align-items: flex-end;
    gap: 8px;
    height: 80px;
}
.ns-chart-col {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 7px;
    height: 100%;
}
.ns-chart-bar-wrap {
    flex: 1;
    width: 100%;
    display: flex;
    align-items: flex-end;
}
.ns-chart-bar {
    width: 100%;
    border-radius: 6px 6px 3px 3px;
    background: rgba(200,122,69,0.18);
    transition: background 0.22s, transform 0.18s var(--ns-spring);
    cursor: pointer;
}
.ns-chart-bar:hover { transform: scaleY(1.06); transform-origin: bottom; }
.ns-chart-bar-active { background: var(--ns-accent) !important; }
.ns-chart-label {
    font-size: 10.5px;
    font-weight: 500;
    color: var(--ns-muted);
}
.ns-chart-label-active {
    color: var(--ns-accent);
    font-weight: 700;
}

/* ════════════════════════════════════════════
   SEARCH + ACTION BAR
════════════════════════════════════════════ */
.ns-action-bar {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
    flex-wrap: wrap;
}
.ns-search-wrap {
    flex: 1;
    min-width: 220px;
    position: relative;
}
.ns-search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #B8AFA4;
    display: flex;
}
.ns-search-input {
    width: 100%;
    height: 50px;
    padding: 0 18px 0 46px;
    border: 1px solid var(--ns-border);
    border-radius: var(--ns-radius-md);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--ns-text);
    background: #fff;
    outline: none;
    transition: border-color 0.22s, box-shadow 0.22s;
}
.ns-search-input::placeholder { color: #C0B4A8; }
.ns-search-input:focus {
    border-color: var(--ns-accent);
    box-shadow: 0 0 0 3px rgba(200,122,69,0.10);
}
.ns-counter-badge {
    display: flex;
    align-items: center;
    gap: 7px;
    background: var(--ns-soft);
    border: 1px solid var(--ns-border);
    border-radius: var(--ns-radius-md);
    padding: 0 16px;
    height: 50px;
    font-size: 13px;
    font-weight: 600;
    color: var(--ns-muted);
    white-space: nowrap;
    flex-shrink: 0;
}
.ns-btn-new {
    height: 50px;
    padding: 0 26px;
    background: var(--ns-accent);
    color: #fff;
    border: none;
    border-radius: var(--ns-radius-md);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: var(--ns-shadow-acc);
    transition: background 0.22s, box-shadow 0.22s, transform 0.20s var(--ns-spring);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
    flex-shrink: 0;
}
.ns-btn-new:hover {
    background: var(--ns-accent-h);
    box-shadow: 0 12px 30px rgba(200,122,69,0.38);
    transform: translateY(-2px) scale(1.02);
}
.ns-btn-new:active { transform: translateY(0) scale(0.99); }

/* ════════════════════════════════════════════
   FILTER PILLS
════════════════════════════════════════════ */
.ns-filters {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 28px;
    flex-wrap: wrap;
}
.ns-pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    height: 38px;
    padding: 0 18px;
    border-radius: 100px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    border: none;
    font-family: 'DM Sans', sans-serif;
    transition: all 0.22s var(--ns-spring);
}
.ns-pill-off {
    background: #fff;
    border: 1px solid var(--ns-border);
    color: var(--ns-muted);
}
.ns-pill-off:hover {
    background: var(--ns-hover);
    color: var(--ns-text);
    border-color: rgba(200,122,69,0.22);
    transform: translateY(-1px);
}
.ns-pill-on {
    background: var(--ns-accent);
    color: #fff;
    box-shadow: 0 4px 16px rgba(200,122,69,0.30);
}
.ns-pill-on:hover {
    background: var(--ns-accent-h);
    box-shadow: 0 6px 22px rgba(200,122,69,0.38);
    transform: translateY(-1px);
}

/* ════════════════════════════════════════════
   NOTES GRID
════════════════════════════════════════════ */
.ns-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
    align-items: start;
}

/* ════════════════════════════════════════════
   NOTE CARD
════════════════════════════════════════════ */
.ns-card {
    background: var(--ns-card);
    border: 1px solid var(--ns-border);
    border-radius: var(--ns-radius-lg);
    padding: 24px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.30s var(--ns-spring), box-shadow 0.30s ease, border-color 0.22s;
}
.ns-card-top-line {
    position: absolute;
    top: 0; left: 22px; right: 22px;
    height: 3px;
    border-radius: 0 0 6px 6px;
    opacity: 0.55;
    transition: opacity 0.22s;
}
.ns-card:hover {
    transform: translateY(-7px);
    box-shadow: var(--ns-shadow-lg);
    border-color: rgba(200,122,69,0.22);
}
.ns-card:hover .ns-card-top-line { opacity: 1; }

/* Card Header */
.ns-card-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 14px;
    padding-top: 5px;
}
.ns-card-meta { min-width: 0; flex: 1; }
.ns-cat-chip {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 8px;
}
.ns-cat-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    flex-shrink: 0;
}
.ns-cat-name {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--ns-muted);
}
.ns-card-title {
    font-family: 'Lora', Georgia, serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--ns-text);
    line-height: 1.30;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.ns-card-time {
    font-size: 11.5px;
    color: #B8AFA4;
    margin-top: 5px;
    display: flex;
    align-items: center;
    gap: 4px;
}
.ns-card-icons {
    display: flex;
    align-items: center;
    gap: 5px;
    flex-shrink: 0;
}
.ns-icon-btn {
    width: 32px; height: 32px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--ns-soft);
    border: 1px solid var(--ns-border);
    cursor: pointer;
    transition: all 0.22s var(--ns-spring);
    flex-shrink: 0;
}
.ns-icon-btn:hover {
    background: var(--ns-hover);
    border-color: rgba(200,122,69,0.26);
    transform: scale(1.18) rotate(-5deg);
}

/* Card Content */
.ns-card-content {
    font-size: 13.5px;
    color: var(--ns-muted);
    line-height: 1.65;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 88px;
    flex: 1;
    margin-bottom: 0;
}

/* Card Footer */
.ns-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
    padding-top: 16px;
    margin-top: auto;
    border-top: 1px solid #F0EBE4;
}
.ns-cat-badge {
    display: inline-flex;
    align-items: center;
    font-size: 11px;
    font-weight: 700;
    color: #fff;
    padding: 5px 12px;
    border-radius: 100px;
    letter-spacing: 0.03em;
    white-space: nowrap;
    box-shadow: 0 2px 8px rgba(0,0,0,0.10);
}
.ns-card-actions {
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
    justify-content: flex-end;
}

/* Action Buttons */
.ns-btn-action {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    height: 30px;
    padding: 0 11px;
    border-radius: 9px;
    font-family: 'DM Sans', sans-serif;
    font-size: 11.5px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.20s ease;
    border: 1px solid;
    white-space: nowrap;
}
.ns-btn-action:hover { transform: translateY(-2px); }
.ns-btn-archive {
    color: #D49A45;
    background: rgba(212,154,69,0.08);
    border-color: rgba(212,154,69,0.20);
}
.ns-btn-archive:hover {
    background: rgba(212,154,69,0.16);
    border-color: rgba(212,154,69,0.34);
}
.ns-btn-edit {
    color: var(--ns-muted);
    background: var(--ns-soft);
    border-color: var(--ns-border);
}
.ns-btn-edit:hover {
    background: var(--ns-hover);
    color: var(--ns-text);
    border-color: rgba(200,122,69,0.22);
}
.ns-btn-delete {
    color: #DC2626;
    background: rgba(220,38,38,0.06);
    border-color: rgba(220,38,38,0.14);
}
.ns-btn-delete:hover {
    background: rgba(220,38,38,0.14);
    border-color: rgba(220,38,38,0.28);
}

/* ════════════════════════════════════════════
   EMPTY STATE
════════════════════════════════════════════ */
.ns-empty-wrap { grid-column: 1 / -1; }
.ns-empty {
    background: var(--ns-soft);
    border: 1.5px dashed var(--ns-border);
    border-radius: var(--ns-radius-xl);
    padding: 80px 40px;
    text-align: center;
}
.ns-empty-icon-wrap {
    width: 80px; height: 80px;
    border-radius: 22px;
    background: #fff;
    border: 1px solid var(--ns-border);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    box-shadow: var(--ns-shadow-md);
}
.ns-empty-title {
    font-family: 'Lora', Georgia, serif;
    font-size: 24px;
    font-weight: 700;
    color: var(--ns-text);
    margin-bottom: 10px;
}
.ns-empty-sub {
    font-size: 14px;
    color: var(--ns-muted);
    margin-bottom: 30px;
    max-width: 300px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.65;
}
.ns-btn-empty {
    height: 50px;
    padding: 0 30px;
    background: var(--ns-accent);
    color: #fff;
    border: none;
    border-radius: var(--ns-radius-md);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: var(--ns-shadow-acc);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.22s var(--ns-spring);
}
.ns-btn-empty:hover {
    background: var(--ns-accent-h);
    box-shadow: 0 12px 30px rgba(200,122,69,0.38);
    transform: translateY(-2px);
}

/* ════════════════════════════════════════════
   MODAL SYSTEM
════════════════════════════════════════════ */
.ns-backdrop {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(30,20,10,0.36);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.ns-modal {
    background: #fff;
    border: 1px solid var(--ns-border);
    border-radius: 30px;
    padding: 34px;
    width: 100%;
    max-width: 510px;
    box-shadow: 0 40px 100px rgba(0,0,0,0.16), 0 8px 32px rgba(0,0,0,0.08);
    animation: ns-scaleIn 0.36s var(--ns-spring) both;
}
.ns-modal-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 28px;
}
.ns-modal-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--ns-hover);
    border: 1px solid rgba(200,122,69,0.20);
    border-radius: 100px;
    padding: 4px 13px;
    font-size: 10.5px;
    font-weight: 700;
    color: var(--ns-accent);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 10px;
}
.ns-modal-title {
    font-family: 'Lora', Georgia, serif;
    font-size: 22px;
    font-weight: 700;
    color: var(--ns-text);
    line-height: 1.15;
}
.ns-modal-sub {
    font-size: 13px;
    color: var(--ns-muted);
    margin-top: 5px;
}
.ns-modal-close {
    width: 36px; height: 36px;
    border-radius: 11px;
    background: var(--ns-soft);
    border: 1px solid var(--ns-border);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--ns-muted);
    transition: all 0.20s ease;
    flex-shrink: 0;
}
.ns-modal-close:hover {
    background: var(--ns-hover);
    color: var(--ns-text);
    border-color: rgba(200,122,69,0.22);
}

/* ════════════════════════════════════════════
   FORM SYSTEM
════════════════════════════════════════════ */
.ns-form-stack {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.ns-form-label {
    display: block;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.10em;
    text-transform: uppercase;
    color: #C0B4A8;
    margin-bottom: 8px;
}
.ns-input {
    width: 100%;
    border: 1px solid var(--ns-border);
    border-radius: var(--ns-radius-md);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--ns-text);
    background: #FDFCFB;
    outline: none;
    transition: border-color 0.22s, box-shadow 0.22s, background 0.22s;
    display: block;
}
.ns-input::placeholder { color: #C0B4A8; }
.ns-input:focus {
    border-color: var(--ns-accent);
    box-shadow: 0 0 0 3px rgba(200,122,69,0.10);
    background: #fff;
}
.ns-input-text  { height: 52px; padding: 0 18px; }
.ns-input-area  { padding: 14px 18px; resize: none; line-height: 1.65; min-height: 130px; }
.ns-input-select {
    height: 52px;
    padding: 0 40px 0 18px;
    appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
}
.ns-select-wrap { position: relative; }
.ns-select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: var(--ns-muted);
    display: flex;
}
.ns-modal-footer {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 10px;
    margin-top: 28px;
    padding-top: 22px;
    border-top: 1px solid var(--ns-border);
}
.ns-btn-cancel {
    height: 48px;
    padding: 0 22px;
    border-radius: var(--ns-radius-sm);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: var(--ns-muted);
    background: var(--ns-soft);
    border: 1px solid var(--ns-border);
    cursor: pointer;
    transition: all 0.20s ease;
}
.ns-btn-cancel:hover {
    background: var(--ns-hover);
    color: var(--ns-text);
}
.ns-btn-save {
    height: 48px;
    padding: 0 26px;
    border-radius: var(--ns-radius-sm);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    background: var(--ns-accent);
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(200,122,69,0.28);
    transition: all 0.22s var(--ns-spring);
    display: inline-flex;
    align-items: center;
    gap: 7px;
}
.ns-btn-save:hover {
    background: var(--ns-accent-h);
    box-shadow: 0 8px 24px rgba(200,122,69,0.38);
    transform: translateY(-2px);
}

/* ════════════════════════════════════════════
   RESPONSIVE SYSTEM
════════════════════════════════════════════ */
@media (max-width: 1024px) {
    .ns-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .ns-grid { grid-template-columns: repeat(2, 1fr); }
    .ns-hero { padding: 34px 32px; }
}
@media (max-width: 768px) {
    .ns-grid { grid-template-columns: 1fr; }
    .ns-hero { padding: 28px 24px; }
    .ns-hero-mini-cards { display: none; }
    .ns-action-bar { flex-direction: column; align-items: stretch; }
    .ns-btn-new, .ns-counter-badge { width: 100%; justify-content: center; }
    .ns-search-wrap { min-width: unset; }
    .ns-productivity { padding: 20px; }
}
@media (max-width: 540px) {
    .ns-stats-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
    .ns-hero-title { font-size: 26px; }
    .ns-stat { padding: 18px 16px; }
    .ns-card-footer { flex-direction: column; align-items: flex-start; }
    .ns-card-actions { width: 100%; justify-content: flex-start; }
    .ns-modal { padding: 24px 20px; border-radius: 22px; }
}
</style>

<!-- ══════════════════════════════════════════
     SECTION 1 — HERO
══════════════════════════════════════════ -->
<div class="ns-hero ns-a1">
    <div class="ns-hero-glow ns-hero-glow-1"></div>
    <div class="ns-hero-glow ns-hero-glow-2"></div>

    <!-- Decorative grid lines -->
    <div style="position: absolute; top: 0; right: 0; width: 320px; height: 100%; opacity: 0.035; pointer-events: none; overflow: hidden; border-radius: var(--ns-radius-xl);">
        <svg width="320" height="100%" viewBox="0 0 320 200" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="0" y1="50" x2="320" y2="50" stroke="#C87A45" stroke-width="1"/>
            <line x1="0" y1="100" x2="320" y2="100" stroke="#C87A45" stroke-width="1"/>
            <line x1="0" y1="150" x2="320" y2="150" stroke="#C87A45" stroke-width="1"/>
            <line x1="80" y1="0" x2="80" y2="200" stroke="#C87A45" stroke-width="1"/>
            <line x1="160" y1="0" x2="160" y2="200" stroke="#C87A45" stroke-width="1"/>
            <line x1="240" y1="0" x2="240" y2="200" stroke="#C87A45" stroke-width="1"/>
        </svg>
    </div>

    <div class="ns-hero-inner">
        <div>
            <div class="ns-hero-badge">
                <svg width="9" height="9" viewBox="0 0 10 10" fill="var(--ns-accent)"><polygon points="5,0 6.2,3.5 10,3.5 7,5.7 8.1,9.5 5,7.5 1.9,9.5 3,5.7 0,3.5 3.8,3.5"/></svg>
                Personal Workspace
            </div>
            <h1 class="ns-hero-title">All Notes</h1>
            <p class="ns-hero-sub">Your personal writing space, <span class="ns-hero-accent-name">{{ Auth::user()->name }}</span>. Capture ideas, organize thoughts, and stay in flow.</p>
        </div>

        <div class="ns-hero-mini-cards">
            <div class="ns-hero-mini">
                <div class="ns-hero-mini-icon" style="color: var(--ns-accent);">✦</div>
                <div class="ns-hero-mini-label">Notes</div>
            </div>
            <div class="ns-hero-mini">
                <div class="ns-hero-mini-icon" style="color: var(--ns-text);">⚡</div>
                <div class="ns-hero-mini-label">Active</div>
            </div>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════
     SECTION 2 — STATS
══════════════════════════════════════════ -->
<div class="ns-stats-grid ns-a2">

    <!-- Total Notes -->
    <div class="ns-stat">
        <div class="ns-stat-top">
            <div class="ns-stat-icon ns-stat-icon-acc">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--ns-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/></svg>
            </div>
            <span class="ns-stat-badge ns-stat-badge-green">↑ Active</span>
        </div>
        <p class="ns-stat-num">{{ $notes->count() }}</p>
        <p class="ns-stat-name">Total Notes</p>
        <p class="ns-stat-desc">In your workspace</p>
    </div>

    <!-- Favorites -->
    <div class="ns-stat">
        <div class="ns-stat-top">
            <div class="ns-stat-icon ns-stat-icon-soft">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--ns-muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
            </div>
            <span class="ns-stat-badge ns-stat-badge-yellow">⭐ Fav</span>
        </div>
        <p class="ns-stat-num">{{ $notes->where('is_favorite', true)->count() }}</p>
        <p class="ns-stat-name">Favorites</p>
        <p class="ns-stat-desc">Starred notes</p>
    </div>

    <!-- Pinned -->
    <div class="ns-stat">
        <div class="ns-stat-top">
            <div class="ns-stat-icon ns-stat-icon-soft">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--ns-muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 17v5"/><path d="M9 10.76a2 2 0 0 1-1.11 1.79l-1.78.9A2 2 0 0 0 5 15.24V16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-.76a2 2 0 0 0-1.11-1.79l-1.78-.9A2 2 0 0 1 15 10.76V7a1 1 0 0 1 1-1 2 2 0 0 0 0-4H8a2 2 0 0 0 0 4 1 1 0 0 1 1 1z"/></svg>
            </div>
            <span class="ns-stat-badge ns-stat-badge-muted">📌 Pin</span>
        </div>
        <p class="ns-stat-num">{{ $notes->where('is_pinned', true)->count() }}</p>
        <p class="ns-stat-name">Pinned</p>
        <p class="ns-stat-desc">Quick access</p>
    </div>

    <!-- Categories -->
    <div class="ns-stat">
        <div class="ns-stat-top">
            <div class="ns-stat-icon ns-stat-icon-soft">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--ns-muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
            </div>
            <span class="ns-stat-badge ns-stat-badge-green">↑ +3</span>
        </div>
        <p class="ns-stat-num">{{ $categories->count() }}</p>
        <p class="ns-stat-name">Categories</p>
        <p class="ns-stat-desc">Organized folders</p>
    </div>

</div>


<!-- ══════════════════════════════════════════
     PRODUCTIVITY OVERVIEW
══════════════════════════════════════════ -->
<div class="ns-productivity ns-a3">
    <div class="ns-productivity-head">
        <div>
            <p class="ns-form-label" style="margin-bottom: 5px;">Analytics</p>
            <p class="ns-productivity-title">Productivity Overview</p>
        </div>
        <span class="ns-stat-badge ns-stat-badge-green" style="font-size: 11px; padding: 5px 13px;">↑ +24% this week</span>
    </div>

    @php
        $pbars = [
            ['day' => 'Mon', 'pct' => 55], ['day' => 'Tue', 'pct' => 78],
            ['day' => 'Wed', 'pct' => 100], ['day' => 'Thu', 'pct' => 62],
            ['day' => 'Fri', 'pct' => 88], ['day' => 'Sat', 'pct' => 40], ['day' => 'Sun', 'pct' => 30],
        ];
    @endphp

    <div class="ns-chart-wrap">
        @foreach($pbars as $pb)
        <div class="ns-chart-col">
            <div class="ns-chart-bar-wrap">
                <div class="ns-chart-bar {{ $pb['pct'] === 100 ? 'ns-chart-bar-active' : '' }}"
                     style="height: {{ $pb['pct'] }}%;"
                     onmouseover="this.classList.add('ns-chart-bar-active')"
                     onmouseout="{{ $pb['pct'] !== 100 ? "this.classList.remove('ns-chart-bar-active')" : '' }}">
                </div>
            </div>
            <span class="ns-chart-label {{ $pb['pct'] === 100 ? 'ns-chart-label-active' : '' }}">{{ $pb['day'] }}</span>
        </div>
        @endforeach
    </div>
</div>


<!-- ══════════════════════════════════════════
     SECTION 3 — SEARCH + ACTION
══════════════════════════════════════════ -->
<div class="ns-action-bar ns-a3">

    <div class="ns-search-wrap">
        <span class="ns-search-icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        </span>
        <input
            type="text"
            wire:model.live="search"
            placeholder="Search your notes..."
            class="ns-search-input"
        >
    </div>

    <div class="ns-counter-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Your Notes
    </div>

    <button wire:click="openModal" class="ns-btn-new">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        New Note
    </button>

</div>


<!-- ══════════════════════════════════════════
     SECTION 4 — FILTER PILLS
══════════════════════════════════════════ -->
<div class="ns-filters ns-a4">

    <button
        wire:click="filterPinned"
        class="ns-pill {{ $showPinnedOnly ? 'ns-pill-on' : 'ns-pill-off' }}">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 17v5"/><path d="M9 10.76a2 2 0 0 1-1.11 1.79l-1.78.9A2 2 0 0 0 5 15.24V16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-.76a2 2 0 0 0-1.11-1.79l-1.78-.9A2 2 0 0 1 15 10.76V7a1 1 0 0 1 1-1 2 2 0 0 0 0-4H8a2 2 0 0 0 0 4 1 1 0 0 1 1 1z"/></svg>
        Pinned Only
    </button>

    <button
        wire:click="resetFilter"
        class="ns-pill ns-pill-off">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
        Reset Filter
    </button>

</div>


<!-- ══════════════════════════════════════════
     SECTION 5 — NOTES GRID
══════════════════════════════════════════ -->
<div class="ns-grid ns-a5">

    @forelse ($notes as $note)

    <div
        onclick="window.location='{{ route('notes.show', $note->id) }}'"
        class="ns-card">

        <!-- Top accent line — category color -->
        <div class="ns-card-top-line" style="background: {{ $note->category->color ?? 'var(--ns-border)' }};"></div>

        <!-- CARD HEADER -->
        <div class="ns-card-header">
            <div class="ns-card-meta">
                <div class="ns-cat-chip">
                    <span class="ns-cat-dot" style="background: {{ $note->category->color ?? 'var(--ns-border)' }};"></span>
                    <span class="ns-cat-name">{{ $note->category->genre ?? 'Uncategorized' }}</span>
                </div>
                <h2 class="ns-card-title">{{ $note->title }}</h2>
                <p class="ns-card-time">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    {{ $note->created_at->diffForHumans() }}
                </p>
            </div>

            <!-- Icon actions -->
            <div class="ns-card-icons">
                <button wire:click.stop="toggleFavorite({{ $note->id }})" class="ns-icon-btn" title="Toggle Favorite">
                    @if($note->is_favorite)
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="var(--ns-accent)" stroke="var(--ns-accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                    @else
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--ns-muted)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                    @endif
                </button>
                <button wire:click.stop="togglePin({{ $note->id }})" class="ns-icon-btn" title="Toggle Pin">
                    @if($note->is_pinned)
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--ns-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 17v5"/><path d="M9 10.76a2 2 0 0 1-1.11 1.79l-1.78.9A2 2 0 0 0 5 15.24V16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-.76a2 2 0 0 0-1.11-1.79l-1.78-.9A2 2 0 0 1 15 10.76V7a1 1 0 0 1 1-1 2 2 0 0 0 0-4H8a2 2 0 0 0 0 4 1 1 0 0 1 1 1z"/></svg>
                    @else
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--ns-muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 17v5"/><path d="M9 10.76a2 2 0 0 1-1.11 1.79l-1.78.9A2 2 0 0 0 5 15.24V16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-.76a2 2 0 0 0-1.11-1.79l-1.78-.9A2 2 0 0 1 15 10.76V7a1 1 0 0 1 1-1 2 2 0 0 0 0-4H8a2 2 0 0 0 0 4 1 1 0 0 1 1 1z"/></svg>
                    @endif
                </button>
            </div>
        </div>

        <!-- CONTENT PREVIEW -->
        <p class="ns-card-content">{{ Str::limit($note->content, 160) }}</p>

        <!-- FOOTER -->
        <div class="ns-card-footer">
            <span class="ns-cat-badge" style="background: {{ $note->category->color ?? '#6B6B6B' }};">
                {{ $note->category->genre ?? 'No Category' }}
            </span>
            <div class="ns-card-actions">
                <button wire:click.stop="archive({{ $note->id }})" class="ns-btn-action ns-btn-archive">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="5" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                    Archive
                </button>
                <button wire:click.stop="edit({{ $note->id }})" class="ns-btn-action ns-btn-edit">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    Edit
                </button>
                <button wire:click.stop="delete({{ $note->id }})" wire:confirm="Delete this note?" class="ns-btn-action ns-btn-delete">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                    Delete
                </button>
            </div>
        </div>

    </div>

    @empty

    <!-- ══════════════════════════════════════════
         SECTION 6 — EMPTY STATE
    ══════════════════════════════════════════ -->
    <div class="ns-empty-wrap">
        <div class="ns-empty">
            <div class="ns-empty-icon-wrap">
                <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="var(--ns-border)" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/></svg>
            </div>
            <h2 class="ns-empty-title">No Notes Found</h2>
            <p class="ns-empty-sub">Your workspace is ready and waiting. Create your first note to get started.</p>
            <button wire:click="openModal" class="ns-btn-empty">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                Create Your First Note
            </button>
        </div>
    </div>

    @endforelse

</div>


<!-- ══════════════════════════════════════════
     SECTION 7 — MODAL
══════════════════════════════════════════ -->
@if ($showModal)

<div class="ns-backdrop">
    <div class="ns-modal">

        <!-- Modal Header -->
        <div class="ns-modal-head">
            <div>
                <div class="ns-modal-badge">
                    @if($editingId)
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        Edit Note
                    @else
                        <svg width="9" height="9" viewBox="0 0 10 10" fill="var(--ns-accent)"><polygon points="5,0 6.2,3.5 10,3.5 7,5.7 8.1,9.5 5,7.5 1.9,9.5 3,5.7 0,3.5 3.8,3.5"/></svg>
                        New Note
                    @endif
                </div>
                <h2 class="ns-modal-title">{{ $editingId ? 'Edit Note' : 'Create New Note' }}</h2>
                <p class="ns-modal-sub">{{ $editingId ? 'Update your note details below.' : 'Capture a new idea or thought.' }}</p>
            </div>

            <button wire:click="closeModal" class="ns-modal-close">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>

        <!-- Form Fields -->
        <div class="ns-form-stack">

            <div>
                <label class="ns-form-label">Title</label>
                <input
                    type="text"
                    wire:model="title"
                    placeholder="Give your note a title..."
                    class="ns-input ns-input-text"
                >
            </div>

            <div>
                <label class="ns-form-label">Content</label>
                <textarea
                    wire:model="content"
                    rows="5"
                    placeholder="Write your thoughts here..."
                    class="ns-input ns-input-area"
                ></textarea>
            </div>

            <div>
                <label class="ns-form-label">Category</label>
                <div class="ns-select-wrap">
                    <select
                        wire:model="category_id"
                        class="ns-input ns-input-select">
                        <option value="">Select a category...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->genre }}</option>
                        @endforeach
                    </select>
                    <span class="ns-select-arrow">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
                    </span>
                </div>
            </div>

        </div>

        <!-- Modal Footer -->
        <div class="ns-modal-footer">
            <button wire:click="closeModal" class="ns-btn-cancel">Cancel</button>
            <button wire:click="save" class="ns-btn-save">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
                Save Note
            </button>
        </div>

    </div>
</div>

@endif

</div>