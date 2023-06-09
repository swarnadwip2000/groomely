<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\SendCodeResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class ForgetPasswordController extends Controller
{
    public $successStatus = 200;
    /** 
     * forget password api 
     * 
     * @return \Illuminate\Http\Response 
     */

    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors(), 'status' => false], 401);
        }

        $count = User::where('email', $request->email)->count();
        if ($count > 0) {
            $user = User::where('email', $request->email)->select('id', 'name', 'email')->first();
             $id = Crypt::encrypt($user->id);
            Mail::to($request->email)->send(new SendCodeResetPassword($id));
            return response()->json(['data' => $user, 'status' => true, 'message' => 'Please! check your mail.'], $this->successStatus);
        } else {
            return response()->json(['messager' => "Couldn't find your account!", 'status' => false], 401);
        }
    }
}
