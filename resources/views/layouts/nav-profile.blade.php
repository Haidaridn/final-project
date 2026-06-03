<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg:           #FFFFFF;
            --sidebar:      #FAF7F2;
            --text-primary: #2B2B2B;
            --text-secondary:#6B6B6B;
            --border:       #EAE4DB;
            --accent:       #C87A45;
            --accent-mid:   #D99B68;
            --accent-light: #F5EEE5;
            --accent-faint: #FAF7F2;
            --shadow-nav:   0 1px 0 #EAE4DB, 0 4px 20px rgba(0,0,0,.04);
            --shadow-btn:   0 4px 14px rgba(200,122,69,.22);
            --radius-btn:   14px;
            --tr:           all .28s cubic-bezier(.4,0,.2,1);
            --font-head:    'Sora', sans-serif;
            --font-body:    'DM Sans', sans-serif;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: var(--font-body);
            background:  var(--bg);
            color:       var(--text-primary);
            min-height:  100vh;
        }

        /* ── NAVBAR ─────────────────────────────────────────── */
        .np-nav {
            position:    sticky;
            top:         0;
            z-index:     50;
            background:  var(--bg);
            box-shadow:  var(--shadow-nav);
            border-bottom: 1px solid var(--border);
        }

        .np-nav-inner {
            max-width:      1160px;
            margin:         0 auto;
            padding:        0 24px;
            height:         64px;
            display:        flex;
            align-items:    center;
            justify-content:space-between;
            gap:            16px;
        }

        /* Left: brand mark + title */
        .np-brand {
            display:    flex;
            align-items:center;
            gap:        12px;
            flex-shrink:0;
        }

        .np-brand-icon {
            width:           34px;
            height:          34px;
            border-radius:   10px;
            background:      var(--accent-light);
            border:          1px solid var(--border);
            display:         flex;
            align-items:     center;
            justify-content: center;
            flex-shrink:     0;
            transition:      var(--tr);
        }

        .np-brand-icon svg { width: 16px; height: 16px; color: var(--accent); }

        .np-brand-title {
            font-family:   var(--font-head);
            font-size:     15.5px;
            font-weight:   600;
            letter-spacing:-.01em;
            color:         var(--text-primary);
        }

        /* Divider dot */
        .np-dot {
            width:         4px;
            height:        4px;
            border-radius: 50%;
            background:    var(--border);
            flex-shrink:   0;
        }

        /* Right: back button */
        .np-back-btn {
            display:        inline-flex;
            align-items:    center;
            gap:            8px;
            padding:        0 18px;
            height:         38px;
            border-radius:  var(--radius-btn);
            background:     var(--accent-light);
            border:         1px solid var(--border);
            color:          var(--accent);
            font-family:    var(--font-body);
            font-size:      13px;
            font-weight:    600;
            text-decoration:none;
            white-space:    nowrap;
            transition:     var(--tr);
            letter-spacing: .01em;
        }

        .np-back-btn svg { width: 14px; height: 14px; flex-shrink: 0; transition: transform .25s ease; }

        .np-back-btn:hover {
            background:  var(--accent);
            color:       #fff;
            border-color:var(--accent);
            box-shadow:  var(--shadow-btn);
            transform:   translateY(-1px);
        }

        .np-back-btn:hover svg { transform: translateX(-2px); }

        .np-back-btn:active { transform: scale(.97); box-shadow: none; }

        /* ── MAIN ───────────────────────────────────────────── */
        .np-main {
            max-width: 1160px;
            margin:    0 auto;
            padding:   0 24px;
        }

        @media (max-width: 600px) {
            .np-nav-inner { padding: 0 16px; height: 58px; }
            .np-main      { padding: 0 16px; }
            .np-brand-title { font-size: 14.5px; }
            .np-back-btn  { padding: 0 13px; font-size: 12.5px; }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="np-nav">
        <div class="np-nav-inner">

            {{-- Left: icon + title --}}
            <div class="np-brand">
                <span class="np-brand-icon">
                    <svg fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                </span>
                <span class="np-brand-title">Edit Profile</span>
            </div>

            {{-- Right: back button --}}
            <a href="/dashboard" class="np-back-btn">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
                </svg>
                Back to Dashboard
            </a>

        </div>
    </nav>

    <!-- Content -->
    <main class="np-main">
        @yield('content')
    </main>

</body>
</html>