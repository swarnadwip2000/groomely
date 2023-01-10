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
                return response()->json(['data' => $category, 'status' => true, 'message' => 'Category find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['message' => 'Category not found!', 'status' => false], 401);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong!', 'status' => false], 401);
        }    
    }

    public function servicetype()
    {
        try {
            $service = ServiceType::select('id','name','image')->get(); 
            if($service !='')
            {
                return response()->json(['data' => $service, 'status' => true, 'message' => 'Servicetype find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['message' => 'Servicetype not found!', 'status' => false], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }
    }

    public function bookingtimes()
    {
        // return "okkk";
        try {
            $booking_time = BookingTime::select('id','time')->get();
            if($booking_time !='')
            {
                return response()->json(['data' => $booking_time, 'status' => true, 'message' => 'Booking time find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['message' => 'Bookingtimes not found!', 'status' => false], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
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
                return response()->json(['message' => 'Service not found!', 'status' => false], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }        

    }
}
