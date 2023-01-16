<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;



class ProfileController extends Controller
{
    public $successStatus = 200;

    public function updateProfile(Request $request)
    {
        try {   
            $user = User::where('id', Auth::user()->id)->first();
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
            return response()->json(['data' => $user, 'status' => true, 'message' => 'Profile updated successfully'], $this->successStatus);
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }     
    }

    public function changePassword(Request $request)
    {
        try {   
            $user = User::where('id', Auth::user()->id)->first();
            if(! Hash::check($request->old_password,$user->password)){
                return response()->json(['message' => 'Your old password does not matched' , 'status' => false], 401);
            }else{
                if($request->old_password == $request->new_password)
                {
                    return response()->json(['message' => "Old password and New password should be different" , 'status' => false], 401);
                }else{
                    if($request->new_password == $request->comfirm_password)
                    {
                        $user->password = Hash::make($request->new_password);
                        $now_time = Carbon::now()->toDateTimeString();   
                        $user->password_update_time = $now_time;
                        $user->update();
                        return response()->json(['message' => 'Password changed successfully' , 'status' => true, 'data' => $user], 200);
                    }
                    else{
                        return response()->json(['message' => "New password and Confirm password doesn't matched" , 'status' => false], 401);
                    } 
                }       
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }       
    }
}

