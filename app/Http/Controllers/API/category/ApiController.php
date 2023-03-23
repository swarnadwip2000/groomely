<?php

namespace App\Http\Controllers\API\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\BookingTime;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\SellerService;
use App\Models\Review;
use Exception;


use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{
    public $successStatus = 200;
    public function category()
    {
        try {
            $category = Category::select('id','name','slug','icon')->where('status',1)->get(); 
            if($category !='')
            {
                return response()->json([ 'status' => true, 'statusCode' => 200, 'data' => $category, 'message' => 'Category find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'Category not found!'], 401);
            }
        } catch (\Throwable $th) {
            return response()->json([ 'status' => false, 'statusCode' => 401, 'message' => 'Something went wrong!'], 401);
        }    
    }

    public function servicetype()
    {
        try {
            $service = ServiceType::select('id','name','image')->where('status',1)->get(); 
            if($service !='')
            {
                return response()->json(['status' => true, 'statusCode' => 200, 'data' => $service, 'message' => 'Servicetype find successfully'], $this->successStatus);
            }
            else{
                return response()->json([ 'status' => false, 'statusCode' => 401, 'message' => 'Servicetype not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong'], 401);
        }
    }

    public function bookingtimes()
    {
        // return "okkk";
        try {
            $booking_time = BookingTime::select('id','time')->get();
            if($booking_time !='')
            {
                return response()->json(['status' => true, 'statusCode' => $this->successStatus, 'data' => $booking_time, 'message' => 'Booking time find successfully'], $this->successStatus);
            }
            else{
                return response()->json([ 'status' => false,  'statusCode' => 401, 'message' => 'Bookingtimes not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json([ 'status' => false , 'statusCode' => 401, 'message' => 'something went wrong'], 401);
        }    
    }

    public function servicelist()
    {
        // return "okkk";
        try {
            $service_list = Service::where('status',1)->get();
            if($service_list !='')
            {
                return response()->json(['data' => $service_list, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }        

    }

    public function servicedetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id'     => 'required|numeric|gt:0',
        ]);
        if ($validator->fails()) {
            $errors['status_code'] = 401;
            $errors['message'] = [];
            $data = explode(',', $validator->errors());

            for ($i = 0; $i < count($validator->errors()); $i++) {
                // return $data[$i];
                $dk = explode('["', $data[$i]);
                $ck = explode('"]', $dk[1]);
                $errors['message'][$i] = $ck[0];
            }
            return response()->json(['error' => $errors, 'status' => false], 401);
        }
        
        $service_detail = Service::with('images','additionalService','SellerService','SellerService.user:id,shop_name')->select('id','duration','description','additional_service_id')->where('id',$request->service_id)->first();
        if($service_detail !='')
        {
            return response()->json(['data' => $service_detail, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
        }
        else{
            return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service not found!'], 401);
        }
    
    }

    public function popularServices()
    {
        try {
            $services = Service::where('status',1)->where('popular_services',1)->with('additionalService','review')->get();
            if($services !='')
            {              
                $val=[];
                foreach($services as $service)
                {                    
                    $seller_exit = SellerService::where('service_id',$service->id)->where('status',1)->count();
                    if($seller_exit > 0)
                    {
                        $val[] = $service;
                    }    
                }
                $popular_services = collect($val);
                return response()->json(['data' => $popular_services, 'status' => true, 'message' => 'Popular service find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Popular service not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }        
    }

    public function serviceTypes(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id'     => 'required|numeric|gt:0',
        ]);

        try {
            $service_type = ServiceType::where('category_id',$request->category_id)->where('status',1)->get();
            if($service_type !='')
                {
                    return response()->json(['data' => $service_type, 'status' => true, 'message' => 'Service type find successfully'], $this->successStatus);
                }
                else{
                    return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service type not found!'], 401);
                }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        } 
    }

    public function servicelistByServiceType(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'service_type'     => 'required',
        ]);
        
        try {
            $service_type = $request->service_type;
            // $Allservices = Service::where('service_type_id',$request->service_type)->where('status',1)->with('additionalService','images','SellerService')->get();
            $Allservices = SellerService::where('status',1)->with('service','service.additionalService:id,name','service.images','service.SellerService','service.review')->whereHas('service', function($query) use($service_type){
                $query->whereHas('serviceType', function($query) use($service_type){
                    $query->where('service_type_id', $service_type)->where('status',1);
                });
            })->groupBy('service_id')->get();
           
            if($Allservices !='')
            {
                return response()->json(['data' => $Allservices, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }
    }
}
