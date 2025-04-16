<?php

namespace App\Listeners;

use App\Events\PasswordChanged;
use App\Mail\PasswordChangedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordChangedMail implements ShouldQueue
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
    public function handle(PasswordChanged $event): void
    {
        Mail::to($event->user->email)->send(new PasswordChangedMail($event));
    }
}
