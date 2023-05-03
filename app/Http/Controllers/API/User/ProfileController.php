<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


/**
 * @group Profile APIs
 *
 * APIs for Profile
 */

class ProfileController extends Controller
{
    public $successStatus = 200;

    
    /**
     * Profile Update API
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @bodyParam name string required name
     * @bodyParam email file required User email
     * @bodyParam phone string required phone
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
     * "The name field is required.",
     * "The email field is required.",
     * "The phone field is required."
     * ]
     * }
     * }
     * @response 401 {
     *  "message": "No detail found!",
     * "status": false
     * }
     */ 

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email' => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'phone' => 'required|numeric|min:10',
        ]);
        try {   
            $user = User::where('id', Auth::user()->id)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            if($request->password !=''){
                $user->password	 = bcrypt($request->password);
                $now_time = Carbon::now()->toDateTimeString();   
                $user->password_update_time = $now_time;
            }
            if ($request->hasFile('profile_picture')) {
                
                $validator = Validator::make($request->all(), [
                    'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                if ($validator->fails()) {
                    return response()->json(['error' => $validator->errors(), 'status' => false], 401);
                }
                $file= $request->file('profile_picture');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $image_path = $request->file('profile_picture')->store('customer', 'public');
                $user->profile_picture = $image_path;
            }
            $user->save();
            return response()->json(['status' => true,'statusCode' => 200, 'data' => $user, 'message' => 'Profile updated successfully'], $this->successStatus);
        } catch (Exception $e) {
            return response()->json([ 'status' => false, 'statusCode' => 401 ,'message' => 'something went wrong'], 401);
        }     
    }

    
    /**
     * Change Password API
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @bodyParam old_password string required Old Password
     * @bodyParam new_password string required New Password
     * @bodyParam comfirm_password string required Confirm Password
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Password change successfully."
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The Old Password field is required.",
     * "The New Password field is required.",
     * "The Confirm Password field is required."
     * ]
     * }
     * }
     * 
     */

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password'    => 'required|min:8|password',
            'new_password' => 'required|min:8|different:old_password',
            'comfirm_password' => 'required|min:8|same:new_password', 
        ],[
            'old_password.password'=> 'Old password is not correct',
        ]);

        if ($validator->fails()) {

            $errors['message'] = [];
            $data = explode(',', $validator->errors());
            for ($i = 0; $i < count($validator->errors()); $i++) {
                // return $data[$i];
                $dk = explode('["', $data[$i]);
                $ck = explode('"]', $dk[1]);
                $errors['message'][$i] = $ck[0];
            }
            return response()->json(['status' => false, 'statusCode' => 401,  'error' => $errors], 401);
        }

        $user = User::where('id', Auth::user()->id)->first();
        try {           
            
            $user->password = Hash::make($request->new_password);
            $now_time = Carbon::now()->toDateTimeString();   
            $user->password_update_time = $now_time;
            $user->update();
            return response()->json(['message' => 'Password changed successfully' , 'status' => true, 'data' => $user], 200);
             
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }       
    }
}

