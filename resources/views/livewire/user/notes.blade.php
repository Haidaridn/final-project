<div style="font-family: 'DM Sans', sans-serif;">

<style>
    :root {
        --bg: #FFFFFF;
        --soft: #FAF7F2;
        --card: #FFFFFF;
        --text: #2B2B2B;
        --muted: #6B6B6B;
        --border: #EAE4DB;
        --accent: #C87A45;
        --accent-hover: #B56835;
        --hover: #F5EEE5;
        --success: #4F7A5A;
        --warning: #D49A45;
    }

    /* ── Animations ── */
    @keyframes ns-fadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes ns-modalIn {
        from { opacity: 0; transform: scale(0.95) translateY(16px); }
        to   { opacity: 1; transform: scale(1) translateY(0); }
    }
    @keyframes ns-shimmer {
        0%   { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    .ns-fade-1 { animation: ns-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.05s; }
    .ns-fade-2 { animation: ns-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.12s; }
    .ns-fade-3 { animation: ns-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.20s; }
    .ns-fade-4 { animation: ns-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.28s; }
    .ns-fade-5 { animation: ns-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.36s; }

    /* ── Hero ── */
    .ns-hero {
        position: relative;
        background: var(--soft);
        border: 1px solid var(--border);
        border-radius: 32px;
        padding: 40px 44px;
        overflow: hidden;
        box-shadow: 0 2px 20px rgba(50,50,50,0.05);
    }
    .ns-hero-blob-1 {
        position: absolute; width: 340px; height: 340px;
        top: -120px; right: -60px;
        background: radial-gradient(circle, rgba(200,122,69,0.11) 0%, transparent 70%);
        border-radius: 50%; pointer-events: none;
    }
    .ns-hero-blob-2 {
        position: absolute; width: 200px; height: 200px;
        bottom: -80px; right: 180px;
        background: radial-gradient(circle, rgba(200,122,69,0.07) 0%, transparent 70%);
        border-radius: 50%; pointer-events: none;
    }

    /* ── Stat cards ── */
    .ns-stat-card {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 22px;
        padding: 22px 24px;
        transition: transform 0.22s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.22s ease;
        cursor: default;
    }
    .ns-stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.08);
    }

    /* ── Search ── */
    .ns-search-input {
        width: 100%;
        height: 50px;
        padding: 0 16px 0 46px;
        border: 1px solid var(--border);
        border-radius: 14px;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        color: var(--text);
        background: #fff;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .ns-search-input::placeholder { color: #B8AFA4; }
    .ns-search-input:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(200,122,69,0.1);
    }

    /* ── New Note button ── */
    .ns-btn-new {
        height: 50px;
        padding: 0 24px;
        background: var(--accent);
        color: #fff;
        border: none;
        border-radius: 14px;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 4px 16px rgba(200,122,69,0.28);
        transition: background 0.2s, box-shadow 0.2s, transform 0.18s cubic-bezier(0.34,1.56,0.64,1);
        display: inline-flex; align-items: center; gap: 8px;
        white-space: nowrap;
    }
    .ns-btn-new:hover {
        background: var(--accent-hover);
        box-shadow: 0 8px 24px rgba(200,122,69,0.36);
        transform: translateY(-2px) scale(1.02);
    }
    .ns-btn-new:active { transform: translateY(0) scale(0.99); }

    /* ── Filter pills ── */
    .ns-filter-pill {
        display: inline-flex; align-items: center; gap: 7px;
        height: 38px; padding: 0 16px;
        border-radius: 100px;
        font-size: 13px; font-weight: 600;
        cursor: pointer; border: none;
        font-family: 'DM Sans', sans-serif;
        transition: all 0.2s cubic-bezier(0.34,1.56,0.64,1);
    }
    .ns-filter-inactive {
        background: #fff;
        border: 1px solid var(--border);
        color: var(--muted);
    }
    .ns-filter-inactive:hover {
        background: var(--hover);
        color: var(--text);
        border-color: rgba(200,122,69,0.2);
    }
    .ns-filter-active {
        background: var(--accent);
        color: #fff;
        box-shadow: 0 4px 14px rgba(200,122,69,0.3);
    }
    .ns-filter-active:hover {
        background: var(--accent-hover);
        box-shadow: 0 6px 20px rgba(200,122,69,0.38);
        transform: translateY(-1px);
    }

    /* ── Note card ── */
    .ns-note-card {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 24px;
        padding: 22px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: transform 0.28s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.28s ease, border-color 0.2s;
    }
    .ns-note-card::before {
        content: '';
        position: absolute; top: 0; left: 0; right: 0; height: 3px;
        border-radius: 24px 24px 0 0;
        opacity: 0;
        transition: opacity 0.22s ease;
    }
    .ns-note-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 24px 60px rgba(0,0,0,0.09);
        border-color: rgba(200,122,69,0.2);
    }
    .ns-note-card:hover::before { opacity: 1; background: var(--accent); }

    /* ── Card action buttons ── */
    .ns-btn-archive {
        display: inline-flex; align-items: center; gap: 5px;
        height: 30px; padding: 0 11px;
        border-radius: 9px;
        font-family: 'DM Sans', sans-serif;
        font-size: 12px; font-weight: 600;
        color: #D49A45; background: rgba(212,154,69,0.08);
        border: 1px solid rgba(212,154,69,0.18);
        cursor: pointer;
        transition: all 0.18s ease;
    }
    .ns-btn-archive:hover {
        background: rgba(212,154,69,0.16);
        border-color: rgba(212,154,69,0.32);
        transform: translateY(-1px);
    }
    .ns-btn-edit {
        display: inline-flex; align-items: center; gap: 5px;
        height: 30px; padding: 0 11px;
        border-radius: 9px;
        font-family: 'DM Sans', sans-serif;
        font-size: 12px; font-weight: 600;
        color: var(--muted); background: var(--soft);
        border: 1px solid var(--border);
        cursor: pointer;
        transition: all 0.18s ease;
    }
    .ns-btn-edit:hover {
        background: var(--hover);
        color: var(--text);
        border-color: rgba(200,122,69,0.2);
        transform: translateY(-1px);
    }
    .ns-btn-delete {
        display: inline-flex; align-items: center; gap: 5px;
        height: 30px; padding: 0 11px;
        border-radius: 9px;
        font-family: 'DM Sans', sans-serif;
        font-size: 12px; font-weight: 600;
        color: #DC2626; background: rgba(220,38,38,0.05);
        border: 1px solid rgba(220,38,38,0.12);
        cursor: pointer;
        transition: all 0.18s ease;
    }
    .ns-btn-delete:hover {
        background: rgba(220,38,38,0.12);
        border-color: rgba(220,38,38,0.26);
        transform: translateY(-1px);
    }

    /* ── Icon action buttons (pin/fav) ── */
    .ns-icon-btn {
        width: 32px; height: 32px;
        border-radius: 9px;
        display: flex; align-items: center; justify-content: center;
        background: var(--soft); border: 1px solid var(--border);
        cursor: pointer; font-size: 14px; line-height: 1;
        transition: all 0.2s cubic-bezier(0.34,1.56,0.64,1);
        flex-shrink: 0;
    }
    .ns-icon-btn:hover {
        background: var(--hover);
        border-color: rgba(200,122,69,0.25);
        transform: scale(1.15) rotate(-6deg);
    }

    /* ── Empty state ── */
    .ns-empty {
        background: var(--soft);
        border: 1.5px dashed var(--border);
        border-radius: 36px;
        padding: 72px 40px;
        text-align: center;
    }

    /* ── Modal ── */
    .ns-backdrop {
        position: fixed; inset: 0; z-index: 9999;
        background: rgba(0,0,0,0.38);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        display: flex; align-items: center; justify-content: center;
        padding: 20px;
    }
    .ns-modal {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 28px;
        padding: 32px;
        width: 100%; max-width: 500px;
        box-shadow: 0 32px 80px rgba(0,0,0,0.14), 0 8px 32px rgba(0,0,0,0.08);
        animation: ns-modalIn 0.34s cubic-bezier(0.34,1.56,0.64,1) both;
    }

    /* ── Form inputs ── */
    .ns-input {
        width: 100%;
        border: 1px solid var(--border);
        border-radius: 14px;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        color: var(--text);
        background: #FDFCFB;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        display: block;
    }
    .ns-input::placeholder { color: #B8AFA4; }
    .ns-input:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(200,122,69,0.1);
        background: #fff;
    }
    .ns-input-pad { padding: 13px 16px; }
    .ns-textarea-pad { padding: 13px 16px; resize: none; line-height: 1.65; }

    /* ── Modal buttons ── */
    .ns-btn-cancel {
        height: 46px; padding: 0 20px;
        border-radius: 12px;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px; font-weight: 600;
        color: var(--muted); background: var(--soft);
        border: 1px solid var(--border);
        cursor: pointer;
        transition: all 0.18s ease;
    }
    .ns-btn-cancel:hover { background: var(--hover); color: var(--text); }

    .ns-btn-save {
        height: 46px; padding: 0 24px;
        border-radius: 12px;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px; font-weight: 600;
        color: #fff; background: var(--accent);
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 14px rgba(200,122,69,0.28);
        transition: all 0.2s cubic-bezier(0.34,1.56,0.64,1);
        display: inline-flex; align-items: center; gap: 7px;
    }
    .ns-btn-save:hover {
        background: var(--accent-hover);
        box-shadow: 0 8px 22px rgba(200,122,69,0.36);
        transform: translateY(-1px);
    }

    .ns-form-label {
        display: block;
        font-size: 10.5px; font-weight: 700;
        letter-spacing: 0.09em; text-transform: uppercase;
        color: #C0B4A8;
        margin-bottom: 8px;
    }

    /* ── Productivity bars ── */
    .ns-bar-track {
        flex: 1; height: 28px;
        background: rgba(200,122,69,0.12);
        border-radius: 8px; overflow: hidden;
    }
    .ns-bar-fill {
        height: 100%; border-radius: 8px;
        background: var(--accent);
        transition: width 0.6s ease;
    }
