<?php

namespace App\Livewire\Auth;

use App\Action\Auth\VerifyOTPAction;
use App\Events\UserRegistered;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VerifyEmail extends Component
{
    public $verified, $invalid = false, $otp1, $otp2, $otp3, $otp4, $otp5, $otp6, $timeLeft;


    public function mount()
    {
        $this->verified = Auth::user()->email_verified_at ? true : false; 
        
        if(!$this->verified)
        {
            $this->resend();
        }   
    }

    public function verify()
    {
        $code = $this->otp1.$this->otp2.$this->otp3.$this->otp4.$this->otp5.$this->otp6;
        if(strlen($code) !== 6)
        {
            session()->flash('error', 'OTP must be six digit code');
            return;
        }

        $verifyAction = new VerifyOTPAction();
        if($verifyAction->execute($code))
        {
            $this->verified = true;
            return;
        }
        
        $this->invalid = true;
        return;

        
    }

    public function retry()
    {
        $this->reset(['otp1', 'otp2', 'otp3', 'otp4', 'otp5', 'otp6']);
        $this->invalid = false;
        return;
    }

    public function resend()
    {
        $user = Auth::user();

        
        if ($this->verified) {
            session()->flash('info', 'Your email is already verified.');
            return;
        }

        if ($user->otp_expires_at && now()->lessThan($user->otp_expires_at)) {
            $remainingTime = ($user->otp_expires_at)->diffForHumans();
            session()->flash('error', "You can request a new code in {$remainingTime}.");
            return;
        }

        event(new UserRegistered($user));
        session()->flash('success', 'A new verification code has been sent to your mail.');
    }

    public function render()
    {
        return view('livewire.auth.verify-email');
    }
}
