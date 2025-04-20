<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('user.index');
    }

    public function view_profile()
    {
        return view('user.profile.index');
    }

    public function edit_profile()
    {
        return view('user.profile.edit');
    }
}