</style>


<!-- ══════════════════════════════════════════
     SECTION 1 — WELCOME HERO
══════════════════════════════════════════ -->
<div class="ns-hero ns-fade-1" style="margin-bottom: 24px;">
    <div class="ns-hero-blob-1"></div>
    <div class="ns-hero-blob-2"></div>

    <!-- Decorative grid lines -->
    <div style="position: absolute; top: 0; right: 0; width: 300px; height: 100%; opacity: 0.035; pointer-events: none; overflow: hidden; border-radius: 32px;">
        <svg width="300" height="100%" viewBox="0 0 300 180" fill="none" preserveAspectRatio="none">
            <line x1="0" y1="45" x2="300" y2="45" stroke="#C87A45" stroke-width="1"/>
            <line x1="0" y1="90" x2="300" y2="90" stroke="#C87A45" stroke-width="1"/>
            <line x1="0" y1="135" x2="300" y2="135" stroke="#C87A45" stroke-width="1"/>
            <line x1="75" y1="0" x2="75" y2="180" stroke="#C87A45" stroke-width="1"/>
            <line x1="150" y1="0" x2="150" y2="180" stroke="#C87A45" stroke-width="1"/>
            <line x1="225" y1="0" x2="225" y2="180" stroke="#C87A45" stroke-width="1"/>
        </svg>
    </div>

    <div style="position: relative; z-index: 1; display: flex; align-items: flex-end; justify-content: space-between; gap: 24px; flex-wrap: wrap;">
        <div>
            <div style="display: inline-flex; align-items: center; gap: 6px; background: #fff; border: 1px solid var(--border); border-radius: 100px; padding: 5px 13px; font-size: 11.5px; font-weight: 600; color: var(--accent); margin-bottom: 14px;">
                <span style="font-size: 10px;">✦</span> Workspace
            </div>
            <h1 style="font-family: 'Lora', serif; font-size: 38px; font-weight: 700; color: var(--text); line-height: 1.08; letter-spacing: -0.025em; margin-bottom: 10px;">
                All Notes
            </h1>
            <p style="font-size: 14px; color: var(--muted); max-width: 380px; line-height: 1.65;">
                Your personal writing space, <span style="color: var(--accent); font-weight: 600;">{{ Auth::user()->name }}</span>. Capture ideas, organize thoughts, and stay in flow.
            </p>
        </div>

        <!-- Hero accent visual -->
        <div style="display: flex; gap: 10px; flex-shrink: 0;">
            <div style="background: #fff; border: 1px solid var(--border); border-radius: 16px; padding: 16px 20px; text-align: center; min-width: 90px; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
                <p style="font-family: 'Lora', serif; font-size: 26px; font-weight: 700; color: var(--accent); line-height: 1;">✦</p>
                <p style="font-size: 10px; font-weight: 700; color: var(--muted); margin-top: 4px; text-transform: uppercase; letter-spacing: 0.06em;">Notes</p>
            </div>
            <div style="background: #fff; border: 1px solid var(--border); border-radius: 16px; padding: 16px 20px; text-align: center; min-width: 90px; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
                <p style="font-family: 'Lora', serif; font-size: 26px; font-weight: 700; color: var(--text); line-height: 1;">⚡</p>
                <p style="font-size: 10px; font-weight: 700; color: var(--muted); margin-top: 4px; text-transform: uppercase; letter-spacing: 0.06em;">Active</p>
            </div>
        </div>
    </div>
