<div>

{{-- FONTS --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">

<style>
    /* ─── TOKENS ──────────────────────────────────────────── */
    :root {
        --bg:            #FFFFFF;
        --sidebar:       #FAF7F2;
        --card:          #FFFFFF;
        --text-primary:  #2B2B2B;
        --text-secondary:#6B6B6B;
        --border:        #EAE4DB;
        --accent:        #C87A45;
        --accent-mid:    #D99B68;
        --accent-light:  #F5EEE5;
        --accent-faint:  #FAF7F2;
        --accent-ring:   rgba(200,122,69,.14);
        --shadow-card:   0 10px 40px rgba(0,0,0,.04);
        --shadow-hover:  0 16px 48px rgba(0,0,0,.08);
        --shadow-btn:    0 10px 25px rgba(200,122,69,.25);
        --radius-card:   32px;
        --radius-input:  18px;
        --radius-btn:    16px;
        --radius-badge:  100px;
        --tr:            all .3s cubic-bezier(.4,0,.2,1);
        --font-head:     'Sora', sans-serif;
        --font-body:     'DM Sans', sans-serif;
    }

    /* ─── WRAPPER ─────────────────────────────────────────── */
    .ep-wrapper {
        font-family: var(--font-body);
        background:  var(--bg);
        color:       var(--text-primary);
        min-height:  100vh;
        padding:     48px 24px 80px;
    }

    .ep-container {
        max-width: 680px;
        margin:    0 auto;
    }

    /* ─── HEADER ──────────────────────────────────────────── */
    .ep-header {
        margin-bottom: 36px;
        animation:     epFadeUp .48s ease both;
    }

    .ep-eyebrow {
        display:      inline-flex;
        align-items:  center;
        gap:          8px;
        padding:      6px 14px 6px 10px;
        background:   var(--accent-faint);
        border:       1px solid var(--border);
        border-radius:var(--radius-badge);
        margin-bottom:16px;
    }

    .ep-eyebrow-icon {
        width:           26px;
        height:          26px;
        border-radius:   8px;
        background:      var(--accent-light);
        display:         flex;
        align-items:     center;
        justify-content: center;
        flex-shrink:     0;
    }

    .ep-eyebrow-icon svg { width: 13px; height: 13px; color: var(--accent); }

    .ep-eyebrow-label {
        font-family:    var(--font-head);
        font-size:      11px;
        font-weight:    600;
        letter-spacing: .1em;
        text-transform: uppercase;
        color:          var(--accent);
    }

    .ep-title {
        font-family:   var(--font-head);
        font-size:     clamp(26px,4vw,34px);
        font-weight:   700;
        letter-spacing:-.02em;
        line-height:   1.15;
        color:         var(--text-primary);
        margin-bottom: 8px;
    }

    .ep-subtitle {
        font-size:   14px;
        color:       var(--text-secondary);
        line-height: 1.65;
    }

    .ep-accent-line {
        display:       block;
        width:         44px;
        height:        3px;
        border-radius: 4px;
        background:    linear-gradient(90deg, var(--accent) 0%, var(--accent-mid) 100%);
        margin-top:    16px;
        opacity:       .82;
    }

    /* ─── SUCCESS ALERT ───────────────────────────────────── */
    .ep-alert {
        display:       flex;
        align-items:   flex-start;
        gap:           14px;
        padding:       18px 20px;
        background:    var(--card);
        border:        1px solid var(--border);
        border-left:   3px solid var(--accent);
        border-radius: 20px;
        box-shadow:    0 4px 20px rgba(200,122,69,.08);
        margin-bottom: 28px;
        animation:     epFadeUp .4s ease both;
    }

    .ep-alert-icon {
        width:           34px;
        height:          34px;
        border-radius:   10px;
        background:      var(--accent-light);
        display:         flex;
        align-items:     center;
        justify-content: center;
        flex-shrink:     0;
    }

    .ep-alert-icon svg { width: 16px; height: 16px; color: var(--accent); }

    .ep-alert-title {
        font-family:  var(--font-head);
        font-size:    13.5px;
        font-weight:  600;
        color:        var(--accent);
        margin-bottom:2px;
    }

    .ep-alert-desc {
        font-size:   13px;
        color:       var(--text-secondary);
        line-height: 1.5;
    }

    /* ─── MAIN CARD ───────────────────────────────────────── */
    .ep-card {
        background:    var(--card);
        border:        1px solid var(--border);
        border-radius: var(--radius-card);
        box-shadow:    var(--shadow-card);
        overflow:      hidden;
        animation:     epFadeUp .5s ease .05s both;
        transition:    var(--tr);
    }

    /* ─── PROFILE HERO ────────────────────────────────────── */
    .ep-hero {
        display:         flex;
        align-items:     center;
        gap:             22px;
        padding:         32px 32px 28px;
        border-bottom:   1px solid var(--border);
        background:      linear-gradient(135deg, var(--accent-faint) 0%, var(--bg) 70%);
    }

    .ep-avatar-wrap {
        position:   relative;
        flex-shrink: 0;
    }

    .ep-avatar {
        width:           88px;
        height:          88px;
        border-radius:   50%;
        background:      linear-gradient(135deg, var(--accent) 0%, var(--accent-mid) 100%);
        display:         flex;
        align-items:     center;
        justify-content: center;
        color:           #fff;
        font-family:     var(--font-head);
        font-size:       30px;
        font-weight:     700;
        box-shadow:      0 8px 28px rgba(200,122,69,.3);
        border:          3px solid var(--bg);
        outline:         2px solid var(--border);
        transition:      var(--tr);
        position:        relative;
        z-index:         1;
    }

    .ep-avatar:hover {
        transform:  scale(1.04);
        box-shadow: 0 12px 36px rgba(200,122,69,.38);
    }

    .ep-avatar-ring {
        position:      absolute;
        inset:         -6px;
        border-radius: 50%;
        border:        1px dashed var(--border);
        opacity:       .6;
        animation:     epSpin 20s linear infinite;
    }

    @keyframes epSpin {
        from { transform: rotate(0deg);   }
        to   { transform: rotate(360deg); }
    }

    .ep-hero-info { flex: 1; min-width: 0; }

    .ep-hero-label {
        display:        inline-block;
        font-size:      10.5px;
        font-weight:    600;
        letter-spacing: .1em;
        text-transform: uppercase;
        color:          var(--accent);
        background:     var(--accent-light);
        border:         1px solid var(--border);
        border-radius:  var(--radius-badge);
        padding:        3px 10px;
        margin-bottom:  8px;
    }

    .ep-hero-name {
        font-family:   var(--font-head);
        font-size:     20px;
        font-weight:   700;
        letter-spacing:-.015em;
        color:         var(--text-primary);
        white-space:   nowrap;
        overflow:      hidden;
        text-overflow: ellipsis;
        margin-bottom: 3px;
    }

    .ep-hero-email {
        font-size:     13.5px;
        color:         var(--text-secondary);
        white-space:   nowrap;
        overflow:      hidden;
        text-overflow: ellipsis;
    }

    /* ─── FORM AREA ───────────────────────────────────────── */
    .ep-form-area { padding: 32px; }

    /* ─── SECTION ─────────────────────────────────────────── */
    .ep-section { margin-bottom: 32px; }
    .ep-section:last-of-type { margin-bottom: 0; }

    .ep-section-head {
        display:       flex;
        align-items:   center;
        gap:           10px;
        margin-bottom: 20px;
    }

    .ep-section-icon {
        width:           28px;
        height:          28px;
        border-radius:   8px;
        background:      var(--accent-faint);
        border:          1px solid var(--border);
        display:         flex;
        align-items:     center;
        justify-content: center;
        flex-shrink:     0;
    }

    .ep-section-icon svg { width: 13px; height: 13px; color: var(--accent); }

    .ep-section-title {
        font-family:    var(--font-head);
        font-size:      12px;
        font-weight:    600;
        letter-spacing: .08em;
        text-transform: uppercase;
        color:          var(--text-secondary);
    }

    .ep-section-line {
        flex:            1;
        height:          1px;
        background:      var(--border);
        border-radius:   4px;
    }

    /* ─── FORM GROUP ──────────────────────────────────────── */
    .ep-form-group { margin-bottom: 18px; }
    .ep-form-group:last-child { margin-bottom: 0; }

    .ep-label {
        display:        block;
        font-size:      11.5px;
        font-weight:    600;
        letter-spacing: .07em;
        text-transform: uppercase;
        color:          var(--text-secondary);
        margin-bottom:  8px;
    }

    .ep-input-wrap {
        position: relative;
    }

    .ep-input-icon {
        position:        absolute;
        left:            18px;
        top:             50%;
        transform:       translateY(-50%);
        width:           18px;
        height:          18px;
        color:           var(--text-secondary);
        pointer-events:  none;
        transition:      color .25s ease;
        opacity:         .65;
    }

    .ep-input {
        width:         100%;
        height:        56px;
        padding:       0 18px 0 48px;
        background:    var(--bg);
        border:        1px solid var(--border);
        border-radius: var(--radius-input);
        font-family:   var(--font-body);
        font-size:     14.5px;
        color:         var(--text-primary);
        transition:    var(--tr);
        outline:       none;
        appearance:    none;
    }

    .ep-input::placeholder { color: #BBBBBB; }

    .ep-input:hover {
        background:   var(--accent-faint);
        border-color: #D5CDBC;
    }

    .ep-input:focus {
        background:   var(--bg);
        border-color: var(--accent);
        box-shadow:   0 0 0 4px var(--accent-ring);
    }

    .ep-input:focus ~ .ep-input-icon,
    .ep-input-wrap:focus-within .ep-input-icon {
        color:   var(--accent);
        opacity: 1;
    }

    /* ─── DIVIDER ─────────────────────────────────────────── */
    .ep-divider {
        height:     1px;
        background: var(--border);
        margin:     8px 0 28px;
        border-radius: 4px;
    }

    /* ─── SAVE BUTTON ─────────────────────────────────────── */
    .ep-save-row {
        display:         flex;
        align-items:     center;
        justify-content: flex-end;
        padding-top:     8px;
    }

    .ep-btn-save {
        display:         inline-flex;
        align-items:     center;
        justify-content: center;
        gap:             9px;
        padding:         0 30px;
        height:          52px;
        border-radius:   var(--radius-btn);
        background:      linear-gradient(135deg, var(--accent) 0%, var(--accent-mid) 100%);
        color:           #fff;
        font-family:     var(--font-body);
        font-size:       14.5px;
        font-weight:     600;
        border:          none;
        cursor:          pointer;
        transition:      var(--tr);
        box-shadow:      0 4px 16px rgba(200,122,69,.2);
        letter-spacing:  .01em;
        white-space:     nowrap;
    }

    .ep-btn-save svg { width: 16px; height: 16px; flex-shrink: 0; }

    .ep-btn-save:hover {
        transform:  translateY(-2px);
        box-shadow: var(--shadow-btn);
    }

    .ep-btn-save:active {
        transform:  scale(0.97);
        box-shadow: 0 4px 12px rgba(200,122,69,.2);
    }

    /* ─── ANIMATIONS ──────────────────────────────────────── */
    @keyframes epFadeUp {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0);    }
    }

    /* ─── RESPONSIVE ──────────────────────────────────────── */
    @media (max-width: 600px) {
        .ep-wrapper    { padding: 28px 16px 60px; }
        .ep-hero       { flex-direction: column; align-items: flex-start; padding: 24px 22px 22px; gap: 16px; }
        .ep-avatar     { width: 74px; height: 74px; font-size: 24px; }
        .ep-form-area  { padding: 24px 22px; }
        .ep-save-row   { justify-content: stretch; }
        .ep-btn-save   { width: 100%; }
    }
</style>

<div class="ep-wrapper">
    <div class="ep-container">

        {{-- ── HEADER ─────────────────────────────────────── --}}
        <div class="ep-header">

            <div class="ep-eyebrow">
                <span class="ep-eyebrow-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                </span>
                <span class="ep-eyebrow-label">Profile Settings</span>
            </div>

            <h1 class="ep-title">Edit Profile</h1>
            <p class="ep-subtitle">Manage your personal information and account settings.</p>
            <span class="ep-accent-line"></span>

        </div>

        {{-- ── SUCCESS ALERT ───────────────────────────────── --}}
        @if(session()->has('success'))
            <div class="ep-alert">
                <div class="ep-alert-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <p class="ep-alert-title">Changes Saved</p>
                    <p class="ep-alert-desc">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        {{-- ── MAIN CARD ───────────────────────────────────── --}}
        <div class="ep-card">

            {{-- Profile Hero --}}
            <div class="ep-hero">
                <div class="ep-avatar-wrap">
                    <div class="ep-avatar">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="ep-avatar-ring"></div>
                </div>
                <div class="ep-hero-info">
                    <span class="ep-hero-label">Account Owner</span>
                    <p class="ep-hero-name">{{ Auth::user()->name }}</p>
                    <p class="ep-hero-email">{{ Auth::user()->email }}</p>
                </div>
            </div>

            {{-- Form Area --}}
            <div class="ep-form-area">

                {{-- Personal Information --}}
                <div class="ep-section">

                    <div class="ep-section-head">
                        <div class="ep-section-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        <span class="ep-section-title">Personal Information</span>
                        <span class="ep-section-line"></span>
                    </div>

                    {{-- Full Name --}}
                    <div class="ep-form-group">
                        <label class="ep-label">Full Name</label>
                        <div class="ep-input-wrap">
                            <svg class="ep-input-icon" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                            <input
                                type="text"
                                wire:model="name"
                                class="ep-input"
                                placeholder="Your full name"
                            >
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="ep-form-group">
                        <label class="ep-label">Email Address</label>
                        <div class="ep-input-wrap">
                            <svg class="ep-input-icon" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                            </svg>
                            <input
                                type="email"
                                wire:model="email"
                                class="ep-input"
                                placeholder="your@email.com"
                            >
                        </div>
                    </div>

                </div>

                {{-- Security --}}
                <div class="ep-section">

                    <div class="ep-section-head">
                        <div class="ep-section-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                            </svg>
                        </div>
                        <span class="ep-section-title">Security</span>
                        <span class="ep-section-line"></span>
                    </div>

                    {{-- Password --}}
                    <div class="ep-form-group">
                        <label class="ep-label">New Password</label>
                        <div class="ep-input-wrap">
                            <svg class="ep-input-icon" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                            </svg>
                            <input
                                type="password"
                                wire:model="password"
                                class="ep-input"
                                placeholder="Leave blank if unchanged"
                            >
                        </div>
                    </div>

                </div>

                {{-- Save Button --}}
                <div class="ep-save-row">
                    <button
                        wire:click="updateProfile"
                        class="ep-btn-save">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Save Changes
                    </button>
                </div>

            </div>

        </div>

    </div>
</div>