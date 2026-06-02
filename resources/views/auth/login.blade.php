<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | NoteSpace</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

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
            --shadow: 0 4px 24px rgba(50,50,50,0.07);
            --shadow-lg: 0 16px 40px rgba(0,0,0,0.09);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        * { -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
        }

        /* ── SPLIT LAYOUT ── */
        .auth-layout {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }

        /* ── LEFT PANEL ── */
        .left-panel {
            width: 55%;
            background: var(--soft);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            padding: 48px 56px;
            position: relative;
            overflow: hidden;
        }
        .left-blob-1 {
            position: absolute;
            width: 400px; height: 400px;
            top: -140px; left: -100px;
            background: radial-gradient(circle, #F0E6D8 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .left-blob-2 {
            position: absolute;
            width: 320px; height: 320px;
            bottom: -100px; right: -60px;
            background: radial-gradient(circle, #EAE4DB 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .left-panel-inner {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .left-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 56px;
        }
        .left-logo-icon {
            width: 36px; height: 36px;
            background: var(--accent);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 4px 12px rgba(200,122,69,0.28);
        }
        .left-logo-text {
            font-family: 'Lora', serif;
            font-weight: 700;
            font-size: 17px;
            color: var(--text);
        }
        .left-content { flex: 1; display: flex; flex-direction: column; justify-content: center; }
        .left-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 100px;
            padding: 5px 13px 5px 9px;
            font-size: 12px;
            font-weight: 500;
            color: var(--muted);
            margin-bottom: 24px;
            width: fit-content;
        }
        .left-badge-dot { width: 6px; height: 6px; background: var(--accent); border-radius: 50%; }
        .left-headline {
            font-family: 'Lora', serif;
            font-size: 42px;
            font-weight: 700;
            color: var(--text);
            line-height: 1.1;
            letter-spacing: -0.025em;
            margin-bottom: 16px;
        }
        .left-headline .accent { color: var(--accent); font-style: italic; }
        .left-desc {
            font-size: 15px;
            color: var(--muted);
            line-height: 1.65;
            max-width: 340px;
            margin-bottom: 40px;
        }

        /* Mini App Preview */
        .mini-app {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            max-width: 440px;
        }
        .mini-app-chrome {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 10px 14px;
            border-bottom: 1px solid var(--border);
            background: var(--soft);
        }
        .mini-chrome-dot { width: 8px; height: 8px; border-radius: 50%; }
        .mini-app-body { display: flex; height: 260px; }
        .mini-sidebar {
            width: 140px;
            min-width: 140px;
            background: var(--soft);
            border-right: 1px solid var(--border);
            padding: 14px 10px;
        }
        .mini-sidebar-header {
            display: flex; align-items: center; gap: 6px;
            margin-bottom: 14px; padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
        }
        .mini-logo-sq {
            width: 20px; height: 20px; background: var(--accent); border-radius: 5px;
            display: flex; align-items: center; justify-content: center;
            font-size: 9px; font-weight: 700; color: #fff;
        }
        .mini-logo-label { font-size: 11px; font-weight: 700; color: var(--text); }
        .mini-new-btn {
            display: flex; align-items: center; gap: 5px;
            background: var(--accent); color: #fff;
            font-size: 10px; font-weight: 600;
            padding: 6px 8px; border-radius: 6px;
            margin-bottom: 12px;
        }
        .mini-nav-item {
            display: flex; align-items: center; gap: 6px;
            padding: 5px 7px; border-radius: 5px;
            font-size: 10px; color: var(--muted); font-weight: 500;
            margin-bottom: 2px;
        }
        .mini-nav-item.active { background: #fff; color: var(--text); box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
        .mini-nav-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--border); }
        .mini-nav-dot.accent-dot { background: var(--accent); }
        .mini-notes-list { flex: 1; border-right: 1px solid var(--border); padding: 10px 0; overflow: hidden; }
        .mini-search {
            margin: 0 10px 10px;
            display: flex; align-items: center; gap: 5px;
            background: var(--soft); border: 1px solid var(--border);
            border-radius: 6px; padding: 5px 8px;
            font-size: 9px; color: var(--muted);
        }
        .mini-note {
            padding: 8px 10px; border-bottom: 1px solid #F5F0EA; cursor: pointer;
        }
        .mini-note.active { background: var(--hover); }
        .mini-note-title { font-size: 10px; font-weight: 600; color: var(--text); margin-bottom: 2px; }
        .mini-note-snippet { font-size: 9px; color: var(--muted); line-height: 1.4; }
        .mini-note-time { font-size: 8px; color: var(--muted); margin-top: 3px; }
        .mini-editor { flex: 1; padding: 12px 14px; }
        .mini-editor-title {
            font-family: 'Lora', serif;
            font-size: 13px; font-weight: 700; color: var(--text);
            margin-bottom: 3px;
        }
        .mini-editor-meta { font-size: 8px; color: var(--muted); margin-bottom: 10px; }
        .mini-line { height: 5px; border-radius: 3px; background: var(--soft); margin-bottom: 4px; }
        .mini-editor-tag {
            display: inline-block;
            font-size: 8px; font-weight: 600; color: var(--accent);
            background: var(--hover); padding: 2px 6px; border-radius: 10px;
            margin-bottom: 8px;
        }

        /* ── RIGHT PANEL ── */
        .right-panel {
            width: 45%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px 40px;
            background: var(--bg);
        }
        .auth-card {
            width: 100%;
            max-width: 400px;
        }
        .auth-header { text-align: center; margin-bottom: 32px; }
        .auth-logo-icon {
            width: 52px; height: 52px;
            background: var(--accent);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 6px 20px rgba(200,122,69,0.28);
        }
        .auth-title {
            font-family: 'Lora', serif;
            font-size: 26px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 6px;
            letter-spacing: -0.02em;
        }
        .auth-subtitle { font-size: 14px; color: var(--muted); }

        /* Error alert */
        .error-alert {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 10px;
            background: #FEF2F2;
            border: 1px solid #FECACA;
            border-radius: 12px;
            padding: 12px 14px;
            margin-bottom: 20px;
            font-size: 13px;
            color: #DC2626;
        }
        .error-alert-left { display: flex; align-items: flex-start; gap: 8px; }
        .error-close-btn {
            background: none;
            border: none;
            color: #EF4444;
            cursor: pointer;
            font-size: 14px;
            padding: 0;
            line-height: 1;
            transition: color 0.2s;
        }
        .error-close-btn:hover { color: #DC2626; }

        /* Form */
        .form-group { margin-bottom: 18px; }
        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 7px;
        }
        .form-input {
            width: 100%;
            height: 52px;
            padding: 0 16px;
            border: 1px solid var(--border);
            border-radius: 14px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            color: var(--text);
            background: var(--bg);
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-input::placeholder { color: var(--muted); }
        .form-input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(200,122,69,0.1);
        }

        /* Remember & Forgot */
        .form-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }
        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--muted);
            font-weight: 500;
            cursor: pointer;
        }
        .form-checkbox {
            width: 16px; height: 16px;
            border-radius: 5px;
            border: 1.5px solid var(--border);
            accent-color: var(--accent);
            cursor: pointer;
        }
        .forgot-link {
            font-size: 13px;
            font-weight: 600;
            color: var(--accent);
            text-decoration: none;
            transition: color 0.2s;
        }
        .forgot-link:hover { color: var(--accent-hover); text-decoration: underline; }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            height: 52px;
            background: var(--accent);
            color: #fff;
            border: none;
            border-radius: 14px;
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 6px 20px rgba(200,122,69,0.28);
            transition: background 0.2s, box-shadow 0.2s, transform 0.15s;
            letter-spacing: 0.01em;
        }
        .btn-submit:hover {
            background: var(--accent-hover);
            box-shadow: 0 10px 28px rgba(200,122,69,0.36);
            transform: translateY(-1px);
        }
        .btn-submit:active { transform: translateY(0); }

        /* Divider */
        .auth-divider {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 24px 0;
        }
        .auth-divider-line { flex: 1; height: 1px; background: var(--border); }
        .auth-divider-text { font-size: 12px; color: var(--muted); font-weight: 500; white-space: nowrap; }

        /* Footer link */
        .auth-footer-text {
            text-align: center;
            font-size: 13px;
            color: var(--muted);
        }
        .auth-footer-link {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s;
        }
        .auth-footer-link:hover { color: var(--accent-hover); text-decoration: underline; }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {
            .auth-layout { flex-direction: column; }
            .left-panel { display: none; }
            .right-panel {
                width: 100%;
                min-height: 100vh;
                padding: 40px 24px;
            }
        }
        @media (max-width: 480px) {
            .right-panel { padding: 32px 20px; }
        }
    </style>
