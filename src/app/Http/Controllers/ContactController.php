<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function register1(Request $request)
    {
        return view('register1');
    }

    public function register2(Request $request)
    {
        return view('register2');
    }

    public function login(Request $request)
    {
        return view('login');
    }
}
