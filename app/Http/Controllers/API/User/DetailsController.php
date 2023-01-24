<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class DetailsController extends Controller
{
    public $successStatus = 200;
    /** 
     * User details api
     * 
     * @return \Illuminate\Http\Response 
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
