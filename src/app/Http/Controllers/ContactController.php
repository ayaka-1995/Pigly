<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function register1()
    {
        return view('register1');
    }

    public function register2()
    {
        return view('register2');
    }
}
