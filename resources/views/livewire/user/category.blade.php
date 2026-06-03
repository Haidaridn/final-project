<div style="font-family: 'DM Sans', sans-serif;">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* ════════════════════════════════════════════
   ROOT VARIABLES — Claude White Notes Theme
════════════════════════════════════════════ */
:root {
    --cw-bg:          #FFFFFF;
    --cw-soft:        #FAF7F2;
    --cw-card:        #FFFFFF;
    --cw-text:        #2B2B2B;
    --cw-muted:       #6B6B6B;
    --cw-faint:       #A09890;
    --cw-border:      #EAE4DB;
    --cw-accent:      #C87A45;
    --cw-accent-h:    #B56835;
    --cw-accent-l:    #F5EEE5;
    --cw-hover:       #F5EEE5;
    --cw-success:     #4F7A5A;
    --cw-err:         #DC2626;
    --cw-shadow-xs:   0 1px 4px rgba(43,43,43,0.05);
    --cw-shadow-sm:   0 2px 14px rgba(43,43,43,0.06);
    --cw-shadow-md:   0 8px 32px rgba(43,43,43,0.08);
    --cw-shadow-lg:   0 24px 64px rgba(43,43,43,0.11);
    --cw-shadow-acc:  0 6px 22px rgba(200,122,69,0.28);
    --cw-r-sm:        10px;
    --cw-r-md:        16px;
    --cw-r-lg:        24px;
    --cw-r-xl:        32px;
    --cw-ease:        cubic-bezier(0.22, 1, 0.36, 1);
    --cw-spring:      cubic-bezier(0.34, 1.56, 0.64, 1);
}

/* ════════════════════════════════════════════
   RESET
════════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

/* ════════════════════════════════════════════
   ANIMATIONS
════════════════════════════════════════════ */
@keyframes cw-fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes cw-scaleIn {
    from { opacity: 0; transform: scale(0.93) translateY(16px); }
    to   { opacity: 1; transform: scale(1) translateY(0); }
}
@keyframes cw-pulseGlow {
    0%, 100% { box-shadow: 0 0 0 0 rgba(200,122,69,0); }
    50%       { box-shadow: 0 0 0 6px rgba(200,122,69,0.12); }
}

.cw-a1 { animation: cw-fadeUp 0.50s var(--cw-ease) both 0.04s; }
.cw-a2 { animation: cw-fadeUp 0.50s var(--cw-ease) both 0.12s; }
.cw-a3 { animation: cw-fadeUp 0.50s var(--cw-ease) both 0.20s; }
.cw-a4 { animation: cw-fadeUp 0.50s var(--cw-ease) both 0.28s; }

/* ════════════════════════════════════════════
   HEADER
════════════════════════════════════════════ */
.cw-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
    margin-bottom: 22px;
}
.cw-header-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: var(--cw-soft);
    border: 1px solid var(--cw-border);
    border-radius: 100px;
    padding: 5px 14px;
    font-size: 11px;
    font-weight: 700;
    color: var(--cw-accent);
    letter-spacing: 0.05em;
    margin-bottom: 13px;
}
.cw-header-title {
    font-family: 'Sora', sans-serif;
    font-size: clamp(26px, 4vw, 40px);
    font-weight: 800;
    color: var(--cw-text);
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 10px;
}
.cw-header-sub {
    font-size: 14px;
    color: var(--cw-muted);
    line-height: 1.65;
    max-width: 420px;
}
.cw-header-stats {
    display: flex;
    gap: 20px;
    margin-top: 16px;
    flex-wrap: wrap;
}
.cw-header-stat {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    color: var(--cw-muted);
    font-weight: 500;
}
.cw-header-stat-dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--cw-accent);
    flex-shrink: 0;
}
.cw-btn-new {
    height: 50px;
    padding: 0 26px;
    background: var(--cw-accent);
    color: #fff;
    border: none;
    border-radius: 18px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: var(--cw-shadow-acc);
    transition: background 0.22s, box-shadow 0.22s, transform 0.20s var(--cw-spring);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
    flex-shrink: 0;
}
.cw-btn-new:hover {
    background: var(--cw-accent-h);
    box-shadow: 0 12px 30px rgba(200,122,69,0.38);
    transform: translateY(-2px) scale(1.02);
}
.cw-btn-new:active { transform: translateY(0) scale(0.99); }

