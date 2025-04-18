<?php

namespace App\Action\Auth;

use App\Events\UserRegistered;
use App\Models\User;

class RegisterAction{

    public function execute($request)
    {
        $user = User::create($request);

        if($user)
        {
            return true;
        }

        return false;
    }
}