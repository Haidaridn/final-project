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
/* SESUDAH */
.ns-modal {
    background: #fff;
    border: 1px solid var(--ns-border);
    border-radius: 30px;
    padding: 34px;
    width: 100%;
    max-width: 510px;
    max-height: 92vh;           /* ← Batasi tinggi modal maksimal 92% layar */
    display: flex;              /* ← Flex agar bagian dalam bisa scroll */
    flex-direction: column;     /* ← Header tetap di atas, footer tetap di bawah */
    box-shadow: 0 40px 100px rgba(0,0,0,0.16), 0 8px 32px rgba(0,0,0,0.08);
    animation: ns-scaleIn 0.36s var(--ns-spring) both;
}

/* Area form yang bisa di-scroll */
.ns-modal .ns-form-stack {
    overflow-y: auto;
    flex: 1;                    /* ← Ambil sisa ruang di antara header dan footer */
    min-height: 0;              /* ← Penting agar flex child bisa shrink */
    padding-right: 4px;         /* ← Ruang agar scrollbar tidak menempel teks */

    /* Scrollbar custom agar tetap elegan */
    scrollbar-width: thin;
    scrollbar-color: var(--ns-border) transparent;
}
.ns-modal .ns-form-stack::-webkit-scrollbar {
    width: 4px;
}
.ns-modal .ns-form-stack::-webkit-scrollbar-track {
    background: transparent;
}
.ns-modal .ns-form-stack::-webkit-scrollbar-thumb {
    background: var(--ns-border);
    border-radius: 99px;
}
.ns-modal .ns-form-stack::-webkit-scrollbar-thumb:hover {
    background: rgba(200,122,69,0.35);
}

/* Header dan footer modal tidak ikut scroll */
.ns-modal .ns-modal-head {
    flex-shrink: 0;             /* ← Tidak ikut menyusut */
}
.ns-modal .ns-modal-footer {
    flex-shrink: 0;             /* ← Selalu terlihat di bawah */
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

/* ════════════════════════════════════════════
   RICH TEXT EDITOR SYSTEM
════════════════════════════════════════════ */

.rte-editor u {
    text-decoration: underline;
}

/* Wrapper: border luar yang menyatukan toolbar + editor */
.rte-wrapper {
    border: 1px solid var(--ns-border);
    border-radius: var(--ns-radius-md);
    background: #FDFCFB;
    overflow: visible;          /* ← dropdown bebas keluar dari wrapper */
    transition: border-color 0.22s, box-shadow 0.22s;
}
/* Kembalikan rounded corners karena overflow sudah visible */
.rte-toolbar {
    border-radius: var(--ns-radius-md) var(--ns-radius-md) 0 0;
}
.rte-editor-title,
.rte-editor-area {
    border-radius: 0 0 var(--ns-radius-md) var(--ns-radius-md);
}
.rte-wrapper:focus-within {
    border-color: var(--ns-accent);
    box-shadow: 0 0 0 3px rgba(200,122,69,0.10);
    background: #fff;
}

/* Toolbar */
.rte-toolbar {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 8px 12px;
    background: #FFFFFF;
    border-bottom: 1px solid var(--ns-border);
}

/* Tombol toolbar — sistem reusable */
.rte-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    border: 1px solid var(--ns-border);
    background: #FAF7F2;
    color: var(--ns-accent);
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.18s var(--ns-ease),
                border-color 0.18s,
                transform 0.15s var(--ns-spring),
                box-shadow 0.18s;
    user-select: none;
    line-height: 1;
}
.rte-btn:hover {
    background: var(--ns-hover);
    border-color: rgba(200,122,69,0.35);
    transform: translateY(-1px);
    box-shadow: 0 3px 10px rgba(200,122,69,0.15);
}
.rte-btn:active {
    transform: translateY(0) scale(0.95);
}
/* State aktif saat format sedang aktif */
.rte-btn.is-active {
    background: var(--ns-accent);
    color: #fff;
    border-color: var(--ns-accent);
    box-shadow: 0 3px 10px rgba(200,122,69,0.30);
}
.rte-btn-label {
    font-family: Georgia, 'Lora', serif;
    font-weight: 700;
    font-size: 14px;
}

