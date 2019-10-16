<?php

namespace App\Http\Controllers;

use App\HomePage;

class FrontEndController extends Controller
{
    public function index(){
        $welcome_text = HomePage::first()->welcome_text;
        return view('home')->with([
            'welcome_text'=>$welcome_text
        ]);
    }
}
