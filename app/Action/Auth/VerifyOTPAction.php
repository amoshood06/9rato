<?php

namespace App\Action\Auth;

use App\Models\User;

class VerifyOTPAction{

    public function execute($request)
    {
        $user = User::whereEmail($request['email'])->first();

        if(!empty($user->otp) && $user->otp == $request['otp'])
        {
            return true;
        }

        return false;
    }
}