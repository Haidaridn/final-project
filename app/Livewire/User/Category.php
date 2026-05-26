<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    public $name, $color;
    public $showModal = false;

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3',
            'color' => 'required'
        ]);

        CategoryModel::create([
            'name' => $this->name,
            'color' => $this->color
        ]);

        session()->flash('success', 'Category berhasil ditambahkan!');

        $this->reset(['name','color','showModal']);
    }

    public function render()
    {
        return view('livewire.user.category', [
            'categories' => CategoryModel::latest()->get()
        ]);
    }
}