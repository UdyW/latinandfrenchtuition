<?php
/**
 * Created by PhpStorm.
 * User: udywarnasuriya
 * Date: 2019-12-31
 * Time: 01:53
 */

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController
{
    public function index(){
        $reviews = Review::all();
        return view(
            'reviews.index', compact('reviews')
        );
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->title = $request->title;
        $review->review = $request->review;
        $review->name = $request->name;
        $review->save();

        return redirect()->route('reviews.index');
    }

    public function edit($id){
        $review = Review::findOrFail($id);
        return view('reviews.edit', compact('review') );
    }

    public function update(Request $request)
    {
        $review = Review::findOrFail($request->get('id'));
        $review->update($request->all());

        return redirect()->route('reviews.index');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index');
    }
}
