<div style="font-family: 'DM Sans', sans-serif;">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* ════════════════════════════════════════════
   ROOT VARIABLES — Claude White Notes Theme
════════════════════════════════════════════ */
:root {
    --fv-bg:         #FFFFFF;
    --fv-soft:       #FAF7F2;
    --fv-card:       #FFFFFF;
    --fv-text:       #2B2B2B;
    --fv-muted:      #6B6B6B;
    --fv-faint:      #A09890;
    --fv-border:     #EAE4DB;
    --fv-accent:     #C87A45;
    --fv-accent-h:   #B56835;
    --fv-accent-l:   #F5EEE5;
    --fv-hover:      #F5EEE5;
    --fv-success:    #4F7A5A;
    --fv-err:        #DC2626;
    --fv-shadow-xs:  0 1px 4px rgba(43,43,43,0.04);
    --fv-shadow-sm:  0 2px 14px rgba(43,43,43,0.06);
    --fv-shadow-md:  0 8px 32px rgba(43,43,43,0.08);
    --fv-shadow-lg:  0 24px 64px rgba(43,43,43,0.11);
    --fv-shadow-acc: 0 6px 22px rgba(200,122,69,0.26);
    --fv-r-sm:       10px;
    --fv-r-md:       16px;
    --fv-r-lg:       24px;
    --fv-r-xl:       32px;
    --fv-ease:       cubic-bezier(0.22, 1, 0.36, 1);
    --fv-spring:     cubic-bezier(0.34, 1.56, 0.64, 1);
}

/* ════════════════════════════════════════════
   RESET
════════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

/* ════════════════════════════════════════════
   ANIMATIONS
════════════════════════════════════════════ */
@keyframes fv-fadeUp {
    from { opacity: 0; transform: translateY(22px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes fv-heartPop {
    0%   { transform: scale(1); }
    40%  { transform: scale(1.32); }
    70%  { transform: scale(0.92); }
    100% { transform: scale(1); }
}
@keyframes fv-float {
    0%, 100% { transform: translateY(0); }
    50%       { transform: translateY(-8px); }
}

.fv-a1 { animation: fv-fadeUp 0.52s var(--fv-ease) both 0.04s; }
.fv-a2 { animation: fv-fadeUp 0.52s var(--fv-ease) both 0.12s; }
.fv-a3 { animation: fv-fadeUp 0.52s var(--fv-ease) both 0.20s; }
.fv-a4 { animation: fv-fadeUp 0.52s var(--fv-ease) both 0.28s; }

/* ════════════════════════════════════════════
   HERO HEADER
════════════════════════════════════════════ */
.fv-hero {
    position: relative;
    background: var(--fv-soft);
    border: 1px solid var(--fv-border);
    border-radius: var(--fv-r-xl);
    padding: 40px 44px;
    overflow: hidden;
    box-shadow: var(--fv-shadow-sm);
    margin-bottom: 20px;
}
.fv-hero-glow {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}
.fv-hero-glow-1 {
    width: 360px; height: 360px;
    top: -140px; right: -70px;
    background: radial-gradient(circle, rgba(200,122,69,0.12) 0%, transparent 68%);
}
.fv-hero-glow-2 {
    width: 200px; height: 200px;
    bottom: -80px; right: 210px;
    background: radial-gradient(circle, rgba(200,122,69,0.07) 0%, transparent 70%);
}
.fv-hero-inner {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 28px;
    flex-wrap: wrap;
}

/* Badge */
.fv-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: #fff;
    border: 1px solid var(--fv-border);
    border-radius: 100px;
    padding: 5px 14px;
    font-size: 11px;
    font-weight: 700;
    color: var(--fv-accent);
    letter-spacing: 0.05em;
    margin-bottom: 13px;
}

/* Title */
.fv-hero-title {
    font-family: 'Sora', sans-serif;
    font-size: clamp(26px, 4vw, 40px);
    font-weight: 800;
    color: var(--fv-text);
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 10px;
}
.fv-hero-sub {
    font-size: 14px;
    color: var(--fv-muted);
    line-height: 1.65;
    max-width: 440px;
    margin-bottom: 20px;
}

/* Mini stat chips */
.fv-hero-chips {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}
.fv-chip {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: #fff;
    border: 1px solid var(--fv-border);
    border-radius: 100px;
    padding: 6px 14px;
    font-size: 12px;
    font-weight: 600;
    color: var(--fv-muted);
    white-space: nowrap;
    box-shadow: var(--fv-shadow-xs);
}
.fv-chip-dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--fv-accent);
    flex-shrink: 0;
}

