<?php

namespace App\Livewire\Auth;

use App\Action\Auth\RegisterAction;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    public $rules = [
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed'
    ];

    public function register()
    {
        $validated = $this->validate();
        $registerAction = new RegisterAction;

        if($registerAction->execute($validated))
        {
            session()->flash('success', "User Registered, Proceed to login to your verify your account");
            return $this->redirectRoute('login');
        }

        return session()->flash('error', 'Problem Occured while registering user');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
