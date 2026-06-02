<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- Google Fonts: Outfit (body) + Fraunces (brand accent) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
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
        /* Single transition rule Tailwind can't express in one utility */
        #sidebar { transition: transform 0.28s cubic-bezier(0.4, 0, 0.2, 1); }
        /* Nav item hover nudge */
        .nav-link:hover:not(.nav-active) { transform: translateX(3px); }
        .nav-link { transition: background 0.15s ease, color 0.15s ease, transform 0.15s ease; }
    </style>

    @livewireStyles

</head>

@php
    function activeMenu($route) {
        return request()->is($route)
            ? 'text-white bg-gradient-to-br from-violet-500 to-violet-700 shadow-[0_6px_18px_rgba(124,58,237,0.28),0_2px_6px_rgba(109,40,217,0.20)]'
            : 'text-[#7A7A8C] hover:bg-black/[0.045] hover:text-[#3D3D52]';
    }
@endphp
<body class="bg-[#EEEEF3] font-sans">

<!-- Mobile overlay -->
<div id="sidebar-overlay"
     onclick="closeSidebar()"
     class="hidden fixed inset-0 bg-black/30 backdrop-blur-sm z-40 md:hidden">
</div>

<div class="flex h-screen overflow-hidden">

    <!-- ══════════════════════════════════════════
         SIDEBAR
    ══════════════════════════════════════════ -->
    <aside id="sidebar"
           class="fixed inset-y-0 left-0 z-50
                  w-[220px] -translate-x-full
                  md:translate-x-0
                  bg-[#F5F5F8]
                  flex flex-col
                  shadow-[1px_0_0_0_rgba(0,0,0,0.06),6px_0_24px_rgba(0,0,0,0.04)]">

        <!-- ── Brand ── -->
        <div class="flex items-center gap-2.5 px-5 pt-9 pb-7">
            <!-- Icon mark -->
            <div class="w-8 h-8 rounded-[10px] bg-gradient-to-br from-violet-500 to-violet-700
                        flex items-center justify-center flex-shrink-0
                        shadow-[0_4px_12px_rgba(124,58,237,0.30)]">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <rect x="1.5" y="1.5" width="4.5" height="4.5" rx="1.2" fill="white"/>
                    <rect x="9"   y="1.5" width="4.5" height="4.5" rx="1.2" fill="rgba(255,255,255,0.55)"/>
                    <rect x="1.5" y="9"   width="4.5" height="4.5" rx="1.2" fill="rgba(255,255,255,0.55)"/>
                    <rect x="9"   y="9"   width="4.5" height="4.5" rx="1.2" fill="white"/>
                </svg>
            </div>
            <div class="leading-none">
                <p class="text-[14px] font-bold text-[#1A1A2E] tracking-tight">UserKit</p>
                <p class="text-[9.5px] font-semibold text-[#B0B0BE] tracking-[0.09em] uppercase mt-[3px]">Control Panel</p>
            </div>
        </div>

        <!-- ── Section label ── -->
        <p class="px-[22px] pb-2 text-[9px] font-semibold tracking-[0.12em] uppercase text-[#C4C4CE]">
            Main Menu
        </p>

        <!-- ── Primary nav ── -->
        <nav class="flex-1 flex flex-col gap-[3px] px-3 overflow-y-auto overflow-x-hidden
                    [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">

            {{-- Dashboard --}}
            <a href="/dashboard"
               class="nav-link {{ activeMenu('dashboard') }}
                        flex items-center gap-3 px-3 py-[10px] rounded-[14px]
                        text-[13px] font-semibold">
                <svg class="w-[18px] h-[18px] shrink-0" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2.5" y="2.5" width="6" height="6" rx="1.5"/>
                    <rect x="11.5" y="2.5" width="6" height="6" rx="1.5"/>
                    <rect x="2.5" y="11.5" width="6" height="6" rx="1.5"/>
                    <rect x="11.5" y="11.5" width="6" height="6" rx="1.5"/>
                </svg>
                Dashboard
            </a>

            {{-- Users --}}
            <a href="/notes"
               class="nav-link {{ activeMenu('notes') }}
                      flex items-center gap-3 px-3 py-[10px] rounded-[14px]
                      text-[13px] font-medium text-[#7A7A8C]
                      hover:bg-black/[0.045] hover:text-[#3D3D52]">
                <svg class="w-[18px] h-[18px] shrink-0 opacity-75" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 10a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    <path d="M3 17c0-3.314 3.134-6 7-6s7 2.686 7 6"/>
                </svg>
                All notes
            </a>

            {{-- Favorites --}}
            <a href="/favorites"
               class="nav-link {{ activeMenu('favorites') }}
                      flex items-center gap-3 px-3 py-[10px] rounded-[14px]
                      text-[13px] font-medium text-[#7A7A8C]
                      hover:bg-black/[0.045] hover:text-[#3D3D52]">
                <svg class="w-[18px] h-[18px] shrink-0 opacity-75" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3"  y="11" width="4" height="6" rx="1"/>
                    <rect x="8"  y="7"  width="4" height="10" rx="1"/>
                    <rect x="13" y="3"  width="4" height="14" rx="1"/>
                </svg>
                Favorites
            </a>
            

            {{-- Category --}}
            <a href="/category"
               class="nav-link {{ activeMenu('category') }}
                      flex items-center gap-3 px-3 py-[10px] rounded-[14px]
                      text-[13px] font-medium text-[#7A7A8C]
                      hover:bg-black/[0.045] hover:text-[#3D3D52]">
                <svg class="w-[18px] h-[18px] shrink-0 opacity-75" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M13 9.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    <path d="M6.5 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                    <path d="M17 16.5c0-2.485-1.791-4.5-4-4.5s-4 2.015-4 4.5"/>
                    <path d="M2.5 16.5c0-2.071 1.79-3.75 4-3.75"/>
                </svg>
                Category
            </a>

            {{-- Payroll --}}
            <a href="/archived"
               class="nav-link {{ activeMenu('archived') }}
                      flex items-center gap-3 px-3 py-[10px] rounded-[14px]
                      text-[13px] font-medium text-[#7A7A8C]
                      hover:bg-black/[0.045] hover:text-[#3D3D52]">
                <svg class="w-[18px] h-[18px] shrink-0 opacity-75" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="5" width="16" height="11" rx="2"/>
                    <path d="M6 5V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1"/>
                    <circle cx="10" cy="11" r="2"/>
                    <path d="M6 13.5h1M13 13.5h1"/>
                </svg>
                Archived
            </a>

            {{-- Attendance --}}
            <a href="/trash"
               class="nav-link {{ activeMenu('trash') }}
                      flex items-center gap-3 px-3 py-[10px] rounded-[14px]
                      text-[13px] font-medium text-[#7A7A8C]
                      hover:bg-black/[0.045] hover:text-[#3D3D52]">
                <svg class="w-[18px] h-[18px] shrink-0 opacity-75" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="14" height="13" rx="2"/>
                    <path d="M3 8h14"/>
                    <path d="M8 2v3M12 2v3"/>
                    <path d="M7 12.5l2 2 4-4"/>
                </svg>
                Trash
            </a>
            

            <livewire:user.sidebar-notebooks />
        </nav>

    </aside>

    {{-- NOTEBOOKS --}}     
   
    
    <!-- ══ END SIDEBAR ══ -->


    <!-- ══════════════════════════════════════════
         MAIN CONTENT
    ══════════════════════════════════════════ -->
    <div class="flex-1 flex flex-col md:ml-[220px] min-w-0">
           

        <!-- Navbar -->
        <header class="bg-white/90 backdrop-blur-sm sticky top-0 z-30
                       border-b border-black/[0.06]
                       px-5 py-3.5 flex items-center justify-between">

            <!-- Mobile hamburger -->
            <button onclick="toggleSidebar()"
                    class="md:hidden w-9 h-9 rounded-xl flex items-center justify-center
                           text-gray-500 hover:bg-gray-100 transition-colors">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                     stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
                    <path d="M3 5.5h14M3 10h14M3 14.5h14"/>
                </svg>
            </button>

            <h1 class="text-[16px] font-semibold text-gray-800 tracking-tight">Dashboard</h1>

            <!-- Profile Dropdown -->
            <div class="relative">

                <button
                    onclick="toggleProfileMenu()"
                    class="flex items-center gap-2 px-2 py-1.5 rounded-xl hover:bg-gray-100 transition">

                    <div class="w-8 h-8 rounded-full
                                bg-gradient-to-br from-violet-500 to-violet-700
                                flex items-center justify-center
                                text-white text-xs font-semibold">

                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

                    </div>

                    <svg class="w-4 h-4 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"/>

                    </svg>

                </button>

                <!-- Dropdown -->
                <div id="profileMenu"
                class="hidden absolute right-0 mt-2 w-48
                        bg-white rounded-2xl border border-gray-200
                        shadow-lg overflow-hidden z-50">

                <div class="px-4 py-3 border-b border-gray-100">

                    <div class="flex items-center gap-3">

                        <div class="w-9 h-9 rounded-full
                                    bg-gradient-to-br from-violet-500 to-violet-700
                                    flex items-center justify-center
                                    text-white text-sm font-semibold">

                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

                        </div>

                        <div class="min-w-0">

                            <p class="text-sm font-semibold text-gray-800 truncate">
                                {{ Auth::user()->name }}
                            </p>

                            <p class="text-xs text-gray-400 truncate">
                                {{ Auth::user()->email }}
                            </p>

                        </div>

                    </div>

                </div>

                <a href="/edit-profile"
                    class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-violet-50">

                    ✏️ Edit Profile

                </a>

                <form action="/logout" method="POST">
                    @csrf

                    <button
                        type="submit"
                        class="w-full text-left px-4 py-2.5 text-sm text-red-500 hover:bg-red-50">

                        🚪 Logout

                    </button>

                </form>

            </div>

            </div>
            </header>
            

        <!-- Content -->
        <main class="p-6 overflow-y-auto flex-1">
            @yield('content')
        </main>
        
    </div>
    
</div>
<livewire:user.notebook-modal /> 

@livewireScripts
</body>
</html>