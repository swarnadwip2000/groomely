<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Session;

/**
 * @group Authentication APIs
 *
 * APIs for Authentication
 */


class AuthController extends Controller
{
    public $successStatus = 200;
    /** 
     * login Api 
     * 
     * @return \Illuminate\Http\Response 
     * @bodyParam email string required email, must be unique.
     * @bodyParam password string required password, must be 8 character long.
     * @bodyParam user_type string required user_type, must be USER or BUSINESS_OWNER.
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Login successfully.",
     * "data": {
     * "user": {
     * "id": 1,
     * "name": "John Doe",
     * "email": "johh@yopmail.com",
     * "phone": "1234567890",
     * "zipcode": "123456",
     * "status": 1,
     *  "profile_picture": "customer/20210914121212image.jpg",
     * }
     * }
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The email field is required.",
     * "The password field is required.",
     * "The user type field is required."
     * 
     * ]
     *  }
     * }
     * @response 401 {
     * "message": "No detail found!",
     * "status": false
     * }
     */

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8',
            'user_type' => 'required|in:USER,BUSINESS_OWNER',
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
        try {
            $token_time = Carbon::now()->toDateTimeString();
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = User::where('email', $request->email)->select('id', 'name', 'email','phone','zipcode','status','profile_picture')->first();
                if ($request->user_type == 'USER') {
                    if ($user->hasRole('USER') && $user->status == 1 ) {
                        $data['auth_token'] = $user->createToken('accessToken')->accessToken;                        
                        Session::put('token_update_time',$token_time);                      
                        $data['user'] = $user->makeHidden('roles');
                        return response()->json(['status' => true, 'statusCode' => 200 ,'data' => $data,  'message' => 'Logged in successfully.'], $this->successStatus);
                    } else {
                        return response()->json([ 'status' => false , 'statusCode' => 401, 'message' => 'Email id & password was invalid!'], 401);
                    }
                } else {
                    if ($user->hasRole('BUSINESS_OWNER') && $user->status == 1) {
                        $data['auth_token'] = $user->createToken('accessToken')->accessToken;
                        $data['user'] = $user->makeHidden('roles');
                        Session::put('token_update_time',$token_time);
                        return response()->json(['status' => true, 'statusCode' => 200 ,'data' => $data,  'message' => 'Logged in successfully.'], $this->successStatus);
                    } else {
                        return response()->json([ 'status' => false, 'statusCode' => 401, 'message' => 'Email id & password was invalid!'], 401);
                    }
                }
            } else {
                return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'Email id & password was invalid!'], 401);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong!', 'status' => false], 401);
        }

        
    }

    /** 
     * Registration Api 
     * 
     * @return \Illuminate\Http\Response 
     * @bodyParam first_name string required first_name.
     * @bodyParam last_name string required last_name.
     * @bodyParam email string required email, must be unique.
     * @bodyParam password string required password, must be 8 character long.
     * @bodyParam phone string required phone.
     * @bodyParam zipcode string required zipcode.
     * @bodyParam user_type string required user_type, must be USER or BUSINESS_OWNER.
    
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Registration successfully.",
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
     * "The first_name field is required.",
     * "The last_name field is required.",
     * "The email type field is required.",
     * "The email field is required.",
     * "The password field is required.",
     * "The user type field is required."
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
    public function register(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'phone' => 'required|unique:users',
            'zipcode'  => 'required|numeric',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password', 
            'user_type' => 'required|in:USER,BUSINESS_OWNER',
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
            return response()->json([ 'status' => false ,'statusCode' => 401, 'error' => $errors], 401);
        }
        try {
            $input = $request->all();
            $user = new User;
            $user->name = $input['first_name'] . " " . $input['last_name'];
            $user->email = $input['email'];
            $user->phone = $input['phone'];
            $user->zipcode = $input['zipcode'];
            $user->password = bcrypt($input['password']);
            $user->status = true;
            $user->save();
            if ($request->user_type == 'USER') {
                $user->assignRole('USER');
            } else {
                $user->assignRole('BUSINESS_OWNER');
            }
            $data =  $user->makeHidden('roles', 'updated_at', 'created_at');
            return response()->json(['status' => true, 'statusCode' => 200, 'data' => $data , 'message' => 'Registered successfully'], $this->successStatus);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'Something went wrong!'], 401);
        }
    }
}

