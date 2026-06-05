@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto">

    <!-- Back Button -->
    <div class="mb-5">
        <a href="{{ url('/notes') }}"
           class="inline-flex items-center gap-2 text-sm font-medium text-[#6B6B6B] hover:text-[#C87A45] transition-colors duration-200">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 19l-7-7 7-7" />
            </svg>

            Back to Notes
        </a>
    </div>

    <div class="bg-white border border-[#EAE4DB] rounded-3xl p-10">

    <h1 class="text-4xl font-bold text-[#2B2B2B] mb-6">
        {!! $note->title !!}
    </h1>

        <div class="border-t border-[#EAE4DB] pt-6">
            <div class="text-[#6B6B6B] leading-8 note-content-render">
                {!! $note->content !!}
            </div>
        </div>

    </div>

</div>

<style>
.note-content-render {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    line-height: 1.8;
    color: #6B6B6B;
    word-break: break-word;
}
.note-content-render strong,
.note-content-render b {
    font-weight: 700;
    color: #2B2B2B;
}
.note-content-render em,
.note-content-render i {
    font-style: italic;
}
.note-content-render u {
    text-decoration: underline;
}
/* Pastikan warna inline dari span/font tetap dirender */
.note-content-render span[style],
.note-content-render font[color] {
    /* Biarkan browser render inline style dari editor */
}
/* Jaga jarak antar paragraf jika ada tag <p> dari editor */
.note-content-render p {
    margin-bottom: 0.75em;
}
.note-content-render p:last-child {
    margin-bottom: 0;
}
</style>

@endsection