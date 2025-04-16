<?php

namespace App\Listeners;

use App\Mail\SendOTP;
use Illuminate\Support\Facades\Mail;
use App\Events\RequestPasswordResetOTP;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordResetOTP implements ShouldQueue
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
    public function handle(RequestPasswordResetOTP $event): void
    {
        Mail::to($event->user->email)->send(new SendOTP($event->otp, $event->user->first_name ?? 'User', "Password Reset OTP"));
    }
}