</head>

<body>
<div class="auth-layout">

    <!-- ═══ LEFT PANEL ═══ -->
    <div class="left-panel">
        <div class="left-blob-1"></div>
        <div class="left-blob-2"></div>
        <div class="left-panel-inner">

            <!-- Logo -->
            <div class="left-logo">
                <div class="left-logo-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                </div>
                <span class="left-logo-text">NoteSpace</span>
            </div>

            <!-- Content -->
            <div class="left-content">
                <div class="left-badge">
                    <span class="left-badge-dot"></span>
                    Simple notes. Beautifully organized.
                </div>
                <h2 class="left-headline">
                    Write.<br>Organize.<br><span class="accent">Remember.</span>
                </h2>
                <p class="left-desc">
                    Capture thoughts, organize ideas, and stay focused — all in one calm and beautiful workspace.
                </p>

                <!-- Mini App Preview -->
                <div class="mini-app">
                    <div class="mini-app-chrome">
                        <span class="mini-chrome-dot" style="background:#F5A623;"></span>
                        <span class="mini-chrome-dot" style="background:#7ED321;"></span>
                        <span class="mini-chrome-dot" style="background:#D0D0D0;"></span>
                    </div>
                    <div class="mini-app-body">
                        <!-- Sidebar -->
                        <div class="mini-sidebar">
                            <div class="mini-sidebar-header">
                                <div class="mini-logo-sq">N</div>
                                <span class="mini-logo-label">NoteSpace</span>
                            </div>
                            <div class="mini-new-btn">
                                <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                New Note
                            </div>
                            <div class="mini-nav-item active">
                                <span class="mini-nav-dot accent-dot"></span> All Notes
                            </div>
                            <div class="mini-nav-item">
                                <span class="mini-nav-dot"></span> Favorites
                            </div>
                            <div class="mini-nav-item">
                                <span class="mini-nav-dot"></span> Categories
                            </div>
                            <div class="mini-nav-item">
                                <span class="mini-nav-dot"></span> Tags
                            </div>
                            <div class="mini-nav-item" style="margin-top:auto;">
                                <span class="mini-nav-dot"></span> Settings
                            </div>
                        </div>

                        <!-- Notes list -->
                        <div class="mini-notes-list">
                            <div class="mini-search">
                                <svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
                                Search notes...
                            </div>
                            <div class="mini-note active">
                                <div class="mini-note-title">Design Ideas</div>
                                <div class="mini-note-snippet">Modern dashboard with warm tones...</div>
                                <div class="mini-note-time">10:30 AM</div>
                            </div>
                            <div class="mini-note">
                                <div class="mini-note-title">Weekly Plan</div>
                                <div class="mini-note-snippet">Prioritize tasks that matter.</div>
                                <div class="mini-note-time">Yesterday</div>
                            </div>
                            <div class="mini-note">
                                <div class="mini-note-title">Journal – May 12</div>
                                <div class="mini-note-snippet">Gratitude and clarity notes.</div>
                                <div class="mini-note-time">May 12</div>
                            </div>
                        </div>

                        <!-- Editor -->
                        <div class="mini-editor">
                            <div class="mini-editor-tag">Work</div>
                            <div class="mini-editor-title">Design Ideas for Landing Page</div>
                            <div class="mini-editor-meta">May 14, 2024 · 10:30 AM</div>
                            <div class="mini-line" style="width:100%;"></div>
                            <div class="mini-line" style="width:88%;"></div>
                            <div class="mini-line" style="width:72%;"></div>
                            <div class="mini-line" style="width:94%;margin-top:8px;"></div>
                            <div class="mini-line" style="width:60%;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ═══ RIGHT PANEL (Form) ═══ -->
    <div class="right-panel">
        <div class="auth-card">

            <!-- Header -->
            <div class="auth-header">
                <div class="auth-logo-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                </div>
                <h1 class="auth-title">Welcome Back</h1>
                <p class="auth-subtitle">Login to continue to NoteSpace.</p>
            </div>

            <!-- Error Alert -->
            @if ($errors->any())
                <div
                    x-data="{ show: true }"
                    x-show="show"
                    class="error-alert">
                    <div class="error-alert-left">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" style="margin-top:1px; flex-shrink:0;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        <span>{{ $errors->first() }}</span>
                    </div>
                    <button type="button" @click="show = false" class="error-close-btn">✕</button>
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="/login">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="email">Email address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                        class="form-input"
                        autocomplete="email"
                    >
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        class="form-input"
                        autocomplete="current-password"
                    >
                </div>

                <div class="form-row">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember" class="form-checkbox">
                        Remember me
                    </label>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>

                <button type="submit" class="btn-submit">Login</button>
            </form>

            <div class="auth-divider">
                <span class="auth-divider-line"></span>
                <span class="auth-divider-text">OR</span>
                <span class="auth-divider-line"></span>
            </div>

            <p class="auth-footer-text">
                Don't have an account?
                <a href="/register" class="auth-footer-link">Create one free</a>
            </p>

        </div>
    </div>

</div>
</body>
</html>