<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Category;
use App\Models\Notebook;
use Livewire\Attributes\On;

class SidebarNotebooks extends Component
{
    public function openModal()
    {
        $this->dispatch('open-notebook-modal');
    }

    #[On('notebook-created')]
    public function refreshSidebar()
    {
        // kosongkan saja → otomatis re-render
    }

    public function deleteNotebook($id)
    {
        Notebook::where('user_id', auth()->id())
            ->findOrFail($id)
            ->delete();

        session()->flash('success', 'Notebook removed');
    }

    public function render()
    {
        return view('livewire.user.sidebar-notebooks', [
            'notebooks' => Notebook::with('category')
                ->where('user_id', auth()->id())
                ->get(),
        ]);
    }

    public function filterCategory($categoryId)
    {
        $this->dispatch('filter-category', categoryId: $categoryId);
    }
}