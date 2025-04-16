<?php

namespace App\Http\Controllers\Auth;

use App\Action\Auth\ResetPasswordAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Traits\apiResponse;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use apiResponse;

    public function __invoke(ResetPasswordRequest $request, ResetPasswordAction $action)
    {
        if($action->execute($request->all(), $request->header('User-Agent', 'Unknown Device')))
        {
            return $this->success([], 'Password reset');
        }

        return $this->error('Password reset failed');
    }
}
