<div class="max-w-2xl mx-auto space-y-6">

    <!-- Header -->
    <div>

        <h1 class="text-2xl font-bold text-gray-800">
            Edit Profile
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Update your personal information.
        </p>

    </div>

    <!-- Success Message -->
    @if(session()->has('success'))

        <div class="bg-green-100 text-green-600 px-4 py-3 rounded-xl">

            {{ session('success') }}

        </div>

    @endif

    <!-- Card -->
    <div class="bg-white border border-[#E5E7EB] rounded-2xl p-6 space-y-5">

        <!-- Avatar -->
        <div class="flex items-center gap-4">

            <div class="w-16 h-16 rounded-full bg-[#7C3AED] flex items-center justify-center text-white text-2xl font-bold">

                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

            </div>

            <div>

                <h2 class="font-semibold text-gray-800">
                    {{ Auth::user()->name }}
                </h2>

                <p class="text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </p>

            </div>

        </div>

        <!-- Name -->
        <div>

            <label class="block text-sm mb-2">
                Full Name
            </label>

            <input
                type="text"
                wire:model="name"
                class="w-full px-4 py-3 border border-[#E5E7EB] rounded-xl focus:outline-none focus:border-[#7C3AED]"
            >

        </div>

        <!-- Email -->
        <div>

            <label class="block text-sm mb-2">
                Email Address
            </label>

            <input
                type="email"
                wire:model="email"
                class="w-full px-4 py-3 border border-[#E5E7EB] rounded-xl focus:outline-none focus:border-[#7C3AED]"
            >

        </div>

        <!-- Password -->
        <div>

            <label class="block text-sm mb-2">
                New Password
            </label>

            <input
                type="password"
                wire:model="password"
                placeholder="Leave blank if unchanged"
                class="w-full px-4 py-3 border border-[#E5E7EB] rounded-xl focus:outline-none focus:border-[#7C3AED]"
            >

        </div>

        <!-- Button -->
        <button
            wire:click="updateProfile"
            class="bg-[#7C3AED] text-white px-5 py-3 rounded-xl">

            Save Changes

        </button>

    </div>

</div>