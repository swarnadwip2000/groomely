<?php

namespace App\Http\Controllers\API\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellerController extends Controller
{
    use SoftDeletes;
    public $successStatus = 200;

    public function sellerdetail()
    {
        // return "okkk";
        try {
            $count = User::where('id', Auth::user()->id)->role(['BUSINESS_OWNER'])->count();
            if ($count > 0) {
                $user = User::where('id', Auth::user()->id)->select('id', 'name', 'email','phone','zipcode','shop_name','profile_picture')->role(['BUSINESS_OWNER'])->first();
                return response()->json(['data' => $user, 'status' => true, 'message' => 'Details found successfully.'], $this->successStatus);
            } else {
                return response()->json(['message' => 'No detail found!', 'status' => false], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }      
    }

    public function updateProfile(Request $request)
    {
        try {
            $user = User::where('id', Auth::user()->id)->role(['BUSINESS_OWNER'])->first();
            if ($request->hasFile('image')) {
                $validator = Validator::make($request->all(), [
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                if ($validator->fails()) {
                    return response()->json(['error' => $validator->errors(), 'status' => false], 401);
                }
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $image_path = $request->file('image')->store('seller', 'public');
                $user->profile_picture = $image_path;
            }
            $user->shop_name = $request->shop_name;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->zipcode = $request->zipcode;
            if($request->password !=''){
            $user->password	 = bcrypt($request->password);
            }
            $user->save();
            return response()->json(['data' => $user, 'status' => true, 'message' => 'Profile updated successfully'], $this->successStatus);
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        } 
    }

    public function deleteProfile()
    {
        // return "okkk";
        try {
            $user = User::where('id', Auth::user()->id)->role(['BUSINESS_OWNER'])->first();
            $user->delete();

            return response()->json(['data' => $user, 'status' => true, 'message' => 'Profile deleted successfully'], $this->successStatus);
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }     
    }
}
