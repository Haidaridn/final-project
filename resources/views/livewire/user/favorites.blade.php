<div class="space-y-8">

    <!-- HEADER -->
    <div class="flex items-center justify-between">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                Favorite Notes
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Your saved favorite notes.
            </p>

        </div>

        <!-- SEARCH -->
        <input
            type="text"
            wire:model.live="search"
            placeholder="Search favorites..."
            class="w-72 px-4 py-3 rounded-2xl border border-gray-200 focus:outline-none focus:border-pink-400"
        >

    </div>

    <!-- GRID -->
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-5">

        @forelse ($notes as $note)

            <div class="bg-white border border-gray-100 rounded-3xl p-6 shadow-sm hover:shadow-md transition">

                <!-- TOP -->
                <div class="flex items-start justify-between">

                    <div>

                        <h2 class="text-lg font-semibold text-gray-800">
                            {{ $note->title }}
                        </h2>

                        <p class="text-xs text-gray-400 mt-1">
                            {{ $note->created_at->diffForHumans() }}
                        </p>

                    </div>

                    <div class="text-pink-500 text-xl">
                        ♥
                    </div>

                </div>

                <!-- CONTENT -->
                <p class="text-sm text-gray-600 mt-4 line-clamp-4">
                    {{ Str::limit($note->content, 140) }}
                </p>

                <!-- CATEGORY -->
                @if($note->category)

                    <div class="mt-5">

                        <span
                            class="px-3 py-1 rounded-xl text-xs text-white font-medium"
                            style="background-color: {{ $note->category->color }}">

                            {{ $note->category->genre }}

                        </span>

                    </div>

                @endif

                <!-- ACTION -->
                <div class="mt-5 flex justify-end">

                    <button
                        wire:click="removeFavorite({{ $note->id }})"
                        class="px-4 py-2 rounded-xl bg-pink-100 text-pink-600 text-sm hover:bg-pink-200 transition">

                        Remove Favorite

                    </button>

                </div>

            </div>

        @empty

            <div class="col-span-full">

                <div class="bg-white border border-dashed border-pink-200 rounded-3xl p-14 text-center">

                    <div class="text-5xl mb-4">
                        💖
                    </div>

                    <h2 class="text-2xl font-bold text-gray-700">
                        No Favorite Notes
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Add notes to favorites to see them here.
                    </p>

                </div>

            </div>

        @endforelse

    </div>

</div>