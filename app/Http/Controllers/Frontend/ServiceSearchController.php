<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use App\Models\SellerService;
use App\Models\ServiceCategory;
use App\Models\User;
use App\Models\Review;
use App\Models\BookingTime;
use App\Models\BestSellerCms;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ServiceSearchController extends Controller
{
    //
    public function serviceSearch(Request $request)
    {
        
        // try {
            if ($request->service) {
                $check_service = ServiceCategory::where('name', 'like', '%' . $request->service . '%')->get();
                if($check_service == '') {             
                    return redirect()->back()->with('error', 'Service not available');
                } else {
                    $servicename = $request->service;
                    $services =  SellerService::whereHas('service', function ($query) use ($servicename) {
                        $query->whereHas('additionalService', function($query) use($servicename){
                            $query->where('name', 'like', '%' . $servicename . '%');
                        });
                    })->groupby('service_id')->get();

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
                    
                    return view('frontend.package')->with(compact('services','details','bestSellerCms'));
                }    
            }
            else{
                return redirect()->back();
            }
    }

    public function serviceSerachByCategory(Request $request)
    {
        // return $request;
        $category = Category::where('slug',$request->category)->first();
        if($category !='')
        {
            $category_id = $category->id; 
            $services = SellerService::where('status',1)->with('service','service.additionalService:id,name','service.images')->whereHas('service', function($query) use($category_id){
                $query->whereHas('category', function($query) use($category_id){
                    $query->where('id', $category_id);
                });
            })->groupBy('service_id')->paginate(20);
        }else{
            $services = SellerService::where('status',1)->with('service','service.additionalService:id,name','service.images')->groupBy('service_id')->paginate(20);
        }

        return response()->json(['view'=>(String)View::make('frontend.package-filter')->with(compact('category','services'))]);
     
    }
}
