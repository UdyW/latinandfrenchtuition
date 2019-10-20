<?php

namespace App\Http\Controllers;

use App\HomePage;
use App\Appointment;

class FrontEndController extends Controller
{
    public function index(){
        $welcome_text = HomePage::first()->welcome_text;
        return view('home')->with([
            'welcome_text'=>$welcome_text
        ]);
    }

    public function contact(){
        $appointments = Appointment::all();

        return view('contact', compact('appointments'));
    }
}
