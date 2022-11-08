<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class BookNowController extends Controller
{
    public function bookNow($id)
    {
        $id = base64_decode($id);
        $service = Service::findOrFail($id);
        return view('frontend.book-now')->with(compact('service'));
        
    }
}
