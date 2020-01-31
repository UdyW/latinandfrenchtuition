<?php
/**
 * Created by PhpStorm.
 * User: udywarnasuriya
 * Date: 2020-01-21
 * Time: 22:15
 */

namespace App\Http\Controllers;

use App\Models\SiteviedVariables;
use Illuminate\Http\Request;

class SettingsController  extends Controller
{
    public function index(){
        $settings = SiteviedVariables::all();
        return view('settings.index', compact('settings'));
    }

    public function edit($id){
        $setting = SiteviedVariables::findOrFail($id);
        return view('settings.edit', compact('setting') );
    }

    public function update(Request $request)
    {
        $setting = SiteviedVariables::findOrFail($request->get('id'));
        $setting->value = $request->get('value');
        $setting->save();

        return redirect()->route('settings.index');
    }

    public function show($id)
    {
        $setting = SiteviedVariables::findOrFail($id);

        return view('settings.show', compact('setting'));
    }

}
