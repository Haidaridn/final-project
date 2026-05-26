<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | NoteSpace</title>

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

    <!-- Register Card -->
    <div class="w-full max-w-sm mx-auto bg-white border border-[var(--border)] rounded-3xl shadow-lg p-6">

        <!-- Logo -->
        <div class="text-center mb-5">

            <div class="w-12 h-12 bg-[var(--primary)] rounded-2xl flex items-center justify-center mx-auto mb-3">
                <span class="text-white text-xl font-bold">
                    N
                </span>
            </div>

            <h1 class="text-2xl font-bold text-[var(--text)]">
                Register
            </h1>

            <p class="text-gray-500 text-sm mt-1">
                Create your NoteSpace account
            </p>

        </div>

        <!-- Form -->
        <form method="POST" action="/register" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium mb-2">
                    Full Name
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Enter your full name"
                    class="w-full px-4 py-3 rounded-xl border border-[var(--border)] focus:outline-none focus:border-[var(--primary)]"
                >
            </div>

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
                    placeholder="Create password"
                    class="w-full px-4 py-3 rounded-xl border border-[var(--border)] focus:outline-none focus:border-[var(--primary)]"
                >
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-medium mb-2">
                    Confirm Password
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm password"
                    class="w-full px-4 py-3 rounded-xl border border-[var(--border)] focus:outline-none focus:border-[var(--primary)]"
                >
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-[var(--primary)] hover:bg-violet-700 text-white py-3 rounded-xl font-semibold transition"
            >
                Create Account
            </button>

        </form>

        <!-- Login Link -->
        <p class="text-center text-gray-500 mt-5 text-sm">
            Already have an account?

            <a href="/login" class="text-[var(--primary)] font-semibold hover:underline">
                Login
            </a>
        </p>

    </div>

</body>
</html>