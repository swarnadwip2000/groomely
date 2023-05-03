<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

/**
 * @group User details APIs
 *
 * APIs for User details
 */


class DetailsController extends Controller
{
    public $successStatus = 200;

    /**
     * Get Profile Details API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Profile found successfully.",
     * "data": {
     * "user": {
     * "id": 1,
     * "name": "John Doe",
     * "email": "johh@yopmail.com",
     * "phone": "1234567890",
     * "zipcode": "123456"
     * 
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

    public function details()
    {
        try {
            $count = User::where('id', Auth::user()->id)->count();
            if ($count > 0) {
                $user = User::where('id', Auth::user()->id)->select('id', 'name', 'email','phone','zipcode')->first();
                $data['user'] = $user;
                return response()->json(['status' => true, 'statusCode' => 200, 'message' => 'Details found successfully.', 'data' => $data], $this->successStatus);
            } else {
                return response()->json(['message' => 'No detail found!', 'status' => false], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }    
    }

     /**
     *  All User Details API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     *   "statusCode": 200,
     *   "data": [
     *       {
     *           "id": "1",
     *           "name": "John Doe",
     *           "email": "johh@yopmail.com",
     *           "phone": "1234567890",
     *           "zipcode": "123456",
     *           "profile_picture": "profile_picture/1629796360.jpg"
     *       }
     *   ]
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "No detail found!"
     * ]
     * }
     * }
     */

    public function allUserDetails()
    {
        try {
            $count = User::role(['USER','BUSINESS_OWNER'])->get();
            if ($count !='') {
                $user = User::role(['USER','BUSINESS_OWNER'])->select('id', 'name', 'email','phone','zipcode','profile_picture')->get();
                return response()->json(['status' => true, 'message' => 'Users details found successfully.', 'data' => $user], $this->successStatus);
            } else {
                return response()->json(['message' => 'No detail found!', 'status' => false], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }      
    }
}
