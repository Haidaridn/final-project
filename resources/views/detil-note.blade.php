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
            {{ $note->title }}
        </h1>

        <div class="border-t border-[#EAE4DB] pt-6">
            <p class="text-[#6B6B6B] leading-8 whitespace-pre-line">
                {{ $note->content }}
            </p>
        </div>

    </div>

</div>

@endsection