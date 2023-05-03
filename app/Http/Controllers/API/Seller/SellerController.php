<?php

namespace App\Http\Controllers\API\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @group Seller details APIs
 *
 * APIs for Seller details
 */

class SellerController extends Controller
{
    use SoftDeletes;
    public $successStatus = 200;

    /**
     * Get Seller Details API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Seller Profile found successfully.",
     * "data": {
     * "user": {
     * "id": 1,
     * "name": "John Doe",
     * "email": "johh@yopmail.com",
     * "phone": "1234567890",
     * "zipcode": "123456",
     * "shop_name": "Shop Name",
     * "profile_picture": "seller/20210914121212image.jpg",
     * }
     * }
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "Profile not found successfully."
     * ]
     *  }
     * }
     * @response 401 {
     * "message": "No detail found!",
     * "status": false
     * }
     */
    public function sellerdetail()
    {
        
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

     
    /**
     * Seller Profile Update API
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
     *    "shop_name": "Shop Name",
     *     "status": 1,
     *     "profile_picture": "seller/20210914121212image.jpg",
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
     * "The phone field is required.",
     * "The shop name field is required."
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
            'shop_name' => 'required',
        ]);
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

     /**
     *  Delete Profile API
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @response {
     *   "status": true,
     *   "statusCode": 200,
     *   "data": 
     *       {
     *              "id": 1,
     *              "name": "John Doe",
     *              "email": "john@yopmail.com",
     *              "phone": "1234567890",
     *              "zipcode": "123456",
     *              "shop_name": "Shop Name",
     *              "status": 1,
     *              "profile_picture": "user/GXQaUw5vXxNTXQ4YJ2qJNlJ2O9naz8KDHTJNRyvr.png",
     *              "created_at": "2023-03-15T06:15:27.000000Z",
     *              "updated_at": "2023-04-25T06:57:45.000000Z"
     *       },
     *     "message": "Profile deleted successfully"
     *      }
     * @response 401 {
     *   "status": false,
     *   "statusCode": 401,
     *   "error": {
     *   "message": [
     *   "User not found."
     * ]
     * }
     * }
     */

    public function deleteProfile()
    {
        
        try {
            $user = User::where('id', Auth::user()->id)->role(['BUSINESS_OWNER'])->first();
            $user->delete();

            return response()->json(['data' => $user, 'status' => true, 'message' => 'Profile deleted successfully'], $this->successStatus);
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }     
    }
}