</div>


<!-- ══════════════════════════════════════════
     SECTION 2 — STATISTICS
══════════════════════════════════════════ -->
<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; margin-bottom: 24px;" class="ns-fade-2">

    <div class="ns-stat-card">
        <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px;">
            <div style="width: 38px; height: 38px; border-radius: 11px; background: var(--hover); border: 1px solid rgba(200,122,69,0.18); display: flex; align-items: center; justify-content: center;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/></svg>
            </div>
            <span style="font-size: 10.5px; font-weight: 700; color: var(--success); background: #EEF6F1; padding: 2px 8px; border-radius: 100px;">↑ Active</span>
        </div>
        <p style="font-family: 'Lora', serif; font-size: 28px; font-weight: 700; color: var(--text); line-height: 1; margin-bottom: 4px;">All</p>
        <p style="font-size: 12.5px; font-weight: 600; color: var(--text);">Total Notes</p>
        <p style="font-size: 11px; color: var(--muted); margin-top: 2px;">In your workspace</p>
    </div>

    <div class="ns-stat-card">
        <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px;">
            <div style="width: 38px; height: 38px; border-radius: 11px; background: var(--soft); border: 1px solid var(--border); display: flex; align-items: center; justify-content: center;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
            </div>
            <span style="font-size: 10.5px; font-weight: 700; color: var(--warning); background: #FEF9EE; padding: 2px 8px; border-radius: 100px;">⭐ Fav</span>
        </div>
        <p style="font-family: 'Lora', serif; font-size: 28px; font-weight: 700; color: var(--text); line-height: 1; margin-bottom: 4px;">—</p>
        <p style="font-size: 12.5px; font-weight: 600; color: var(--text);">Favorites</p>
        <p style="font-size: 11px; color: var(--muted); margin-top: 2px;">Starred notes</p>
    </div>

    <div class="ns-stat-card">
        <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px;">
            <div style="width: 38px; height: 38px; border-radius: 11px; background: var(--soft); border: 1px solid var(--border); display: flex; align-items: center; justify-content: center;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"/><path d="M12 8v4l3 3"/></svg>
            </div>
            <span style="font-size: 10.5px; font-weight: 700; color: var(--muted); background: var(--soft); padding: 2px 8px; border-radius: 100px;">📌 Pin</span>
        </div>
        <p style="font-family: 'Lora', serif; font-size: 28px; font-weight: 700; color: var(--text); line-height: 1; margin-bottom: 4px;">—</p>
        <p style="font-size: 12.5px; font-weight: 600; color: var(--text);">Pinned</p>
        <p style="font-size: 11px; color: var(--muted); margin-top: 2px;">Quick access</p>
    </div>

    <div class="ns-stat-card">
        <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px;">
            <div style="width: 38px; height: 38px; border-radius: 11px; background: var(--soft); border: 1px solid var(--border); display: flex; align-items: center; justify-content: center;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
            </div>
            <span style="font-size: 10.5px; font-weight: 700; color: var(--success); background: #EEF6F1; padding: 2px 8px; border-radius: 100px;">↑ +3</span>
        </div>
        <p style="font-family: 'Lora', serif; font-size: 28px; font-weight: 700; color: var(--text); line-height: 1; margin-bottom: 4px;">—</p>
        <p style="font-size: 12.5px; font-weight: 600; color: var(--text);">Categories</p>
        <p style="font-size: 11px; color: var(--muted); margin-top: 2px;">Organized folders</p>
    </div>

