<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //
    public function review()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first to drop the Review!!');
        } else {
            if (Auth::user()->hasRole('USER')) {
                $review = new Review;
                $review->user_id = Auth::user()->id;
                $review->service_id = '1';
                $review->comment = 'very good';
                $review->rating = 4;
                $review->save();    
            }
            return back();
        }
    }

    public function view()
    {
        $reviews = Review::where('user_id',Auth::user()->id)->with('service')->get();   
        return view('user.reviews.list',compact('reviews'));
    }
}
