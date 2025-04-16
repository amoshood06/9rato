<?php

namespace App\Action\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginAction{

    public function execute($request)
    {
        if(Auth::attempt($request))
        {
            return true;
        }

        return false;
    }
}