<div class="space-y-6">

    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                Categories
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Organize your notes with custom categories.
            </p>

        </div>

        {{-- BUTTON --}}
        <button
            wire:click="openModal"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-2xl font-medium transition shadow-sm">

            + New Category

        </button>

    </div>

    {{-- CATEGORY GRID --}}
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

        @forelse ($categories as $category)

            <div
                class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-md transition border border-gray-100">

                {{-- TOP --}}
                <div class="flex items-start justify-between">

                    <div class="flex items-center gap-4">

                        {{-- COLOR --}}
                        <div
                            class="w-14 h-14 rounded-2xl shadow-sm"
                            style="background-color: {{ $category->color }}">
                        </div>

                        <div>

                            <p class="text-sm text-gray-500 mt-1">
                                {{ $category->genre }}
                            </p>

                        </div>

                    </div>

                    {{-- MENU --}}
                    <div class="flex items-center gap-2">

                        <button
                            wire:click="edit({{ $category->id }})"
                            class="text-sm text-indigo-600 hover:underline">

                            Edit

                        </button>

                        <button
                            wire:click="delete({{ $category->id }})"
                            wire:confirm="Delete this category?"
                            class="text-sm text-red-500 hover:underline">

                            Delete

                        </button>

                    </div>

                </div>

                {{-- FOOTER --}}
                <div class="mt-6 flex items-center justify-between">

                    <span
                        class="px-3 py-1 rounded-full text-xs font-medium text-white"
                        style="background-color: {{ $category->color }}">

                        {{ $category->genre }}

                    </span>

                    <span class="text-xs text-gray-400">
                        {{ $category->created_at->diffForHumans() }}
                    </span>

                </div>

            </div>

        @empty

            {{-- EMPTY STATE --}}
            <div class="col-span-full">

                <div class="bg-white rounded-3xl p-12 text-center shadow-sm">

                    <div class="text-5xl mb-4">
                        📁
                    </div>

                    <h2 class="text-2xl font-bold text-gray-800">
                        No Categories Yet
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Create your first category to organize notes better.
                    </p>

                    <button
                        wire:click="openModal"
                        class="mt-6 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-2xl font-medium transition">

                        Create Category

                    </button>

                </div>

            </div>

        @endforelse

    </div>

    {{-- MODAL --}}
    @if ($showModal)

        <div class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50">

            <div class="bg-white w-full max-w-lg rounded-3xl p-7 shadow-xl">

                {{-- TITLE --}}
                <div class="mb-6">

                    <h2 class="text-2xl font-bold text-gray-800">

                        {{ $editingId ? 'Edit Category' : 'Create Category' }}

                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Add a custom category for your notebook.
                    </p>

                </div>  

                {{-- GENRE --}}
                <div class="mb-5">

                    <label class="text-sm font-medium text-gray-700">
                        Genre
                    </label>

                    <input
                        type="text"
                        wire:model="genre"
                        placeholder="Example: Education"
                        class="w-full mt-2 px-4 py-3 rounded-2xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    >

                    @error('genre')

                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>

                    @enderror

                </div>

                {{-- COLOR --}}
                <div class="mb-6">

                    <label class="text-sm font-medium text-gray-700">
                        Category Color
                    </label>

                    <div class="flex items-center gap-4 mt-3">

                        <input
                            type="color"
                            wire:model="color"
                            class="w-16 h-16 border-none rounded-2xl cursor-pointer bg-transparent"
                        >

                        <div>

                            <p class="text-sm font-medium text-gray-700">
                                Selected Color
                            </p>

                            <p class="text-sm text-gray-500">
                                {{ $color }}
                            </p>

                        </div>

                    </div>

                    @error('color')

                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>

                    @enderror

                </div>

                {{-- ACTION --}}
                <div class="flex justify-end gap-3">

                    <button
                        wire:click="closeModal"
                        class="px-5 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 text-gray-700 transition">

                        Cancel

                    </button>

                    <button
                        wire:click="save"
                        class="px-5 py-3 rounded-2xl bg-indigo-600 hover:bg-indigo-700 text-white transition">

                        Save Category

                    </button>

                </div>

            </div>

        </div>

    @endif

</div>