/* ════════════════════════════════════════════
   CATEGORY GRID
════════════════════════════════════════════ */
.cw-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    align-items: start;
}

/* ════════════════════════════════════════════
   CATEGORY CARD
════════════════════════════════════════════ */
.cw-card {
    background: var(--cw-card);
    border: 1px solid var(--cw-border);
    border-radius: var(--cw-r-lg);
    padding: 24px;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: transform 0.30s var(--cw-spring), box-shadow 0.30s ease, border-color 0.22s;
    cursor: default;
}
.cw-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    border-radius: var(--cw-r-lg) var(--cw-r-lg) 0 0;
    opacity: 0;
    transition: opacity 0.22s;
    background: var(--cw-accent);
}
.cw-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--cw-shadow-lg);
    border-color: rgba(200,122,69,0.22);
}
.cw-card:hover::before { opacity: 1; }

/* Card — color preview area */
.cw-card-color-area {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-bottom: 20px;
}
.cw-color-circle-wrap {
    position: relative;
    flex-shrink: 0;
}
.cw-color-ring {
    width: 64px; height: 64px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 3px;
    transition: transform 0.22s var(--cw-spring);
}
.cw-card:hover .cw-color-ring { transform: scale(1.08); }
.cw-color-circle {
    width: 100%; height: 100%;
    border-radius: 50%;
    box-shadow: 0 4px 18px rgba(0,0,0,0.14);
}
.cw-color-glow {
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    opacity: 0.18;
    filter: blur(8px);
    pointer-events: none;
    transition: opacity 0.22s;
}
.cw-card:hover .cw-color-glow { opacity: 0.30; }

/* Card — category info next to circle */
.cw-card-title {
    font-family: 'Sora', sans-serif;
    font-size: 17px;
    font-weight: 700;
    color: var(--cw-text);
    line-height: 1.25;
    margin-bottom: 4px;
}
.cw-card-subtitle {
    font-size: 11.5px;
    color: var(--cw-faint);
    font-weight: 500;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}

