<?php

namespace App\Http\Controllers;

use App\Models\Usluge;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UslugeController extends Controller
{
        function usluge(){
        //svi zahtevi
        $usluge = Usluge::all();
        return view("homepage", ['usluge'=>$usluge]);
    }
}
