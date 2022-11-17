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
        $count = User::where('id', Auth::user()->id)->count();
        if ($count > 0) {
            $user = User::where('id', Auth::user()->id)->select('id', 'name', 'email','phone','zipcode','shop_name','profile_picture')->first();
            return response()->json(['data' => $user, 'status' => true, 'message' => 'Details found successfully.'], $this->successStatus);
        } else {
            return response()->json(['messager' => 'No detail found!', 'status' => false], 401);
        }
    }

    public function updateProfile(Request $request)
    {
        
        $user = User::where('id', Auth::user()->id)->first();
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
    }

    public function deleteProfile()
    {
        // return "okkk";
        $user = User::where('id', Auth::user()->id)->first();
        $user->delete();

        return response()->json(['data' => $user, 'status' => true, 'message' => 'Profile deleted successfully'], $this->successStatus);
        
    }
}
