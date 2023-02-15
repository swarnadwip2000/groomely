<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutCms;
use App\Models\BestSellerCms;
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
        $services = Service::where('status', 1)->with('review')->orderBy('id', 'desc')->get();
        $homeCms = HomeCms::first();

        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('service.appointment')->get();
        foreach($shop as $vall)
        {
            
            $detail['image'] = $vall['profile_picture'];
            $detail['total'] = User::appointmentsSum($vall->id);
            if($detail['total'] > 0)
            {
                $shop_detail[] = $detail;
            }
            
        }
        $details = collect($shop_detail)->sortByDesc('total');
        $bestSellerCms = BestSellerCms::first();
        
        return view('frontend.home')->with(compact('categories','services', 'homeCms', 'servicesCms','details','bestSellerCms'));
    }

    public function about()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('service.appointment')->get();
        foreach($shop as $vall)
        {
            
            $detail['image'] = $vall['profile_picture'];
            $detail['total'] = User::appointmentsSum($vall->id);
            if($detail['total'] > 0)
            {
                $shop_detail[] = $detail;
            }
            
        }
        $details = collect($shop_detail)->sortByDesc('total');
        $bestSellerCms = BestSellerCms::first();
        $aboutCms = AboutCms::first();
        return view('frontend.about')->with(compact('aboutCms','details','bestSellerCms'));
    }

    public function services()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('service.appointment')->get();
        foreach($shop as $vall)
        {
            
            $detail['image'] = $vall['profile_picture'];
            $detail['total'] = User::appointmentsSum($vall->id);
            if($detail['total'] > 0)
            {
                $shop_detail[] = $detail;
            }
            
        }
        $details = collect($shop_detail)->sortByDesc('total');
        $servicesCms = ServiceCms::orderby('id', 'desc')->get();
        $bestSellerCms = BestSellerCms::first();
        return view('frontend.services')->with(compact('servicesCms','details','bestSellerCms'));
    }

    public function bestSellers()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('service.appointment')->get();
        foreach($shop as $vall)
        {
            
            $detail['image'] = $vall['profile_picture'];
            $detail['total'] = User::appointmentsSum($vall->id);
            if($detail['total'] > 0)
            {
                $shop_detail[] = $detail;
            }
            
        }
        $details = collect($shop_detail)->sortByDesc('total');
        $bestSellerCms = BestSellerCms::first();

        return view('frontend.best-sellers',compact('details','bestSellerCms'));
    }

    public function gallery()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('service.appointment')->get();
        foreach($shop as $vall)
        {
            
            $detail['image'] = $vall['profile_picture'];
            $detail['total'] = User::appointmentsSum($vall->id);
            if($detail['total'] > 0)
            {
                $shop_detail[] = $detail;
            }
            
        }
        $details = collect($shop_detail)->sortByDesc('total');
        $galleries = Gallery::all();
        $bestSellerCms = BestSellerCms::first();
        return view('frontend.gallery')->with(compact('galleries','details','bestSellerCms'));
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
