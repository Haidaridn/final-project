<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | NoteSpace</title>

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

        /* Benefit List */
        .benefit-list { display: flex; flex-direction: column; gap: 16px; margin-bottom: 36px; }
        .benefit-item { display: flex; align-items: flex-start; gap: 12px; }
        .benefit-icon {
            width: 32px; min-width: 32px; height: 32px;
            border-radius: 9px;
            background: #fff;
            border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            box-shadow: var(--shadow);
            margin-top: 1px;
        }
        .benefit-text h4 { font-size: 13px; font-weight: 700; color: var(--text); margin-bottom: 2px; }
        .benefit-text p { font-size: 12px; color: var(--muted); line-height: 1.45; }

        /* Mini App Preview (compact for register) */
        .mini-app {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            max-width: 440px;
        }
        .mini-app-chrome {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 9px 13px;
            border-bottom: 1px solid var(--border);
            background: var(--soft);
        }
        .mini-chrome-dot { width: 8px; height: 8px; border-radius: 50%; }
        .mini-app-body { padding: 16px; }
        .mini-card-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
        .mini-note-card {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid var(--border);
        }
        .mini-note-card.bg-soft { background: var(--soft); }
        .mini-note-card.bg-white { background: #fff; }
        .mini-note-tag-label {
            font-size: 8px; font-weight: 700; color: var(--accent);
            background: var(--hover); padding: 2px 6px; border-radius: 8px;
            display: inline-block; margin-bottom: 6px;
        }
        .mini-card-title { font-size: 10px; font-weight: 700; color: var(--text); margin-bottom: 5px; }
        .mini-card-lines { display: flex; flex-direction: column; gap: 3px; }
        .mini-card-line { height: 4px; border-radius: 3px; background: var(--border); }

        /* ── RIGHT PANEL ── */
        .right-panel {
            width: 45%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px 40px;
            background: var(--bg);
            overflow-y: auto;
        }
        .auth-card {
            width: 100%;
            max-width: 400px;
        }
        .auth-header { text-align: center; margin-bottom: 28px; }
        .auth-logo-icon {
            width: 52px; height: 52px;
            background: var(--accent);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 18px;
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

        /* Form */
        .form-group { margin-bottom: 16px; }
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
            margin-top: 8px;
        }
        .btn-submit:hover {
            background: var(--accent-hover);
            box-shadow: 0 10px 28px rgba(200,122,69,0.36);
            transform: translateY(-1px);
        }
        .btn-submit:active { transform: translateY(0); }

        /* Terms note */
        .terms-note {
            font-size: 11px;
            color: var(--muted);
            text-align: center;
            margin-top: 10px;
            line-height: 1.5;
        }

        /* Divider */
        .auth-divider {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 22px 0;
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
                    Join 10,000+ thoughtful writers
                </div>
                <h2 class="left-headline">
                    Your ideas deserve<br>a <span class="accent">better home.</span>
                </h2>
                <p class="left-desc">
                    Get started in seconds. NoteSpace gives you a calm, focused space to capture everything that matters.
                </p>

                <!-- Benefits -->
                <div class="benefit-list">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="2.2" stroke-linecap="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                        </div>
                        <div class="benefit-text">
                            <h4>Distraction-free writing</h4>
                            <p>A clean, minimal editor that helps you focus on what matters.</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="2.2" stroke-linecap="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                        </div>
                        <div class="benefit-text">
                            <h4>Smart organization</h4>
                            <p>Categories, tags, and favorites — keep every note in its place.</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="2.2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div class="benefit-text">
                            <h4>Private & secure</h4>
                            <p>Your notes are yours. Private, encrypted, and always available.</p>
                        </div>
                    </div>
                </div>

                <!-- Mini App Grid Preview -->
                <div class="mini-app">
                    <div class="mini-app-chrome">
                        <span class="mini-chrome-dot" style="background:#F5A623;"></span>
                        <span class="mini-chrome-dot" style="background:#7ED321;"></span>
                        <span class="mini-chrome-dot" style="background:#D0D0D0;"></span>
                    </div>
                    <div class="mini-app-body">
                        <div class="mini-card-grid">
                            <div class="mini-note-card bg-white">
                                <div class="mini-note-tag-label">Work</div>
                                <div class="mini-card-title">UI Design Ideas</div>
                                <div class="mini-card-lines">
                                    <div class="mini-card-line" style="width:100%;"></div>
                                    <div class="mini-card-line" style="width:75%;"></div>
                                </div>
                            </div>
                            <div class="mini-note-card bg-soft">
                                <div class="mini-note-tag-label">Ideas</div>
                                <div class="mini-card-title">Book List</div>
                                <div class="mini-card-lines">
                                    <div class="mini-card-line" style="width:100%;"></div>
                                    <div class="mini-card-line" style="width:60%;"></div>
                                </div>
                            </div>
                            <div class="mini-note-card bg-soft">
                                <div class="mini-note-tag-label">Journal</div>
                                <div class="mini-card-title">Morning Notes</div>
                                <div class="mini-card-lines">
                                    <div class="mini-card-line" style="width:100%;"></div>
                                    <div class="mini-card-line" style="width:80%;"></div>
                                </div>
                            </div>
                            <div class="mini-note-card bg-white">
                                <div class="mini-note-tag-label">Personal</div>
                                <div class="mini-card-title">Weekly Goals</div>
                                <div class="mini-card-lines">
                                    <div class="mini-card-line" style="width:100%;"></div>
                                    <div class="mini-card-line" style="width:55%;"></div>
                                </div>
                            </div>
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
                <h1 class="auth-title">Create Account</h1>
                <p class="auth-subtitle">Create your NoteSpace account — it's free.</p>
            </div>

            <!-- Form -->
            <form method="POST" action="/register">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="name">Full Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Your full name"
                        class="form-input"
                        autocomplete="name"
                    >
                </div>

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
                        placeholder="Create a strong password"
                        class="form-input"
                        autocomplete="new-password"
                    >
                </div>

                <div class="form-group">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Repeat your password"
                        class="form-input"
                        autocomplete="new-password"
                    >
                </div>

                <button type="submit" class="btn-submit">Create Account</button>

                <p class="terms-note">
                    By creating an account, you agree to our Terms of Service and Privacy Policy.
                </p>
            </form>

            <div class="auth-divider">
                <span class="auth-divider-line"></span>
                <span class="auth-divider-text">OR</span>
                <span class="auth-divider-line"></span>
            </div>

            <p class="auth-footer-text">
                Already have an account?
                <a href="/login" class="auth-footer-link">Login here</a>
            </p>

        </div>
    </div>

</div>
</body>
</html>