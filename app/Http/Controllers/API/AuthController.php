<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public $successStatus = 200;
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8',
            'user_type' => 'required|in:USER,BUSINESS_OWNER',
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

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::where('email', $request->email)->select('id', 'name', 'email','status')->first();
            if ($request->user_type == 'USER') {
                if ($user->hasRole('USER') && $user->status == 1 ) {
                    $data['auth_token'] = $user->createToken('accessToken')->accessToken;
                    $data['user'] = $user->makeHidden('roles');
                    return response()->json(['data' => $data, 'status' => true, 'message' => 'Logged in successfully.'], $this->successStatus);
                } else {
                    return response()->json(['messager' => 'Email id & password was invalid!', 'status' => false], 401);
                }
            } else {
                if ($user->hasRole('BUSINESS_OWNER') && $user->status == 1) {
                    $data['auth_token'] = $user->createToken('accessToken')->accessToken;
                    $data['user'] = $user->makeHidden('roles');
                    return response()->json(['data' => $data, 'status' => true, 'message' => 'Logged in successfully.'], $this->successStatus);
                } else {
                    return response()->json(['messager' => 'Email id & password was invalid!', 'status' => false], 401);
                }
            }
        } else {
            return response()->json(['messager' => 'Email id & password was invalid!', 'status' => false], 401);
        }
    }

    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|email|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8',
            'user_type' => 'required|in:USER,BUSINESS_OWNER',
        ],[
            'email.email' => 'The email format is invalid.',
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
        $input = $request->all();
        $user = new User;
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = bcrypt($input['password']);
        $user->status = true;
        $user->save();
        if ($request->user_type == 'USER') {
            $user->assignRole('USER');
        } else {
            $user->assignRole('BUSINESS_OWNER');
        }
        $user->createToken('accessToken')->accessToken;
        $data =  $user->makeHidden('roles', 'updated_at', 'created_at');
        return response()->json(['data' => $data, 'status' => true, 'message' => 'Registered sucessfully'], $this->successStatus);
    }

    
}

