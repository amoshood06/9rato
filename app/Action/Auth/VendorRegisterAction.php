<?php

namespace App\Action\Auth;

use App\Models\User;
use Illuminate\Support\Str;

class VendorRegisterAction{

    public function execute($request)
    {
        $request['role_id'] = 2;
        $request['slug'] = Str::slug($request['business_name']);
        $vendor = User::create($request);

        if($vendor)
        {
            return true;
        }

        return false;
    }
}