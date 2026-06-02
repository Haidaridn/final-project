<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | NoteSpace</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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
            background-color: var(--background);
            color: var(--text);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-6 py-6">

    <!-- Login Card -->
    <div class="w-full max-w-sm mx-auto bg-white border border-[var(--border)] rounded-3xl shadow-lg p-6">

        <!-- Logo -->
        <div class="text-center mb-6">

            <div class="w-14 h-14 bg-[var(--primary)] rounded-2xl flex items-center justify-center mx-auto mb-4">
                <span class="text-white text-2xl font-bold">
                    N
                </span>
            </div>

            <h1 class="text-2xl font-bold text-[var(--text)]">
                Welcome Back
            </h1>

            <p class="text-gray-500 mt-2 text-sm">
                Login to continue to NoteSpace
            </p>

        </div>

        @if ($errors->any())
            <div
                x-data="{ show: true }"
                x-show="show"
                class="mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl flex items-center justify-between">

                <div class="flex items-center gap-2">
                    <span>⚠️</span>
                    <span>{{ $errors->first() }}</span>
                </div>

                <button
                    type="button"
                    @click="show = false"
                    class="text-red-500 hover:text-red-700">

                    ✕

                </button>

            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="/login" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium mb-2">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    class="w-full px-4 py-3 rounded-xl border border-[var(--border)] focus:outline-none focus:border-[var(--primary)]"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium mb-2">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    class="w-full px-4 py-3 rounded-xl border border-[var(--border)] focus:outline-none focus:border-[var(--primary)]"
                >
            </div>

            <!-- Remember & Forgot -->
            <div class="flex items-center justify-between text-sm">

                <label class="flex items-center gap-2 text-gray-600">
                    <input
                        type="checkbox"
                        name="remember"
                        class="rounded border-gray-300 text-violet-600 focus:ring-violet-500"
                    >

                    Remember me
                </label>

                <a href="#"
                   class="text-[var(--primary)] font-medium">
                    Forgot Password?
                </a>

            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-[var(--primary)] hover:bg-violet-700 text-white py-3 rounded-xl font-semibold transition"
            >
                Login
            </button>

        </form>

        <!-- Register Link -->
        <p class="text-center text-gray-500 mt-5 text-sm">
            Don't have an account?

            <a href="/register" class="text-[var(--primary)] font-semibold">
                Register
            </a>
        </p>

    </div>

</body>
</html>