/* Area editor contenteditable */
.rte-editor {
    width: 100%;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--ns-text);
    line-height: 1.65;
    outline: none;
    background: transparent;
    padding: 14px 18px;
    word-break: break-word;
}
.rte-editor-title {
    min-height: 52px;
    max-height: 52px;
    overflow-y: auto;
    display: flex;
    align-items: center;
    padding-top: 0;
    padding-bottom: 0;
    line-height: 52px;
    white-space: nowrap;
    overflow-x: auto;
}
/* SESUDAH — lebih kecil agar modal tidak terlalu tinggi */
.rte-editor-area {
    min-height: 140px;
    max-height: 200px;          /* ← Dibatasi, isi panjang bisa scroll di dalam editor */
    overflow-y: auto;

    /* Scrollbar custom */
    scrollbar-width: thin;
    scrollbar-color: var(--ns-border) transparent;
}
.rte-editor-area::-webkit-scrollbar {
    width: 4px;
}
.rte-editor-area::-webkit-scrollbar-track {
    background: transparent;
}
.rte-editor-area::-webkit-scrollbar-thumb {
    background: var(--ns-border);
    border-radius: 99px;
}
.rte-editor-area::-webkit-scrollbar-thumb:hover {
    background: rgba(200,122,69,0.35);
}

/* Placeholder via CSS */
.rte-editor:empty::before {
    content: attr(data-placeholder);
    color: #C0B4A8;
    pointer-events: none;
    display: block;
    font-weight: 400;
}
.rte-editor-title:empty::before {
    line-height: 52px;
}

/* Strong/bold di dalam editor tampil lebih tegas */
.rte-editor strong,
.rte-editor b {
    font-weight: 700;
    color: var(--ns-text);
}
/* ════════════════════════════════════════════
   COLOR PICKER SYSTEM
════════════════════════════════════════════ */

.rte-separator {
    width: 1px;
    height: 20px;
    background: var(--ns-border);
    margin: 0 4px;
    flex-shrink: 0;
}

/* Tombol warna — lebih lebar karena ada indikator */
.rte-color-btn {
    width: auto !important;
    padding: 0 10px;
    gap: 6px;
    position: relative;
}

/* Bulatan indikator warna aktif */
.rte-color-indicator {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 1.5px solid rgba(0,0,0,0.12);
    flex-shrink: 0;
    transition: background 0.18s;
}

/* Wrapper posisi relatif agar dropdown muncul di bawah tombol */
.rte-color-wrap {
    position: relative;
    display: inline-flex;
}

/* Dropdown panel */
.rte-color-dropdown {
    position: fixed;            /* ← fixed agar tidak terpotong apapun */
    z-index: 99999;
    background: #fff;
    border: 1px solid var(--ns-border);
    border-radius: 16px;
    padding: 14px;
    width: 194px;
    box-shadow: 0 12px 40px rgba(43,43,43,0.13), 0 2px 8px rgba(43,43,43,0.06);
    opacity: 0;
    visibility: hidden;
    transform: translateY(6px) scale(0.97);
    transform-origin: top left;
    transition: opacity 0.20s var(--ns-ease),
                transform 0.20s var(--ns-ease),
                visibility 0.20s;
    pointer-events: none;
}
.rte-color-dropdown.is-open {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
    pointer-events: all;
}

.rte-color-label {
    font-size: 9.5px;
    font-weight: 700;
    letter-spacing: 0.10em;
    text-transform: uppercase;
    color: #C0B4A8;
    margin-bottom: 10px;
}

/* Grid swatch warna */
.rte-color-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 6px;
    margin-bottom: 10px;
}

