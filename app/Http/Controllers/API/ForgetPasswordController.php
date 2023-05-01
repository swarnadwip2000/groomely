<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\SendCodeResetPassword;
use App\Models\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    public $successStatus = 200;
    
    /**
     * Forget Password API
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @bodyParam email string required Email
     * @response {
     *  "status": true,
     *   "statusCode": 200,
     *     "message": "OTP sent successfully."
     *  }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The email field is required."
     * ]
     * }
     * }
     * @response 401 {
     * "message": "Email not found!",
     * "status": false
     * }
     * @response 401 {
     * "message": "Email not found!",
     * "status": false
     * }
     * 
     */

    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
        ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors(), 'status' => false], 401);
            }

            try {

                $count = User::where('email', $request->email)->count();
                if ($count > 0) {
                    $user = User::where('email', $request->email)->select('id', 'name', 'email')->first();
                    ResetPassword::where('email', $request->email)->delete();
                    $id = Crypt::encrypt($user->id);
                    $token = Str::random(20) . 'pass' . $user->id;
                    ResetPassword::create([
                        'email' => $request->email,
                        'token' => $token
                    ]);

                    $details = [
                        'id' => $id,
                        'token' => $token
                    ];

                    Mail::to($request->email)->send(new SendCodeResetPassword($details));
                    return response()->json(['data' => $user, 'status' => true, 'message' => 'Please! check your mail.'], $this->successStatus);
                } else {
                    return response()->json(['message' => "Couldn't find your account!", 'status' => false], 401);
                }
            } catch (Exception $e) {
                return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
            }      
    }
}
