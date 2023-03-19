<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function indexlogin () {
        return view ('pages.login');
    }
}
