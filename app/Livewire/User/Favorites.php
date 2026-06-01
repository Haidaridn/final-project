<?php

namespace App\Livewire\User;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Favorites extends Component
{
    public $search = '';

    public function removeFavorite($id)
    {
        $note = Note::where('user_id', Auth::id())
            ->findOrFail($id);

        $note->update([
            'is_favorite' => false,
        ]);
    }

    public function render()
    {
        $notes = Note::where('user_id', Auth::id())
            ->where('is_favorite', true)
            ->where('is_archived', false)

            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('content', 'like', '%' . $this->search . '%');
                });
            })

            ->latest()
            ->get();

        return view('livewire.user.favorites', [
            'notes' => $notes,
        ]);
    }
}