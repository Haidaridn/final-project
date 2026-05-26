<div class="min-h-screen bg-[#F5F3FF] px-4 py-8 sm:px-6 lg:px-8">

    {{-- PAGE HEADER --}}
    <div class="mb-8">
        <div class="flex items-center gap-3 mb-1">
            <div class="w-2 h-2 rounded-full bg-[#7C3AED]"></div>
            <span class="text-xs font-semibold tracking-widest uppercase text-[#7C3AED]">Archive</span>
        </div>
        <h1 class="text-2xl font-bold text-[#1F2937] tracking-tight">Archived Notes</h1>
        <p class="text-sm text-gray-400 mt-1">Notes you've archived are stored here. Restore or permanently delete them.</p>
    </div>

    {{-- NOTES GRID --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

        @forelse ($notes as $note)

            <div class="group relative bg-white rounded-2xl border border-[#E5E7EB] shadow-[0_2px_12px_rgba(124,58,237,0.06)] hover:shadow-[0_8px_30px_rgba(124,58,237,0.13)] hover:-translate-y-1 transition-all duration-300 ease-out overflow-hidden flex flex-col">

                {{-- TOP ACCENT LINE --}}
                <div class="h-[3px] w-full bg-gradient-to-r from-[#7C3AED] via-[#A78BFA] to-[#C4B5FD] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                {{-- CARD BODY --}}
                <div class="p-6 flex flex-col flex-1">

                    {{-- CONTENT --}}
                    <p class="text-sm text-gray-500 leading-relaxed flex-1">
                        {{ Str::limit($note->content, 130) }}
                    </p>

                    {{-- CATEGORY BADGE --}}
                    <div class="mt-5">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#F5F3FF] text-[#7C3AED] border border-[#DDD6FE] tracking-wide">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#A78BFA] inline-block"></span>
                            {{ $note->category->genre ?? 'No Category' }}
                        </span>
                    </div>

                    {{-- ACTIONS --}}
                    <div class="flex items-center justify-between mt-5 pt-5 border-t border-[#F3F4F6]">

                        <button
                            wire:click="restore({{ $note->id }})"
                            class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl text-xs font-semibold text-[#7C3AED] bg-[#F5F3FF] hover:bg-[#EDE9FE] border border-[#DDD6FE] hover:border-[#A78BFA] transition-all duration-200 hover:shadow-sm active:scale-95">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            Restore
                        </button>

                        <button
                            wire:click="delete({{ $note->id }})"
                            wire:confirm="Delete this archived note?"
                            class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl text-xs font-semibold text-red-500 bg-red-50 hover:bg-red-100 border border-red-100 hover:border-red-200 transition-all duration-200 hover:shadow-sm active:scale-95">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Delete
                        </button>

                    </div>

                </div>

            </div>

        @empty

            {{-- EMPTY STATE --}}
            <div class="col-span-full">

                <div class="flex flex-col items-center justify-center py-20 px-6">

                    {{-- ICON CONTAINER --}}
                    <div class="relative mb-8">
                        <div class="w-24 h-24 rounded-3xl bg-gradient-to-br from-[#EDE9FE] to-[#DDD6FE] flex items-center justify-center shadow-[0_4px_24px_rgba(124,58,237,0.15)]">
                            <svg class="w-11 h-11 text-[#7C3AED]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                            </svg>
                        </div>
                        {{-- Decorative ring --}}
                        <div class="absolute -inset-2 rounded-[2rem] border border-[#DDD6FE] opacity-50"></div>
                        <div class="absolute -inset-4 rounded-[2.5rem] border border-[#EDE9FE] opacity-30"></div>
                    </div>

                    {{-- TEXT --}}
                    <h2 class="text-xl font-bold text-[#1F2937] tracking-tight mb-2">
                        No Archived Notes
                    </h2>
                    <p class="text-sm text-gray-400 text-center max-w-xs leading-relaxed">
                        Notes you archive will appear here. You can restore or permanently delete them anytime.
                    </p>

                </div>

            </div>

        @endforelse

    </div>

</div>