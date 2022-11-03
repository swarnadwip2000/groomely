<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function home()
    {
        return view('frontend.home');
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

}
