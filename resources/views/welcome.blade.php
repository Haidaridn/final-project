<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteSpace</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #7C3AED;
            --secondary: #A78BFA;
            --background: #F5F3FF;
            --card: #FFFFFF;
            --text: #1F2937;
            --border: #E5E7EB;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--background);
            color: var(--text);
        }

        .hero-gradient {
            background:
                radial-gradient(circle at top left, rgba(167, 139, 250, 0.35), transparent 30%),
                radial-gradient(circle at bottom right, rgba(124, 58, 237, 0.25), transparent 30%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.5);
        }

        .note-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="w-full border-b border-[var(--border)] bg-white/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-2xl bg-[var(--primary)] flex items-center justify-center shadow-lg">
                        <span class="text-white text-xl font-bold">N</span>
                    </div>

                    <div>
                        <h1 class="text-xl font-bold text-[var(--text)]">
                            NoteSpace
                        </h1>
                        <p class="text-sm text-gray-500">
                            Smart Productivity App
                        </p>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="hidden md:flex items-center gap-10">
                    <a href="#" class="text-gray-600 hover:text-[var(--primary)] transition">
                        Home
                    </a>

                    <a href="#" class="text-gray-600 hover:text-[var(--primary)] transition">
                        Features
                    </a>

                    <a href="#" class="text-gray-600 hover:text-[var(--primary)] transition">
                        About
                    </a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center gap-4">
                    <a href="/login"
                       class="text-[var(--primary)] font-medium hover:opacity-80 transition">
                        Login
                    </a>

                    <a href="/register"
                       class="bg-[var(--primary)] hover:bg-violet-700 text-white px-5 py-2.5 rounded-xl font-medium shadow-lg shadow-violet-200 transition">
                        Get Started
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative hero-gradient overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-24 lg:py-32">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left Content -->
                <div>

                    <div class="inline-flex items-center gap-2 bg-violet-100 text-[var(--primary)] px-4 py-2 rounded-full text-sm font-semibold mb-7">
                        ✨ Modern Note Taking Experience
                    </div>

                    <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight text-[var(--text)]">
                        Organize Your
                        <span class="text-[var(--primary)]">
                            Ideas
                        </span>
                        Effortlessly
                    </h1>

                    <p class="mt-8 text-lg text-gray-600 leading-relaxed max-w-xl">
                        A modern productivity platform to manage your notes,
                        organize ideas, and boost your daily workflow with a
                        clean and elegant experience.
                    </p>

                    <div class="mt-10 flex flex-wrap gap-4">

                        <a href="/register"
                           class="bg-[var(--primary)] hover:bg-violet-700 text-white px-7 py-4 rounded-2xl font-semibold shadow-xl shadow-violet-200 transition duration-300">
                            Start Taking Notes
                        </a>

                        <a href="#features"
                           class="bg-white border border-[var(--border)] hover:border-[var(--secondary)] px-7 py-4 rounded-2xl font-semibold text-[var(--text)] transition">
                            Explore Features
                        </a>

                    </div>

                    <!-- Stats -->
                    <div class="mt-14 flex flex-wrap gap-10">

                        <div>
                            <h2 class="text-3xl font-bold text-[var(--primary)]">
                                10K+
                            </h2>
                            <p class="text-gray-500">
                                Active Users
                            </p>
                        </div>

                        <div>
                            <h2 class="text-3xl font-bold text-[var(--primary)]">
                                50K+
                            </h2>
                            <p class="text-gray-500">
                                Notes Created
                            </p>
                        </div>

                        <div>
                            <h2 class="text-3xl font-bold text-[var(--primary)]">
                                99%
                            </h2>
                            <p class="text-gray-500">
                                Productivity Boost
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Right Dashboard Preview -->
                <div class="relative">

                    <!-- Background Blur -->
                    <div class="absolute -top-10 -right-10 w-72 h-72 bg-violet-300/30 rounded-full blur-3xl"></div>

                    <div class="relative glass-card rounded-[32px] p-6 shadow-2xl">

                        <!-- Top -->
                        <div class="flex items-center justify-between mb-6">

                            <div>
                                <h2 class="text-2xl font-bold text-[var(--text)]">
                                    My Notes
                                </h2>

                                <p class="text-gray-500 mt-1">
                                    Stay organized every day
                                </p>
                            </div>

                            <button class="bg-[var(--primary)] text-white w-12 h-12 rounded-2xl text-2xl">
                                +
                            </button>

                        </div>

                        <!-- Search -->
                        <div class="bg-[var(--background)] border border-[var(--border)] rounded-2xl px-4 py-3 mb-6">
                            <input
                                type="text"
                                placeholder="Search notes..."
                                class="bg-transparent w-full outline-none text-sm"
                            >
                        </div>

                        <!-- Notes -->
                        <div class="space-y-4">

                            <div class="note-card bg-white border border-[var(--border)] rounded-3xl p-5 transition duration-300 shadow-sm">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="font-semibold text-lg">
                                            UI Design Ideas
                                        </h3>

                                        <p class="text-gray-500 mt-2 text-sm leading-relaxed">
                                            Create modern dashboard inspiration
                                            for NoteSpace application.
                                        </p>
                                    </div>

                                    <div class="w-3 h-3 bg-violet-500 rounded-full"></div>
                                </div>
                            </div>

                            <div class="note-card bg-violet-50 border border-violet-200 rounded-3xl p-5 transition duration-300 shadow-sm">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="font-semibold text-lg">
                                            School Project
                                        </h3>

                                        <p class="text-gray-500 mt-2 text-sm leading-relaxed">
                                            Finish Laravel + Livewire note app
                                            before presentation day.
                                        </p>
                                    </div>

                                    <div class="w-3 h-3 bg-[var(--primary)] rounded-full"></div>
                                </div>
                            </div>

                            <div class="note-card bg-white border border-[var(--border)] rounded-3xl p-5 transition duration-300 shadow-sm">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h3 class="font-semibold text-lg">
                                            Productivity Goals
                                        </h3>

                                        <p class="text-gray-500 mt-2 text-sm leading-relaxed">
                                            Build a clean and modern note
                                            management experience.
                                        </p>
                                    </div>

                                    <div class="w-3 h-3 bg-violet-300 rounded-full"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto">

                <span class="bg-violet-100 text-[var(--primary)] px-4 py-2 rounded-full text-sm font-semibold">
                    Features
                </span>

                <h2 class="mt-6 text-4xl lg:text-5xl font-bold">
                    Everything You Need
                </h2>

                <p class="mt-5 text-lg text-gray-500">
                    Built for productivity, focus, and better organization.
                </p>

            </div>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-20">

                <!-- Card -->
                <div class="bg-white rounded-3xl p-8 border border-[var(--border)] shadow-sm hover:shadow-xl transition duration-300">

                    <div class="w-16 h-16 rounded-2xl bg-violet-100 flex items-center justify-center text-3xl">
                        📝
                    </div>

                    <h3 class="mt-6 text-2xl font-bold">
                        Smart Notes
                    </h3>

                    <p class="mt-4 text-gray-500 leading-relaxed">
                        Create and organize notes quickly with a clean editor.
                    </p>

                </div>

                <!-- Card -->
                <div class="bg-white rounded-3xl p-8 border border-[var(--border)] shadow-sm hover:shadow-xl transition duration-300">

                    <div class="w-16 h-16 rounded-2xl bg-violet-100 flex items-center justify-center text-3xl">
                        ⭐
                    </div>

                    <h3 class="mt-6 text-2xl font-bold">
                        Favorite Notes
                    </h3>

                    <p class="mt-4 text-gray-500 leading-relaxed">
                        Pin important notes and access them instantly anytime.
                    </p>

                </div>

                <!-- Card -->
                <div class="bg-white rounded-3xl p-8 border border-[var(--border)] shadow-sm hover:shadow-xl transition duration-300">

                    <div class="w-16 h-16 rounded-2xl bg-violet-100 flex items-center justify-center text-3xl">
                        🌙
                    </div>

                    <h3 class="mt-6 text-2xl font-bold">
                        Dark Mode
                    </h3>

                    <p class="mt-4 text-gray-500 leading-relaxed">
                        Enjoy a beautiful dark mode experience for night work.
                    </p>

                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="pb-28">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">

            <div class="bg-[var(--primary)] rounded-[40px] p-10 lg:p-16 text-center relative overflow-hidden">

                <div class="absolute top-0 right-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>

                <div class="relative">

                    <h2 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                        Start Your Productivity Journey Today
                    </h2>

                    <p class="mt-6 text-violet-100 text-lg max-w-2xl mx-auto">
                        Organize your ideas beautifully and boost your workflow
                        with NoteSpace.
                    </p>

                    <div class="mt-10">
                        <a href="/register"
                           class="bg-white text-[var(--primary)] px-8 py-4 rounded-2xl font-bold shadow-lg hover:scale-105 transition inline-block">
                            Create Free Account
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-[var(--border)] bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-8">

            <div class="flex flex-col md:flex-row items-center justify-between gap-5">

                <div>
                    <h2 class="font-bold text-xl text-[var(--text)]">
                        NoteSpace
                    </h2>

                    <p class="text-gray-500 mt-1 text-sm">
                        Modern Note Taking App.
                    </p>
                </div>

                <p class="text-gray-400 text-sm">
                    © 2026 NoteSpace. All rights reserved.
                </p>

            </div>

        </div>
    </footer>

</body>
</html>