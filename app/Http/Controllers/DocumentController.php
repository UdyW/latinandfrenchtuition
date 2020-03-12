<?php
/**
 * Created by PhpStorm.
 * User: udywarnasuriya
 * Date: 2020-01-21
 * Time: 23:24
 */

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\SiteviedVariables;

class DocumentController extends Controller
{
    public function openDocument($id){
        $doc = Document::where('id',$id)->first();
        if(!$doc->protected)
        return Storage::download($doc->path);
    }

    public function unlock(Request $request){
        if($request->get('code') == SiteviedVariables::where('key','document_password')->first()->value) {
            $doc = Document::where('id', $request->get('docId'))->first();
            return Storage::download($doc->path);
        }
        else{
            return redirect()->route('resources');
        }
    }
}
