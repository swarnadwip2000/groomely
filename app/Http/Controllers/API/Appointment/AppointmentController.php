<?php

namespace App\Http\Controllers\API\Appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\SellerService;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * @group Appointments APIs
 *
 * APIs for Appointments
 */

class AppointmentController extends Controller
{
    public $successStatus = 200;

    /** 
     * Booking Create Api 
     * 
     * @return \Illuminate\Http\Response 
     * @bodyParam service_id string required service_id.
     * @bodyParam seller_id string required seller_id.
     * @bodyParam booking_date string required booking_date.
     * @bodyParam amount string required amount.
     * @bodyParam booking_time_id string required booking_time_id.
    
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Booking successfully.",
     * "data": {
     * "user": {
     * "id": 1,
     * "name": "John Doe",
     * "email": "johh@yopmail.com"
     * }
     * }
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The service_id field is required.",
     * "The seller_id field is required.",
     * "The booking_date type field is required.",
     * "The amount field is required.",
     * "The booking_time_id field is required."
     * 
     * 
     * ]
     *  }
     * }
     * @response 401 {
     * "message": "No detail found!",
     * "status": false
     * }
     */
    
    public function bookingcreate(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'service_id'     => 'required|numeric|gt:0',
            'seller_id' => 'required|numeric|gt:0',
            'booking_date' => 'required',
            'amount' => 'required',
            'booking_time_id' => 'required|numeric|gt:0',
        ]);

        if ($validator->fails()) {
            $errors['status_code'] = 401;
            $errors['message'] = [];
            $data = explode(',', $validator->errors());

            for ($i = 0; $i < count($validator->errors()); $i++) {
                $dk = explode('["', $data[$i]);
                $ck = explode('"]', $dk[1]);
                $errors['message'][$i] = $ck[0];
            }
            return response()->json(['error' => $errors, 'status' => false], 401);
        }
        try {

            $user = User::where('id', Auth::user()->id)->first();
            $check_service = SellerService::where('user_id',$request->seller_id)->where('service_id',$request->service_id)->count();
          
            if($check_service > 0)
            {
                $appointment_create = new Appointment;
                $appointment_create->user_id = $user->id;
                $appointment_create->seller_id = $request->seller_id;
                $appointment_create->service_id = $request->service_id;
                $appointment_create->name = $user->name;
                $appointment_create->email = $user->email;
                $appointment_create->phone = $user->phone;
                $appointment_create->booking_date = $request->booking_date;
                $appointment_create->booking_time_id = $request->booking_time_id;
                $appointment_create->amount = $request->amount;
                $appointment_create->save();

                return response()->json(['data' => $appointment_create, 'status' => true, 'message' => 'Booking successfully'], $this->successStatus);
            }else{
                return response()->json(['message' => 'Something went wrong!', 'status' => false], 401);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong!', 'status' => false], 401);
        }
    }

      /**
     * Booking List API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     *   "statusCode": 200,
     *   "data": [
     *       {
     *           "id": "1",
     *           "time": "9:00 am - 10:00 am"
     *       }
     *   ]
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "No detail found!"
     * ]
     * }
     * }
    */ 


    public function bookinglist()
    {
        try {
            $check_appointment = Appointment::where('user_id', Auth::user()->id)->count();
            if($check_appointment > 0)
            {
                $appointments = Appointment::select('id','seller_id','booking_date','booking_time_id','amount','service_id','status')->where('user_id', Auth::user()->id)->with('seller','service','bookingTime:id,time')->get();
                
                return response()->json(['data' => $appointments, 'status' => true, 'message' => 'Booking successfully'], $this->successStatus);
            }else{
                return response()->json(['message' => 'No booking found!', 'status' => false], 401);
            } 
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong!', 'status' => false], 401);
        }   
    }

    /**
     * Get Booking Details API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Booking found successfully.",
     * "data": {
     * "user": {
     * "id": 1,
     * "name": "John Doe",
     * "email": "johh@yopmail.com",
     * "phone": "1234567890",
     * "zipcode": "123456"
     * 
     * }
     * }
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "No booking found!."
     * ]
     *  }
     * }
     * @response 401 {
     * "message": "No detail found!",
     * "status": false
     * }
     */

    public function bookingDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'appointment_id'     => 'required|numeric|gt:0',
        ]);

        if ($validator->fails()) {
            $errors['status_code'] = 401;
            $errors['message'] = [];
            $data = explode(',', $validator->errors());

            for ($i = 0; $i < count($validator->errors()); $i++) {
                $dk = explode('["', $data[$i]);
                $ck = explode('"]', $dk[1]);
                $errors['message'][$i] = $ck[0];
            }
            return response()->json(['error' => $errors, 'status' => false], 401);
        }
        
        try {
            $check_appointment = Appointment::where('id',$request->appointment_id)->where('user_id', Auth::user()->id)->count();
            if($check_appointment > 0)
            {
                $appointments = Appointment::select('id','seller_id','booking_date','booking_time_id','name','email','phone','amount','service_id','status')->where('id',$request->appointment_id)->where('user_id', Auth::user()->id)->with('seller','service','bookingTime:id,time','service.additionalService:id,name','service.category:id,name')->first();
                
                return response()->json(['data' => $appointments, 'status' => true, 'message' => 'Booking successfully'], $this->successStatus);
            }else{
                return response()->json(['message' => 'No booking found!', 'status' => false], 401);
            } 
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong!', 'status' => false], 401);
        }   

    }

    /**
     * Review Submit API
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @bodyParam appointment_id string required appointment_id
     * @bodyParam service_id  required User service_id
     * @bodyParam comment string required comment
     * @bodyParam rating string required rating
     * 
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "data": {
     *     "id": 1,
     *     "name": "John Doe",
     *     "email": "john@yopmail.com",
     *     "phone": "1234567890",
     *     "zipcode": "123456",
     *     "status": 1,
     *     "profile_picture": "customer/2021-08-11-1628661381.jpg",
     *     "created_at": "2023-03-15T06:15:27.000000Z",
     *     "updated_at": "2023-04-25T06:57:45.000000Z"
     * },
     * "message": "Profile updated successfully"
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The appointment_id field is required.",
     * "The service_id field is required.",
     * "The comment field is required.",
     * "The rating field is required."
     * ]
     * }
     * }
     * @response 401 {
     *  "message": "No detail found!",
     * "status": false
     * }
     */ 

    public function reviewSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'appointment_id'     => 'required|numeric|gt:0',
            'service_id'     => 'required|numeric|gt:0',
            'comment'     => 'required',
            "rating" => "required|numeric|min:1|max:5",
        ]);

        if ($validator->fails()) {
            $errors['status_code'] = 401;
            $errors['message'] = [];
            $data = explode(',', $validator->errors());

            for ($i = 0; $i < count($validator->errors()); $i++) {
                $dk = explode('["', $data[$i]);
                $ck = explode('"]', $dk[1]);
                $errors['message'][$i] = $ck[0];
            }
            return response()->json(['error' => $errors, 'status' => false], 401);
        }
        
        try {
            $check_reviews = Review::where('appointment_id',$request->appointment_id)->where('service_id',$request->service_id)->count();
            if($check_reviews > 0)
            {
                $review_submit = Review::where('appointment_id',$request->appointment_id)->where('service_id',$request->service_id)->update([
                    'comment' => $request->comment,
                    'rating' => $request->rating,
                ]);

                return response()->json(['data' => $review_submit, 'status' => true, 'message' => 'Review updated successfully'], $this->successStatus);
                
            }else{
                $review = new Review;
                $review->appointment_id = $request->appointment_id;
                $review->service_id = $request->service_id;
                $review->comment = $request->comment;
                $review->rating = $request->rating;
                $review->save();

                return response()->json(['data' => $review_submit, 'status' => true, 'message' => 'Review submitted successfully'], $this->successStatus);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong!', 'status' => false], 401);
        }
    }
}
