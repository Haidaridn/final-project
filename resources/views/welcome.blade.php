<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteSpace</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            --shadow: 0 4px 24px rgba(50,50,50,0.07);
            --shadow-lg: 0 16px 40px rgba(0,0,0,0.09);
            --shadow-xl: 0 32px 64px rgba(0,0,0,0.12);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        * { -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            overflow-x: hidden;
        }

        /* ── NAVBAR ── */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            height: 76px;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
        }
        .navbar-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .logo-icon {
            width: 38px;
            height: 38px;
            background: var(--accent);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(200,122,69,0.28);
        }
        .logo-text {
            font-family: 'Lora', serif;
            font-weight: 700;
            font-size: 18px;
            color: var(--text);
            letter-spacing: -0.01em;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
        }
        .nav-links a {
            font-size: 14px;
            font-weight: 500;
            color: var(--muted);
            text-decoration: none;
            padding: 7px 14px;
            border-radius: 8px;
            transition: background 0.2s, color 0.2s;
        }
        .nav-links a:hover { background: var(--hover); color: var(--text); }
        .nav-actions { display: flex; align-items: center; gap: 10px; }
        .btn-login {
            font-size: 14px;
            font-weight: 600;
            color: var(--accent);
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 9px;
            transition: background 0.2s;
        }
        .btn-login:hover { background: var(--hover); }
        .btn-cta {
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            padding: 10px 22px;
            border-radius: 10px;
            background: var(--accent);
            box-shadow: 0 4px 14px rgba(200,122,69,0.28);
            transition: background 0.2s, box-shadow 0.2s, transform 0.15s;
            display: inline-block;
        }
        .btn-cta:hover {
            background: var(--accent-hover);
            box-shadow: 0 6px 20px rgba(200,122,69,0.36);
            transform: translateY(-1px);
        }

        /* ── HERO ── */
        .hero {
            min-height: calc(100vh - 76px);
            background: var(--bg);
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }
        .hero-blob-1 {
            position: absolute;
            width: 500px; height: 500px;
            top: -180px; left: -140px;
            background: radial-gradient(circle, #F0E6D8 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .hero-blob-2 {
            position: absolute;
            width: 400px; height: 400px;
            bottom: -120px; right: 0;
            background: radial-gradient(circle, #F5EEE5 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .hero-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 32px;
            display: grid;
            grid-template-columns: 1fr 1.15fr;
            gap: 72px;
            align-items: center;
            position: relative;
            z-index: 1;
            width: 100%;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: var(--soft);
            border: 1px solid var(--border);
            border-radius: 100px;
            padding: 6px 14px 6px 10px;
            font-size: 13px;
            font-weight: 500;
            color: var(--muted);
            margin-bottom: 28px;
        }
        .hero-badge-dot {
            width: 7px; height: 7px;
            background: var(--accent);
            border-radius: 50%;
        }
        .hero-headline {
            font-family: 'Lora', serif;
            font-size: 68px;
            font-weight: 700;
            line-height: 1.05;
            letter-spacing: -0.03em;
            color: var(--text);
            margin-bottom: 22px;
        }
        .hero-headline .accent { color: var(--accent); font-style: italic; }
        .hero-desc {
            font-size: 17px;
            line-height: 1.7;
            color: var(--muted);
            max-width: 400px;
            margin-bottom: 36px;
        }
        .hero-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 36px;
            flex-wrap: wrap;
        }
        .btn-hero-primary {
            font-size: 15px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 12px;
            background: var(--accent);
            box-shadow: 0 6px 20px rgba(200,122,69,0.3);
            transition: all 0.2s;
            display: inline-block;
        }
        .btn-hero-primary:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(200,122,69,0.38);
        }
        .btn-hero-secondary {
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            text-decoration: none;
            padding: 14px 24px;
            border-radius: 12px;
            background: var(--bg);
            border: 1px solid var(--border);
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-hero-secondary:hover { background: var(--hover); border-color: #D9CFC0; }
        .btn-arrow {
            width: 22px; height: 22px;
            border-radius: 50%;
            background: var(--soft);
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 12px;
        }
        .trust-indicators {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .trust-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            color: var(--muted);
            font-weight: 500;
        }
        .trust-sep {
            width: 4px; height: 4px;
            background: var(--border);
            border-radius: 50%;
        }

        /* ── APP PREVIEW ── */
        .app-preview {
            position: relative;
        }
        .app-preview-outer {
            background: var(--soft);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 14px;
            box-shadow: var(--shadow-xl);
        }
        .app-preview-chrome {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 0 6px 10px;
        }
        .chrome-dot {
            width: 9px; height: 9px;
            border-radius: 50%;
        }
        .app-window {
            background: #fff;
            border-radius: 12px;
            border: 1px solid var(--border);
            overflow: hidden;
            display: flex;
            min-height: 440px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        }
        /* Sidebar */
        .app-sidebar {
            width: 192px;
            min-width: 192px;
            background: var(--soft);
            border-right: 1px solid var(--border);
            padding: 18px 12px;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        .app-sidebar-logo {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 4px 8px 14px;
            margin-bottom: 4px;
            border-bottom: 1px solid var(--border);
        }
        .sidebar-logo-icon {
            width: 26px; height: 26px;
            background: var(--accent);
            border-radius: 7px;
            display: flex; align-items: center; justify-content: center;
            font-size: 12px; font-weight: 700; color: #fff;
        }
        .sidebar-logo-text { font-size: 13px; font-weight: 700; color: var(--text); }
        .sidebar-new-btn {
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 8px 10px;
            border-radius: 8px;
            background: var(--accent);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            margin: 10px 0 12px;
        }
        .sidebar-section-label {
            font-size: 10px;
            font-weight: 600;
            color: var(--muted);
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 10px 10px 4px;
        }
        .sidebar-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 7px 10px;
            border-radius: 7px;
            font-size: 12px;
            color: var(--muted);
            font-weight: 500;
            cursor: pointer;
            transition: background 0.15s;
        }
        .sidebar-item.active { background: #fff; color: var(--text); box-shadow: 0 1px 4px rgba(0,0,0,0.06); }
        .sidebar-item:not(.active):hover { background: var(--hover); }
        .sidebar-badge {
            margin-left: auto;
            font-size: 10px;
            font-weight: 600;
            background: var(--border);
            color: var(--muted);
            padding: 1px 6px;
            border-radius: 20px;
        }
        /* Notes list */
        .app-notes-list {
            width: 220px;
            min-width: 220px;
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
        }
        .notes-list-header {
            padding: 14px 14px 10px;
            border-bottom: 1px solid var(--border);
        }
        .notes-search {
            display: flex;
            align-items: center;
            gap: 6px;
            background: var(--soft);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 6px 10px;
            font-size: 11px;
            color: var(--muted);
        }
        .notes-group-label {
            font-size: 10px;
            font-weight: 600;
            color: var(--muted);
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 10px 14px 4px;
        }
        .note-item {
            padding: 10px 14px;
            border-bottom: 1px solid #F5F0EA;
            cursor: pointer;
            transition: background 0.15s;
        }
        .note-item:hover, .note-item.active { background: var(--hover); }
        .note-item-top { display: flex; align-items: flex-start; justify-content: space-between; gap: 4px; margin-bottom: 4px; }
        .note-item-title { font-size: 12px; font-weight: 600; color: var(--text); line-height: 1.3; }
        .note-item-snippet { font-size: 11px; color: var(--muted); line-height: 1.4; }
        .note-item-time { font-size: 10px; color: var(--muted); margin-top: 6px; }
        .note-star { color: var(--accent); font-size: 11px; }
        /* Editor */
        .app-editor {
            flex: 1;
            padding: 20px 22px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .editor-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
        }
        .editor-toolbar-left { display: flex; align-items: center; gap: 12px; }
        .editor-toolbar-right { display: flex; align-items: center; gap: 8px; }
        .editor-tool-btn {
            width: 26px; height: 26px;
            border-radius: 6px;
            background: var(--soft);
            border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            font-size: 11px; color: var(--muted); cursor: pointer;
        }
        .editor-breadcrumb { font-size: 11px; color: var(--muted); }
        .editor-title {
            font-family: 'Lora', serif;
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 4px;
            line-height: 1.3;
        }
        .editor-meta { font-size: 10px; color: var(--muted); margin-bottom: 16px; }
        .editor-body { font-size: 12px; color: var(--text); line-height: 1.7; }
        .editor-body p { margin-bottom: 10px; }
        .editor-list-item {
            display: flex; align-items: flex-start; gap: 6px;
            font-size: 12px; color: var(--text); margin-bottom: 6px;
        }
        .editor-bullet { color: var(--accent); font-weight: 700; margin-top: 1px; }
        .editor-image-block {
            margin-top: 16px;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid var(--border);
            height: 100px;
            background: linear-gradient(135deg, #FAF7F2 0%, #EAE4DB 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .editor-image-inner {
            text-align: center;
        }
        .editor-image-icon { font-size: 28px; margin-bottom: 4px; opacity: 0.4; }
        .editor-image-label { font-size: 10px; color: var(--muted); }

        /* ── STATS ── */
        .stats-section {
            background: var(--soft);
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            padding: 48px 0;
        }
        .stats-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 32px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }
        .stat-item { text-align: center; }
        .stat-number {
            font-family: 'Lora', serif;
            font-size: 40px;
            font-weight: 700;
            color: var(--accent);
            line-height: 1;
            margin-bottom: 6px;
        }
        .stat-label { font-size: 14px; color: var(--muted); font-weight: 500; }

        /* ── FEATURES ── */
        .features-section { padding: 96px 0; }
        .section-inner { max-width: 1200px; margin: 0 auto; padding: 0 32px; }
        .section-badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 100px;
            background: var(--soft);
            border: 1px solid var(--border);
            font-size: 13px;
            font-weight: 600;
            color: var(--accent);
            margin-bottom: 20px;
        }
        .section-title {
            font-family: 'Lora', serif;
            font-size: 46px;
            font-weight: 700;
            color: var(--text);
            line-height: 1.1;
            letter-spacing: -0.025em;
            margin-bottom: 14px;
        }
        .section-desc {
            font-size: 17px;
            color: var(--muted);
            line-height: 1.7;
            max-width: 480px;
        }
        .section-header-center { text-align: center; max-width: 540px; margin: 0 auto 56px; }
        .section-header-center .section-desc { margin: 0 auto; }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .feature-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 32px;
            transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: #D9CFC0;
        }
        .feature-icon {
            width: 52px; height: 52px;
            border-radius: 14px;
            background: var(--soft);
            border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 22px;
        }
        .feature-title {
            font-family: 'Lora', serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 10px;
        }
        .feature-desc { font-size: 14px; color: var(--muted); line-height: 1.65; }

        /* ── WORKSPACE ── */
        .workspace-section { padding: 80px 0; background: var(--soft); }
        .workspace-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 32px;
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 72px;
            align-items: center;
        }
        .workspace-mockup {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 24px;
            box-shadow: var(--shadow-xl);
        }
        .workspace-mockup-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .ws-title { font-family: 'Lora', serif; font-size: 16px; font-weight: 700; color: var(--text); }
        .ws-actions { display: flex; gap: 6px; }
        .ws-action-btn {
            height: 28px;
            border-radius: 7px;
            padding: 0 10px;
            font-size: 11px;
            font-weight: 600;
            border: 1px solid var(--border);
            display: inline-flex; align-items: center; gap: 4px;
        }
        .ws-action-btn.accent { background: var(--accent); color: #fff; border-color: var(--accent); }
        .ws-action-btn.soft { background: var(--soft); color: var(--muted); }
        .ws-note-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .ws-note-card {
            border-radius: 12px;
            padding: 14px;
            border: 1px solid var(--border);
        }
        .ws-note-card.bg-white { background: #fff; }
        .ws-note-card.bg-soft { background: var(--soft); }
        .ws-note-tag {
            font-size: 10px;
            font-weight: 600;
            color: var(--accent);
            background: var(--hover);
            padding: 2px 8px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 8px;
        }
        .ws-note-card-title { font-size: 13px; font-weight: 700; color: var(--text); margin-bottom: 6px; }
        .ws-note-card-body { font-size: 11px; color: var(--muted); line-height: 1.5; }
        .ws-note-lines { margin-top: 10px; display: flex; flex-direction: column; gap: 4px; }
        .ws-line { height: 6px; border-radius: 4px; background: var(--border); }
        .workspace-content .section-title { font-size: 36px; margin-bottom: 16px; }
        .workspace-content .section-desc { max-width: 100%; margin-bottom: 28px; }
        .ws-feature-list { display: flex; flex-direction: column; gap: 16px; margin-top: 8px; }
        .ws-feature-item { display: flex; align-items: flex-start; gap: 12px; }
        .ws-feature-dot {
            width: 32px; min-width: 32px; height: 32px;
            border-radius: 9px;
            background: var(--hover);
            border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            margin-top: 1px;
        }
        .ws-feature-text h4 { font-size: 14px; font-weight: 700; color: var(--text); margin-bottom: 2px; }
        .ws-feature-text p { font-size: 13px; color: var(--muted); line-height: 1.5; }

        /* ── WHY SECTION ── */
        .why-section { padding: 96px 0; }
        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 56px;
        }
        .why-card {
            border-radius: 20px;
            padding: 40px 32px;
            border: 1px solid var(--border);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .why-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
        .why-card.v1 { background: var(--soft); }
        .why-card.v2 { background: #fff; }
        .why-card.v3 { background: var(--soft); }
        .why-icon {
            width: 56px; height: 56px;
            border-radius: 16px;
            background: #fff;
            border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 24px;
            box-shadow: var(--shadow);
        }
        .why-title {
            font-family: 'Lora', serif;
            font-size: 22px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 12px;
        }
        .why-desc { font-size: 15px; color: var(--muted); line-height: 1.65; }

        /* ── JOURNEY ── */
        .journey-section { padding: 80px 0; background: var(--soft); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }
        .journey-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            position: relative;
            margin-top: 56px;
        }
        .journey-connector {
            position: absolute;
            top: 40px;
            left: 12.5%;
            right: 12.5%;
            height: 1px;
            background: var(--border);
            z-index: 0;
        }
        .journey-connector-inner {
            height: 100%;
            width: 50%;
            background: linear-gradient(to right, var(--accent), transparent);
            opacity: 0.5;
        }
        .journey-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        .journey-icon {
            width: 80px; height: 80px;
            border-radius: 20px;
            background: #fff;
            border: 1px solid var(--border);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            position: relative;
        }
        .journey-step-num {
            position: absolute;
            top: -8px; right: -8px;
            width: 22px; height: 22px;
            border-radius: 50%;
            background: var(--accent);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            display: flex; align-items: center; justify-content: center;
        }
        .journey-step-title {
            font-family: 'Lora', serif;
            font-size: 16px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 8px;
        }
        .journey-step-desc { font-size: 13px; color: var(--muted); line-height: 1.55; }

        /* ── CTA ── */
        .cta-section { padding: 80px 0 96px; }
        .cta-box {
            max-width: 820px;
            margin: 0 auto;
            padding: 64px 80px;
            background: var(--soft);
            border: 1px solid var(--border);
            border-radius: 28px;
            text-align: center;
        }
        .cta-title {
            font-family: 'Lora', serif;
            font-size: 44px;
            font-weight: 700;
            color: var(--text);
            line-height: 1.1;
            letter-spacing: -0.025em;
            margin-bottom: 16px;
        }
        .cta-title .accent { color: var(--accent); font-style: italic; }
        .cta-desc { font-size: 17px; color: var(--muted); line-height: 1.65; margin-bottom: 36px; max-width: 460px; margin-left: auto; margin-right: auto; }
        .cta-actions { display: flex; justify-content: center; gap: 12px; }
        .btn-large {
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            padding: 16px 36px;
            border-radius: 14px;
            display: inline-block;
            transition: all 0.2s;
        }
        .btn-large.accent {
            color: #fff;
            background: var(--accent);
            box-shadow: 0 6px 20px rgba(200,122,69,0.3);
        }
        .btn-large.accent:hover { background: var(--accent-hover); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(200,122,69,0.38); }
        .btn-large.soft {
            color: var(--text);
            background: #fff;
            border: 1px solid var(--border);
        }
        .btn-large.soft:hover { background: var(--hover); }

        /* ── FOOTER ── */
        .footer {
            background: #fff;
            border-top: 1px solid var(--border);
            padding: 52px 0 40px;
        }
        .footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 32px;
        }
        .footer-main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 32px;
            border-bottom: 1px solid var(--border);
            gap: 24px;
            flex-wrap: wrap;
        }
        .footer-brand {}
        .footer-brand-name { font-family: 'Lora', serif; font-size: 18px; font-weight: 700; color: var(--text); margin-bottom: 4px; }
        .footer-brand-tagline { font-size: 13px; color: var(--muted); }
        .footer-links { display: flex; align-items: center; gap: 28px; }
        .footer-links a {
            font-size: 14px;
            font-weight: 500;
            color: var(--muted);
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-links a:hover { color: var(--accent); }
        .footer-bottom {
            padding-top: 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }
        .footer-copy { font-size: 13px; color: var(--muted); }
        .footer-tagline-small { font-size: 13px; color: var(--muted); font-style: italic; }

        /* ── RESPONSIVE ── */
        @media (max-width: 1024px) {
            .hero-headline { font-size: 52px; }
            .hero-inner { grid-template-columns: 1fr; gap: 48px; padding: 60px 32px; }
            .app-preview { max-width: 560px; margin: 0 auto; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-inner { grid-template-columns: repeat(2, 1fr); }
            .workspace-inner { grid-template-columns: 1fr; gap: 48px; }
            .why-grid { grid-template-columns: 1fr 1fr; }
            .journey-steps { grid-template-columns: repeat(2, 1fr); gap: 28px; }
            .journey-connector { display: none; }
            .nav-links { display: none; }
            .app-sidebar { display: none; }
        }
        @media (max-width: 768px) {
            .hero-headline { font-size: 40px; }
            .features-grid { grid-template-columns: 1fr; }
            .why-grid { grid-template-columns: 1fr; }
            .journey-steps { grid-template-columns: 1fr 1fr; }
            .cta-box { padding: 48px 32px; }
            .cta-title { font-size: 32px; }
            .cta-actions { flex-direction: column; align-items: center; }
            .section-title { font-size: 34px; }
            .app-notes-list { display: none; }
        }
        @media (max-width: 480px) {
            .hero-inner { padding: 40px 20px; }
            .section-inner { padding: 0 20px; }
            .journey-steps { grid-template-columns: 1fr; }
            .stats-inner { grid-template-columns: 1fr 1fr; }
            .hero-headline { font-size: 36px; }
        }
    </style>
</head>
<body>

    <!-- ═══ NAVBAR ═══ -->
    <nav class="navbar">
        <div class="navbar-inner">
            <a href="#" class="logo">
                <div class="logo-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                </div>
                <span class="logo-text">NoteSpace</span>
            </a>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#">About</a></li>
            </ul>

            <div class="nav-actions">
                <a href="/login" class="btn-login">Login</a>
                <a href="/register" class="btn-cta">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- ═══ HERO ═══ -->
    <section class="hero">
        <div class="hero-blob-1"></div>
        <div class="hero-blob-2"></div>

        <div class="hero-inner">
            <!-- Left -->
            <div>
                <div class="hero-badge">
                    <span class="hero-badge-dot"></span>
                    Simple notes. Beautifully organized.
                </div>

                <h1 class="hero-headline">
                    Write, organize,<br>
                    and find your<br>
                    notes with <span class="accent">ease.</span>
                </h1>

                <p class="hero-desc">
                    NoteSpace is your calm and focused space to capture thoughts, ideas, and everything that matters.
                </p>

                <div class="hero-actions">
                    <a href="/register" class="btn-hero-primary">Get Started for Free</a>
                    <a href="#features" class="btn-hero-secondary">
                        See How It Works
                        <span class="btn-arrow">›</span>
                    </a>
                </div>

                <div class="trust-indicators">
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        Private & Secure
                    </div>
                    <span class="trust-sep"></span>
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/></svg>
                        Sync Everywhere
                    </div>
                    <span class="trust-sep"></span>
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="m13 2-2 2.5h3L12 7"/><path d="M12 22V16"/><path d="M12 16a6 6 0 0 0 0-12"/></svg>
                        Fast Access
                    </div>
                </div>
            </div>

            <!-- Right: App Preview -->
            <div class="app-preview">
                <div class="app-preview-outer">
                    <div class="app-preview-chrome">
                        <span class="chrome-dot" style="background:#F5A623;"></span>
                        <span class="chrome-dot" style="background:#7ED321;"></span>
                        <span class="chrome-dot" style="background:#417505;"></span>
                    </div>
                    <div class="app-window">
                        <!-- Sidebar -->
                        <div class="app-sidebar">
                            <div class="app-sidebar-logo">
                                <div class="sidebar-logo-icon">N</div>
                                <span class="sidebar-logo-text">NoteSpace</span>
                            </div>
                            <div class="sidebar-new-btn">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                New Note
                            </div>
                            <div class="sidebar-section-label">Menu</div>
                            <div class="sidebar-item active">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                                All Notes
                            </div>
                            <div class="sidebar-item">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                                Favorites
                            </div>
                            <div class="sidebar-item">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                                Categories
                            </div>
                            <div class="sidebar-item">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"/><path d="M7 7h.01"/></svg>
                                Tags
                            </div>
                            <div class="sidebar-item" style="margin-top: auto;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                                Settings
                            </div>
                        </div>

                        <!-- Notes List -->
                        <div class="app-notes-list">
                            <div class="notes-list-header">
                                <div class="notes-search">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
                                    Search notes...
                                </div>
                            </div>
                            <div class="notes-group-label">Today</div>
                            <div class="note-item active">
                                <div class="note-item-top">
                                    <div class="note-item-title">Design ideas for landing page</div>
                                    <span class="note-star">★</span>
                                </div>
                                <div class="note-item-snippet">A clean and minimal landing page with warm and calm color palette...</div>
                                <div class="note-item-time">10:30 AM</div>
                            </div>
                            <div class="notes-group-label">Yesterday</div>
                            <div class="note-item">
                                <div class="note-item-top">
                                    <div class="note-item-title">Weekly planning</div>
                                </div>
                                <div class="note-item-snippet">Plan for the week ahead and prioritize tasks that matter.</div>
                                <div class="note-item-time">Yesterday</div>
                            </div>
                            <div class="notes-group-label">This Week</div>
                            <div class="note-item">
                                <div class="note-item-top">
                                    <div class="note-item-title">Books to read</div>
                                </div>
                                <div class="note-item-snippet">A list of inspiring books to read this year.</div>
                                <div class="note-item-time">May 12</div>
                            </div>
                            <div class="note-item">
                                <div class="note-item-top">
                                    <div class="note-item-title">Journal – May 12</div>
                                </div>
                                <div class="note-item-snippet">A short reflection on today and things I'm grateful for.</div>
                                <div class="note-item-time">May 12</div>
                            </div>
                        </div>

                        <!-- Editor -->
                        <div class="app-editor">
                            <div class="editor-toolbar">
                                <div class="editor-toolbar-left">
                                    <div class="editor-tool-btn">←</div>
                                    <div class="editor-tool-btn">→</div>
                                    <span class="editor-breadcrumb">All Notes / Design ideas</span>
                                </div>
                                <div class="editor-toolbar-right">
                                    <div class="editor-tool-btn">★</div>
                                    <div class="editor-tool-btn" style="color: var(--accent);">⤒</div>
                                    <div class="editor-tool-btn">⋯</div>
                                </div>
                            </div>
                            <div class="editor-title">Design ideas for landing page</div>
                            <div class="editor-meta">May 14, 2024 &nbsp;·&nbsp; 10:30 AM</div>
                            <div class="editor-body">
                                <p>A clean and minimal landing page that reflects clarity and focus.</p>
                                <p style="font-weight: 600; font-size: 11px; color: var(--text); margin-bottom: 8px;">Key elements:</p>
                                <div class="editor-list-item"><span class="editor-bullet">·</span> Clear headline</div>
                                <div class="editor-list-item"><span class="editor-bullet">·</span> Soft color palette</div>
                                <div class="editor-list-item"><span class="editor-bullet">·</span> Strong CTA</div>
                                <div class="editor-list-item"><span class="editor-bullet">·</span> Simple illustration</div>
                            </div>
                            <div class="editor-image-block">
                                <div class="editor-image-inner">
                                    <div class="editor-image-icon">🌿</div>
                                    <div class="editor-image-label">Design Inspiration</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ STATS ═══ -->
    <section class="stats-section">
        <div class="stats-inner">
            <div class="stat-item">
                <div class="stat-number">10K+</div>
                <div class="stat-label">Active Writers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50K+</div>
                <div class="stat-label">Ideas Captured</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">99%</div>
                <div class="stat-label">Focus Improvement</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4.9★</div>
                <div class="stat-label">User Rating</div>
            </div>
        </div>
    </section>

    <!-- ═══ FEATURES ═══ -->
    <section id="features" class="features-section">
        <div class="section-inner">
            <div class="section-header-center">
                <span class="section-badge">Features</span>
                <h2 class="section-title">Everything you need<br>to stay organized.</h2>
                <p class="section-desc">Built for productivity, focus, and beautiful organization. NoteSpace gives you the tools to think clearly.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                    </div>
                    <h3 class="feature-title">Smart Notes</h3>
                    <p class="feature-desc">Create and organize notes quickly with a clean, distraction-free editor built for deep focus and clarity.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                    </div>
                    <h3 class="feature-title">Categories</h3>
                    <p class="feature-desc">Organize your thoughts with intuitive categories. Keep your workspace clean and every idea in its place.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                    </div>
                    <h3 class="feature-title">Favorite Notes</h3>
                    <p class="feature-desc">Pin your most important notes and access them instantly, wherever you are in your workspace.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <h3 class="feature-title">Advanced Search</h3>
                    <p class="feature-desc">Find any note in seconds with intelligent full-text search. Your ideas are always one keystroke away.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
                    </div>
                    <h3 class="feature-title">Dark Mode</h3>
                    <p class="feature-desc">Enjoy a calm, beautiful dark mode experience designed for late-night writing sessions and deep work.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/></svg>
                    </div>
                    <h3 class="feature-title">Productivity Focus</h3>
                    <p class="feature-desc">Stay in the zone with a minimal interface that removes distractions and amplifies your creative thinking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ WORKSPACE PREVIEW ═══ -->
    <section class="workspace-section">
        <div class="workspace-inner">
            <!-- Mockup Left -->
            <div class="workspace-mockup">
                <div class="workspace-mockup-header">
                    <span class="ws-title">My Workspace</span>
                    <div class="ws-actions">
                        <span class="ws-action-btn soft">Filter</span>
                        <span class="ws-action-btn accent">+ New Note</span>
                    </div>
                </div>
                <div class="ws-note-grid">
                    <div class="ws-note-card bg-white">
                        <div class="ws-note-tag">Work</div>
                        <div class="ws-note-card-title">UI Design Ideas</div>
                        <div class="ws-note-card-body">Create modern dashboard inspiration for the NoteSpace app.</div>
                        <div class="ws-note-lines">
                            <div class="ws-line" style="width:100%;"></div>
                            <div class="ws-line" style="width:80%;"></div>
                        </div>
                    </div>
                    <div class="ws-note-card bg-soft">
                        <div class="ws-note-tag">Ideas</div>
                        <div class="ws-note-card-title">Book Recommendations</div>
                        <div class="ws-note-card-body">Inspiring reads on creativity, systems, and focus.</div>
                        <div class="ws-note-lines">
                            <div class="ws-line" style="width:100%;"></div>
                            <div class="ws-line" style="width:65%;"></div>
                        </div>
                    </div>
                    <div class="ws-note-card bg-soft">
                        <div class="ws-note-tag">Personal</div>
                        <div class="ws-note-card-title">Morning Journaling</div>
                        <div class="ws-note-card-body">Reflections from today. Gratitude and clarity notes.</div>
                        <div class="ws-note-lines">
                            <div class="ws-line" style="width:100%;"></div>
                            <div class="ws-line" style="width:75%;"></div>
                        </div>
                    </div>
                    <div class="ws-note-card bg-white">
                        <div class="ws-note-tag">School</div>
                        <div class="ws-note-card-title">Laravel Project</div>
                        <div class="ws-note-card-body">Finish the NoteSpace Laravel app before presentation day.</div>
                        <div class="ws-note-lines">
                            <div class="ws-line" style="width:100%;"></div>
                            <div class="ws-line" style="width:55%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Right -->
            <div class="workspace-content">
                <span class="section-badge">How It Works</span>
                <h2 class="section-title">Your ideas, beautifully arranged.</h2>
                <p class="section-desc">A workspace that adapts to how you think — whether you're capturing a quick thought or organizing a complex project.</p>
                <div class="ws-feature-list">
                    <div class="ws-feature-item">
                        <div class="ws-feature-dot">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="2.2" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="ws-feature-text">
                            <h4>Drag-and-drop organization</h4>
                            <p>Rearrange your notes and categories with ease, exactly how you like them.</p>
                        </div>
                    </div>
                    <div class="ws-feature-item">
                        <div class="ws-feature-dot">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="2.2" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="ws-feature-text">
                            <h4>Color-coded categories</h4>
                            <p>Instantly see what type of note you're looking at with visual category tags.</p>
                        </div>
                    </div>
                    <div class="ws-feature-item">
                        <div class="ws-feature-dot">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="2.2" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="ws-feature-text">
                            <h4>Automatic saving</h4>
                            <p>Every word is saved instantly. Never lose a thought again.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ WHY NOTESPACE ═══ -->
    <section class="why-section">
        <div class="section-inner">
            <div class="section-header-center">
                <span class="section-badge">Why NoteSpace</span>
                <h2 class="section-title">Designed for the way<br>you actually think.</h2>
                <p class="section-desc">Not another overcomplicated tool. NoteSpace is calm, intentional, and genuinely enjoyable to use every day.</p>
            </div>

            <div class="why-grid">
                <div class="why-card v1">
                    <div class="why-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <h3 class="why-title">Built for Focus</h3>
                    <p class="why-desc">Every design decision in NoteSpace is made to reduce noise and help you enter a state of deep, productive focus — faster.</p>
                </div>
                <div class="why-card v2">
                    <div class="why-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/></svg>
                    </div>
                    <h3 class="why-title">Stay Organized</h3>
                    <p class="why-desc">Tags, categories, favorites — everything has its place. Find any note instantly with powerful, intelligent search.</p>
                </div>
                <div class="why-card v3">
                    <div class="why-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h3 class="why-title">Think Clearly</h3>
                    <p class="why-desc">Writing clears the mind. NoteSpace gives you the cleanest canvas to capture your ideas exactly as they come — no friction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ USER JOURNEY ═══ -->
    <section class="journey-section">
        <div class="section-inner">
            <div class="section-header-center">
                <span class="section-badge">How You Grow</span>
                <h2 class="section-title">From idea to insight,<br>in four simple steps.</h2>
            </div>

            <div class="journey-steps">
                <div class="journey-connector"><div class="journey-connector-inner"></div></div>
                <div class="journey-step">
                    <div class="journey-icon">
                        <span class="journey-step-num">1</span>
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                    </div>
                    <div class="journey-step-title">Create Notes</div>
                    <p class="journey-step-desc">Capture any thought instantly. Text, lists, or rich content — your canvas, your rules.</p>
                </div>
                <div class="journey-step">
                    <div class="journey-icon">
                        <span class="journey-step-num">2</span>
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                    </div>
                    <div class="journey-step-title">Organize Ideas</div>
                    <p class="journey-step-desc">Use categories and tags to group related notes. Build a knowledge system that makes sense to you.</p>
                </div>
                <div class="journey-step">
                    <div class="journey-icon">
                        <span class="journey-step-num">3</span>
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <div class="journey-step-title">Find Information</div>
                    <p class="journey-step-desc">Instantly retrieve any note with powerful search. Your memories are always one click away.</p>
                </div>
                <div class="journey-step">
                    <div class="journey-icon">
                        <span class="journey-step-num">4</span>
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/></svg>
                    </div>
                    <div class="journey-step-title">Stay Productive</div>
                    <p class="journey-step-desc">Build habits that stick. With NoteSpace, every day becomes a little more organized and focused.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ CTA ═══ -->
    <section class="cta-section">
        <div class="section-inner">
            <div class="cta-box">
                <h2 class="cta-title">Ready to organize<br>your <span class="accent">ideas?</span></h2>
                <p class="cta-desc">Join thousands of writers, students, and thinkers who've found their focus with NoteSpace.</p>
                <div class="cta-actions">
                    <a href="/register" class="btn-large accent">Create Free Account</a>
                    <a href="#features" class="btn-large soft">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ FOOTER ═══ -->
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-main">
                <div class="footer-brand">
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                        <div class="logo-icon" style="width: 32px; height: 32px; border-radius: 8px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg>
                        </div>
                        <div class="footer-brand-name">NoteSpace</div>
                    </div>
                    <div class="footer-brand-tagline">A calmer way to capture ideas.</div>
                </div>
                <div class="footer-links">
                    <a href="#">Home</a>
                    <a href="#features">Features</a>
                    <a href="#">About</a>
                    <a href="/login">Login</a>
                    <a href="/register">Get Started</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="footer-copy">© 2026 NoteSpace. All rights reserved.</p>
                <p class="footer-tagline-small">Made with care, for thoughtful minds.</p>
            </div>
        </div>
    </footer>

</body>
</html>