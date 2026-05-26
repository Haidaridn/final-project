<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Category as ModelsCategory;
use Illuminate\Support\Facades\Auth;

class Category extends Component
{
    public $genre;
    public $color;

    public $editingId = null;

    public $showModal = false;

    protected $rules = [
        'genre' => 'required',
        'color' => 'required',
    ];

    // OPEN MODAL
    public function openModal()
    {
        $this->resetForm();

        $this->showModal = true;
    }

    // CLOSE MODAL
    public function closeModal()
    {
        $this->showModal = false;
    }

    // SAVE CATEGORY
    public function save()
    {
        $this->validate();

        if ($this->editingId) {

            $category = ModelsCategory::where('user_id', Auth::id())
                ->findOrFail($this->editingId);

            $category->update([
                'genre' => $this->genre,
                'color' => $this->color,
            ]);

        } else {

            ModelsCategory::create([
                'genre' => $this->genre,
                'color' => $this->color,
                'user_id' => Auth::id(),
            ]);
        }

        $this->closeModal();

        $this->resetForm();
    }

    // EDIT
    public function edit($id)
    {
        $category = ModelsCategory::where('user_id', Auth::id())
            ->findOrFail($id);

        $this->editingId = $category->id;
        $this->genre = $category->genre;
        $this->color = $category->color;

        $this->showModal = true;
    }

    // DELETE
    public function delete($id)
    {
        ModelsCategory::where('user_id', Auth::id())
            ->findOrFail($id)
            ->delete();
    }

    // RESET FORM
    public function resetForm()
    {
        $this->reset([
            'genre',
            'editingId',
        ]);

        $this->color = '#6366f1';

        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.user.category', [
            'categories' => ModelsCategory::where('user_id', Auth::id())
                ->latest()
                ->get(),
        ]);
    }
}