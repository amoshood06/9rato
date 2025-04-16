<?php

namespace App\Http\Controllers\Auth;

use App\Action\Auth\VendorRegisterAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\VendorRegisterRequest;
use App\Traits\apiResponse;
use Illuminate\Http\Request;

class VendorRegisterController extends Controller
{
    use apiResponse;

    public function __invoke(VendorRegisterRequest $request, VendorRegisterAction $action)
    {
        if($action->execute($request->all()))
        {
            return $this->success([], "Vendor registered");
        }

        return $this->error("Cannot register vendor");
    }
}
