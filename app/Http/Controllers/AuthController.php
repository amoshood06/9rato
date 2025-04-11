<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('login');
    }

    public function register_page()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        return response()->json([
            'message' => 'Your account has been created successfully!'
        ], 201);
    }
}
