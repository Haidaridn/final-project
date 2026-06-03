<div>

{{-- FONTS --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">

<style>
    /* ─── RESET & BASE ─────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ─── DESIGN TOKENS ────────────────────────────────────── */
    :root {
        --bg:           #FFFFFF;
        --sidebar:      #FAF7F2;
        --card:         #FFFFFF;
        --text-primary: #2B2B2B;
        --text-secondary:#6B6B6B;
        --border:       #EAE4DB;
        --accent:       #C87A45;
        --accent-light: #F5EEE5;
        --accent-faint: #FAF7F2;
        --hover-bg:     #F5EEE5;
        --danger:       #DC2626;
        --danger-bg:    #FFF5F5;
        --danger-border:#FECACA;
        --shadow-sm:    0 1px 4px rgba(0,0,0,0.04);
        --shadow-card:  0 4px 24px rgba(0,0,0,0.04);
        --shadow-hover: 0 12px 40px rgba(0,0,0,0.09);
        --radius-card:  28px;
        --radius-btn:   14px;
        --radius-badge: 100px;
        --transition:   all 0.28s cubic-bezier(0.4, 0, 0.2, 1);
        --font-head:    'Sora', sans-serif;
        --font-body:    'DM Sans', sans-serif;
    }

    /* ─── WRAPPER ───────────────────────────────────────────── */
    .an-wrapper {
        font-family:    var(--font-body);
        background:     var(--bg);
        color:          var(--text-primary);
        min-height:     100vh;
        padding:        48px 24px 80px;
    }

    .an-container {
        max-width: 1160px;
        margin: 0 auto;
    }

    /* ─── HEADER ────────────────────────────────────────────── */
    .an-header {
        margin-bottom: 48px;
        animation: fadeUp 0.5s ease both;
    }

    .an-eyebrow {
        display:      inline-flex;
        align-items:  center;
        gap:          8px;
        margin-bottom:14px;
    }

    .an-eyebrow-icon {
        width:  32px;
        height: 32px;
        border-radius: 10px;
        background:    var(--accent-light);
        border:        1px solid var(--border);
        display:       flex;
        align-items:   center;
        justify-content: center;
        flex-shrink:   0;
    }

    .an-eyebrow-icon svg {
        width:  16px;
        height: 16px;
        color:  var(--accent);
    }

    .an-eyebrow-label {
        font-family:    var(--font-head);
        font-size:      11px;
        font-weight:    600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color:          var(--accent);
    }

    .an-title {
        font-family:  var(--font-head);
        font-size:    clamp(26px, 4vw, 36px);
        font-weight:  700;
        color:        var(--text-primary);
        line-height:  1.15;
        letter-spacing: -0.02em;
        margin-bottom: 8px;
    }

    .an-subtitle {
        font-size:   14px;
        color:       var(--text-secondary);
        line-height: 1.6;
        max-width:   420px;
    }

    .an-accent-line {
        display:       block;
        width:         48px;
        height:        3px;
        border-radius: 4px;
        background:    linear-gradient(90deg, var(--accent) 0%, #E8A87C 100%);
        margin-top:    16px;
        opacity:       0.85;
    }

    /* ─── GRID ──────────────────────────────────────────────── */
    .an-grid {
        display:               grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap:                   24px;
        align-items:           start;
    }

    /* ─── CARD ──────────────────────────────────────────────── */
    .an-card {
        background:    var(--card);
        border:        1px solid var(--border);
        border-radius: var(--radius-card);
        box-shadow:    var(--shadow-card);
        display:       flex;
        flex-direction:column;
        overflow:      hidden;
        transition:    var(--transition);
        position:      relative;
        animation:     fadeUp 0.45s ease both;
    }

    .an-card:hover {
        transform:  translateY(-4px);
        box-shadow: var(--shadow-hover);
        border-color: var(--accent);
    }

    .an-card:hover .an-card-top-line {
        opacity: 1;
        transform: scaleX(1);
    }

    /* Stagger animation */
    .an-card:nth-child(1) { animation-delay: 0.05s; }
    .an-card:nth-child(2) { animation-delay: 0.10s; }
    .an-card:nth-child(3) { animation-delay: 0.15s; }
    .an-card:nth-child(4) { animation-delay: 0.20s; }
    .an-card:nth-child(5) { animation-delay: 0.25s; }
    .an-card:nth-child(6) { animation-delay: 0.30s; }

    /* ─── TOP ACCENT LINE ───────────────────────────────────── */
    .an-card-top-line {
        position:       absolute;
        top:            0; left: 0; right: 0;
        height:         2.5px;
        background:     linear-gradient(90deg, var(--accent) 0%, #E8A87C 60%, #F5D7C0 100%);
        opacity:        0;
        transform:      scaleX(0.6);
        transform-origin: left;
        transition:     opacity 0.3s ease, transform 0.4s cubic-bezier(0.4,0,0.2,1);
        border-radius:  4px 4px 0 0;
        z-index:        2;
    }

    /* ─── CARD BODY ─────────────────────────────────────────── */
    .an-card-body {
        padding:        26px 26px 22px;
        display:        flex;
        flex-direction: column;
        flex:           1;
    }

    /* ─── NOTE ICON ─────────────────────────────────────────── */
    .an-note-icon {
        width:          34px;
        height:         34px;
        border-radius:  10px;
        background:     var(--accent-faint);
        border:         1px solid var(--border);
        display:        flex;
        align-items:    center;
        justify-content:center;
        margin-bottom:  16px;
        flex-shrink:    0;
        transition:     var(--transition);
    }

    .an-card:hover .an-note-icon {
        background:  var(--hover-bg);
        border-color:var(--accent);
    }

    .an-note-icon svg {
        width:  16px;
        height: 16px;
        color:  var(--accent);
        opacity: 0.85;
    }

    /* ─── CONTENT ───────────────────────────────────────────── */
    .an-card-content {
        font-size:   14px;
        line-height: 1.75;
        color:       var(--text-secondary);
        flex:        1;
        overflow:    hidden;
    }

    /* ─── BADGE ─────────────────────────────────────────────── */
    .an-badge {
        display:     inline-flex;
        align-items: center;
        gap:         6px;
        padding:     5px 12px;
        border-radius: var(--radius-badge);
        background:  var(--accent-faint);
        border:      1px solid var(--border);
        font-size:   11.5px;
        font-weight: 600;
        color:       var(--accent);
        letter-spacing: 0.02em;
        margin-top:  18px;
        font-family: var(--font-body);
    }

    .an-badge-dot {
        width:         6px;
        height:        6px;
        border-radius: 50%;
        background:    var(--accent);
        opacity:       0.75;
        flex-shrink:   0;
    }

    /* ─── CARD FOOTER ───────────────────────────────────────── */
    .an-card-footer {
        display:        flex;
        align-items:    center;
        justify-content:space-between;
        gap:            10px;
        margin-top:     22px;
        padding-top:    20px;
        border-top:     1px solid var(--border);
    }

    /* ─── BUTTONS ───────────────────────────────────────────── */
    .an-button {
        display:        inline-flex;
        align-items:    center;
        justify-content:center;
        gap:            7px;
        padding:        9px 18px;
        border-radius:  var(--radius-btn);
        font-family:    var(--font-body);
        font-size:      12.5px;
        font-weight:    600;
        cursor:         pointer;
        border:         1px solid transparent;
        transition:     var(--transition);
        white-space:    nowrap;
        letter-spacing: 0.01em;
        outline:        none;
        text-decoration:none;
    }

    .an-button svg {
        width:  14px;
        height: 14px;
        flex-shrink: 0;
    }

    /* Restore */
    .an-button-restore {
        background:  var(--accent-light);
        color:       var(--accent);
        border-color:var(--border);
    }

    .an-button-restore:hover {
        background:  var(--accent);
        color:       #fff;
        border-color:var(--accent);
        box-shadow:  0 4px 14px rgba(200, 122, 69, 0.28);
        transform:   translateY(-1px);
    }

    .an-button-restore:active {
        transform:  scale(0.96);
        box-shadow: none;
    }

    /* Delete */
    .an-button-delete {
        background:  var(--danger-bg);
        color:       var(--danger);
        border-color:var(--danger-border);
    }

    .an-button-delete:hover {
        background:  #FEE2E2;
        border-color:#FCA5A5;
        box-shadow:  0 4px 14px rgba(220, 38, 38, 0.14);
        transform:   translateY(-1px);
    }

    .an-button-delete:active {
        transform:  scale(0.96);
        box-shadow: none;
    }

    /* ─── EMPTY STATE ───────────────────────────────────────── */
    .an-empty-state {
        grid-column: 1 / -1;
    }

    .an-empty-inner {
        display:         flex;
        flex-direction:  column;
        align-items:     center;
        justify-content: center;
        padding:         80px 32px 90px;
        text-align:      center;
        animation:       fadeUp 0.5s ease both;
    }

    .an-empty-icon-wrap {
        position:      relative;
        margin-bottom: 36px;
    }

    .an-empty-icon-bg {
        width:          88px;
        height:         88px;
        border-radius:  26px;
        background:     linear-gradient(145deg, var(--accent-faint) 0%, var(--accent-light) 100%);
        border:         1px solid var(--border);
        display:        flex;
        align-items:    center;
        justify-content:center;
        box-shadow:     0 8px 32px rgba(200,122,69,0.12);
        position:       relative;
        z-index:        1;
    }

    .an-empty-icon-bg svg {
        width:  40px;
        height: 40px;
        color:  var(--accent);
        opacity:0.85;
    }

    /* decorative rings */
    .an-ring {
        position:       absolute;
        inset:          0;
        border-radius:  32px;
        border:         1px solid var(--border);
    }
    .an-ring-1 { inset: -10px; border-radius: 36px; opacity: 0.55; }
    .an-ring-2 { inset: -22px; border-radius: 44px; opacity: 0.28; }
    .an-ring-3 { inset: -36px; border-radius: 54px; opacity: 0.14; }

    .an-empty-title {
        font-family:   var(--font-head);
        font-size:     22px;
        font-weight:   700;
        color:         var(--text-primary);
        letter-spacing:-0.02em;
        margin-bottom: 10px;
    }

    .an-empty-desc {
        font-size:   14px;
        color:       var(--text-secondary);
        line-height: 1.7;
        max-width:   300px;
    }

    /* ─── ANIMATIONS ────────────────────────────────────────── */
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(18px); }
        to   { opacity: 1; transform: translateY(0);    }
    }

    /* ─── RESPONSIVE ────────────────────────────────────────── */
    @media (max-width: 640px) {
        .an-wrapper  { padding: 28px 16px 60px; }
        .an-grid     { grid-template-columns: 1fr; gap: 16px; }
        .an-card-body{ padding: 20px 20px 18px; }
        .an-button   { padding: 8px 14px; font-size: 12px; }
    }
</style>

<div class="an-wrapper">
    <div class="an-container">

        {{-- ── PAGE HEADER ─────────────────────────────────── --}}
        <div class="an-header">

            <div class="an-eyebrow">
                <span class="an-eyebrow-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                    </svg>
                </span>
                <span class="an-eyebrow-label">Archive</span>
            </div>

            <h1 class="an-title">Archived Notes</h1>
            <p class="an-subtitle">Notes you've archived are stored here. Restore or permanently delete them.</p>
            <span class="an-accent-line"></span>

        </div>

        {{-- ── NOTES GRID ───────────────────────────────────── --}}
        <div class="an-grid">

            @forelse ($notes as $note)

                <div class="an-card">

                    {{-- Top accent line --}}
                    <div class="an-card-top-line"></div>

                    <div class="an-card-body">

                        {{-- Note icon --}}
                        <div class="an-note-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                            </svg>
                        </div>

                        {{-- Content --}}
                        <p class="an-card-content">
                            {{ Str::limit($note->content, 130) }}
                        </p>

                        {{-- Category badge --}}
                        <div>
                            <span class="an-badge">
                                <span class="an-badge-dot"></span>
                                {{ $note->category->genre ?? 'No Category' }}
                            </span>
                        </div>

                        {{-- Actions --}}
                        <div class="an-card-footer">

                            <button
                                wire:click="restore({{ $note->id }})"
                                class="an-button an-button-restore">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                                Restore
                            </button>

                            <button
                                wire:click="delete({{ $note->id }})"
                                wire:confirm="Delete this archived note?"
                                class="an-button an-button-delete">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                Delete
                            </button>

                        </div>

                    </div>

                </div>

            @empty

                {{-- ── EMPTY STATE ──────────────────────────── --}}
                <div class="an-empty-state">
                    <div class="an-empty-inner">

                        <div class="an-empty-icon-wrap">
                            <div class="an-empty-icon-bg">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                                </svg>
                            </div>
                            <div class="an-ring an-ring-1"></div>
                            <div class="an-ring an-ring-2"></div>
                            <div class="an-ring an-ring-3"></div>
                        </div>

                        <h2 class="an-empty-title">No Archived Notes</h2>
                        <p class="an-empty-desc">
                            Notes you archive will appear here. You can restore or permanently delete them anytime.
                        </p>

                    </div>
                </div>

            @endforelse

        </div>

    </div>
</div>