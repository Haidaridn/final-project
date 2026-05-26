<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteSpace</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }

        function toggleProfile() {
            document.getElementById('profileMenu').classList.toggle('hidden');
        }
    </script>
</head>

<body class="bg-[#F5F3FF]">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed inset-y-0 left-0 w-64 bg-white border-r border-[#E5E7EB] transform -translate-x-full md:translate-x-0 transition duration-300 z-50">

        <div class="p-6 border-b border-[#E5E7EB]">
            <h1 class="text-2xl font-bold text-[#7C3AED]">
                NoteSpace
            </h1>
        </div>

        <nav class="mt-6 px-4 space-y-2">

            <a href="/dasbor" class="block py-3 px-4 rounded-xl bg-[#7C3AED] text-white">
                Dashboard
            </a>

            <a href="/notes" class="block py-3 px-4 rounded-xl hover:bg-[#EDE9FE] text-gray-700">
                All Notes
            </a>

            <a href="#" class="block py-3 px-4 rounded-xl hover:bg-[#EDE9FE] text-gray-700">
                Category
            </a>

            <a href="#" class="block py-3 px-4 rounded-xl hover:bg-[#EDE9FE] text-gray-700">
                Archived
            </a>

            <a href="#" class="block py-3 px-4 rounded-xl hover:bg-[#EDE9FE] text-gray-700">
                Trash
            </a>

        </nav>

    </aside>

    <!-- Main -->
    <div class="flex-1 flex flex-col md:ml-64">

        <!-- Navbar -->
        <header class="bg-white border-b border-[#E5E7EB] p-4 flex items-center justify-between">

            <button onclick="toggleSidebar()" class="md:hidden text-gray-700 text-2xl">
                ☰
            </button>

            <h1 class="text-xl font-semibold text-gray-800">
                Dashboard
            </h1>

            <!-- Profile -->
            <div class="relative">

                <button onclick="toggleProfile()"
                    class="flex items-center gap-3">

                    <div class="w-10 h-10 rounded-full bg-[#7C3AED] flex items-center justify-center text-white font-semibold">
                        H
                    </div>

                    <span class="hidden md:block text-gray-700">
                        Haidar
                    </span>

                </button>

                <!-- Dropdown -->
                <div id="profileMenu"
                    class="hidden absolute right-0 mt-3 w-44 bg-white border border-[#E5E7EB] rounded-xl shadow">

                    <a href="#"
                        class="block px-4 py-3 hover:bg-[#F5F3FF] text-gray-700 rounded-t-xl">
                        Edit Profile
                    </a>

                    <form method="POST" action="/logout">
                        @csrf

                        <button
                            type="submit"
                            class="w-full text-left px-4 py-3 hover:bg-red-50 text-red-500 rounded-b-xl">
                            Logout
                        </button>
                    </form>

                </div>

            </div>

        </header>

        <!-- Content -->
        <main class="p-6 overflow-y-auto">

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>