</div>


<!-- ══════════════════════════════════════════
     PRODUCTIVITY OVERVIEW
══════════════════════════════════════════ -->
<div style="background: #fff; border: 1px solid var(--border); border-radius: 22px; padding: 26px 30px; margin-bottom: 24px;" class="ns-fade-3">
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; flex-wrap: wrap; gap: 12px;">
        <div>
            <p style="font-size: 9.5px; font-weight: 700; letter-spacing: 0.11em; text-transform: uppercase; color: #C0B4A8; margin-bottom: 4px;">Analytics</p>
            <h3 style="font-family: 'Lora', serif; font-size: 17px; font-weight: 700; color: var(--text);">Productivity Overview</h3>
        </div>
        <span style="font-size: 11.5px; font-weight: 600; color: var(--success); background: #EEF6F1; padding: 5px 12px; border-radius: 100px;">↑ +24% this week</span>
    </div>

    @php
        $pbars = [
            ['day' => 'Mon', 'pct' => 55], ['day' => 'Tue', 'pct' => 78],
            ['day' => 'Wed', 'pct' => 100], ['day' => 'Thu', 'pct' => 62],
            ['day' => 'Fri', 'pct' => 88], ['day' => 'Sat', 'pct' => 40], ['day' => 'Sun', 'pct' => 30],
        ];
    @endphp

    <div style="display: flex; align-items: flex-end; gap: 8px; height: 80px;">
        @foreach($pbars as $pb)
        <div style="flex: 1; display: flex; flex-direction: column; align-items: center; gap: 6px; height: 100%;">
            <div style="flex: 1; width: 100%; display: flex; align-items: flex-end;">
                <div style="width: 100%; height: {{ $pb['pct'] }}%; border-radius: 6px 6px 3px 3px; background: {{ $pb['pct'] === 100 ? 'var(--accent)' : 'rgba(200,122,69,0.2)' }}; transition: background 0.2s;"
                     onmouseover="this.style.background='var(--accent)'"
                     onmouseout="this.style.background='{{ $pb['pct'] === 100 ? 'var(--accent)' : 'rgba(200,122,69,0.2)' }}'">
                </div>
            </div>
            <span style="font-size: 10.5px; font-weight: {{ $pb['pct'] === 100 ? '700' : '500' }}; color: {{ $pb['pct'] === 100 ? 'var(--accent)' : 'var(--muted)' }};">{{ $pb['day'] }}</span>
        </div>
        @endforeach
    </div>
