<div>

    @if($showModal)

        {{-- Overlay --}}
        <div class="fixed inset-0 z-[9999] flex items-center justify-center"
             style="background: rgba(0,0,0,0.35); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);">

            {{-- Modal card --}}
            <div style="background: #FFFFFF; border: 1px solid #EAE4DB; border-radius: 24px; box-shadow: 0 24px 60px rgba(0,0,0,0.13), 0 4px 16px rgba(0,0,0,0.06); width: 100%; max-width: 420px; margin: 0 20px; padding: 32px 32px 28px; position: relative;">

                {{-- Header --}}
                <div style="margin-bottom: 24px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                        <div style="width: 38px; height: 38px; border-radius: 11px; background: #F5EEE5; border: 1px solid rgba(200,122,69,0.2); display: flex; align-items: center; justify-content: center;">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 style="font-family: 'Lora', serif; font-size: 19px; font-weight: 700; color: #2B2B2B; line-height: 1.2; letter-spacing: -0.01em;">
                                Add Notebook
                            </h2>
                            <p style="font-size: 12.5px; color: #6B6B6B; margin-top: 2px;">
                                Choose a category for your new notebook.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Select --}}
                <div style="margin-bottom: 6px;">
                    <label style="display: block; font-size: 12px; font-weight: 600; color: #2B2B2B; letter-spacing: 0.02em; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.06em;">
                        Category
                    </label>
                    <div style="position: relative;">
                        <select
                            wire:model.live="selectedCategory"
                            style="width: 100%; height: 50px; padding: 0 40px 0 14px; border: 1px solid #EAE4DB; border-radius: 13px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #2B2B2B; background: #FDFCFB; outline: none; appearance: none; -webkit-appearance: none; cursor: pointer; transition: border-color 0.2s, box-shadow 0.2s;"
                            onfocus="this.style.borderColor='#C87A45'; this.style.boxShadow='0 0 0 3px rgba(200,122,69,0.1)'"
                            onblur="this.style.borderColor='#EAE4DB'; this.style.boxShadow='none'">
                            <option value="">Choose a category...</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->genre }}</option>
                            @endforeach
                        </select>
                        {{-- Chevron --}}
                        <span style="position: absolute; right: 14px; top: 50%; transform: translateY(-50%); pointer-events: none; color: #6B6B6B;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                <path d="M6 9l6 6 6-6"/>
                            </svg>
                        </span>
                    </div>
                </div>

                @error('selectedCategory')
                    <p style="font-size: 12.5px; color: #DC2626; margin-top: 6px; margin-bottom: 2px; display: flex; align-items: center; gap: 5px;">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        {{ $message }}
                    </p>
                @enderror

                {{-- Divider --}}
                <div style="height: 1px; background: #EAE4DB; margin: 22px 0;"></div>

                {{-- Actions --}}
                <div style="display: flex; justify-content: flex-end; gap: 10px;">

                    <button
                        type="button"
                        wire:click="closeModal"
                        style="height: 44px; padding: 0 20px; border-radius: 12px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 600; color: #6B6B6B; background: #F5F0EB; border: 1px solid #EAE4DB; cursor: pointer; transition: background 0.18s, color 0.18s;"
                        onmouseover="this.style.background='#F5EEE5'; this.style.color='#2B2B2B'"
                        onmouseout="this.style.background='#F5F0EB'; this.style.color='#6B6B6B'">
                        Cancel
                    </button>

                    <button
                        type="button"
                        wire:click="save"
                        style="height: 44px; padding: 0 22px; border-radius: 12px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 600; color: #fff; background: #C87A45; border: none; cursor: pointer; box-shadow: 0 4px 14px rgba(200,122,69,0.28); transition: background 0.18s, box-shadow 0.18s, transform 0.15s;"
                        onmouseover="this.style.background='#B56835'; this.style.boxShadow='0 6px 20px rgba(200,122,69,0.36)'; this.style.transform='translateY(-1px)'"
                        onmouseout="this.style.background='#C87A45'; this.style.boxShadow='0 4px 14px rgba(200,122,69,0.28)'; this.style.transform='translateY(0)'">
                        Add Notebook
                    </button>

                </div>

            </div>

        </div>

    @endif

</div>