<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                All Notes
            </h1>

            <p class="text-gray-500 text-sm">
                Manage your notes easily
            </p>
        </div>

        <button
            wire:click="openModal"
            class="bg-[#7C3AED] text-white px-5 py-3 rounded-xl">
            + New Note
        </button>

    </div>

    <!-- Filter -->
    <div class="bg-white border border-[#E5E7EB] rounded-2xl p-4 flex flex-col md:flex-row gap-3">

        <!-- Search -->
        <input
            type="text"
            wire:model.live="search"
            placeholder="Search title or content..."
            class="flex-1 px-4 py-3 border border-[#E5E7EB] rounded-xl focus:outline-none focus:border-[#7C3AED]"
        >

        <!-- Filter -->
        @if($showPinnedOnly)

            <button
                wire:click="resetFilter"
                class="px-4 py-3 rounded-xl bg-red-100 text-red-500">
                Reset Filter
            </button>

        @else

            <button
                wire:click="filterPinned"
                class="px-4 py-3 rounded-xl bg-[#EDE9FE] text-[#7C3AED]">
                Pinned Only
            </button>

        @endif

    </div>

    <!-- Notes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

        @forelse($notes as $note)

            <div class="bg-white border border-[#E5E7EB] rounded-2xl p-5">

                <!-- Top -->
                <div class="flex items-start justify-between gap-3">

                    <div>
                        <h2 class="font-semibold text-lg text-gray-800">
                            {{ $note->title }}
                        </h2>

                        @if($note->category)
                            <p class="text-xs text-[#7C3AED] mt-1">
                                {{ $note->category->name }}
                            </p>
                        @endif
                    </div>

                    <!-- Pin -->
                    <button
                        wire:click="togglePin({{ $note->id }})"
                        class="text-xl">

                        @if($note->is_pinned)
                            📌
                        @else
                            📍
                        @endif

                    </button>

                </div>

                <!-- Content -->
                <p class="text-gray-600 text-sm mt-4 line-clamp-4">
                    {{ $note->content }}
                </p>

                <!-- Actions -->
                <div class="flex items-center gap-2 mt-5">

                    <button
                        wire:click="edit({{ $note->id }})"
                        class="px-3 py-2 rounded-lg bg-blue-100 text-blue-500 text-sm">
                        Edit
                    </button>

                    <button
                        wire:click="archive({{ $note->id }})"
                        class="px-3 py-2 rounded-lg bg-yellow-100 text-yellow-600 text-sm">
                        Archive
                    </button>

                    <button
                        wire:click="delete({{ $note->id }})"
                        class="px-3 py-2 rounded-lg bg-red-100 text-red-500 text-sm">
                        Delete
                    </button>

                </div>

            </div>

        @empty

            <div class="col-span-full bg-white border border-[#E5E7EB] rounded-2xl p-10 text-center">

                <h2 class="text-lg font-semibold text-gray-700">
                    No Notes Found
                </h2>

                <p class="text-gray-500 text-sm mt-2">
                    Start by creating your first note.
                </p>

            </div>

        @endforelse

    </div>

    <!-- Modal -->
    @if($showModal)

        <div class="fixed inset-0 bg-black/40 flex items-center justify-center p-4 z-50">

            <div class="bg-white w-full max-w-md rounded-2xl p-6">

                <div class="flex items-center justify-between mb-5">

                    <h2 class="text-xl font-bold text-gray-800">

                        @if($editingId)
                            Edit Note
                        @else
                            New Note
                        @endif

                    </h2>

                    <button
                        wire:click="closeModal"
                        class="text-gray-500 text-xl">
                        ✕
                    </button>

                </div>

                <!-- Form -->
                <div class="space-y-4">

                    <!-- Title -->
                    <div>
                        <label class="block text-sm mb-2">
                            Title
                        </label>

                        <input
                            type="text"
                            wire:model="title"
                            class="w-full px-4 py-3 border border-[#E5E7EB] rounded-xl focus:outline-none focus:border-[#7C3AED]"
                        >

                        @error('title')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <label class="block text-sm mb-2">
                            Content
                        </label>

                        <textarea
                            wire:model="content"
                            rows="5"
                            class="w-full px-4 py-3 border border-[#E5E7EB] rounded-xl focus:outline-none focus:border-[#7C3AED]"></textarea>

                        @error('content')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-sm mb-2">
                            Category
                        </label>

                        <select
                            wire:model="category_id"
                            class="w-full px-4 py-3 border border-[#E5E7EB] rounded-xl focus:outline-none focus:border-[#7C3AED]">

                            <option value="">
                                Select Category
                            </option>

                            @foreach($categories as $category)

                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>

                            @endforeach

                        </select>
                    </div>

                    <!-- Button -->
                    <button
                        wire:click="save"
                        class="w-full bg-[#7C3AED] text-white py-3 rounded-xl">

                        @if($editingId)
                            Update Note
                        @else
                            Save Note
                        @endif

                    </button>

                </div>

            </div>

        </div>

    @endif

</div>