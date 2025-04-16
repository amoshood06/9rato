<?php

namespace App\Http\Controllers\Auth;

use App\Action\Auth\LogoutAction;
use App\Http\Controllers\Controller;
use App\Traits\apiResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    use apiResponse;

    public function __invoke(Request $request, LogoutAction $action)
    {
        if($action->execute($request))
        {
            return $this->success([], 'User logged out');
        }

        return $this->error('Problem occured');
    }
}
