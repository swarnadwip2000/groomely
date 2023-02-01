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
            $service = ServiceType::select('id','name','image')->get(); 
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

    public function servicedetails()
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
}
