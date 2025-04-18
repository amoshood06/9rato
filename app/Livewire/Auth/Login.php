<?php

namespace App\Livewire\Auth;

use App\Action\Auth\LoginAction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public $rules = [
        'email' => 'required|email',
        'password' => 'required|string'
    ];

    public function login()
    {
        $validated = $this->validate();
        $loginAction = new LoginAction();
        
        if($loginAction->execute($validated))
        {
            if(Auth::user()->email_verified_at)
            {
                return $this->redirectRoute('home');
            }

            return $this->redirectRoute('auth.verify');
        }

        return session()->flash('error', 'Invalid email or password');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
