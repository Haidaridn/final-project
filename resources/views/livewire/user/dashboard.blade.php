<div style="display: flex; flex-direction: column; gap: 28px; font-family: 'DM Sans', sans-serif;">

    <!-- ══════════════════════════════════════════
         SECTION 1 — WELCOME HERO
    ══════════════════════════════════════════ -->
    <div style="position: relative; background: #FAF7F2; border: 1px solid #EAE4DB; border-radius: 28px; padding: 40px 44px; overflow: hidden; box-shadow: 0 2px 16px rgba(50,50,50,0.05);">

        <!-- Decorative blobs -->
        <div style="position: absolute; width: 320px; height: 320px; top: -120px; right: -60px; background: radial-gradient(circle, rgba(200,122,69,0.1) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>
        <div style="position: absolute; width: 200px; height: 200px; bottom: -80px; right: 200px; background: radial-gradient(circle, rgba(200,122,69,0.07) 0%, transparent 70%); border-radius: 50%; pointer-events: none;"></div>

        <!-- Decorative lines -->
        <div style="position: absolute; top: 0; right: 0; width: 340px; height: 100%; opacity: 0.04; pointer-events: none; overflow: hidden; border-radius: 28px;">
            <svg width="340" height="100%" viewBox="0 0 340 200" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="40" x2="340" y2="40" stroke="#C87A45" stroke-width="1"/>
                <line x1="0" y1="80" x2="340" y2="80" stroke="#C87A45" stroke-width="1"/>
                <line x1="0" y1="120" x2="340" y2="120" stroke="#C87A45" stroke-width="1"/>
                <line x1="0" y1="160" x2="340" y2="160" stroke="#C87A45" stroke-width="1"/>
                <line x1="60" y1="0" x2="60" y2="200" stroke="#C87A45" stroke-width="1"/>
                <line x1="160" y1="0" x2="160" y2="200" stroke="#C87A45" stroke-width="1"/>
                <line x1="260" y1="0" x2="260" y2="200" stroke="#C87A45" stroke-width="1"/>
            </svg>
        </div>

        <div style="position: relative; z-index: 1;">
            <!-- Badge -->
            <div style="display: inline-flex; align-items: center; gap: 6px; background: #fff; border: 1px solid #EAE4DB; border-radius: 100px; padding: 5px 13px; font-size: 12px; font-weight: 600; color: #C87A45; margin-bottom: 18px;">
                <span style="font-size: 10px;">✦</span>
                Organized Notes
            </div>

            <div style="display: flex; align-items: flex-end; justify-content: space-between; gap: 24px; flex-wrap: wrap;">
                <div>
                    <p style="font-size: 13px; font-weight: 500; color: #6B6B6B; margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.08em;">Today's Workspace Overview</p>
                    <h1 style="font-family: 'Lora', serif; font-size: 36px; font-weight: 700; color: #2B2B2B; line-height: 1.1; letter-spacing: -0.025em; margin-bottom: 10px;">
                        Welcome back,<br><span style="color: #C87A45;">{{ Auth::user()->name }}</span>
                    </h1>
                    <p style="font-size: 14px; color: #6B6B6B; max-width: 400px; line-height: 1.65;">
                        Your personal workspace is ready. Pick up where you left off, capture a new idea, or review your recent work.
                    </p>
                </div>

                <!-- Hero stats cluster -->
                <div style="display: flex; gap: 12px; flex-shrink: 0; flex-wrap: wrap;">
                    <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 18px; padding: 18px 24px; text-align: center; min-width: 100px; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
                        <p style="font-family: 'Lora', serif; font-size: 28px; font-weight: 700; color: #C87A45; line-height: 1;">{{ $notesCount }}</p>
                        <p style="font-size: 11px; font-weight: 600; color: #6B6B6B; margin-top: 4px; text-transform: uppercase; letter-spacing: 0.06em;">Notes</p>
                    </div>
                    <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 18px; padding: 18px 24px; text-align: center; min-width: 100px; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
                        <p style="font-family: 'Lora', serif; font-size: 28px; font-weight: 700; color: #2B2B2B; line-height: 1;">{{ $categoryCount }}</p>
                        <p style="font-size: 11px; font-weight: 600; color: #6B6B6B; margin-top: 4px; text-transform: uppercase; letter-spacing: 0.06em;">Categories</p>
                    </div>
                    <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 18px; padding: 18px 24px; text-align: center; min-width: 100px; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
                        <p style="font-family: 'Lora', serif; font-size: 28px; font-weight: 700; color: #2B2B2B; line-height: 1;">{{ $archiveCount }}</p>
                        <p style="font-size: 11px; font-weight: 600; color: #6B6B6B; margin-top: 4px; text-transform: uppercase; letter-spacing: 0.06em;">Archived</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ══════════════════════════════════════════
         SECTION 2 — STAT CARDS
    ══════════════════════════════════════════ -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;">

        <!-- Total Notes -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 20px; padding: 24px; transition: transform 0.2s, box-shadow 0.2s; cursor: default;"
             onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(0,0,0,0.08)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 18px;">
                <div style="width: 42px; height: 42px; border-radius: 12px; background: #F5EEE5; border: 1px solid rgba(200,122,69,0.15); display: flex; align-items: center; justify-content: center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#C87A45" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/>
                    </svg>
                </div>
                <span style="font-size: 11px; font-weight: 600; color: #4F7A5A; background: #EEF6F1; padding: 3px 9px; border-radius: 100px;">↑ +12%</span>
            </div>
            <p style="font-family: 'Lora', serif; font-size: 32px; font-weight: 700; color: #2B2B2B; line-height: 1; margin-bottom: 5px;">{{ $notesCount }}</p>
            <p style="font-size: 13px; font-weight: 600; color: #2B2B2B; margin-bottom: 3px;">Total Notes</p>
            <p style="font-size: 11.5px; color: #6B6B6B;">This month</p>
        </div>

        <!-- Categories -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 20px; padding: 24px; transition: transform 0.2s, box-shadow 0.2s; cursor: default;"
             onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(0,0,0,0.08)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 18px;">
                <div style="width: 42px; height: 42px; border-radius: 12px; background: #FAF7F2; border: 1px solid #EAE4DB; display: flex; align-items: center; justify-content: center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6B6B6B" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/>
                    </svg>
                </div>
                <span style="font-size: 11px; font-weight: 600; color: #4F7A5A; background: #EEF6F1; padding: 3px 9px; border-radius: 100px;">↑ +3</span>
            </div>
            <p style="font-family: 'Lora', serif; font-size: 32px; font-weight: 700; color: #2B2B2B; line-height: 1; margin-bottom: 5px;">{{ $categoryCount }}</p>
            <p style="font-size: 13px; font-weight: 600; color: #2B2B2B; margin-bottom: 3px;">Categories</p>
            <p style="font-size: 11.5px; color: #6B6B6B;">Active folders</p>
        </div>

        <!-- Archived -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 20px; padding: 24px; transition: transform 0.2s, box-shadow 0.2s; cursor: default;"
             onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(0,0,0,0.08)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 18px;">
                <div style="width: 42px; height: 42px; border-radius: 12px; background: #FAF7F2; border: 1px solid #EAE4DB; display: flex; align-items: center; justify-content: center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6B6B6B" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="5" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/>
                    </svg>
                </div>
                <span style="font-size: 11px; font-weight: 600; color: #D49A45; background: #FEF9EE; padding: 3px 9px; border-radius: 100px;">→ 0%</span>
            </div>
            <p style="font-family: 'Lora', serif; font-size: 32px; font-weight: 700; color: #2B2B2B; line-height: 1; margin-bottom: 5px;">{{ $archiveCount }}</p>
            <p style="font-size: 13px; font-weight: 600; color: #2B2B2B; margin-bottom: 3px;">Archived</p>
            <p style="font-size: 11.5px; color: #6B6B6B;">Stored safely</p>
        </div>

        <!-- Trash -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 20px; padding: 24px; transition: transform 0.2s, box-shadow 0.2s; cursor: default;"
             onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(0,0,0,0.08)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 18px;">
                <div style="width: 42px; height: 42px; border-radius: 12px; background: #FAF7F2; border: 1px solid #EAE4DB; display: flex; align-items: center; justify-content: center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6B6B6B" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    </svg>
                </div>
                <span style="font-size: 11px; font-weight: 600; color: #DC2626; background: #FEF2F2; padding: 3px 9px; border-radius: 100px;">↓ Clear</span>
            </div>
            <p style="font-family: 'Lora', serif; font-size: 32px; font-weight: 700; color: #2B2B2B; line-height: 1; margin-bottom: 5px;">{{ $trashCount }}</p>
            <p style="font-size: 13px; font-weight: 600; color: #2B2B2B; margin-bottom: 3px;">Trash</p>
            <p style="font-size: 11.5px; color: #6B6B6B;">Awaiting deletion</p>
        </div>

    </div>


    <!-- ══════════════════════════════════════════
         ROW: ANALYTICS + ACTIVITY
    ══════════════════════════════════════════ -->
    <div style="display: grid; grid-template-columns: 1fr 380px; gap: 20px; align-items: start;">

        <!-- SECTION 3 — WEEKLY CHART -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 22px; padding: 28px 32px;">
            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 24px;">
                <div>
                    <p style="font-size: 10px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #C0B4A8; margin-bottom: 5px;">Analytics</p>
                    <h3 style="font-family: 'Lora', serif; font-size: 19px; font-weight: 700; color: #2B2B2B; margin-bottom: 3px;">Weekly Productivity</h3>
                    <p style="font-size: 13px; color: #6B6B6B;">Activity over the last 7 days</p>
                </div>
                <div style="display: flex; align-items: center; gap: 6px; background: #FAF7F2; border: 1px solid #EAE4DB; border-radius: 9px; padding: 7px 13px; font-size: 12px; font-weight: 600; color: #6B6B6B;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    This Week
                </div>
            </div>

            <!-- Bar chart -->
            <div style="display: flex; align-items: flex-end; gap: 10px; height: 140px; padding-bottom: 4px;">
                @php
                    $bars = [
                        ['day' => 'Mon', 'h' => 55,  'active' => false],
                        ['day' => 'Tue', 'h' => 80,  'active' => false],
                        ['day' => 'Wed', 'h' => 100, 'active' => true],
                        ['day' => 'Thu', 'h' => 65,  'active' => false],
                        ['day' => 'Fri', 'h' => 90,  'active' => false],
                        ['day' => 'Sat', 'h' => 40,  'active' => false],
                        ['day' => 'Sun', 'h' => 30,  'active' => false],
                    ];
                @endphp
                @foreach($bars as $bar)
                <div style="flex: 1; display: flex; flex-direction: column; align-items: center; gap: 8px; height: 100%;">
                    <div style="flex: 1; width: 100%; display: flex; align-items: flex-end;">
                        <div style="width: 100%; height: {{ $bar['h'] }}%; border-radius: 8px 8px 4px 4px; background: {{ $bar['active'] ? '#C87A45' : 'rgba(200,122,69,0.18)' }}; transition: background 0.18s;"
                             onmouseover="this.style.background='#C87A45'"
                             onmouseout="this.style.background='{{ $bar['active'] ? '#C87A45' : 'rgba(200,122,69,0.18)' }}'">
                        </div>
                    </div>
                    <span style="font-size: 11px; font-weight: {{ $bar['active'] ? '700' : '500' }}; color: {{ $bar['active'] ? '#C87A45' : '#6B6B6B' }};">{{ $bar['day'] }}</span>
                </div>
                @endforeach
            </div>

            <!-- Chart legend -->
            <div style="display: flex; align-items: center; gap: 20px; margin-top: 20px; padding-top: 18px; border-top: 1px solid #EAE4DB;">
                <div style="display: flex; align-items: center; gap: 6px;">
                    <div style="width: 10px; height: 10px; border-radius: 3px; background: #C87A45;"></div>
                    <span style="font-size: 12px; color: #6B6B6B; font-weight: 500;">Active day</span>
                </div>
                <div style="display: flex; align-items: center; gap: 6px;">
                    <div style="width: 10px; height: 10px; border-radius: 3px; background: rgba(200,122,69,0.2);"></div>
                    <span style="font-size: 12px; color: #6B6B6B; font-weight: 500;">Other days</span>
                </div>
                <div style="margin-left: auto; font-size: 12px; font-weight: 600; color: #4F7A5A; background: #EEF6F1; padding: 4px 10px; border-radius: 20px;">
                    ↑ +24% vs last week
                </div>
            </div>
        </div>

        <!-- SECTION 4 — RECENT ACTIVITY -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 22px; padding: 26px 24px;">
            <div style="margin-bottom: 22px;">
                <p style="font-size: 10px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #C0B4A8; margin-bottom: 5px;">Timeline</p>
                <h3 style="font-family: 'Lora', serif; font-size: 17px; font-weight: 700; color: #2B2B2B;">Recent Activity</h3>
            </div>

            @php
                $activities = [
                    ['icon' => 'file-plus',  'title' => 'Created new note',      'sub' => 'Design Ideas',      'time' => '2 hours ago',  'color' => '#C87A45'],
                    ['icon' => 'edit',       'title' => 'Updated notebook',      'sub' => 'Work Journal',      'time' => '5 hours ago',  'color' => '#4F7A5A'],
                    ['icon' => 'archive',    'title' => 'Archived a note',       'sub' => 'Old Meeting Notes', 'time' => 'Today',        'color' => '#D49A45'],
                    ['icon' => 'folder',     'title' => 'Added category',        'sub' => 'Personal',          'time' => 'Yesterday',    'color' => '#6B6B6B'],
                    ['icon' => 'star',       'title' => 'Marked as favorite',    'sub' => 'Project Brief',     'time' => 'Yesterday',    'color' => '#C87A45'],
                ];
            @endphp

            <div style="display: flex; flex-direction: column; gap: 0;">
                @foreach($activities as $i => $act)
                <div style="display: flex; align-items: flex-start; gap: 13px; padding: 12px 0; {{ !$loop->last ? 'border-bottom: 1px solid #F5F0EA;' : '' }}">
                    <!-- Icon dot -->
                    <div style="width: 34px; height: 34px; border-radius: 10px; background: {{ $act['color'] }}18; border: 1px solid {{ $act['color'] }}22; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 1px;">
                        @if($act['icon'] === 'file-plus')
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $act['color'] }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="13" x2="12" y2="17"/><line x1="10" y1="15" x2="14" y2="15"/></svg>
                        @elseif($act['icon'] === 'edit')
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $act['color'] }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        @elseif($act['icon'] === 'archive')
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $act['color'] }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="5" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                        @elseif($act['icon'] === 'folder')
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $act['color'] }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                        @else
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $act['color'] }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                        @endif
                    </div>
                    <div style="flex: 1; min-width: 0;">
                        <p style="font-size: 13px; font-weight: 600; color: #2B2B2B; margin-bottom: 2px;">{{ $act['title'] }}</p>
                        <p style="font-size: 11.5px; color: #6B6B6B;">{{ $act['sub'] }}</p>
                    </div>
                    <span style="font-size: 10.5px; color: #C0B4A8; font-weight: 500; white-space: nowrap; margin-top: 2px; flex-shrink: 0;">{{ $act['time'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

    </div>


    <!-- ══════════════════════════════════════════
         ROW: QUICK ACTIONS + NOTES OVERVIEW
    ══════════════════════════════════════════ -->
    <div style="display: grid; grid-template-columns: 380px 1fr; gap: 20px; align-items: start;">

        <!-- SECTION 5 — QUICK ACTIONS -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 22px; padding: 26px 24px;">
            <div style="margin-bottom: 20px;">
                <p style="font-size: 10px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #C0B4A8; margin-bottom: 5px;">Shortcuts</p>
                <h3 style="font-family: 'Lora', serif; font-size: 17px; font-weight: 700; color: #2B2B2B;">Quick Actions</h3>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">

                @php
                    $actions = [
                        ['href' => '/notes', 'icon' => 'plus',    'label' => 'New Note',          'desc' => 'Start writing',     'primary' => true],
                        ['href' => '/category',     'icon' => 'folder',  'label' => 'New Category',      'desc' => 'Organize notes',    'primary' => false],
                        ['href' => '/archived',     'icon' => 'archive', 'label' => 'Archive Notes',     'desc' => 'Store away',        'primary' => false],
                        ['href' => '/notes',        'icon' => 'list',    'label' => 'All Notes',         'desc' => 'Browse your notes', 'primary' => false],
                    ];
                @endphp

                @foreach($actions as $action)
                <a href="{{ $action['href'] }}"
                   style="display: flex; flex-direction: column; align-items: flex-start; gap: 8px; padding: 16px 14px; border-radius: 14px; text-decoration: none; border: 1px solid {{ $action['primary'] ? 'rgba(200,122,69,0.25)' : '#EAE4DB' }}; background: {{ $action['primary'] ? '#F5EEE5' : '#FDFCFB' }}; transition: transform 0.18s, box-shadow 0.18s, background 0.18s;"
                   onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.07)'; this.style.background='{{ $action['primary'] ? '#EDE0D4' : '#F5EEE5' }}'"
                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.background='{{ $action['primary'] ? '#F5EEE5' : '#FDFCFB' }}'">
                    <div style="width: 32px; height: 32px; border-radius: 9px; background: {{ $action['primary'] ? '#C87A45' : '#fff' }}; border: 1px solid {{ $action['primary'] ? '#C87A45' : '#EAE4DB' }}; display: flex; align-items: center; justify-content: center; box-shadow: {{ $action['primary'] ? '0 3px 10px rgba(200,122,69,0.25)' : 'none' }};">
                        @if($action['icon'] === 'plus')
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="{{ $action['primary'] ? '#fff' : '#6B6B6B' }}" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        @elseif($action['icon'] === 'folder')
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6B6B6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg>
                        @elseif($action['icon'] === 'archive')
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6B6B6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="5" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                        @else
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6B6B6B" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                        @endif
                    </div>
                    <div>
                        <p style="font-size: 13px; font-weight: 700; color: {{ $action['primary'] ? '#C87A45' : '#2B2B2B' }}; margin-bottom: 2px;">{{ $action['label'] }}</p>
                        <p style="font-size: 11px; color: #6B6B6B;">{{ $action['desc'] }}</p>
                    </div>
                </a>
                @endforeach

            </div>
        </div>

        <!-- SECTION 6 — NOTES OVERVIEW -->
        <div style="background: #fff; border: 1px solid #EAE4DB; border-radius: 22px; padding: 28px 32px;">
            <div style="margin-bottom: 24px;">
                <p style="font-size: 10px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #C0B4A8; margin-bottom: 5px;">Overview</p>
                <h3 style="font-family: 'Lora', serif; font-size: 19px; font-weight: 700; color: #2B2B2B; margin-bottom: 3px;">Notes Organization</h3>
                <p style="font-size: 13px; color: #6B6B6B;">How well your workspace is organized</p>
            </div>

            @php
                $metrics = [
                    ['label' => 'Notes Organization',  'pct' => 85, 'desc' => 'Notes with categories assigned', 'color' => '#C87A45'],
                    ['label' => 'Categories Usage',    'pct' => 62, 'desc' => 'Categories actively used',       'color' => '#4F7A5A'],
                    ['label' => 'Archive Efficiency',  'pct' => 48, 'desc' => 'Archived vs total notes',        'color' => '#D49A45'],
                    ['label' => 'Workspace Coverage',  'pct' => 91, 'desc' => 'Notes in notebooks',             'color' => '#C87A45'],
                ];
            @endphp

            <div style="display: flex; flex-direction: column; gap: 22px;">
                @foreach($metrics as $m)
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px;">
                        <div>
                            <p style="font-size: 13.5px; font-weight: 600; color: #2B2B2B; margin-bottom: 1px;">{{ $m['label'] }}</p>
                            <p style="font-size: 11.5px; color: #6B6B6B;">{{ $m['desc'] }}</p>
                        </div>
                        <span style="font-family: 'Lora', serif; font-size: 20px; font-weight: 700; color: {{ $m['color'] }};">{{ $m['pct'] }}%</span>
                    </div>
                    <!-- Track -->
                    <div style="width: 100%; height: 7px; background: #F0EBE4; border-radius: 100px; overflow: hidden;">
                        <div style="width: {{ $m['pct'] }}%; height: 100%; background: {{ $m['color'] }}; border-radius: 100px; transition: width 0.6s ease;"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Summary row -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-top: 28px; padding-top: 22px; border-top: 1px solid #EAE4DB;">
                <div style="text-align: center;">
                    <p style="font-family: 'Lora', serif; font-size: 22px; font-weight: 700; color: #C87A45; line-height: 1;">{{ $notesCount }}</p>
                    <p style="font-size: 11px; font-weight: 600; color: #6B6B6B; margin-top: 3px; text-transform: uppercase; letter-spacing: 0.05em;">Notes</p>
                </div>
                <div style="text-align: center; border-left: 1px solid #EAE4DB; border-right: 1px solid #EAE4DB;">
                    <p style="font-family: 'Lora', serif; font-size: 22px; font-weight: 700; color: #2B2B2B; line-height: 1;">{{ $categoryCount }}</p>
                    <p style="font-size: 11px; font-weight: 600; color: #6B6B6B; margin-top: 3px; text-transform: uppercase; letter-spacing: 0.05em;">Categories</p>
                </div>
                <div style="text-align: center;">
                    <p style="font-family: 'Lora', serif; font-size: 22px; font-weight: 700; color: #2B2B2B; line-height: 1;">{{ $archiveCount }}</p>
                    <p style="font-size: 11px; font-weight: 600; color: #6B6B6B; margin-top: 3px; text-transform: uppercase; letter-spacing: 0.05em;">Archived</p>
                </div>
            </div>
        </div>

    </div>

</div>

<style>
    @media (max-width: 1024px) {
        .dash-two-col { grid-template-columns: 1fr !important; }
        .dash-stats { grid-template-columns: repeat(2, 1fr) !important; }
    }
    @media (max-width: 640px) {
        .dash-stats { grid-template-columns: 1fr !important; }
    }
</style>