</div>


<!-- ══════════════════════════════════════════
     SECTION 3 — SEARCH + ACTION
══════════════════════════════════════════ -->
<div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px; flex-wrap: wrap;" class="ns-fade-3">

    <!-- Search -->
    <div style="flex: 1; min-width: 220px; position: relative;">
        <svg style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); pointer-events: none; color: #B8AFA4;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <input
            type="text"
            wire:model.live="search"
            placeholder="Search notes..."
            class="ns-search-input"
        >
    </div>

    <!-- Notes counter badge -->
    <div style="display: flex; align-items: center; gap: 6px; background: var(--soft); border: 1px solid var(--border); border-radius: 12px; padding: 0 14px; height: 50px; font-size: 13px; font-weight: 600; color: var(--muted); white-space: nowrap; flex-shrink: 0;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        Your Notes
    </div>

    <!-- New Note -->
    <button wire:click="openModal" class="ns-btn-new">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        New Note
    </button>

</div>


<!-- ══════════════════════════════════════════
     SECTION 4 — FILTERS
══════════════════════════════════════════ -->
<div style="display: flex; align-items: center; gap: 8px; margin-bottom: 24px; flex-wrap: wrap;" class="ns-fade-4">

    <button
        wire:click="filterPinned"
        class="ns-filter-pill {{ $showPinnedOnly ? 'ns-filter-active' : 'ns-filter-inactive' }}">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        Pinned Only
    </button>

    <button
        wire:click="resetFilter"
        class="ns-filter-pill ns-filter-inactive">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
        Reset Filter
    </button>

