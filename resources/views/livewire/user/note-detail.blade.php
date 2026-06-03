<div class="max-w-5xl mx-auto p-8">

<div class="bg-red-500 text-white p-10">
    TEST NOTE DETAIL
</div>

    <form wire:submit.prevent="saveAndBack">

        <button type="submit" class="text-violet-600 mb-6">
            ← Back
        </button>

        <div class="bg-white rounded-3xl shadow p-8">

<input
    type="text"
    value="{{ $title }}"
    class="w-full text-4xl font-bold mb-6"
/>

<textarea
    class="w-full min-h-[600px]"
>{{ $content }}</textarea>

        </div>

    </form>

</div>