.rte-swatch {
    width: 28px;
    height: 28px;
    border-radius: 8px;
    border: 2px solid transparent;
    cursor: pointer;
    transition: transform 0.15s var(--ns-spring),
                border-color 0.15s,
                box-shadow 0.15s;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.rte-swatch:hover {
    transform: scale(1.18);
    box-shadow: 0 3px 10px rgba(0,0,0,0.18);
}
.rte-swatch.is-active {
    border-color: var(--ns-accent);
    box-shadow: 0 0 0 3px rgba(200,122,69,0.20);
    transform: scale(1.12);
}

/* Swatch tambah custom */
.rte-swatch-custom {
    background: var(--ns-soft);
    border: 1.5px dashed var(--ns-border) !important;
    color: var(--ns-muted);
}
.rte-swatch-custom:hover {
    background: var(--ns-hover);
    border-color: var(--ns-accent) !important;
    color: var(--ns-accent);
}

/* Input color native — tersembunyi, dipanggil via JS */
.rte-custom-color {
    position: absolute;
    width: 1px;
    height: 1px;
    opacity: 0;
    pointer-events: none;
}

/* Tombol reset warna */
.rte-color-reset {
    width: 100%;
    height: 30px;
    border-radius: 8px;
    border: 1px solid var(--ns-border);
    background: var(--ns-soft);
    color: var(--ns-muted);
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    transition: all 0.18s;
    margin-top: 4px;
}
.rte-color-reset:hover {
    background: var(--ns-hover);
    border-color: rgba(200,122,69,0.30);
    color: var(--ns-text);
}
/* ════════════════════════════════════════════
   FREE COLOR INPUT (tanpa batasan)
════════════════════════════════════════════ */
.rte-free-color-wrap {
    border-top: 1px solid var(--ns-border);
    padding-top: 10px;
    margin-top: 6px;
    margin-bottom: 6px;
}

.rte-free-color-row {
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Native color picker — visible, ukuran pas */
.rte-free-color-input {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    border: 1px solid var(--ns-border);
    padding: 2px;
    cursor: pointer;
    background: none;
    flex-shrink: 0;
}
.rte-free-color-input::-webkit-color-swatch-wrapper { padding: 0; border-radius: 6px; }
.rte-free-color-input::-webkit-color-swatch { border: none; border-radius: 6px; }

/* Input HEX manual */
.rte-free-color-hex {
    flex: 1;
    height: 32px;
    border: 1px solid var(--ns-border);
    border-radius: 8px;
    padding: 0 8px;
    font-family: 'DM Sans', monospace;
    font-size: 12px;
    color: var(--ns-text);
    background: var(--ns-soft);
    outline: none;
    transition: border-color 0.18s, box-shadow 0.18s;
    min-width: 0;
}
.rte-free-color-hex:focus {
    border-color: var(--ns-accent);
    box-shadow: 0 0 0 2px rgba(200,122,69,0.10);
    background: #fff;
}

/* Tombol Apply */
.rte-free-color-apply {
    height: 32px;
    padding: 0 10px;
    border-radius: 8px;
    border: none;
    background: var(--ns-accent);
    color: #fff;
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 700;
    cursor: pointer;
    flex-shrink: 0;
    transition: background 0.18s, transform 0.15s var(--ns-spring);
}
.rte-free-color-apply:hover {
    background: var(--ns-accent-h);
    transform: translateY(-1px);
}

/* Dropdown lebih lebar untuk akomodasi free color */
.rte-color-dropdown {
    width: 210px !important;
}

/* Sembunyikan swatch "+" lama karena sudah ada free color di bawah */
.rte-swatch-custom {
    display: none !important;
}
/* ════════════════════════════════════════════
   FONT SIZE SELECT
════════════════════════════════════════════ */
.rte-size-wrap {
    display: inline-flex;
    align-items: center;
}

.rte-size-select {
    height: 32px;
    padding: 0 24px 0 10px;
    border: 1px solid var(--ns-border);
    border-radius: 8px;
    background: #FAF7F2;
    color: var(--ns-accent);
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    outline: none;
    appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L5 5L9 1' stroke='%23C87A45' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 8px center;
    transition: border-color 0.18s, background-color 0.18s, box-shadow 0.18s;
    min-width: 72px;
}
.rte-size-select:hover {
    background-color: var(--ns-hover);
    border-color: rgba(200,122,69,0.35);
    box-shadow: 0 3px 10px rgba(200,122,69,0.15);
}
.rte-size-select:focus {
    border-color: var(--ns-accent);
    box-shadow: 0 0 0 2px rgba(200,122,69,0.12);
    background-color: #fff;
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
                <h2 class="ns-card-title">{!! $note->title !!}</h2>
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

        <div class="ns-card-content">{!! Str::limit(strip_tags($note->content, '<strong><b><em><i><u><span><font>'), 160) !!}</div>
            
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
                <button
                    onclick="event.stopPropagation(); confirmDelete({{ $note->id }})"
                    class="ns-btn-action ns-btn-delete">
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

            <!-- TITLE FIELD -->
            <div>
                <label class="ns-form-label">Title</label>
                <div class="rte-wrapper">
                    <div class="rte-toolbar">

                    <button type="button" class="rte-btn" data-cmd="bold" data-target="rte-title" title="Bold (Ctrl+B)">
                        <span class="rte-btn-label">B</span>
                    </button>
                    <button type="button" class="rte-btn" data-cmd="italic" data-target="rte-title" title="Italic (Ctrl+I)"
                            style="font-style: italic; font-family: Georgia, serif;">
                        I
                    </button>

                    <button type="button" class="rte-btn" data-cmd="underline" data-target="rte-title" title="Underline (Ctrl+U)"
                            style="text-decoration: underline; font-family: Georgia, serif;">
                        U
                    </button>

                    <div class="rte-size-wrap">
                        <select class="rte-size-select" id="rte-size-title" title="Font Size">
                            <option value="">Size</option>
                            <option value="1">10px</option>
                            <option value="2">13px</option>
                            <option value="3">16px</option>
                            <option value="4">18px</option>
                            <option value="5">24px</option>
                            <option value="6">32px</option>
                            <option value="7">48px</option>
                        </select>
                    </div>

                    <div class="rte-separator"></div>
                        <div class="rte-color-wrap" title="Text Color">
                            <button type="button" class="rte-btn rte-color-btn" id="rte-color-btn-title">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>
                                <span class="rte-color-indicator" id="rte-color-ind-title" style="background:#2B2B2B;"></span>
                            </button>
                            <div class="rte-color-dropdown" id="rte-color-dd-title">
                                <p class="rte-color-label">Text Color</p>
                                <div class="rte-color-grid" data-target="rte-title">
                                    <button class="rte-swatch" data-color="#2B2B2B" style="background:#2B2B2B;" title="Default"></button>
                                    <button class="rte-swatch" data-color="#C87A45" style="background:#C87A45;" title="Accent"></button>
                                    <button class="rte-swatch" data-color="#DC2626" style="background:#DC2626;" title="Red"></button>
                                    <button class="rte-swatch" data-color="#D49A45" style="background:#D49A45;" title="Yellow"></button>
                                    <button class="rte-swatch" data-color="#4F7A5A" style="background:#4F7A5A;" title="Green"></button>
                                    <button class="rte-swatch" data-color="#3B82F6" style="background:#3B82F6;" title="Blue"></button>
                                    <button class="rte-swatch" data-color="#8B5CF6" style="background:#8B5CF6;" title="Purple"></button>
                                    <button class="rte-swatch" data-color="#EC4899" style="background:#EC4899;" title="Pink"></button>
                                    <button class="rte-swatch" data-color="#6B7280" style="background:#6B7280;" title="Gray"></button>
                                    <button class="rte-swatch rte-swatch-custom" data-color="custom" title="Custom Color">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                    </button>
                                </div>
                                {{-- Input color bebas tanpa batasan --}}
                                <div class="rte-free-color-wrap">
                                    <label class="rte-color-label" style="margin-bottom:6px; display:block;">Custom Color</label>
                                    <div class="rte-free-color-row">
                                        <input type="color" class="rte-free-color-input" id="rte-free-color-title" value="#2B2B2B">
                                        <input type="text" class="rte-free-color-hex" id="rte-free-hex-title" value="#2B2B2B" placeholder="#000000" maxlength="7">
                                        <button type="button" class="rte-free-color-apply" id="rte-free-apply-title">Apply</button>
                                    </div>
                                </div>
                                <button type="button" class="rte-color-reset" data-target="rte-title" id="rte-color-reset-title">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
                                    Reset Color
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        id="rte-title"
                        class="rte-editor rte-editor-title"
                        contenteditable="true"
                        data-placeholder="Give your note a title..."
                        wire:ignore
                    ></div>
                </div>
                <input type="hidden" wire:model="title" id="rte-title-sync">
            </div>

            <!-- CONTENT FIELD -->
            <div>
                <label class="ns-form-label">Content</label>
                <div class="rte-wrapper">
                    <div class="rte-toolbar">
                        <button type="button" class="rte-btn" data-cmd="bold" data-target="rte-content" title="Bold (Ctrl+B)">
                            <span class="rte-btn-label">B</span>
                        </button>
                        <button type="button" class="rte-btn" data-cmd="italic" data-target="rte-content" title="Italic (Ctrl+I)"
                                style="font-style: italic; font-family: Georgia, serif;">
                            I
                        </button>

                        <button type="button" class="rte-btn" data-cmd="underline" data-target="rte-content" title="Underline (Ctrl+U)"
                                style="text-decoration: underline; font-family: Georgia, serif;">
                            U
                        </button>

                        <div class="rte-size-wrap">
                            <select class="rte-size-select" id="rte-size-content" title="Font Size">
                                <option value="">Size</option>
                                <option value="1">10px</option>
                                <option value="2">13px</option>
                                <option value="3">16px</option>
                                <option value="4">18px</option>
                                <option value="5">24px</option>
                                <option value="6">32px</option>
                                <option value="7">48px</option>
                            </select>
                        </div>

                        <div class="rte-separator"></div>
                        <div class="rte-color-wrap" title="Text Color">
                            <button type="button" class="rte-btn rte-color-btn" id="rte-color-btn-content">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>
                                <span class="rte-color-indicator" id="rte-color-ind-content" style="background:#2B2B2B;"></span>
                            </button>
                            <div class="rte-color-dropdown" id="rte-color-dd-content">
                                <p class="rte-color-label">Text Color</p>
                                <div class="rte-color-grid" data-target="rte-content">
                                    <button class="rte-swatch" data-color="#2B2B2B" style="background:#2B2B2B;" title="Default"></button>
                                    <button class="rte-swatch" data-color="#C87A45" style="background:#C87A45;" title="Accent"></button>
                                    <button class="rte-swatch" data-color="#DC2626" style="background:#DC2626;" title="Red"></button>
                                    <button class="rte-swatch" data-color="#D49A45" style="background:#D49A45;" title="Yellow"></button>
                                    <button class="rte-swatch" data-color="#4F7A5A" style="background:#4F7A5A;" title="Green"></button>
                                    <button class="rte-swatch" data-color="#3B82F6" style="background:#3B82F6;" title="Blue"></button>
                                    <button class="rte-swatch" data-color="#8B5CF6" style="background:#8B5CF6;" title="Purple"></button>
                                    <button class="rte-swatch" data-color="#EC4899" style="background:#EC4899;" title="Pink"></button>
                                    <button class="rte-swatch" data-color="#6B7280" style="background:#6B7280;" title="Gray"></button>
                                    <button class="rte-swatch rte-swatch-custom" data-color="custom" title="Custom Color">
                                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                    </button>
                                </div>
                                {{-- Input color bebas tanpa batasan --}}
                                <div class="rte-free-color-wrap">
                                    <label class="rte-color-label" style="margin-bottom:6px; display:block;">Custom Color</label>
                                    <div class="rte-free-color-row">
                                        <input type="color" class="rte-free-color-input" id="rte-free-color-content" value="#2B2B2B">
                                        <input type="text" class="rte-free-color-hex" id="rte-free-hex-content" value="#2B2B2B" placeholder="#000000" maxlength="7">
                                        <button type="button" class="rte-free-color-apply" id="rte-free-apply-content">Apply</button>
                                    </div>
                                </div>
                                <button type="button" class="rte-color-reset" data-target="rte-content" id="rte-color-reset-content">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
                                    Reset Color
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        id="rte-content"
                        class="rte-editor rte-editor-area"
                        contenteditable="true"
                        data-placeholder="Write your thoughts here..."
                        wire:ignore
                    ></div>
                </div>
                <input type="hidden" wire:model="content" id="rte-content-sync">
            </div>

            <!-- CATEGORY -->
            <div>
                <label class="ns-form-label">Category</label>
                <div class="ns-select-wrap">
                    <select wire:model="category_id" class="ns-input ns-input-select">
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

<script>
/* ════════════════════════════════════════════
   RICH TEXT EDITOR SYSTEM — Livewire Compatible
════════════════════════════════════════════ */

class RteEditor {
    constructor(editorId, syncId) {
        this.editor   = document.getElementById(editorId);
        this.syncEl   = document.getElementById(syncId);
        this.editorId = editorId;

        // Ambil suffix sekali, dipakai konsisten di semua method
        this.suffix   = editorId === 'rte-title' ? 'title' : 'content';

        if (!this.editor || !this.syncEl) return;

        this._bindEditor();
        this._bindToolbarButtons();
        this._bindSelectionChange();
        this._initColorPicker();
        this._initFontSize();
    }

    _sync() {
        const html  = this.editor.innerHTML;
        const clean = html === '<br>' ? '' : html;
        this.syncEl.value = clean;
        this.syncEl.dispatchEvent(new Event('input', { bubbles: true }));
    }

    setContent(html) {
        if (!this.editor) return;
        this.editor.innerHTML = html || '';
        this._sync();
    }

    clearContent() {
        if (!this.editor) return;
        this.editor.innerHTML = '';
        this._sync();
    }

    _bindEditor() {
        this.editor.addEventListener('input', () => this._sync());

        this.editor.addEventListener('paste', (e) => {
            e.preventDefault();
            const pastedHtml = (e.clipboardData || window.clipboardData)
                .getData('text/html') ||
                (e.clipboardData || window.clipboardData).getData('text/plain');
            const safe = this._sanitize(pastedHtml);
            document.execCommand('insertHTML', false, safe);
            this._sync();
        });

    this.editor.addEventListener('keydown', (e) => {
        if ((e.ctrlKey || e.metaKey) && e.key === 'b') {
            e.preventDefault();
            this._execCmd('bold');
        }
        if ((e.ctrlKey || e.metaKey) && e.key === 'i') {
            e.preventDefault();
            this._execCmd('italic');
        }
        if ((e.ctrlKey || e.metaKey) && e.key === 'u') {
            e.preventDefault();
            this._execCmd('underline');
        }
    });
    }

    _sanitize(html) {
        const div     = document.createElement('div');
        div.innerHTML = html;
        const allowed = ['STRONG', 'B', 'EM', 'I', 'U', 'BR', 'P', 'SPAN', 'FONT'];
        const walk    = (node) => {
            [...node.childNodes].forEach(child => {
                if (child.nodeType === Node.ELEMENT_NODE) {
                    if (!allowed.includes(child.tagName)) {
                        child.replaceWith(...child.childNodes);
                    } else {
                        [...child.attributes].forEach(attr => {
                            if (!['style', 'color'].includes(attr.name)) {
                                child.removeAttribute(attr.name);
                            }
                        });
                        walk(child);
                    }
                }
            });
        };
        walk(div);
        return div.innerHTML;
    }

    _execCmd(cmd, value = null) {
        this.editor.focus();
        document.execCommand(cmd, false, value);
        this._sync();
        this._updateButtonStates();
    }

    _bindToolbarButtons() {
        // Hanya bind tombol yang punya data-cmd dan data-target sesuai editor ini
        // Kecualikan tombol color (tidak punya data-cmd) dan swatch/reset
        this.editor.closest('.rte-wrapper')
            .querySelectorAll(`[data-cmd]`)
            .forEach(btn => {
                btn.addEventListener('mousedown', (e) => {
                    e.preventDefault();
                    const cmd = btn.getAttribute('data-cmd');
                    if (cmd) this._execCmd(cmd);
                });
            });
    }

    _updateButtonStates() {
        this.editor.closest('.rte-wrapper')
            .querySelectorAll('[data-cmd]')
            .forEach(btn => {
                const cmd = btn.getAttribute('data-cmd');
                try {
                    if (document.queryCommandState(cmd)) {
                        btn.classList.add('is-active');
                    } else {
                        btn.classList.remove('is-active');
                    }
                } catch(e) {}
            });
    }

    _bindSelectionChange() {
        document.addEventListener('selectionchange', () => {
            const sel = window.getSelection();
            if (sel && sel.rangeCount > 0) {
                const range = sel.getRangeAt(0);
                if (this.editor.contains(range.commonAncestorContainer)) {
                    this._updateButtonStates();
                }
            }
        });
    }

    /* ════════════════════════════════════════
       COLOR PICKER
    ════════════════════════════════════════ */
    _initColorPicker() {
        const s = this.suffix; // 'title' atau 'content'

        this.colorBtn      = document.getElementById(`rte-color-btn-${s}`);
        this.colorDropdown = document.getElementById(`rte-color-dd-${s}`);
        this.colorInd      = document.getElementById(`rte-color-ind-${s}`);
        this.resetBtn      = document.getElementById(`rte-color-reset-${s}`);

        if (!this.colorBtn || !this.colorDropdown) return;

        this._savedRange  = null;
        this._activeColor = '#2B2B2B';

        /* ── Buka / tutup dropdown ── */
        this.colorBtn.addEventListener('mousedown', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this._saveSelection();
            this._toggleDropdown();
        });

        /* ── Swatch preset ── */
        const grid = this.colorDropdown.querySelector('.rte-color-grid');
        grid.querySelectorAll('.rte-swatch').forEach(swatch => {
            swatch.addEventListener('mousedown', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const color = swatch.getAttribute('data-color');
                if (!color || color === 'custom') return;
                this._applyColor(color);
                grid.querySelectorAll('.rte-swatch').forEach(s => s.classList.remove('is-active'));
                swatch.classList.add('is-active');
                this._closeDropdown();
            });
        });

        /* ── Reset warna ── */
        if (this.resetBtn) {
            this.resetBtn.addEventListener('mousedown', (e) => {
                e.preventDefault();
                e.stopPropagation();
                this._applyColor('#2B2B2B');
                grid.querySelectorAll('.rte-swatch').forEach(sw => sw.classList.remove('is-active'));
                grid.querySelector('[data-color="#2B2B2B"]')?.classList.add('is-active');
                this._closeDropdown();
            });
        }

        /* ── Free color: native picker + HEX input + Apply ── */
        const freeColorInput = document.getElementById(`rte-free-color-${s}`);
        const freeHexInput   = document.getElementById(`rte-free-hex-${s}`);
        const freeApplyBtn   = document.getElementById(`rte-free-apply-${s}`);

        if (freeColorInput && freeHexInput && freeApplyBtn) {

            // Color picker native → sync HEX
            freeColorInput.addEventListener('input', (e) => {
                freeHexInput.value = e.target.value;
            });

            // HEX input → sync color picker (jika valid 6 digit)
            freeHexInput.addEventListener('input', (e) => {
                const val = e.target.value.trim();
                if (/^#[0-9A-Fa-f]{6}$/.test(val)) {
                    freeColorInput.value = val;
                }
            });

            // Tombol Apply
            const doApply = (e) => {
                if (e) { e.preventDefault(); e.stopPropagation(); }
                const color = freeHexInput.value.trim();
                if (/^#[0-9A-Fa-f]{3,6}$/.test(color)) {
                    this._applyColor(color);
                    freeColorInput.value = color;
                    freeHexInput.value   = color;
                    grid.querySelectorAll('.rte-swatch').forEach(sw => sw.classList.remove('is-active'));
                    this._closeDropdown();
                }
            };

            freeApplyBtn.addEventListener('mousedown', doApply);

            // Enter di HEX input = Apply
            freeHexInput.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    doApply(null);
                }
            });

            // Cegah dropdown tertutup saat interaksi di dalam free color area
            freeColorInput.addEventListener('mousedown', (e) => e.stopPropagation());
            freeHexInput.addEventListener('mousedown',   (e) => e.stopPropagation());
        }

        /* ── Tutup saat klik di luar — pakai listener per instance ── */
        document.addEventListener('mousedown', this._outsideClickHandler = (e) => {
            if (!this.colorDropdown.classList.contains('is-open')) return;
            if (this.colorDropdown.contains(e.target)) return;
            if (this.colorBtn.contains(e.target)) return;
            this._closeDropdown();
        });
    }

    _saveSelection() {
        const sel = window.getSelection();
        if (sel && sel.rangeCount > 0) {
            this._savedRange = sel.getRangeAt(0).cloneRange();
        }
    }

    _restoreSelection() {
        if (!this._savedRange) return;
        const sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(this._savedRange);
        this.editor.focus();
    }

    _applyColor(color) {
        this._restoreSelection();
        document.execCommand('foreColor', false, color);
        this._activeColor = color;
        if (this.colorInd) this.colorInd.style.background = color;
        this._sync();
    }

    _toggleDropdown() {
        if (this.colorDropdown.classList.contains('is-open')) {
            this._closeDropdown();
        } else {
            this._openDropdown();
        }
    }

    _openDropdown() {
        // Tutup semua dropdown lain
        document.querySelectorAll('.rte-color-dropdown.is-open').forEach(dd => {
            if (dd !== this.colorDropdown) dd.classList.remove('is-open');
        });

        // Hitung posisi tombol lalu posisikan dropdown secara fixed
        const btnRect = this.colorBtn.getBoundingClientRect();
        this.colorDropdown.style.top  = (btnRect.bottom + 8) + 'px';
        this.colorDropdown.style.left = btnRect.left + 'px';

        // Cegah dropdown keluar dari kanan layar
        this.colorDropdown.classList.add('is-open');

        // Koreksi jika keluar dari kanan layar
        requestAnimationFrame(() => {
            const ddRect     = this.colorDropdown.getBoundingClientRect();
            const overflowRight = ddRect.right - window.innerWidth + 12;
            if (overflowRight > 0) {
                this.colorDropdown.style.left = (btnRect.left - overflowRight) + 'px';
            }
            // Koreksi jika keluar dari bawah layar
            const overflowBottom = ddRect.bottom - window.innerHeight + 12;
            if (overflowBottom > 0) {
                this.colorDropdown.style.top = (btnRect.top - ddRect.height - 8) + 'px';
            }
        });
    }

    _closeDropdown() {
        this.colorDropdown.classList.remove('is-open');
    }

    /* ════════════════════════════════════════════
    FONT SIZE
    ════════════════════════════════════════════ */
    _initFontSize() {
        const s = this.suffix;
        const select = document.getElementById(`rte-size-${s}`);
        if (!select) return;

        // Saat user memilih ukuran
        select.addEventListener('mousedown', (e) => {
            // Simpan seleksi sebelum dropdown select terbuka
            this._saveSelection();
        });

        select.addEventListener('change', (e) => {
            const val = e.target.value;
            if (!val) return;

            // Restore seleksi lalu apply font size
            this._restoreSelection();
            document.execCommand('fontSize', false, val);

            // Reset select ke placeholder agar bisa dipilih ulang
            select.value = '';
            this._sync();
        });

        // Cegah select menutup dropdown warna yang sedang terbuka
        select.addEventListener('focus', () => {
            this._saveSelection();
        });
    }

    destroy() {
        if (this._outsideClickHandler) {
            document.removeEventListener('mousedown', this._outsideClickHandler);
        }
    }
}

