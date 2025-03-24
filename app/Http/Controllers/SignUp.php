<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUp extends Controller
{
    public function create()
    {
        return view('auth.sighnup');
    }
}
