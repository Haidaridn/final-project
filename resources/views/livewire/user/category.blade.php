<div class="min-h-screen p-6" style="background-color: #F5F3FF;">

    <!-- BUTTON -->
    <div class="flex justify-end mb-6">
        <button 
            wire:click="$set('showModal', true)"
            class="px-4 py-2 rounded-lg text-white font-semibold"
            style="background-color:#7C3AED;"
        >
            + Add New Category
        </button>
    </div>

    <!-- CARD LIST -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($categories as $cat)
            <div class="p-4 rounded-xl shadow" style="background-color:#FFFFFF;">
                <div class="flex items-center justify-between">
                    <h2 class="font-semibold text-gray-800">
                        {{ $cat->name }}
                    </h2>
                    <span 
                        class="w-4 h-4 rounded-full"
                        style="background-color: {{ $cat->color }}"
                    ></span>
                </div>
            </div>
        @endforeach
    </div>

    <!-- MODAL -->
    @if($showModal)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40">

        <div class="bg-white p-6 rounded-2xl w-full max-w-md">

            <h2 class="text-xl font-bold mb-4">Tambah Category</h2>

            <form wire:submit.prevent="store" class="space-y-4">

                <!-- NAME -->
                <input 
                    type="text"
                    wire:model="name"
                    placeholder="Nama category"
                    class="w-full px-3 py-2 border rounded-lg"
                >

                <!-- COLOR -->
                <input 
                    type="color"
                    wire:model="color"
                    class="w-full h-10 rounded-lg"
                >

                <!-- BUTTON -->
                <div class="flex justify-end gap-2">
                    <button 
                        type="button"
                        wire:click="$set('showModal', false)"
                        class="px-4 py-2 rounded bg-gray-300"
                    >
                        Batal
                    </button>

                    <button 
                        type="submit"
                        class="px-4 py-2 rounded text-white"
                        style="background-color:#7C3AED;"
                    >
                        Simpan
                    </button>
                </div>

            </form>

        </div>

    </div>
    @endif

</div>