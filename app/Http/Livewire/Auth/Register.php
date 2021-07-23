<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Livewire\Component;
use PDO;

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        if ($user) {
            session()->flash('success', 'Register Success');
            return redirect()->route('auth.login');
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