/* ════════════════════════════════════════════
   INISIALISASI & SINKRONISASI DENGAN LIVEWIRE
════════════════════════════════════════════ */

let rteTitle   = null;
let rteContent = null;

function initRteEditors(titleHtml = '', contentHtml = '') {
    // Destroy instance lama agar tidak ada listener ganda
    if (rteTitle)   rteTitle.destroy();
    if (rteContent) rteContent.destroy();

    setTimeout(() => {
        rteTitle   = new RteEditor('rte-title',   'rte-title-sync');
        rteContent = new RteEditor('rte-content', 'rte-content-sync');

        if (rteTitle)   rteTitle.setContent(titleHtml);
        if (rteContent) rteContent.setContent(contentHtml);
    }, 80);
}

document.addEventListener('livewire:init', () => {

    Livewire.on('modal-opened', () => {
        initRteEditors('', '');
    });

    Livewire.on('modal-edit', (event) => {
        initRteEditors(event.title || '', event.content || '');
    });

    Livewire.on('note-saved', (event) => {
        Swal.fire({
            icon: 'success',
            title: 'Note Saved',
            text: event.message,
            background: '#FFFFFF',
            color: '#2B2B2B',
            confirmButtonColor: '#C87A45',
            showConfirmButton: false,
            timer: 2200,
            timerProgressBar: true,
            customClass: { popup: 'rounded-3xl' }
        });
    });

    Livewire.on('note-deleted', (event) => {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: event.message,
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            background: '#FFFFFF',
            color: '#2B2B2B'
        });
    });

    Livewire.on('note-archived', (event) => {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Note archived successfully.',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            background: '#FFFFFF',
            color: '#2B2B2B',
            customClass: { popup: 'rounded-3xl' }
        });
    });

});

function confirmDelete(noteId) {
    Swal.fire({
        title: 'Delete Note?',
        text: 'Are you sure you want to delete this note?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#C87A45',
        cancelButtonColor: '#D1D5DB',
        confirmButtonText: 'Yes, Delete',
        cancelButtonText: 'Cancel',
        background: '#FFFFFF',
        color: '#2B2B2B'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.dispatch('delete-note', { id: noteId });
        }
    });
}
</script>

