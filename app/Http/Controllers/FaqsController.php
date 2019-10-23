<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faqs;

class FaqsController extends Controller
{
    public function index(){
        $faqs = Faqs::all();
        return view('faqs.index', compact('faqs'));
    }

    public function store(Request $request)
    {
        $faq = new Faqs();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('faqs.index');
    }

    public function edit($id){
        $faq = Faqs::findOrFail($id);
        return view('faqs.edit', compact('faq') );
    }

    public function update(Request $request)
    {
        $faq = Faqs::findOrFail($request->get('id'));
        $faq->update($request->all());

        return redirect()->route('faqs.index');
    }

    public function show($id)
    {
        $faq = Faqs::findOrFail($id);

        return view('faqs.show', compact('faq'));
    }

    public function destroy($id)
    {
        $faq = Faqs::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs.index');
    }
}
