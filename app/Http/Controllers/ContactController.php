<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leads;
use Illuminate\Support\Arr;

class ContactController extends Controller
{
    public function save(Request $request){
        $lead = new leads(); //dd(Arr::except($request->all(),['_token']));
        $lead->fill(Arr::except($request->all(),['_token']));
        if( $lead->save()) return view('contact')->with('message','Thank you for contacting. We\'ll respond you soon.' );
        else return Redirect::back()->withErrors(['error', 'The Message']);

    }
}
