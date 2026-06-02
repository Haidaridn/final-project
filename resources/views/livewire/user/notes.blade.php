<div class="space-y-8" style="font-family: 'DM Sans', sans-serif;">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap');

            .an-font-display { font-family: 'Sora', sans-serif; }

            /* ── Gradient text ── */
            .an-gradient-text {
                background: linear-gradient(135deg, #6366f1 0%, #4f46e5 45%, #7c3aed 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            /* ── New Note button ── */
            .an-btn-primary {
                background: linear-gradient(135deg, #6366f1 0%, #4f46e5 50%, #7c3aed 100%);
                box-shadow: 0 4px 20px rgba(99, 102, 241, 0.35), 0 1px 4px rgba(99, 102, 241, 0.2);
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                position: relative;
                overflow: hidden;
                color: #fff;
            }

            .an-btn-primary::before {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(135deg, #818cf8 0%, #6366f1 50%, #8b5cf6 100%);
                opacity: 0;
                transition: opacity 0.25s ease;
            }

            .an-btn-primary:hover {
                transform: translateY(-2px) scale(1.02);
                box-shadow: 0 8px 28px rgba(99, 102, 241, 0.45);
            }

            .an-btn-primary:hover::before { opacity: 1; }
            .an-btn-primary span { position: relative; z-index: 1; }

            /* ── Search input ── */
            .an-search {
                background: rgba(255, 255, 255, 0.9);
                border: 1.5px solid rgba(99, 102, 241, 0.12);
                transition: all 0.25s ease;
                font-family: 'DM Sans', sans-serif;
                color: #0f172a;
            }

            .an-search:focus {
                outline: none;
                border-color: rgba(99, 102, 241, 0.45);
                box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.08), 0 4px 16px rgba(99, 102, 241, 0.1);
                background: #fff;
            }

            .an-search::placeholder { color: #94a3b8; }

            /* ── Filter pill (idle) ── */
            .an-filter-idle {
                background: rgba(255, 255, 255, 0.85);
                border: 1.5px solid rgba(99, 102, 241, 0.1);
                color: #64748b;
                transition: all 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-family: 'DM Sans', sans-serif;
            }

            .an-filter-idle:hover {
                background: rgba(99, 102, 241, 0.06);
                border-color: rgba(99, 102, 241, 0.25);
                color: #4f46e5;
                transform: translateY(-1px);
            }

            /* ── Filter pill (active — pinned) ── */
            .an-filter-active {
                background: linear-gradient(135deg, #f59e0b, #d97706);
                box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);
                color: #fff;
                border: 1.5px solid transparent;
                transition: all 0.25s ease;
                font-family: 'DM Sans', sans-serif;
            }

            .an-filter-active:hover {
                box-shadow: 0 6px 20px rgba(245, 158, 11, 0.45);
                transform: translateY(-1px);
            }

            /* ── Note card ── */
            .an-note-card {
                background: rgba(255, 255, 255, 0.92);
                border: 1px solid rgba(99, 102, 241, 0.07);
                transition: all 0.32s cubic-bezier(0.34, 1.56, 0.64, 1);
                position: relative;
                overflow: hidden;
            }

            .an-note-card::after {
                content: '';
                position: absolute;
                top: 0; left: 0; right: 0;
                height: 2px;
                background: linear-gradient(90deg, #6366f1, #7c3aed);
                opacity: 0;
                transition: opacity 0.25s ease;
                border-radius: 999px 999px 0 0;
            }

            .an-note-card:hover {
                transform: translateY(-5px) scale(1.01);
                box-shadow: 0 20px 48px rgba(99, 102, 241, 0.13), 0 4px 16px rgba(0,0,0,0.06);
                border-color: rgba(99, 102, 241, 0.18);
            }

            .an-note-card:hover::after { opacity: 1; }

            /* ── Pin button ── */
            .an-pin-btn {
                width: 34px; height: 34px;
                border-radius: 10px;
                display: flex; align-items: center; justify-content: center;
                background: rgba(99, 102, 241, 0.05);
                border: 1px solid rgba(99, 102, 241, 0.08);
                font-size: 15px;
                line-height: 1;
                transition: all 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
                flex-shrink: 0;
                cursor: pointer;
            }

            .an-pin-btn:hover {
                background: rgba(99, 102, 241, 0.1);
                border-color: rgba(99, 102, 241, 0.2);
                transform: scale(1.12) rotate(-8deg);
            }

            /* ── Action buttons ── */
            .an-action-archive {
                font-size: 0.75rem;
                font-weight: 600;
                color: #d97706;
                padding: 4px 10px;
                border-radius: 8px;
                background: rgba(245, 158, 11, 0.07);
                border: 1px solid rgba(245, 158, 11, 0.15);
                transition: all 0.2s ease;
                font-family: 'DM Sans', sans-serif;
            }

            .an-action-archive:hover {
                background: rgba(245, 158, 11, 0.14);
                border-color: rgba(245, 158, 11, 0.3);
                transform: translateY(-1px);
            }

            .an-action-edit {
                font-size: 0.75rem;
                font-weight: 600;
                color: #4f46e5;
                padding: 4px 10px;
                border-radius: 8px;
                background: rgba(99, 102, 241, 0.07);
                border: 1px solid rgba(99, 102, 241, 0.15);
                transition: all 0.2s ease;
                font-family: 'DM Sans', sans-serif;
            }

            .an-action-edit:hover {
                background: rgba(99, 102, 241, 0.14);
                border-color: rgba(99, 102, 241, 0.3);
                transform: translateY(-1px);
            }

            .an-action-delete {
                font-size: 0.75rem;
                font-weight: 600;
                color: #ef4444;
                padding: 4px 10px;
                border-radius: 8px;
                background: rgba(239, 68, 68, 0.06);
                border: 1px solid rgba(239, 68, 68, 0.12);
                transition: all 0.2s ease;
                font-family: 'DM Sans', sans-serif;
            }

            .an-action-delete:hover {
                background: rgba(239, 68, 68, 0.13);
                border-color: rgba(239, 68, 68, 0.28);
                transform: translateY(-1px);
            }

            /* ── Empty state ── */
            .an-empty {
                background: rgba(255,255,255,0.7);
                border: 1.5px dashed rgba(99,102,241,0.18);
            }

            /* ── Modal backdrop ── */
            .an-backdrop {
                background: rgba(15, 23, 42, 0.55);
                backdrop-filter: blur(6px);
                -webkit-backdrop-filter: blur(6px);
            }

            /* ── Modal card ── */
            .an-modal {
                background: #fff;
                box-shadow: 0 32px 80px rgba(99,102,241,0.18), 0 8px 32px rgba(0,0,0,0.1);
                border: 1px solid rgba(99, 102, 241, 0.1);
                animation: an-modalIn 0.35s cubic-bezier(0.34, 1.56, 0.64, 1) both;
            }

            @keyframes an-modalIn {
                from { opacity: 0; transform: scale(0.94) translateY(16px); }
                to   { opacity: 1; transform: scale(1) translateY(0); }
            }

            /* ── Modal inputs ── */
            .an-input {
                background: #f8fafc;
                border: 1.5px solid rgba(99, 102, 241, 0.12);
                transition: all 0.22s ease;
                font-family: 'DM Sans', sans-serif;
                color: #0f172a;
                width: 100%;
            }

            .an-input:focus {
                outline: none;
                border-color: rgba(99, 102, 241, 0.45);
                background: #fff;
                box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.08);
            }

            /* ── Modal cancel button ── */
            .an-btn-cancel {
                background: #f1f5f9;
                color: #64748b;
                border: 1.5px solid rgba(99,102,241,0.08);
                transition: all 0.22s ease;
                font-family: 'DM Sans', sans-serif;
            }

            .an-btn-cancel:hover {
                background: #e2e8f0;
                color: #334155;
            }

            /* ── Section pill label ── */
            .an-section-pill {
                background: linear-gradient(135deg, rgba(99, 102, 241, 0.08), rgba(124, 58, 237, 0.06));
                border: 1px solid rgba(99, 102, 241, 0.16);
            }

            /* ── Fade up ── */
            @keyframes an-fadeUp {
                from { opacity: 0; transform: translateY(18px); }
                to   { opacity: 1; transform: translateY(0); }
            }

            .an-fade-1 { animation: an-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.05s; }
            .an-fade-2 { animation: an-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.15s; }
            .an-fade-3 { animation: an-fadeUp 0.5s cubic-bezier(0.22,1,0.36,1) both 0.25s; }
        </style>

        {{-- ══════════════════════════════════════
            HEADER
        ══════════════════════════════════════ --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 an-fade-1">

            <div>
                <div class="an-section-pill inline-flex items-center gap-2 px-4 py-1.5 rounded-full mb-3">
                    <span class="text-xs">📝</span>
                    <span class="an-font-display text-xs font-600 an-gradient-text tracking-wide uppercase">Notes</span>
                </div>
                <h1 class="an-font-display text-2xl lg:text-3xl font-700 text-slate-900 leading-tight">
                    All Notes
                </h1>
                <p class="text-sm text-slate-400 mt-1 font-light">
                    Manage and organize all your notes in one place.
                </p>
            </div>

            {{-- SEARCH + BUTTON --}}
            <div class="flex items-center gap-3">

                <div class="relative">
                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                    </svg>
                    <input
                        type="text"
                        wire:model.live="search"
                        placeholder="Search notes..."
                        class="an-search w-64 pl-10 pr-4 py-3 rounded-2xl text-sm"
                    >
                </div>

                <button
                    wire:click="openModal"
                    class="an-btn-primary px-5 py-3 rounded-2xl text-sm font-semibold inline-flex items-center gap-2">
                    <span class="relative z-10 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                        </svg>
                        <span>New Note</span>
                    </span>
                </button>

            </div>

        </div>

        {{-- ══════════════════════════════════════
            FILTER
        ══════════════════════════════════════ --}}
        <div class="flex items-center gap-3 an-fade-2">

            <button
                wire:click="filterPinned"
                class="px-4 py-2.5 rounded-2xl text-sm font-semibold flex items-center gap-2 transition
                {{ $showPinnedOnly ? 'an-filter-active' : 'an-filter-idle' }}">

                <span>📌</span>
                <span>Pinned</span>

            </button>

            <button
                wire:click="resetFilter"
                class="an-filter-idle px-4 py-2.5 rounded-2xl text-sm font-semibold flex items-center gap-2">

                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                </svg>
                <span>Reset</span>

            </button>

        </div>

        {{-- ══════════════════════════════════════
            NOTES GRID
        ══════════════════════════════════════ --}}
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-5 an-fade-3">
            @forelse ($notes as $note)

                <div class="an-note-card rounded-3xl p-6 shadow-sm">

                    {{-- TOP --}}
                    <div class="flex items-start justify-between gap-3">

                        <div class="min-w-0 flex-1">

                            <div class="flex items-center gap-2 mb-1">

                                <div
                                    class="w-2 h-2 rounded-full flex-shrink-0"
                                    style="background: {{ $note->category->color ?? '#6366f1' }};
                                    box-shadow: 0 0 0 3px {{ $note->category->color ?? '#6366f1' }}22;">
                                </div>

                                <h2 class="an-font-display font-600 text-base text-slate-900 leading-snug truncate">
                                    {{ $note->title }}
                                </h2>

                            </div>

                            <p class="text-xs text-slate-400 flex items-center gap-1 ml-4">

                                <svg
                                    class="w-3 h-3"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2">

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>

                                {{ $note->created_at->diffForHumans() }}

                            </p>

                        </div>

                        {{-- RIGHT ACTION --}}
                        <div class="flex items-center gap-2 flex-shrink-0">

                            {{-- FAVORITE --}}
                            <button
                                wire:click="toggleFavorite({{ $note->id }})"
                                class="an-pin-btn">

                                @if($note->is_favorite)

                                    ⭐

                                @else

                                    ☆

                                @endif

                            </button>

                            {{-- PIN --}}
                            <button
                                wire:click="togglePin({{ $note->id }})"
                                class="an-pin-btn">

                                {{ $note->is_pinned ? '📌' : '📍' }}

                            </button>

                        </div>

                    </div>

                    {{-- CONTENT --}}
                    <p class="text-sm text-slate-500 mt-4 leading-relaxed font-light line-clamp-3">
                        {{ Str::limit($note->content, 120) }}
                    </p>

                    {{-- FOOTER --}}
                    <div class="flex items-center justify-between mt-5 pt-4" style="border-top: 1px solid rgba(99,102,241,0.06);">

                        <span
                            class="px-3 py-1.5 rounded-xl text-xs font-semibold text-white shadow-sm"
                            style="background: {{ $note->category->color ?? '#000000' }}; box-shadow: 0 4px 10px {{ $note->category->color ?? '#000000' }}44;">

                            {{ $note->category->genre ?? 'No Category' }}

                        </span>

                        <div class="flex items-center gap-1.5">

                            <button
                                wire:click="archive({{ $note->id }})"
                                class="an-action-archive">

                                Archive

                            </button>

                            <button
                                wire:click="edit({{ $note->id }})"
                                class="an-action-edit">

                                Edit

                            </button>

                            <button
                                wire:click="delete({{ $note->id }})"
                                wire:confirm="Delete this note?"
                                class="an-action-delete">

                                Delete

                            </button>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-span-full">

                    <div class="an-empty rounded-3xl p-14 flex flex-col items-center justify-center text-center">

                        <div class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mb-5">
                            <svg class="w-8 h-8 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                            </svg>
                        </div>

                        <h2 class="an-font-display text-lg font-600 text-slate-600">
                            No Notes Found
                        </h2>

                        <p class="text-slate-400 text-sm mt-1.5 font-light">
                            Start by creating your first note.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

        {{-- ══════════════════════════════════════
            MODAL
        ══════════════════════════════════════ --}}
        @if ($showModal)

            <div class="an-backdrop fixed inset-0 flex items-center justify-center z-50 px-4">

                <div class="an-modal w-full max-w-lg rounded-3xl p-7">

                    {{-- Modal header --}}
                    <div class="flex items-center justify-between mb-7">

                        <div>
                            <div class="an-section-pill inline-flex items-center gap-2 px-3 py-1 rounded-full mb-2">
                                <span class="text-xs">{{ $editingId ? '✏️' : '✨' }}</span>
                                <span class="an-font-display text-xs font-600 an-gradient-text tracking-wide uppercase">
                                    {{ $editingId ? 'Edit' : 'Create' }}
                                </span>
                            </div>
                            <h2 class="an-font-display text-xl font-700 text-slate-900">
                                {{ $editingId ? 'Edit Note' : 'Create New Note' }}
                            </h2>
                        </div>

                        {{-- Close X --}}
                        <button
                            wire:click="closeModal"
                            class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-500 transition-all hover:scale-105">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                    </div>

                    <div class="space-y-4">

                        {{-- TITLE --}}
                        <div>

                            <label class="block text-xs font-600 text-slate-600 uppercase tracking-wider mb-2">
                                Title
                            </label>

                            <input
                                type="text"
                                wire:model="title"
                                placeholder="Note title..."
                                class="an-input px-4 py-3 rounded-2xl text-sm"
                            >

                        </div>

                        {{-- CONTENT --}}
                        <div>

                            <label class="block text-xs font-600 text-slate-600 uppercase tracking-wider mb-2">
                                Content
                            </label>

                            <textarea
                                wire:model="content"
                                rows="5"
                                placeholder="Write your note here..."
                                class="an-input px-4 py-3 rounded-2xl text-sm resize-none leading-relaxed"></textarea>

                        </div>

                        {{-- CATEGORY --}}
                        <div>

                            <label class="block text-xs font-600 text-slate-600 uppercase tracking-wider mb-2">
                                Category
                            </label>

                            <select
                                wire:model="category_id"
                                class="an-input px-4 py-3 rounded-2xl text-sm">

                                <option value="">
                                    Select Category
                                </option>

                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}">
                                        {{ $category->genre }}
                                    </option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                    {{-- ACTION --}}
                    <div class="flex justify-end gap-3 mt-7 pt-5" style="border-top: 1px solid rgba(99,102,241,0.08);">

                        <button
                            wire:click="closeModal"
                            class="an-btn-cancel px-5 py-3 rounded-2xl text-sm font-semibold">

                            Cancel

                        </button>

                        <button
                            wire:click="save"
                            class="an-btn-primary px-6 py-3 rounded-2xl text-sm font-semibold">

                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Save Note
                            </span>

                        </button>

                    </div>

                </div>

            </div>

        @endif
</div>
