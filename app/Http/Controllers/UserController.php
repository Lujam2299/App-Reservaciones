<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function configuration()
    {
        return view('userConfiguration');
    }
    public function showsolicitudes() {
        return view('userSolicitudes');
    }
}
