<?php

namespace App\Http\Controllers;

use App\Models\VrstaZahteva;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function katalogBug(){
        //svi zahtevi
        $bug = VrstaZahteva::all();
        return view("vrstezahteva.zahtevi", ['bugovi'=>$bug]);
    }
    function zahtev($id){
        //jedan zahtev
        $zahtev = VrstaZahteva::findOrFail($id);
        return view('vrstezahteva.zahtev', ['zahtev' => $zahtev]);
    }
}
