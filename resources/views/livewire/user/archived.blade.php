<div class="space-y-6">

    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

        @forelse ($notes as $note)

            <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

                {{-- CONTENT --}}
                <p class="text-sm text-gray-500 leading-relaxed mt-4">
                    {{ Str::limit($note->content, 130) }}
                </p>

                {{-- CATEGORY --}}
                <div class="mt-5">

                    <span class="px-3 py-1 rounded-full text-xs bg-indigo-100 text-indigo-700 font-medium">
                        {{ $note->category->genre ?? 'No Category' }}
                    </span>

                </div>

                {{-- ACTIONS --}}
                <div class="flex items-center justify-between mt-6 pt-5 border-t border-gray-100">

                    <button
                        wire:click="restore({{ $note->id }})"
                        class="text-sm text-indigo-600 hover:underline">

                        Restore

                    </button>

                    <button
                        wire:click="delete({{ $note->id }})"
                        wire:confirm="Delete this archived note?"
                        class="text-sm text-red-500 hover:underline">

                        Delete

                    </button>

                </div>

            </div>

        @empty

            {{-- EMPTY STATE --}}
            <div class="col-span-full">

                <div class="bg-white rounded-3xl p-12 text-center shadow-sm border border-gray-100">

                    <div class="text-6xl mb-5">
                        🗂️
                    </div>

                    <h2 class="text-2xl font-bold text-gray-800">
                        No Archived Notes
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Archived notes will appear here.
                    </p>

                </div>

            </div>

        @endforelse

    </div>

</div>