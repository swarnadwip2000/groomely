<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //
    public function submitReview(Request $request)
    {
        $check_review = Review::where('appointment_id',$request->appointment_id)->where('service_id',$request->service_id)->first();
        if($check_review != '')
        {
            $check_review->comment = $request->review;
            $check_review->rating = $request->rating;
            $check_review->update();

        }else{
            $review = new Review;
            $review->appointment_id = $request->appointment_id;
            $review->user_id = $request->user_id;       
            $review->service_id = $request->service_id;
            $review->comment = $request->review;
            $review->rating = $request->rating;
            $review->save(); 
        }    

        return back()->with('message', 'Thank you for your valuable review');
                       
    }

    public function view()
    {
        $reviews = Review::where('user_id',Auth::user()->id)->with('service')->get();   
        return view('user.reviews.list',compact('reviews'));
    }
}