/* Search */
.fv-search-wrap {
    position: relative;
    flex-shrink: 0;
    width: 280px;
}
.fv-search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #C0B4A8;
    display: flex;
}
.fv-search-input {
    width: 100%;
    height: 50px;
    padding: 0 18px 0 46px;
    border: 1px solid var(--fv-border);
    border-radius: 18px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: var(--fv-text);
    background: var(--fv-card);
    outline: none;
    transition: border-color 0.22s, box-shadow 0.22s;
    box-shadow: var(--fv-shadow-xs);
}
.fv-search-input::placeholder { color: #C0B4A8; }
.fv-search-input:focus {
    border-color: var(--fv-accent);
    box-shadow: 0 0 0 3px rgba(200,122,69,0.10);
}

/* ════════════════════════════════════════════
   GRID
════════════════════════════════════════════ */
.fv-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    align-items: start;
}

/* ════════════════════════════════════════════
   CARD
════════════════════════════════════════════ */
.fv-card {
    background: var(--fv-card);
    border: 1px solid var(--fv-border);
    border-radius: 28px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: transform 0.30s var(--fv-spring), box-shadow 0.30s ease, border-color 0.22s;
    cursor: default;
}
.fv-card-accent-line {
    position: absolute;
    top: 0; left: 22px; right: 22px;
    height: 3px;
    border-radius: 0 0 6px 6px;
    background: var(--fv-accent);
    opacity: 0;
    transition: opacity 0.22s;
}
.fv-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--fv-shadow-lg);
    border-color: rgba(200,122,69,0.22);
}
.fv-card:hover .fv-card-accent-line { opacity: 1; }

/* Card — Top */
.fv-card-top {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 14px;
}
.fv-card-meta { min-width: 0; flex: 1; }
.fv-card-title {
    font-family: 'Sora', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--fv-text);
    line-height: 1.28;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin-bottom: 6px;
}
.fv-card-time {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 11.5px;
    color: #B8AFA4;
    font-weight: 500;
}

/* Fav badge */
.fv-fav-badge {
    width: 36px; height: 36px;
    border-radius: 11px;
    background: var(--fv-hover);
    border: 1px solid var(--fv-border);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.22s var(--fv-spring);
}
.fv-card:hover .fv-fav-badge {
    background: rgba(200,122,69,0.12);
    border-color: rgba(200,122,69,0.30);
    transform: scale(1.10);
}
.fv-fav-badge:hover { animation: fv-heartPop 0.38s var(--fv-spring) both; }

/* Card — Content */
.fv-card-content {
    font-size: 13.5px;
    color: var(--fv-muted);
    line-height: 1.68;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 88px;
    flex: 1;
    margin-bottom: 14px;
}

/* Divider */
.fv-divider {
    width: 100%;
    height: 1px;
    background: #F0EBE4;
    margin: 4px 0 16px;
}

/* Category */
.fv-cat-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 11px;
    font-weight: 700;
    color: #fff;
    padding: 5px 12px;
    border-radius: 100px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    white-space: nowrap;
}
.fv-cat-dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: rgba(255,255,255,0.7);
    flex-shrink: 0;
}
.fv-cat-empty {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 11px;
    font-weight: 600;
    color: var(--fv-faint);
    padding: 5px 12px;
    border-radius: 100px;
    background: var(--fv-soft);
    border: 1px solid var(--fv-border);
}

/* Card — Footer */
.fv-card-footer {
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding-top: 16px;
    border-top: 1px solid #F0EBE4;
    flex-wrap: wrap;
}

/* Remove Favorite Button */
.fv-btn-remove {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    height: 32px;
    padding: 0 14px;
    border-radius: 10px;
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 600;
    color: var(--fv-accent);
    background: var(--fv-hover);
    border: 1px solid rgba(200,122,69,0.22);
    cursor: pointer;
    transition: all 0.22s var(--fv-spring);
    white-space: nowrap;
    flex-shrink: 0;
}
.fv-btn-remove:hover {
    background: var(--fv-accent);
    color: #fff;
    border-color: var(--fv-accent);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(200,122,69,0.28);
}
.fv-btn-remove:active { transform: translateY(0) scale(0.98); }

/* ════════════════════════════════════════════
   EMPTY STATE
════════════════════════════════════════════ */
.fv-empty-col { grid-column: 1 / -1; }
.fv-empty {
    background: var(--fv-soft);
    border: 1.5px dashed var(--fv-border);
    border-radius: var(--fv-r-xl);
    padding: 90px 40px;
    text-align: center;
}
.fv-empty-icon {
    width: 90px; height: 90px;
    border-radius: 26px;
    background: #fff;
    border: 1px solid var(--fv-border);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 26px;
    box-shadow: var(--fv-shadow-md);
    animation: fv-float 3.5s ease-in-out infinite;
}
.fv-empty-title {
    font-family: 'Sora', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: var(--fv-text);
    margin-bottom: 10px;
}
.fv-empty-sub {
    font-size: 14px;
    color: var(--fv-muted);
    margin-bottom: 32px;
    max-width: 340px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.65;
}
.fv-btn-cta {
    height: 50px;
    padding: 0 30px;
    background: var(--fv-accent);
    color: #fff;
    border: none;
    border-radius: 18px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: var(--fv-shadow-acc);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.22s var(--fv-spring);
}
.fv-btn-cta:hover {
    background: var(--fv-accent-h);
    box-shadow: 0 12px 28px rgba(200,122,69,0.38);
    transform: translateY(-2px);
}

