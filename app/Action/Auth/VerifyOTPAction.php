<?php

namespace App\Action\Auth;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class VerifyOTPAction{

    public function execute($otp)
    {
        $user = User::whereEmail(Auth::user()->email)->first();

        if(!empty($user->otp) && $user->otp == $otp && now()->lessThanOrEqualTo(Carbon::parse($user->otp_expires_at)))
        {
            $user->otp = null;
            $user->email_verified_at = now();
            $user->otp_expires_at = null;
            $user->save();
            return true;
        }

        return false;
    }
}