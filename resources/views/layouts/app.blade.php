<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteSpace</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        serif: ['Lora', 'serif'],
                    },
                }
            }
        }
    </script>

    <script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
        document.getElementById('sidebar-overlay').classList.toggle('hidden');
    }

    function closeSidebar() {
        document.getElementById('sidebar').classList.add('-translate-x-full');
        document.getElementById('sidebar-overlay').classList.add('hidden');
    }

    function toggleProfileMenu() {
        document.getElementById('profileMenu').classList.toggle('hidden');
    }
    </script>

    <style>
        :root {
            --bg: #FFFFFF;
            --soft: #FAF7F2;
            --text: #2B2B2B;
            --muted: #6B6B6B;
            --border: #EAE4DB;
            --accent: #C87A45;
            --accent-hover: #B56835;
            --hover: #F5EEE5;
        }

        * { -webkit-font-smoothing: antialiased; box-sizing: border-box; }

        body { background: var(--bg); font-family: 'DM Sans', sans-serif; color: var(--text); }

        /* Sidebar slide */
        #sidebar { transition: transform 0.26s cubic-bezier(0.4, 0, 0.2, 1); }

        /* Nav items */
        .nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 11px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--muted);
            text-decoration: none;
            transition: background 0.18s ease, color 0.18s ease;
            cursor: pointer;
        }
        .nav-item:hover {
            background: var(--hover);
            color: var(--text);
        }
        .nav-item.active {
            background: var(--accent);
            color: #fff;
            font-weight: 600;
        }
        .nav-item.active svg { opacity: 1; }
        .nav-item svg { opacity: 0.6; flex-shrink: 0; transition: opacity 0.18s; }
        .nav-item:hover svg, .nav-item.active svg { opacity: 1; }

        /* Section labels */
        .sidebar-label {
            font-size: 9.5px;
            font-weight: 700;
            letter-spacing: 0.11em;
            text-transform: uppercase;
            color: #B8AFA4;
            padding: 0 14px;
            margin-bottom: 4px;
            margin-top: 4px;
        }

        /* Scrollbar hide */
        .sidebar-scroll { scrollbar-width: none; }
        .sidebar-scroll::-webkit-scrollbar { display: none; }

        /* Profile dropdown */
        #profileMenu { transition: opacity 0.15s ease; }

        /* Dropdown items */
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 9px 14px;
            font-size: 13px;
            font-weight: 500;
            color: var(--text);
            text-decoration: none;
            transition: background 0.15s;
        }
        .dropdown-item:hover { background: var(--hover); }
        .dropdown-item.danger { color: #DC2626; }
        .dropdown-item.danger:hover { background: #FEF2F2; }
    </style>

    @livewireStyles
</head>

@php
    function activeMenu($route) {
        return request()->is($route) ? 'active' : '';
    }
@endphp

<body>

<!-- Mobile overlay -->
<div id="sidebar-overlay"
     onclick="closeSidebar()"
     class="hidden fixed inset-0 bg-black/20 backdrop-blur-[2px] z-40 md:hidden">
</div>

<div class="flex h-screen overflow-hidden">

    <!-- ══════════════════════════════════════════
         SIDEBAR
    ══════════════════════════════════════════ -->
    <aside id="sidebar"
           class="fixed inset-y-0 left-0 z-50
                  w-[260px] -translate-x-full
                  md:translate-x-0
                  flex flex-col"
           style="background: var(--soft); border-right: 1px solid var(--border);">

        <!-- ── Brand ── -->
        <div class="px-5 pt-8 pb-6">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-9 h-9 rounded-[12px] flex items-center justify-center flex-shrink-0"
                     style="background: var(--accent); box-shadow: 0 4px 14px rgba(200,122,69,0.28);">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/>
                    </svg>
                </div>
                <div class="leading-none">
                    <p class="text-[15px] font-bold tracking-tight" style="color: var(--text); font-family: 'Lora', serif;">NoteSpace</p>
                    <p class="text-[10px] font-500 mt-[3px]" style="color: var(--muted);">Personal Workspace</p>
                </div>
            </div>
        </div>

        <!-- ── Nav ── -->
        <nav class="flex-1 flex flex-col px-3 overflow-y-auto sidebar-scroll pb-4">

            <div class="sidebar-label">Workspace</div>

            <div class="flex flex-col gap-[2px]">
                <a href="/dashboard" class="nav-item {{ activeMenu('dashboard') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/>
                        <rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/>
                    </svg>
                    Dashboard
                </a>

                <a href="/notes" class="nav-item {{ activeMenu('notes') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/>
                    </svg>
                    All Notes
                </a>

                <a href="/favorites" class="nav-item {{ activeMenu('favorites') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/>
                    </svg>
                    Favorites
                </a>

                <a href="/category" class="nav-item {{ activeMenu('category') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/>
                    </svg>
                    Category
                </a>

                <a href="/archived" class="nav-item {{ activeMenu('archived') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="5" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/>
                        <path d="M10 13h4"/>
                    </svg>
                    Archived
                </a>

                <a href="/trash" class="nav-item {{ activeMenu('trash') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    </svg>
                    Trash
                </a>
            </div>

            <!-- Notebooks -->
            <div class="mt-5 pt-4" style="border-top: 1px solid var(--border);">
                <livewire:user.sidebar-notebooks />
            </div>

        </nav>

        <!-- ── Sidebar Footer ── -->
        <div class="px-4 py-4" style="border-top: 1px solid var(--border);">
            <div class="flex items-center gap-3 px-2 py-2 rounded-[11px] transition-colors cursor-pointer"
                 style="color: var(--muted);"
                 onmouseover="this.style.background='var(--hover)'"
                 onmouseout="this.style.background='transparent'">
                <div class="w-7 h-7 rounded-full flex items-center justify-center text-[11px] font-bold text-white flex-shrink-0"
                     style="background: var(--accent);">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-[12px] font-600 truncate" style="color: var(--text); font-weight: 600;">{{ Auth::user()->name }}</p>
                    <p class="text-[10px] truncate" style="color: var(--muted);">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

    </aside>
    <!-- ══ END SIDEBAR ══ -->


    <!-- ══════════════════════════════════════════
         MAIN CONTENT
    ══════════════════════════════════════════ -->
    <div class="flex-1 flex flex-col md:ml-[260px] min-w-0" style="background: var(--bg);">

        <!-- Navbar -->
        <header class="sticky top-0 z-30 px-6 py-4 flex items-center justify-between"
                style="background: rgba(255,255,255,0.88); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border-bottom: 1px solid var(--border);">

            <!-- Mobile hamburger -->
            <button onclick="toggleSidebar()"
                    class="md:hidden w-9 h-9 rounded-xl flex items-center justify-center transition-colors"
                    style="color: var(--muted);"
                    onmouseover="this.style.background='var(--hover)'"
                    onmouseout="this.style.background='transparent'">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round">
                    <path d="M3 6h18M3 12h18M3 18h18"/>
                </svg>
            </button>

            <h1 class="text-[17px] font-bold tracking-tight" style="color: var(--text); font-family: 'Lora', serif;">Dashboard</h1>

            <!-- Profile Dropdown -->
            <div class="relative">
                <button
                    onclick="toggleProfileMenu()"
                    class="flex items-center gap-2.5 px-3 py-2 rounded-[12px] transition-colors"
                    style="border: 1px solid var(--border);"
                    onmouseover="this.style.background='var(--hover)'"
                    onmouseout="this.style.background='transparent'">

                    <div class="w-7 h-7 rounded-full flex items-center justify-center text-[11px] font-bold text-white flex-shrink-0"
                         style="background: var(--accent);">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <span class="text-[13px] font-500 hidden sm:block" style="color: var(--text); font-weight: 500;">
                        {{ Auth::user()->name }}
                    </span>

                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="color: var(--muted);">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div id="profileMenu"
                     class="hidden absolute right-0 mt-2 w-52 z-50 overflow-hidden"
                     style="background: #fff; border: 1px solid var(--border); border-radius: 16px; box-shadow: 0 8px 28px rgba(0,0,0,0.08);">

                    <!-- User info -->
                    <div class="px-4 py-3.5" style="border-bottom: 1px solid var(--border);">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full flex items-center justify-center text-[13px] font-bold text-white flex-shrink-0"
                                 style="background: var(--accent);">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="min-w-0">
                                <p class="text-[13px] font-semibold truncate" style="color: var(--text);">{{ Auth::user()->name }}</p>
                                <p class="text-[11px] truncate" style="color: var(--muted);">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="py-1.5">
                        <a href="/edit-profile" class="dropdown-item">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                            </svg>
                            Edit Profile
                        </a>

                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item danger w-full text-left">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="p-8 overflow-y-auto flex-1">
            @yield('content')
        </main>

    </div>

</div>

<livewire:user.notebook-modal />

@livewireScripts
</body>
</html>