/* ════════════════════════════════════════════
   RESPONSIVE
════════════════════════════════════════════ */
@media (max-width: 1024px) {
    .fv-grid { grid-template-columns: repeat(2, 1fr); }
    .fv-hero { padding: 34px 32px; }
}
@media (max-width: 768px) {
    .fv-hero-inner { flex-direction: column; align-items: flex-start; }
    .fv-search-wrap { width: 100%; }
}
@media (max-width: 640px) {
    .fv-grid { grid-template-columns: 1fr; }
    .fv-hero { padding: 28px 22px; }
    .fv-hero-chips { gap: 8px; }
    .fv-card-footer { flex-direction: column; align-items: flex-start; }
    .fv-btn-remove { width: 100%; justify-content: center; }
}
</style>


<!-- ══════════════════════════════════════════
     HERO HEADER
══════════════════════════════════════════ -->
<div class="fv-hero fv-a1">
    <div class="fv-hero-glow fv-hero-glow-1"></div>
    <div class="fv-hero-glow fv-hero-glow-2"></div>

    <!-- Decorative grid lines -->
    <div style="position: absolute; top: 0; right: 0; width: 300px; height: 100%; opacity: 0.035; pointer-events: none; overflow: hidden; border-radius: var(--fv-r-xl);">
        <svg width="300" height="100%" viewBox="0 0 300 180" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="0" y1="45" x2="300" y2="45" stroke="#C87A45" stroke-width="1"/>
            <line x1="0" y1="90" x2="300" y2="90" stroke="#C87A45" stroke-width="1"/>
            <line x1="0" y1="135" x2="300" y2="135" stroke="#C87A45" stroke-width="1"/>
            <line x1="75" y1="0" x2="75" y2="180" stroke="#C87A45" stroke-width="1"/>
            <line x1="150" y1="0" x2="150" y2="180" stroke="#C87A45" stroke-width="1"/>
            <line x1="225" y1="0" x2="225" y2="180" stroke="#C87A45" stroke-width="1"/>
        </svg>
    </div>

    <div class="fv-hero-inner">
        <div style="position: relative; z-index: 1;">
            <div class="fv-hero-badge">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="var(--fv-accent)" stroke="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                Favorites Collection
            </div>
            <h1 class="fv-hero-title">Favorite Notes</h1>
            <p class="fv-hero-sub">Your personal collection of important notes and saved references.</p>
            <div class="fv-hero-chips">
                <span class="fv-chip">
                    <span class="fv-chip-dot"></span>
                    {{ $notes->count() }} Total Favorites
                </span>
                <span class="fv-chip" style="color: var(--fv-faint);">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    Recently Added
                </span>
                <span class="fv-chip" style="color: var(--fv-faint);">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
                    Saved Collection
                </span>
            </div>
        </div>

        <!-- Search -->
        <div class="fv-search-wrap" style="position: relative; z-index: 1;">
            <span class="fv-search-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </span>
            <input
                type="text"
                wire:model.live="search"
                placeholder="Search favorites..."
                class="fv-search-input"
            >
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════
     FAVORITES GRID
══════════════════════════════════════════ -->
<div class="fv-grid fv-a2">

    @forelse ($notes as $note)

    <div class="fv-card">
        <!-- Top accent line -->
        <div class="fv-card-accent-line"></div>

        <!-- CARD TOP -->
        <div class="fv-card-top">
            <div class="fv-card-meta">
                <h2 class="fv-card-title">{{ $note->title }}</h2>
                <span class="fv-card-time">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    {{ $note->created_at->diffForHumans() }}
                </span>
            </div>
            <div class="fv-fav-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--fv-accent)" stroke="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </div>
        </div>

        <!-- CONTENT -->
        <p class="fv-card-content">{{ Str::limit($note->content, 140) }}</p>
        <div class="fv-divider"></div>

        <!-- FOOTER -->
        <div class="fv-card-footer">
            @if($note->category)
                <span class="fv-cat-badge" style="background: {{ $note->category->color }};">
                    <span class="fv-cat-dot"></span>
                    {{ $note->category->genre }}
                </span>
            @else
                <span class="fv-cat-empty">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                    No Category
                </span>
            @endif

            <button
                wire:click="removeFavorite({{ $note->id }})"
                class="fv-btn-remove">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                Remove Favorite
            </button>
        </div>
    </div>

    @empty

    <!-- ══════════════════════════════════════════
         EMPTY STATE
    ══════════════════════════════════════════ -->
    <div class="fv-empty-col">
        <div class="fv-empty">
            <div class="fv-empty-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--fv-border)" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </div>
            <h2 class="fv-empty-title">No Favorite Notes</h2>
            <p class="fv-empty-sub">Save important notes to build your personal favorites collection. Your curated picks will appear here.</p>
            <button class="fv-btn-cta" onclick="window.history.back()">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                Explore Notes
            </button>
        </div>
    </div>

    @endforelse

</div>

</div>