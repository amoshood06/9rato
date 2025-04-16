<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Action\Auth\VerifyOTPAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\VerifyOTPRequest;
use App\Traits\apiResponse;

class VerifyOTPController extends Controller
{
    use apiResponse;

    public function __invoke(VerifyOTPRequest $request, VerifyOTPAction $action)
    {
        if($action->execute($request->all()))
        {
            return $this->success([], 'Verified');
        }

        return $this->error('Cannot verify otp, check otp and try again');
    }
}
