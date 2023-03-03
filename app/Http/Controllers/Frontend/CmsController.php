<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutCms;
use App\Models\BestSellerCms;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\HomeCms;
use App\Models\Service;
use App\Models\SellerService;
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
        $services = SellerService::where('status', 1)->orderBy('id', 'desc')->with('service')->get()->unique('service_id');
        $homeCms = HomeCms::first();

        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
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
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
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
        return view('frontend.about')->with(compact('aboutCms','bestSellerCms','details'));
    }

    public function services()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
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
        return view('frontend.services')->with(compact('servicesCms','bestSellerCms','details'));
    }

    public function bestSellers()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
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

        return view('frontend.best-sellers',compact('bestSellerCms','details'));
    }

    public function gallery()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
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
        return view('frontend.gallery')->with(compact('galleries','bestSellerCms','details'));
    }

    public function package()
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
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
        // $services = Service::where('status', 1)->orderBy('id','desc')->paginate(20);
        $services = SellerService::where('status', 1)->orderBy('id', 'desc')->with('service')->get()->unique('service_id');
        $bestSellerCms = BestSellerCms::first();
        return view('frontend.package')->with(compact('services','details','bestSellerCms'));
    }

    public function serviceCategory($slug, $id)
    {
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
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
        $services = Service::where('status', 1)->orderBy('id','desc')->paginate(20);
        $services = Service::where(['category_id'=>$id, 'status'=>1])->orderBy('id', 'desc')->paginate(20);
        $category = Category::findOrFail($id);
        return view('frontend.category')->with(compact('services', 'category','details'));
    }

}
