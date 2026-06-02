<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F5F3FF] min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white border-b border-[#E5E7EB] px-6 py-4">

        <div class="max-w-6xl mx-auto flex items-center justify-between">

            <h1 class="text-lg font-semibold text-gray-800">
                Edit Profile
            </h1>

            <a href="/dashboard"
               class="bg-[#7C3AED] text-white px-4 py-2 rounded-xl text-sm">

                ← Back to Dashboard

            </a>

        </div>

    </nav>

    <!-- Content -->
    <main class="max-w-6xl mx-auto p-6">

        @yield('content')

    </main>

</body>
</html>