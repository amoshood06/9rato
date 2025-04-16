<?php

namespace App\Action\Auth;

use App\Events\PasswordChanged;
use App\Models\User;

class ResetPasswordAction{

    public function execute($request, $device)
    {
        $user = User::whereEmail($request['email'])->first();

        if(!empty($user->otp) && $user->otp == $request['otp'])
        {
            $user->password = bcrypt($request['password']);
            $user->otp = null;
            $user->save();

            $date = now();
            $device = $device;
            event(new PasswordChanged($user, $date, $device));

            return true;
        }

        return false;
    }
}