</div>


<!-- ══════════════════════════════════════════
     SECTION 5 — NOTES GRID
══════════════════════════════════════════ -->
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px;" class="ns-fade-5">

    @forelse ($notes as $note)

    <div
        onclick="window.location='{{ route('notes.show', $note->id) }}'"
        class="ns-note-card">

        <!-- Category accent bar -->
        <div style="position: absolute; top: 0; left: 24px; right: 24px; height: 3px; border-radius: 0 0 6px 6px; background: {{ $note->category->color ?? 'var(--border)' }}; opacity: 0.6;"></div>

        <!-- TOP -->
        <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; margin-bottom: 14px; padding-top: 4px;">
            <div style="min-width: 0; flex: 1;">
                <!-- Category chip -->
                <div style="display: flex; align-items: center; gap: 6px; margin-bottom: 7px;">
                    <span style="width: 7px; height: 7px; border-radius: 50%; flex-shrink: 0; background: {{ $note->category->color ?? 'var(--border)' }};"></span>
                    <span style="font-size: 10.5px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; color: var(--muted);">{{ $note->category->genre ?? 'Uncategorized' }}</span>
                </div>
                <h2 style="font-family: 'Lora', serif; font-size: 16px; font-weight: 700; color: var(--text); line-height: 1.3; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                    {{ $note->title }}
                </h2>
                <p style="font-size: 11.5px; color: #B8AFA4; margin-top: 4px; display: flex; align-items: center; gap: 4px;">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    {{ $note->created_at->diffForHumans() }}
                </p>
            </div>

            <!-- Icon actions -->
            <div style="display: flex; align-items: center; gap: 5px; flex-shrink: 0;">
                <button wire:click.stop="toggleFavorite({{ $note->id }})" class="ns-icon-btn">
                    @if($note->is_favorite)
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="var(--accent)" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                    @else
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--muted)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                    @endif
                </button>
                <button wire:click.stop="togglePin({{ $note->id }})" class="ns-icon-btn">
                    @if($note->is_pinned)
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 17v5"/><path d="M9 10.76a2 2 0 0 1-1.11 1.79l-1.78.9A2 2 0 0 0 5 15.24V16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-.76a2 2 0 0 0-1.11-1.79l-1.78-.9A2 2 0 0 1 15 10.76V7a1 1 0 0 1 1-1 2 2 0 0 0 0-4H8a2 2 0 0 0 0 4 1 1 0 0 1 1 1z"/></svg>
                    @else
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="var(--muted)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 17v5"/><path d="M9 10.76a2 2 0 0 1-1.11 1.79l-1.78.9A2 2 0 0 0 5 15.24V16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-.76a2 2 0 0 0-1.11-1.79l-1.78-.9A2 2 0 0 1 15 10.76V7a1 1 0 0 1 1-1 2 2 0 0 0 0-4H8a2 2 0 0 0 0 4 1 1 0 0 1 1 1z"/></svg>
                    @endif
                </button>
            </div>
        </div>

        <!-- CONTENT PREVIEW -->
        <p style="font-size: 13.5px; color: var(--muted); line-height: 1.65; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 16px;">
            {{ Str::limit($note->content, 120) }}
        </p>

        <!-- FOOTER -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 14px; border-top: 1px solid #F5F0EA;">
            <span style="font-size: 11px; font-weight: 700; color: #fff; padding: 4px 10px; border-radius: 8px; background: {{ $note->category->color ?? '#6B6B6B' }}; letter-spacing: 0.03em;">
                {{ $note->category->genre ?? 'No Category' }}
            </span>
            <div style="display: flex; align-items: center; gap: 5px;">
                <button wire:click.stop="archive({{ $note->id }})" class="ns-btn-archive">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="5" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                    Archive
                </button>
                <button wire:click.stop="edit({{ $note->id }})" class="ns-btn-edit">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    Edit
                </button>
                <button wire:click.stop="delete({{ $note->id }})" wire:confirm="Delete this note?" class="ns-btn-delete">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                    Delete
                </button>
            </div>
        </div>

    </div>

    @empty

    <!-- SECTION 6 — EMPTY STATE -->
    <div style="grid-column: 1 / -1;">
        <div class="ns-empty">
            <div style="width: 72px; height: 72px; border-radius: 20px; background: #fff; border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 4px 16px rgba(0,0,0,0.05);">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--border)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/></svg>
            </div>
            <h2 style="font-family: 'Lora', serif; font-size: 22px; font-weight: 700; color: var(--text); margin-bottom: 8px;">No Notes Found</h2>
            <p style="font-size: 14px; color: var(--muted); margin-bottom: 28px; max-width: 300px; margin-left: auto; margin-right: auto; line-height: 1.6;">Your workspace is ready and waiting. Create your first note to get started.</p>
            <button wire:click="openModal"
                    style="height: 48px; padding: 0 28px; background: var(--accent); color: #fff; border: none; border-radius: 14px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 16px rgba(200,122,69,0.28); display: inline-flex; align-items: center; gap: 8px; transition: all 0.2s;"
                    onmouseover="this.style.background='var(--accent-hover)'; this.style.transform='translateY(-2px)'"
                    onmouseout="this.style.background='var(--accent)'; this.style.transform='translateY(0)'">
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

        <!-- Modal header -->
        <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 26px;">
            <div>
                <div style="display: inline-flex; align-items: center; gap: 6px; background: var(--hover); border: 1px solid rgba(200,122,69,0.18); border-radius: 100px; padding: 4px 12px; font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.07em; margin-bottom: 10px;">
                    {{ $editingId ? '✏ Edit Note' : '✦ New Note' }}
                </div>
                <h2 style="font-family: 'Lora', serif; font-size: 22px; font-weight: 700; color: var(--text); line-height: 1.15;">
                    {{ $editingId ? 'Edit Note' : 'Create New Note' }}
                </h2>
                <p style="font-size: 13px; color: var(--muted); margin-top: 4px;">{{ $editingId ? 'Update your note details below.' : 'Capture a new idea or thought.' }}</p>
            </div>

            <button wire:click="closeModal"
                    style="width: 34px; height: 34px; border-radius: 10px; background: var(--soft); border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; cursor: pointer; color: var(--muted); transition: all 0.18s; flex-shrink: 0;"
                    onmouseover="this.style.background='var(--hover)'; this.style.color='var(--text)'"
                    onmouseout="this.style.background='var(--soft)'; this.style.color='var(--muted)'">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>

        <!-- Form fields -->
        <div style="display: flex; flex-direction: column; gap: 18px;">

            <div>
                <label class="ns-form-label">Title</label>
                <input
                    type="text"
                    wire:model="title"
                    placeholder="Give your note a title..."
                    class="ns-input ns-input-pad"
                    style="height: 50px;"
                >
            </div>

            <div>
                <label class="ns-form-label">Content</label>
                <textarea
                    wire:model="content"
                    rows="5"
                    placeholder="Write your thoughts here..."
                    class="ns-input ns-textarea-pad"
                ></textarea>
            </div>

            <div>
                <label class="ns-form-label">Category</label>
                <div style="position: relative;">
                    <select
                        wire:model="category_id"
                        class="ns-input ns-input-pad"
                        style="height: 50px; padding-right: 40px; appearance: none; -webkit-appearance: none; cursor: pointer;">
                        <option value="">Select a category...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->genre }}</option>
                        @endforeach
                    </select>
                    <span style="position: absolute; right: 14px; top: 50%; transform: translateY(-50%); pointer-events: none; color: var(--muted);">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
                    </span>
                </div>
            </div>

        </div>

        <!-- Actions -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 26px; padding-top: 22px; border-top: 1px solid var(--border);">
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