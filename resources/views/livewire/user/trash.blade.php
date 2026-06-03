<div>

{{-- FONTS --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">

<style>
    /* ─── RESET ───────────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; }

    /* ─── TOKENS ──────────────────────────────────────────── */
    :root {
        --bg:            #FFFFFF;
        --card:          #FFFFFF;
        --sidebar:       #FAF7F2;
        --text-primary:  #2B2B2B;
        --text-secondary:#6B6B6B;
        --border:        #EAE4DB;
        --accent:        #C87A45;
        --accent-light:  #F5EEE5;
        --accent-faint:  #FAF7F2;
        --danger:        #DC2626;
        --danger-bg:     #FFF5F5;
        --danger-border: #FECACA;
        --shadow-card:   0 4px 24px rgba(0,0,0,0.04);
        --shadow-hover:  0 14px 44px rgba(0,0,0,0.09);
        --radius-card:   28px;
        --radius-btn:    14px;
        --radius-badge:  100px;
        --tr:            all 0.28s cubic-bezier(0.4, 0, 0.2, 1);
        --font-head:     'Sora', sans-serif;
        --font-body:     'DM Sans', sans-serif;
    }

    /* ─── WRAPPER ─────────────────────────────────────────── */
    .an-trash-wrapper {
        font-family: var(--font-body);
        background:  var(--bg);
        color:       var(--text-primary);
        min-height:  100vh;
        padding:     48px 24px 80px;
    }

    .an-trash-container {
        max-width: 1160px;
        margin:    0 auto;
    }

    /* ─── HEADER ──────────────────────────────────────────── */
    .an-trash-header {
        margin-bottom: 48px;
        animation:     fadeUp 0.48s ease both;
    }

    .an-trash-eyebrow {
        display:      inline-flex;
        align-items:  center;
        gap:          8px;
        margin-bottom:14px;
    }

    .an-trash-eyebrow-icon {
        width:           32px;
        height:          32px;
        border-radius:   10px;
        background:      var(--accent-light);
        border:          1px solid var(--border);
        display:         flex;
        align-items:     center;
        justify-content: center;
        flex-shrink:     0;
    }

    .an-trash-eyebrow-icon svg {
        width:  15px;
        height: 15px;
        color:  var(--accent);
    }

    .an-trash-eyebrow-label {
        font-family:    var(--font-head);
        font-size:      11px;
        font-weight:    600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color:          var(--accent);
    }

    .an-trash-title {
        font-family:   var(--font-head);
        font-size:     clamp(26px, 4vw, 36px);
        font-weight:   700;
        letter-spacing:-0.02em;
        line-height:   1.15;
        color:         var(--text-primary);
        margin-bottom: 8px;
    }

    .an-trash-subtitle {
        font-size:   14px;
        color:       var(--text-secondary);
        line-height: 1.65;
        max-width:   400px;
    }

    .an-divider {
        display:       block;
        width:         48px;
        height:        3px;
        border-radius: 4px;
        background:    linear-gradient(90deg, var(--accent) 0%, #E8A87C 100%);
        margin-top:    16px;
        opacity:       0.82;
    }

    /* ─── GRID ────────────────────────────────────────────── */
    .an-trash-grid {
        display:               grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap:                   24px;
        align-items:           start;
    }

    /* ─── CARD ────────────────────────────────────────────── */
    .an-trash-card {
        background:     var(--card);
        border:         1px solid var(--border);
        border-radius:  var(--radius-card);
        box-shadow:     var(--shadow-card);
        display:        flex;
        flex-direction: column;
        overflow:       hidden;
        position:       relative;
        transition:     var(--tr);
        animation:      fadeUp 0.45s ease both;
    }

    .an-trash-card:hover {
        transform:    translateY(-4px);
        box-shadow:   var(--shadow-hover);
        border-color: var(--accent);
    }

    .an-trash-card:hover .an-top-line { opacity: 1; transform: scaleX(1); }
    .an-trash-card:hover .an-card-icon-wrap { background: var(--accent-light); border-color: var(--accent); }

    /* stagger */
    .an-trash-card:nth-child(1) { animation-delay: 0.04s; }
    .an-trash-card:nth-child(2) { animation-delay: 0.09s; }
    .an-trash-card:nth-child(3) { animation-delay: 0.14s; }
    .an-trash-card:nth-child(4) { animation-delay: 0.19s; }
    .an-trash-card:nth-child(5) { animation-delay: 0.24s; }
    .an-trash-card:nth-child(6) { animation-delay: 0.29s; }

    /* top accent line */
    .an-top-line {
        position:        absolute;
        top: 0; left: 0; right: 0;
        height:          2.5px;
        background:      linear-gradient(90deg, var(--accent) 0%, #E8A87C 55%, #F5D7C0 100%);
        opacity:         0;
        transform:       scaleX(0.55);
        transform-origin:left;
        transition:      opacity 0.3s ease, transform 0.38s cubic-bezier(0.4,0,0.2,1);
        border-radius:   4px 4px 0 0;
        z-index:         2;
    }

    /* ─── CARD BODY ───────────────────────────────────────── */
    .an-trash-body {
        padding:        26px 26px 0;
        display:        flex;
        flex-direction: column;
        flex:           1;
    }

    /* ─── CARD TOP ROW ────────────────────────────────────── */
    .an-card-top-row {
        display:     flex;
        align-items: flex-start;
        gap:         14px;
        margin-bottom:16px;
    }

    .an-card-icon-wrap {
        width:           34px;
        height:          34px;
        flex-shrink:     0;
        border-radius:   10px;
        background:      var(--accent-faint);
        border:          1px solid var(--border);
        display:         flex;
        align-items:     center;
        justify-content: center;
        transition:      var(--tr);
        margin-top:      2px;
    }

    .an-card-icon-wrap svg {
        width:   15px;
        height:  15px;
        color:   var(--accent);
        opacity: 0.82;
    }

    .an-card-title {
        font-family:   var(--font-head);
        font-size:     15.5px;
        font-weight:   600;
        color:         var(--text-primary);
        line-height:   1.35;
        letter-spacing:-0.01em;
        flex:          1;
        padding-top:   4px;
    }

    /* ─── CATEGORY ────────────────────────────────────────── */
    .an-trash-badge {
        display:        inline-flex;
        align-items:    center;
        gap:            6px;
        padding:        5px 12px;
        border-radius:  var(--radius-badge);
        background:     var(--accent-faint);
        border:         1px solid var(--border);
        font-size:      11.5px;
        font-weight:    600;
        color:          var(--accent);
        letter-spacing: 0.02em;
        margin-bottom:  14px;
    }

    .an-badge-dot {
        width:         5.5px;
        height:        5.5px;
        border-radius: 50%;
        background:    var(--accent);
        opacity:       0.75;
        flex-shrink:   0;
    }

    /* ─── CONTENT ─────────────────────────────────────────── */
    .an-trash-content {
        font-size:   13.5px;
        line-height: 1.78;
        color:       var(--text-secondary);
        flex:        1;
        display:     -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow:    hidden;
    }

    /* ─── FOOTER ──────────────────────────────────────────── */
    .an-trash-footer {
        display:         flex;
        align-items:     center;
        justify-content: space-between;
        gap:             10px;
        padding:         18px 26px 22px;
        border-top:      1px solid var(--border);
        margin-top:      20px;
    }

    /* ─── BUTTONS ─────────────────────────────────────────── */
    .an-trash-button {
        display:         inline-flex;
        align-items:     center;
        justify-content: center;
        gap:             7px;
        padding:         9px 18px;
        border-radius:   var(--radius-btn);
        font-family:     var(--font-body);
        font-size:       12.5px;
        font-weight:     600;
        cursor:          pointer;
        border:          1px solid transparent;
        transition:      var(--tr);
        white-space:     nowrap;
        letter-spacing:  0.01em;
        outline:         none;
    }

    .an-trash-button svg { width: 13px; height: 13px; flex-shrink: 0; }

    /* Restore */
    .an-btn-restore {
        background:  var(--accent-light);
        color:       var(--accent);
        border-color:var(--border);
    }

    .an-btn-restore:hover {
        background:  var(--accent);
        color:       #fff;
        border-color:var(--accent);
        box-shadow:  0 4px 14px rgba(200,122,69,0.28);
        transform:   translateY(-1px);
    }

    .an-btn-restore:active { transform: scale(0.96); box-shadow: none; }

    /* Delete forever */
    .an-btn-delete {
        background:  var(--danger-bg);
        color:       var(--danger);
        border-color:var(--danger-border);
    }

    .an-btn-delete:hover {
        background:  #FEE2E2;
        border-color:#FCA5A5;
        box-shadow:  0 4px 14px rgba(220,38,38,0.15);
        transform:   translateY(-1px);
    }

    .an-btn-delete:active { transform: scale(0.96); box-shadow: none; }

    /* ─── EMPTY STATE ─────────────────────────────────────── */
    .an-trash-empty {
        grid-column: 1 / -1;
    }

    .an-trash-empty-inner {
        display:         flex;
        flex-direction:  column;
        align-items:     center;
        justify-content: center;
        padding:         80px 32px 90px;
        text-align:      center;
        background:      var(--card);
        border:          1px solid var(--border);
        border-radius:   32px;
        box-shadow:      var(--shadow-card);
        animation:       fadeUp 0.5s ease both;
    }

    .an-empty-icon-area {
        position:      relative;
        margin-bottom: 36px;
    }

    .an-empty-icon-bg {
        position:        relative;
        z-index:         1;
        width:           88px;
        height:          88px;
        border-radius:   26px;
        background:      linear-gradient(145deg, var(--accent-faint) 0%, var(--accent-light) 100%);
        border:          1px solid var(--border);
        display:         flex;
        align-items:     center;
        justify-content: center;
        box-shadow:      0 8px 32px rgba(200,122,69,0.11);
    }

    .an-empty-icon-bg svg {
        width:   40px;
        height:  40px;
        color:   var(--accent);
        opacity: 0.8;
    }

    .an-ering {
        position:      absolute;
        border:        1px solid var(--border);
        border-radius: 32px;
        inset:         0;
    }

    .an-ering-1 { inset: -10px; border-radius: 36px; opacity: 0.55; }
    .an-ering-2 { inset: -22px; border-radius: 44px; opacity: 0.28; }
    .an-ering-3 { inset: -36px; border-radius: 54px; opacity: 0.14; }

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
        max-width:   280px;
    }

    /* ─── ANIMATIONS ──────────────────────────────────────── */
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(18px); }
        to   { opacity: 1; transform: translateY(0);    }
    }

    /* ─── RESPONSIVE ──────────────────────────────────────── */
    @media (max-width: 640px) {
        .an-trash-wrapper  { padding: 28px 16px 60px; }
        .an-trash-grid     { grid-template-columns: 1fr; gap: 16px; }
        .an-trash-body     { padding: 20px 20px 0; }
        .an-trash-footer   { padding: 16px 20px 18px; }
        .an-trash-button   { padding: 8px 13px; font-size: 12px; }
    }
</style>

<div class="an-trash-wrapper">
    <div class="an-trash-container">

        {{-- ── HEADER ────────────────────────────────────── --}}
        <div class="an-trash-header">

            <div class="an-trash-eyebrow">
                <span class="an-trash-eyebrow-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </span>
                <span class="an-trash-eyebrow-label">Trash</span>
            </div>

            <h1 class="an-trash-title">Trash Notes</h1>
            <p class="an-trash-subtitle">Deleted notes can be restored or permanently removed.</p>
            <span class="an-divider"></span>

        </div>

        {{-- ── GRID ──────────────────────────────────────── --}}
        <div class="an-trash-grid">

            @forelse($notes as $note)

                <div class="an-trash-card">

                    <div class="an-top-line"></div>

                    <div class="an-trash-body">

                        {{-- Top row: icon + title --}}
                        <div class="an-card-top-row">
                            <div class="an-card-icon-wrap">
                                <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                </svg>
                            </div>
                            <p class="an-card-title">{{ $note->title }}</p>
                        </div>

                        {{-- Category --}}
                        @if($note->category)
                            <span class="an-trash-badge">
                                <span class="an-badge-dot"></span>
                                {{ $note->category->genre }}
                            </span>
                        @endif

                        {{-- Content --}}
                        <p class="an-trash-content">{{ $note->content }}</p>

                    </div>

                    {{-- Footer --}}
                    <div class="an-trash-footer">

                        <button
                            wire:click="restore({{ $note->id }})"
                            class="an-trash-button an-btn-restore">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            Restore
                        </button>

                        <button
                            wire:click="forceDelete({{ $note->id }})"
                            class="an-trash-button an-btn-delete">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Delete Forever
                        </button>

                    </div>

                </div>

            @empty

                <div class="an-trash-empty">
                    <div class="an-trash-empty-inner">

                        <div class="an-empty-icon-area">
                            <div class="an-empty-icon-bg">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </div>
                            <div class="an-ering an-ering-1"></div>
                            <div class="an-ering an-ering-2"></div>
                            <div class="an-ering an-ering-3"></div>
                        </div>

                        <h2 class="an-empty-title">Trash is Empty</h2>
                        <p class="an-empty-desc">Deleted notes will appear here.</p>

                    </div>
                </div>

            @endforelse

        </div>

    </div>
</div>