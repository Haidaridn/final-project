<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditProfile extends Component
{
    public $name;
    public $email;
    public $password;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function updateProfile()
    {
        $user = Auth::user();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        if ($this->password) {
            $data['password'] = Hash::make($this->password);
        }

        $user->update($data);

        session()->flash('success', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.user.edit-profile');
    }
}