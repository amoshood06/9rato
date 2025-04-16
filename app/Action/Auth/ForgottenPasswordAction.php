<?php

namespace App\Action\Auth;

use App\Events\RequestPasswordResetOTP;
use App\Models\User;
use App\Mail\SendOTP;
use App\Helpers\OTPHelper;
use Illuminate\Support\Facades\Mail;

class ForgottenPasswordAction
{

    public function execute($request)
    {
        $user = User::whereEmail($request['email'])->first();
        $otp = (new OTPHelper)->generate()->save($user);
        if ($otp) {
            
            event(new RequestPasswordResetOTP($otp, $user));

            return true;
        }

        return false;
    }
}
