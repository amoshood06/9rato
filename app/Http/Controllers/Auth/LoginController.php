<?php

namespace App\Http\Controllers\Auth;

use App\Action\Auth\LoginAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Traits\apiResponse;

class LoginController extends Controller
{
    use apiResponse;

    public function __invoke(LoginRequest $request, LoginAction $action)
    {
        if($user = $action->execute($request->all()))
        {
            return $this->success($user);
        }

        return $this->error('Cannot log in user');
    }
}
