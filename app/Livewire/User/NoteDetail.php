<?php

namespace App\Livewire\User;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NoteDetail extends Component
{
    public $title;
    public $content;

    public function mount(Note $note)
    {

        $this->title = $note->title;
        $this->content = $note->content;
    }

    public function saveAndBack()
    {
        $this->note->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        return redirect('/notes');
    }

public function render()
{
    return view('livewire.user.note-detail');
}
}