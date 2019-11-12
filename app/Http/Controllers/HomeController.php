<?php

namespace App\Http\Controllers;

use App\Banners;
use App\DocumentCategory;
use App\DocumentSubCategory;
use App\Document;
use App\leads;
use Illuminate\Http\Request;
use App\HomePage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Pricing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }


    public function updatehomeContent(Request $request){
        HomePage::first()->update(['welcome_text'=>$request->welcome_text]);
        return Redirect::route('cms.home');
    }

    public function showhomeContent(){
        $welcome_text = HomePage::first()->welcome_text;
        return view('cms.home')->with(['welcome_text'=>$welcome_text]);
    }

    public function categoryForm($id = null){
        $cat = DocumentCategory::where('id',$id)->first();
        $name = ($cat==null?'':$cat->name);
        return view('cms.doc_category')->with([
            'cats'=> DocumentCategory::all(),
            'id'=>$id,
            'name'=>$name
        ]);
    }

    public function saveCategory(Request $request){
        $cat = DocumentCategory::where('id',$request->id)->first();
        if($cat == null) {
            $newCat = new DocumentCategory();
            $newCat->name = $request->name;
            $newCat->save();
        }
        else{
            $cat->name = $cat->update(['name'=>$request->name]);
        }
        return Redirect::route('doc.category');
    }

    public function deleteCategory($id){

    }

    public function subCategoryForm($id = null){
        $cat = DocumentSubCategory::where('id',$id)->first();
        $name = ($cat==null?'':$cat->name);
        return view('cms.doc_subcategory')->with([
            'cats'=> DocumentSubCategory::all(),
            'cat'=>$cat,
            'categories'=>DocumentCategory::all(),
            'name'=>$name
        ]);
    }

    public function saveSubCategory(Request $request){
        $cat = DocumentSubCategory::where('id',$request->id)->first();
        if($cat == null) {
            $newCat = new DocumentSubCategory();
            $newCat->name = $request->name;
            $newCat->category_id = $request->category;
            $newCat->save();
        }
        else{
            $cat->name = $cat->update(['name'=>$request->name]);
        }
        return Redirect::route('doc.subcategory');
    }

    public function deleteSubCategory($id){

    }

    public function documentForm($id = null){
        $doc = Document::where('id',$id)->first();
        $name = ($doc==null?'':$doc->name);
        return view('cms.docs')->with([
            'docs'=> Document::all(),
            'doc'=>$doc,
            'subcategories'=>DocumentSubCategory::all(),
            'name'=>$name
        ]);
    }

    public function saveDocument(Request $request){
        $doc = Document::where('id',$request->id)->first();
        if($doc == null) {
            $newDoc = new Document();
            $newDoc->name = $request->name;
            $newDoc->subcategory_id = $request->subcategory;
            $newDoc->description = $request->description;
            $newDoc->path = $request->file('path')->store('public/library');
            $newDoc->available = ($request->available == null?0:1);
            $newDoc->protected = ($request->protected == null?0:1);
            $newDoc->save();
        }
        else{
             $doc->update([
                'name'=> $request->name,
                'subcategory_id'=> $request->subcategory,
                'description' => $request->description,
                'available' => ($request->available == null?0:1),
                'protected' =>  ($request->protected == null?0:1),
                ]);
            if($request->path != null) $doc->update(['path' => $request->path]);
        }
        return Redirect::route('docs');
    }

    public function deleteDocument($doc){
        Document::findOrFail($doc)->delete();
        return Redirect::route('docs');
    }

    public function showBanners()
    {
        $banners = Banners::all();

        return view('cms.banners')->with(['banners'=>$banners]);
    }

    public function saveBanners(Request $request){
        if($request->file('banner') == null) $bannerimage = "";
        else $bannerimage = $request->file('banner')->store('public/banners');
        $banner = Banners::where('id', $request->page)->first();
        $banner->update(['image'=>$bannerimage]);
        return Redirect::route('cms.banners');
    }

    public function showPricing($id = null){
        $package = Pricing::where('id',$id)->first();

        return view('cms.pricing')->with([
            'pricing'=> Pricing::all(),
            'package'=>$package
        ]);
    }

    public function savePricing(Request $request){
        if($request->id == null){
            $package = new Pricing();
            $package->package_name = $request->package_name;
            $package->color = $request->color;
            $package->price = $request->price;
            $package->description = $request->description;
            $package->offer = $request->offer;
            $package->available = ($request->available == null?0:1);
            $package->save();
        }
        else{
            $pricing = Pricing::where('id', $request->id)->first();
            $pricing->update([
                'package_name' =>  $request->package_name,
                'color' => $request->color,
                'price' =>  $request->price,
                'description' =>  $request->description,
                'offer' =>  $request->offer,
                'available' =>  $request->available
            ]);
        }
        return Redirect::route('cms.pricing');
    }

    public function leads(){
        return view('cms.leads')->with('leads', leads::all());
    }

    public function leadsContact($id){
            DB::table('leads')
                ->where('id' , $id)
                ->update(['contacted'=>1]);

        return redirect('leads');
    }
}
