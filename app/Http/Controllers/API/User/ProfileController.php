<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public $successStatus = 200;

    public function updateProfile(Request $request)
    {
        
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
    }
}
