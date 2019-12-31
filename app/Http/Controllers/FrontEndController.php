<?php

namespace App\Http\Controllers;

use App\Faqs;
use App\HomePage;
use App\Appointment;
use App\Models\Review;

class FrontEndController extends Controller
{
    public function index(){
        $welcome_text = HomePage::first()->welcome_text;

        return view('home')->with([
            'welcome_text'=>$welcome_text,
            'reviews'     => Review::all()
        ]);
    }

    public function contact(){
        $appointments = Appointment::all();
        $faqs = Faqs::all();
        return view('contact', compact('appointments','faqs'));
    }
}
