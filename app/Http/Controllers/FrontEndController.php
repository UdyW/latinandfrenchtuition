<?php

namespace App\Http\Controllers;

use App\Faqs;
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
        $faqs = Faqs::all();
        return view('contact', compact('appointments','faqs'));
    }
}
