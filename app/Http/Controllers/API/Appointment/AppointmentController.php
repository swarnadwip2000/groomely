<?php

namespace App\Http\Controllers\API\Appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public $successStatus = 200;
    
    public function bookingcreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id'     => 'required',
            'booking_date' => 'required',
            'amount' => 'required',
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
        try {

            $user = User::where('id', Auth::user()->id)->first();
            $get_seller = Service::where('id',$request->service_id)->count();
            if($get_seller > 0)
            {
                $appointment_create = new Appointment;
                $appointment_create->user_id = $user->id;
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
}
