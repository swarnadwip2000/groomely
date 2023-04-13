<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
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
}
