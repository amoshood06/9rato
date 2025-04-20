<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\VerificationMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailVerification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        $user = $event->user;
        $verificationCode = rand(100000, 999999);
        
        $user->otp = $verificationCode;
        $user->otp_expires_at = now()->addMinutes(10);
        $user->save();
        Mail::to($user->email)->send(new VerificationMail($verificationCode));
    }
}
