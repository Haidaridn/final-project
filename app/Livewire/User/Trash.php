<?php

namespace App\Livewire\User;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class Trash extends Component
{

    public $deleteId;

    public function restore($id)
    {
        $note = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        $note->restore();
    }

    #[On('deleteConfirmed')]
    public function forceDelete()
    {
        $note = Note::onlyTrashed()
            ->where('user_id', Auth::id())
            ->findOrFail($this->deleteId);

        $note->forceDelete();

        $this->dispatch('note-deleted');
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;

        $this->dispatch('show-delete-toast');
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