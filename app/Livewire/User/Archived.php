<?php

namespace App\Livewire\User;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Archived extends Component
{
    public $search = '';

    // ARCHIVE NOTE

    // RESTORE NOTE
    public function restore($id)
    {
        $note = Note::where('user_id', Auth::id())
            ->findOrFail($id);

        $note->update([
            'is_archived' => false,
        ]);
    }

    // DELETE NOTE
    public function delete($id)
    {
        Note::where('user_id', Auth::id())
            ->findOrFail($id)
            ->delete();
    }

    public function render()
    {
        return view('livewire.user.archived', [
            'notes' => Note::where('user_id', Auth::id())
                ->where('is_archived', true)
                ->when($this->search, function ($query) {
                    $query->where(function ($q) {
                        $q->where('title', 'like', '%' . $this->search . '%')
                          ->orWhere('content', 'like', '%' . $this->search . '%');
                    });
                })
                ->latest()
                ->get(),
        ]);
    }
}