/* Card — middle info strips */
.cw-card-info {
    display: flex;
    flex-direction: column;
    gap: 9px;
    padding: 16px 0;
    border-top: 1px solid #F0EBE4;
    border-bottom: 1px solid #F0EBE4;
    margin-bottom: 18px;
}
.cw-info-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.cw-info-label {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    color: var(--cw-muted);
    font-weight: 500;
}
.cw-info-val {
    font-size: 12px;
    font-weight: 600;
    color: var(--cw-text);
}
.cw-info-badge {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 10.5px;
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 100px;
}
.cw-info-badge-green { color: var(--cw-success); background: #EEF6F1; }
.cw-info-badge-acc   { color: var(--cw-accent);  background: var(--cw-hover); }

/* Card — footer */
.cw-card-footer {
    margin-top: auto;
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.cw-footer-badge-row {
    display: flex;
    align-items: center;
}
.cw-cat-badge {
    display: inline-flex;
    align-items: center;
    font-size: 11px;
    font-weight: 700;
    color: #fff;
    padding: 5px 13px;
    border-radius: 100px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    white-space: nowrap;
}
.cw-footer-actions-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    flex-wrap: wrap;
}
.cw-footer-time {
    font-size: 11px;
    color: var(--cw-faint);
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}
.cw-actions {
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Action Buttons */
.cw-btn-act {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    height: 30px;
    padding: 0 12px;
    border-radius: 9px;
    font-family: 'DM Sans', sans-serif;
    font-size: 11.5px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.20s ease;
    border: 1px solid;
    white-space: nowrap;
}
.cw-btn-act:hover { transform: translateY(-2px); }
.cw-btn-edit {
    color: var(--cw-muted);
    background: var(--cw-soft);
    border-color: var(--cw-border);
}
.cw-btn-edit:hover {
    background: var(--cw-hover);
    color: var(--cw-text);
    border-color: rgba(200,122,69,0.24);
}
.cw-btn-delete {
    color: var(--cw-err);
    background: rgba(220,38,38,0.06);
    border-color: rgba(220,38,38,0.16);
}
.cw-btn-delete:hover {
    background: rgba(220,38,38,0.14);
    border-color: rgba(220,38,38,0.30);
}

/* ════════════════════════════════════════════
   EMPTY STATE
════════════════════════════════════════════ */
.cw-empty-col { grid-column: 1 / -1; }
.cw-empty {
    background: var(--cw-soft);
    border: 1.5px dashed var(--cw-border);
    border-radius: var(--cw-r-xl);
    padding: 88px 40px;
    text-align: center;
}
.cw-empty-icon {
    width: 88px; height: 88px;
    border-radius: 26px;
    background: #fff;
    border: 1px solid var(--cw-border);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    box-shadow: var(--cw-shadow-md);
}
.cw-empty-title {
    font-family: 'Sora', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: var(--cw-text);
    margin-bottom: 10px;
}
.cw-empty-sub {
    font-size: 14px;
    color: var(--cw-muted);
    margin-bottom: 32px;
    max-width: 320px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.65;
}
.cw-btn-empty {
    height: 50px;
    padding: 0 30px;
    background: var(--cw-accent);
    color: #fff;
    border: none;
    border-radius: 18px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: var(--cw-shadow-acc);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.22s var(--cw-spring);
}
.cw-btn-empty:hover {
    background: var(--cw-accent-h);
    box-shadow: 0 12px 28px rgba(200,122,69,0.38);
    transform: translateY(-2px);
}

/* ════════════════════════════════════════════
   MODAL
════════════════════════════════════════════ */
.cw-backdrop {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(20,12,4,0.38);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.cw-modal {
    background: #fff;
    border: 1px solid var(--cw-border);
    border-radius: var(--cw-r-xl);
    padding: 36px;
    width: 100%;
    max-width: 520px;
    box-shadow: 0 40px 100px rgba(0,0,0,0.16), 0 8px 30px rgba(0,0,0,0.08);
    animation: cw-scaleIn 0.34s var(--cw-spring) both;
}
.cw-modal-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 28px;
}
.cw-modal-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--cw-hover);
    border: 1px solid rgba(200,122,69,0.20);
    border-radius: 100px;
    padding: 4px 13px;
    font-size: 10.5px;
    font-weight: 700;
    color: var(--cw-accent);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 10px;
}
.cw-modal-title {
    font-family: 'Sora', sans-serif;
    font-size: 22px;
    font-weight: 800;
    color: var(--cw-text);
    line-height: 1.15;
}
.cw-modal-sub {
    font-size: 13px;
    color: var(--cw-muted);
    margin-top: 5px;
}
.cw-modal-close {
    width: 36px; height: 36px;
    border-radius: 11px;
    background: var(--cw-soft);
    border: 1px solid var(--cw-border);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--cw-muted);
    transition: all 0.20s ease;
    flex-shrink: 0;
}
.cw-modal-close:hover {
    background: var(--cw-hover);
    color: var(--cw-text);
    border-color: rgba(200,122,69,0.22);
}

