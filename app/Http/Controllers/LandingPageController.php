<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function indexlanding () {
        return view ('pages.landing-pages');
    } 
}
