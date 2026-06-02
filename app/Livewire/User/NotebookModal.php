<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Category;
use App\Models\Notebook;

class NotebookModal extends Component
{
    public $showModal = false;

    public $selectedCategory = '';

    #[\Livewire\Attributes\On('open-notebook-modal')]
    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function save()
    {
        $this->validate([
            'selectedCategory' => 'required|exists:categories,id',
        ]);

        Notebook::create([
            'user_id' => auth()->id(),
            'category_id' => $this->selectedCategory,
        ]);

        $this->reset('selectedCategory');
        $this->showModal = false;

        $this->dispatch('notebook-created');
    }

    public function render()
    {
        return view('livewire.user.notebook-modal', [
            'categories' => Category::where('user_id', auth()->id())->get(),
        ]);
    }
}