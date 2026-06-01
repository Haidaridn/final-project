<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;
use App\Models\Category;

class Dashboard extends Component
{
    public function render()
    {
        $notesCount = Note::where('user_id', Auth::id())
            ->whereNull('deleted_at')
            ->where('is_archived', false)
            ->count();

        $categoryCount = Category::where('user_id', Auth::id())
            ->count();

        $archiveCount = Note::where('user_id', Auth::id())
            ->where('is_archived', true)
            ->whereNull('deleted_at')
            ->count();

        $trashCount = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->count();

        return view('livewire.user.dashboard', [
            'notesCount' => $notesCount,
            'categoryCount' => $categoryCount,
            'archiveCount' => $archiveCount,
            'trashCount' => $trashCount,
        ]);
    }
}