<?php

namespace App\Action\Auth;

use Illuminate\Support\Facades\Auth;

class LogoutAction{

    public function execute($request)
    {
        if(self::isloggedIn())
        {
            Auth::logout();
            return true;
        }
        return false;
    }

    private function isloggedIn()
    {
        return Auth::check();
    }
}