/* Form */
.cw-form-stack { display: flex; flex-direction: column; gap: 22px; }
.cw-form-label {
    display: block;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.11em;
    text-transform: uppercase;
    color: #C0B4A8;
    margin-bottom: 8px;
}
.cw-input {
    width: 100%;
    border: 1px solid var(--cw-border);
    border-radius: var(--cw-r-md);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--cw-text);
    background: #FDFCFB;
    outline: none;
    transition: border-color 0.22s, box-shadow 0.22s, background 0.22s;
    display: block;
}
.cw-input::placeholder { color: #C0B4A8; }
.cw-input:focus {
    border-color: var(--cw-accent);
    box-shadow: 0 0 0 3px rgba(200,122,69,0.10);
    background: #fff;
}
.cw-input-text { height: 52px; padding: 0 18px; }
.cw-input-err { border-color: rgba(220,38,38,0.45) !important; }
.cw-err-msg {
    font-size: 12px;
    color: var(--cw-err);
    margin-top: 7px;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Color picker area */
.cw-color-picker-wrap {
    display: flex;
    gap: 18px;
    align-items: center;
    flex-wrap: wrap;
}
.cw-color-input-wrap {
    position: relative;
    flex-shrink: 0;
}
.cw-color-input {
    width: 64px; height: 64px;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    padding: 0;
    background: transparent;
    outline: none;
    display: block;
}
.cw-color-input::-webkit-color-swatch-wrapper { padding: 0; }
.cw-color-input::-webkit-color-swatch {
    border: none;
    border-radius: 50%;
    box-shadow: 0 4px 16px rgba(0,0,0,0.16);
}
.cw-color-input::-moz-color-swatch {
    border: none;
    border-radius: 50%;
}
.cw-color-ring-preview {
    position: absolute;
    inset: -5px;
    border-radius: 50%;
    border: 2px solid var(--cw-border);
    pointer-events: none;
    transition: border-color 0.22s;
}
.cw-color-preview-card {
    flex: 1;
    min-width: 160px;
    background: var(--cw-soft);
    border: 1px solid var(--cw-border);
    border-radius: var(--cw-r-md);
    padding: 14px 18px;
}
.cw-color-preview-label {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.09em;
    text-transform: uppercase;
    color: #C0B4A8;
    margin-bottom: 7px;
}
.cw-color-preview-name {
    font-family: 'Sora', sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: var(--cw-text);
    margin-bottom: 3px;
}
.cw-color-preview-hex {
    font-size: 12px;
    color: var(--cw-muted);
    font-weight: 500;
    font-family: 'Courier New', monospace;
}
.cw-color-dot-preview {
    width: 12px; height: 12px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 6px;
    vertical-align: middle;
    box-shadow: 0 1px 4px rgba(0,0,0,0.12);
}

/* Modal footer */
.cw-modal-footer {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 10px;
    margin-top: 28px;
    padding-top: 22px;
    border-top: 1px solid var(--cw-border);
}
.cw-btn-cancel {
    height: 48px; padding: 0 22px;
    border-radius: var(--cw-r-sm);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; font-weight: 600;
    color: var(--cw-muted);
    background: var(--cw-soft);
    border: 1px solid var(--cw-border);
    cursor: pointer;
    transition: all 0.20s ease;
}
.cw-btn-cancel:hover { background: var(--cw-hover); color: var(--cw-text); }
.cw-btn-save {
    height: 48px; padding: 0 26px;
    border-radius: var(--cw-r-sm);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; font-weight: 600;
    color: #fff;
    background: var(--cw-accent);
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(200,122,69,0.28);
    transition: all 0.22s var(--cw-spring);
    display: inline-flex; align-items: center; gap: 7px;
}
.cw-btn-save:hover {
    background: var(--cw-accent-h);
    box-shadow: 0 8px 24px rgba(200,122,69,0.38);
    transform: translateY(-2px);
}

/* ════════════════════════════════════════════
   RESPONSIVE
════════════════════════════════════════════ */
@media (max-width: 1024px) {
    .cw-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
    .cw-grid { grid-template-columns: 1fr; }
    .cw-header { flex-direction: column; align-items: flex-start; }
    .cw-btn-new { width: 100%; justify-content: center; }
    .cw-modal { padding: 24px 20px; border-radius: 22px; }
    .cw-footer-actions-row { flex-direction: column; align-items: flex-start; gap: 10px; }
    .cw-actions { width: 100%; }
}
</style>


<!-- ══════════════════════════════════════════
     HEADER
══════════════════════════════════════════ -->
<div class="cw-header cw-a1">

    <div>
        <div class="cw-header-badge">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
            Categories Workspace
        </div>
        <h1 class="cw-header-title">Categories</h1>
        <p class="cw-header-sub">Organize your notes using custom categories and color systems.</p>
        <div class="cw-header-stats">
            <span class="cw-header-stat">
                <span class="cw-header-stat-dot"></span>
                {{ $categories->count() }} Total Categories
            </span>
            <span class="cw-header-stat" style="color: var(--cw-faint);">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                Last updated recently
            </span>
        </div>
    </div>

    <button wire:click="openModal" class="cw-btn-new">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        New Category
    </button>

</div>


<!-- ══════════════════════════════════════════
     CATEGORY GRID
══════════════════════════════════════════ -->
<div class="cw-grid cw-a2">

    @forelse ($categories as $category)

    <div class="cw-card">

        <!-- Color Preview Area -->
        <div class="cw-card-color-area">
            <div class="cw-color-circle-wrap">
                <div class="cw-color-glow" style="background: {{ $category->color }};"></div>
                <div class="cw-color-ring" style="background: {{ $category->color }}1a; border: 2px solid {{ $category->color }}33;">
                    <div class="cw-color-circle" style="background: {{ $category->color }};"></div>
                </div>
            </div>
            <div>
                <h2 class="cw-card-title">{{ $category->genre }}</h2>
                <p class="cw-card-subtitle">Category Collection</p>
            </div>
        </div>

        <!-- Middle Info Strips -->
        <div class="cw-card-info">
            <div class="cw-info-row">
                <span class="cw-info-label">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    Notes
                </span>
                <span class="cw-info-badge cw-info-badge-green">↑ Active</span>
            </div>
            <div class="cw-info-row">
                <span class="cw-info-label">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                    Color System
                </span>
                <span class="cw-info-val" style="font-size: 11px; font-family: 'Courier New', monospace; color: var(--cw-muted);">{{ $category->color }}</span>
            </div>
            <div class="cw-info-row">
                <span class="cw-info-label">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"/><path d="M12 8v4l3 3"/></svg>
                    Status
                </span>
                <span class="cw-info-badge cw-info-badge-acc">Organized</span>
            </div>
        </div>

        <!-- Footer -->
        <div class="cw-card-footer">
            <div class="cw-footer-badge-row">
                <span class="cw-cat-badge" style="background: {{ $category->color }};">
                    {{ $category->genre }}
                </span>
            </div>
            <div class="cw-footer-actions-row">
                <span class="cw-footer-time">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    {{ $category->created_at->diffForHumans() }}
                </span>
                <div class="cw-actions">
                    <button
                        wire:click="edit({{ $category->id }})"
                        class="cw-btn-act cw-btn-edit">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        Edit
                    </button>
                    <button
                        wire:click="delete({{ $category->id }})"
                        wire:confirm="Delete this category?"
                        class="cw-btn-act cw-btn-delete">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                        Delete
                    </button>
                </div>
            </div>
        </div>

    </div>

    @empty

    <!-- ══════════════════════════════════════════
         EMPTY STATE
    ══════════════════════════════════════════ -->
    <div class="cw-empty-col">
        <div class="cw-empty">
            <div class="cw-empty-icon">
                <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="var(--cw-border)" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
            </div>
            <h2 class="cw-empty-title">No Categories Yet</h2>
            <p class="cw-empty-sub">Create your first category to organize notes better and keep your workspace tidy.</p>
            <button wire:click="openModal" class="cw-btn-empty">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                Create Category
            </button>
        </div>
    </div>

    @endforelse

</div>


<!-- ══════════════════════════════════════════
     MODAL
══════════════════════════════════════════ -->
@if ($showModal)

<div class="cw-backdrop">
    <div class="cw-modal">

        <!-- Modal Header -->
        <div class="cw-modal-head">
            <div>
                <div class="cw-modal-badge">
                    @if($editingId)
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        Edit Category
                    @else
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        New Category
                    @endif
                </div>
                <h2 class="cw-modal-title">{{ $editingId ? 'Edit Category' : 'Create Category' }}</h2>
                <p class="cw-modal-sub">{{ $editingId ? 'Update your category details below.' : 'Add a custom category for your notebook.' }}</p>
            </div>

            <button wire:click="closeModal" class="cw-modal-close">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>

        <!-- Form Fields -->
        <div class="cw-form-stack">

            <!-- Genre -->
            <div>
                <label class="cw-form-label">Genre / Name</label>
                <input
                    type="text"
                    wire:model="genre"
                    placeholder="Example: Education, Work, Personal..."
                    class="cw-input cw-input-text @error('genre') cw-input-err @enderror"
                >
                @error('genre')
                    <p class="cw-err-msg">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Color -->
            <div>
                <label class="cw-form-label">Category Color</label>
                <div class="cw-color-picker-wrap">
                    <div class="cw-color-input-wrap">
                        <input
                            type="color"
                            wire:model="color"
                            class="cw-color-input"
                        >
                        <div class="cw-color-ring-preview"></div>
                    </div>
                    <div class="cw-color-preview-card">
                        <p class="cw-color-preview-label">Selected Color</p>
                        <p class="cw-color-preview-name">
                            <span class="cw-color-dot-preview" style="background: {{ $color }};"></span>
                            Custom Color
                        </p>
                        <p class="cw-color-preview-hex">{{ $color }}</p>
                    </div>
                </div>
                @error('color')
                    <p class="cw-err-msg" style="margin-top: 10px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

        </div>

        <!-- Modal Footer -->
        <div class="cw-modal-footer">
            <button wire:click="closeModal" class="cw-btn-cancel">Cancel</button>
            <button wire:click="save" class="cw-btn-save">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
                Save Category
            </button>
        </div>

    </div>
</div>

@endif

</div>