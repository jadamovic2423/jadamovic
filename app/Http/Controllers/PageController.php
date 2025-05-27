<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function homepage()
    {
        return view('homepage'); 
    }

        function onama()
    {
        return view('onama'); 
    }
}
