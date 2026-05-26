<div class="space-y-6">

    <!-- Header -->
    <div>

        <h1 class="text-2xl font-bold text-gray-800">
            Trash Notes
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Deleted notes can be restored or removed permanently.
        </p>

    </div>

    <!-- Notes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

        @forelse($notes as $note)

            <div class="bg-white border border-[#E5E7EB] rounded-2xl p-5">

                <!-- Title -->
                <h2 class="font-semibold text-lg text-gray-800">
                    {{ $note->title }}
                </h2>

                <!-- Category -->
                @if($note->category)

                    <p class="text-xs text-[#7C3AED] mt-1">
                        {{ $note->category->genre }}
                    </p>

                @endif

                <!-- Content -->
                <p class="text-gray-600 text-sm mt-4 line-clamp-4">
                    {{ $note->content }}
                </p>

                <!-- Footer -->
                <div class="flex items-center gap-2 mt-5">

                    <!-- Restore -->
                    <button
                        wire:click="restore({{ $note->id }})"
                        class="px-3 py-2 rounded-lg bg-green-100 text-green-600 text-sm">

                        Restore

                    </button>

                    <!-- Delete Permanent -->
                    <button
                        wire:click="forceDelete({{ $note->id }})"
                        class="px-3 py-2 rounded-lg bg-red-100 text-red-500 text-sm">

                        Delete Forever

                    </button>

                </div>

            </div>

        @empty

            <div class="col-span-full bg-white border border-[#E5E7EB] rounded-2xl p-10 text-center">

                <h2 class="text-lg font-semibold text-gray-700">
                    Trash is Empty
                </h2>

                <p class="text-gray-500 text-sm mt-2">
                    Deleted notes will appear here.
                </p>

            </div>

        @endforelse

    </div>

</div>