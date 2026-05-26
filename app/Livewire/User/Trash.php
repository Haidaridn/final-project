<?php

namespace App\Livewire\User;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Trash extends Component
{
    public function restore($id)
    {
        $note = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        $note->restore();
    }

    public function forceDelete($id)
    {
        $note = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        $note->forceDelete();
    }

    public function render()
    {
        $notes = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('livewire.user.trash', [
            'notes' => $notes,
        ]);
    }
}