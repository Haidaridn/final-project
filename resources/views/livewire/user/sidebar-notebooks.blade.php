<div class="mt-4">

    <div class="flex items-center justify-between px-4 mb-2">

        <p class="text-[10px] font-semibold tracking-[0.12em] uppercase text-[#C4C4CE]">
            Notebooks
        </p>

        <button
            wire:click="openModal"
            class="text-violet-500 hover:text-violet-700 text-sm font-bold">
            +
        </button>

    </div>

    @foreach($notebooks as $notebook)

        <div class="flex items-center justify-between px-3 py-[9px]">

            <button
                wire:click="filterCategory({{ $notebook->category_id }})"
                class="flex items-center gap-3 flex-1 text-left">

                <span
                    class="w-2.5 h-2.5 rounded-full"
                    style="background: {{ $notebook->category->color }}">
                </span>

                {{ $notebook->category->genre }}

            </button>

            <button
                wire:click="deleteNotebook({{ $notebook->id }})"
                class="text-red-400 hover:text-red-600">

                ✕

            </button>

        </div>

    @endforeach

</div>