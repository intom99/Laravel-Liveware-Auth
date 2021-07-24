<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $this->email, 'password' => $this->password
        ])) {
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('error', 'incorrect email or password has wrong!!');
            return redirect()->route('auth.login');
        }
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
