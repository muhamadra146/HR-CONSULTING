<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function indexservice() {
        return view('pages.service');
    }
}
