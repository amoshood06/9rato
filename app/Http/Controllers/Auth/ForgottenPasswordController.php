<?php

namespace App\Http\Controllers\Auth;

use App\Action\Auth\ForgottenPasswordAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgottenPasswordRequest;
use App\Traits\apiResponse;
use Illuminate\Http\Request;

class ForgottenPasswordController extends Controller
{
    use apiResponse;

    public function __invoke(ForgottenPasswordRequest $request, ForgottenPasswordAction $action)
    {
        if($action->execute($request->all()))
        {
            return $this->success([], "Check your mail for 5 digit OTP");
        }

        return $this->error('Cannot send OTP');
    }
}
