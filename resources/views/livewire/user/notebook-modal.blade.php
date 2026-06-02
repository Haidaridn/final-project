<div>

    @if($showModal)

        <div class="fixed inset-0 z-[9999] bg-black/40 flex items-center justify-center">

            <div class="bg-white p-6 rounded-2xl w-full max-w-md">

                <h2 class="font-bold text-lg mb-4">
                    Add Notebook
                </h2>

                <select
                    wire:model.live="selectedCategory"
                    class="w-full border rounded-xl p-3">

                    <option value="">
                        Choose category
                    </option>

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}">
                            {{ $category->genre }}
                        </option>

                    @endforeach

                </select>

                @error('selectedCategory')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex justify-end gap-2 mt-4">

                    <button
                        type="button"
                        wire:click="closeModal"
                        class="px-4 py-2 rounded-xl bg-gray-100">
                        Cancel
                    </button>

                    <button
                        type="button"
                        wire:click="save"
                        class="bg-indigo-600 text-white px-4 py-2 rounded-xl">
                        Add
                    </button>

                </div>

            </div>

        </div>

    @endif

</div>