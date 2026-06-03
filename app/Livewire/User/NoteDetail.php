<?php

namespace App\Livewire\User;

use App\Models\Note;
use Livewire\Component;

class NoteDetail extends Component
{
    public Note $note;

    public function mount(Note $note)
    {
        $this->note = $note;
    }

    public function render()
    {
        return view('detil-note');
    }
}