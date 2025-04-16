<?php

namespace App\Http\Controllers\Auth;

use App\Action\Auth\RegisterAction;
use App\Traits\apiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    use apiResponse;
    
    public function __invoke(RegisterRequest $request, RegisterAction $action)
    {
        if($action->execute($request->all()))
        {
            return $this->success([], "User registered successfully");
        }

        return $this->error('Problem occured');
    }
}
