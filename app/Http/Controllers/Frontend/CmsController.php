<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function home()
    {
        $categories = Category::where('status', 1)->get();
        $services = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('frontend.home')->with(compact('categories','services'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function bestSellers()
    {
        return view('frontend.best-sellers');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function package()
    {
    $services = Service::where('status', 1)->orderBy('id','desc')->paginate(20);
        return view('frontend.package')->with(compact('services'));
    }

}
