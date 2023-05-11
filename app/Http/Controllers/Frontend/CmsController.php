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
use App\Models\Offer;
use App\Models\Appointment;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function home()
    {
        $servicesCms = ServiceCms::orderby('id','desc')->get();
        $categories = Category::where('status', 1)->get();
        $services = SellerService::where('status', 1)->orderBy('id', 'desc')->with('service','user')->get()->unique('service_id');
        $homeCms = HomeCms::first();
        $offers = Offer::orderBy('id', 'desc')->get();

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
        $our_shops = SellerService::where('status', 1)->orderBy('id', 'desc')->with('user')->get()->unique('user_id');
        
        $details = collect($shop_detail)->sortByDesc('total');
        $bestSellerCms = BestSellerCms::first();
        
        return view('frontend.home')->with(compact('categories','services', 'homeCms', 'servicesCms','details','bestSellerCms','shop','our_shops','offers'));
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
        $services = SellerService::where('status',1)->with('service','service.additionalService:id,name','service.images')->whereHas('service', function($query) use($id){
            $query->whereHas('category', function($query) use($id){
                $query->where('id', $id);
            });
        })->groupBy('service_id')->paginate(20);
        // dd($services);
        $category = Category::findOrFail($id);
        $bestSellerCms = BestSellerCms::first();
        return view('frontend.category')->with(compact('services', 'category','details','bestSellerCms'));
    }

    public function shopCategory($slug, $id)
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
        $category = $id; 
        $shops = SellerService::select('user_id')->with('user')->whereHas('service', function ($query) use ($category) {
            $query->whereHas('category', function($query) use($category){
                $query->where('category_id',$category);
            });
        })->groupby('user_id')->get();
        $category = Category::findOrFail($id);
        $bestSellerCms = BestSellerCms::first();
        return view('frontend.shop-list')->with(compact('shops', 'category','details','bestSellerCms'));
    }

    public function shopServices($id)
    {
        $seller_services = SellerService::where('user_id', $id)->where('status', 1)->with('service')->paginate(20);
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
        $shop_name = User::findOrFail($id);
        return view('frontend.seller-shops')->with(compact('seller_services','details','bestSellerCms','shop_name'));
    }
}
