<div>

    {{-- Notebooks header --}}
    <div class="flex items-center justify-between px-1 mb-3">
        <p style="font-size: 9.5px; font-weight: 700; letter-spacing: 0.13em; text-transform: uppercase; color: #C0B4A8;">
            Notebooks
        </p>
        <button
            wire:click="openModal"
            style="width: 26px; height: 26px; border-radius: 8px; border: 1px solid #EAE4DB; background: transparent; display: flex; align-items: center; justify-content: center; color: #6B6B6B; cursor: pointer; transition: background 0.18s, color 0.18s, border-color 0.18s;"
            onmouseover="this.style.background='#F5EEE5'; this.style.color='#C87A45'; this.style.borderColor='rgba(200,122,69,0.3)'"
            onmouseout="this.style.background='transparent'; this.style.color='#6B6B6B'; this.style.borderColor='#EAE4DB'">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
        </button>
    </div>

    {{-- Notebook list --}}
    <div style="display: flex; flex-direction: column; gap: 2px;">

        @foreach($notebooks as $notebook)

            <div style="display: flex; align-items: center; gap: 0; padding: 2px 0; border-radius: 12px; transition: background 0.15s;"
                 onmouseover="this.style.background='#F5EEE5'"
                 onmouseout="this.style.background='transparent'">

                {{-- Notebook button --}}
                <button
                    wire:click="filterCategory({{ $notebook->category_id }})"
                    style="flex: 1; display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 12px; text-align: left; background: transparent; border: none; cursor: pointer; min-width: 0;">

                    {{-- Icon --}}
                    <span style="width: 30px; height: 30px; border-radius: 9px; background: #FFFFFF; border: 1px solid #EAE4DB; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6B6B6B" stroke-width="1.85" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                        </svg>
                    </span>

                    {{-- Name --}}
                    <span style="font-size: 13.5px; font-weight: 500; color: #2B2B2B; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; flex: 1;">
                        {{ $notebook->category->genre }}
                    </span>

                    {{-- Category color dot --}}
                    <span style="width: 7px; height: 7px; border-radius: 50%; flex-shrink: 0; margin-right: 4px; background: {{ $notebook->category->color }};"></span>

                </button>

                {{-- Delete button --}}
                <button
                    wire:click="deleteNotebook({{ $notebook->id }})"
                    style="width: 28px; height: 28px; border-radius: 8px; display: flex; align-items: center; justify-content: center; background: transparent; border: none; cursor: pointer; color: #C0B4A8; flex-shrink: 0; margin-right: 8px; transition: background 0.15s, color 0.15s;"
                    onmouseover="this.style.background='#FEE2E2'; this.style.color='#DC2626'"
                    onmouseout="this.style.background='transparent'; this.style.color='#C0B4A8'">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"/>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    </svg>
                </button>

            </div>

        @endforeach

    </div>

</div>