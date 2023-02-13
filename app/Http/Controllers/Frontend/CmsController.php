<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutCms;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\HomeCms;
use App\Models\Service;
use App\Models\User;
use App\Models\ServiceCms;
use App\Models\Appointment;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function home()
    {
        $servicesCms = ServiceCms::orderby('id','desc')->get();
        $categories = Category::where('status', 1)->get();
        $services = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $homeCms = HomeCms::first();

        $detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('service.appointment')->get();
        foreach($shop as $vall)
        {
            
            $detail['image'] = $vall['profile_picture'];
            $detail['total'] = User::appointmentsSum($vall->id);
            $shop_detail[] = $detail;
            
        }
        $details = collect($shop_detail)->sortByDesc('total');
        
        return view('frontend.home')->with(compact('categories','services', 'homeCms', 'servicesCms','details'));
    }

    public function about()
    {
        $aboutCms = AboutCms::first();
        return view('frontend.about')->with(compact('aboutCms'));
    }

    public function services()
    {
        $servicesCms = ServiceCms::orderby('id', 'desc')->get();
        return view('frontend.services')->with(compact('servicesCms'));
    }

    public function bestSellers()
    {
        return view('frontend.best-sellers');
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('frontend.gallery')->with(compact('galleries'));
    }

    public function package()
    {
        $services = Service::where('status', 1)->orderBy('id','desc')->paginate(20);
        return view('frontend.package')->with(compact('services'));
    }

    public function serviceCategory($slug, $id)
    {
        $services = Service::where(['category_id'=>$id, 'status'=>1])->orderBy('id', 'desc')->paginate(20);
        $category = Category::findOrFail($id);
        return view('frontend.category')->with(compact('services', 'category'));
    }

}
