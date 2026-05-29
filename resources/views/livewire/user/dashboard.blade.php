<div class="space-y-6">

    <!-- Header -->
    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            Dashboard
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Welcome back, {{ Auth::user()->name }}
        </p>

    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

        <!-- Notes -->
        <div class="bg-white border border-[#E5E7EB] rounded-2xl p-6">

            <div class="text-4xl">
                📝
            </div>

            <h2 class="text-gray-500 mt-4 text-sm">
                Total Notes
            </h2>

            <p class="text-3xl font-bold text-[#7C3AED] mt-1">
                {{ $notesCount }}
            </p>

        </div>

        <!-- Categories -->
        <div class="bg-white border border-[#E5E7EB] rounded-2xl p-6">

            <div class="text-4xl">
                📁
            </div>

            <h2 class="text-gray-500 mt-4 text-sm">
                Categories
            </h2>

            <p class="text-3xl font-bold text-[#7C3AED] mt-1">
                {{ $categoryCount }}
            </p>

        </div>

        <!-- Archive -->
        <div class="bg-white border border-[#E5E7EB] rounded-2xl p-6">

            <div class="text-4xl">
                📦
            </div>

            <h2 class="text-gray-500 mt-4 text-sm">
                Archived
            </h2>

            <p class="text-3xl font-bold text-[#7C3AED] mt-1">
                {{ $archiveCount }}
            </p>

        </div>

        <!-- Trash -->
        <div class="bg-white border border-[#E5E7EB] rounded-2xl p-6">

            <div class="text-4xl">
                🗑️
            </div>

            <h2 class="text-gray-500 mt-4 text-sm">
                Trash
            </h2>

            <p class="text-3xl font-bold text-[#7C3AED] mt-1">
                {{ $trashCount }}
            </p>

        </div>

    </div>

</div>