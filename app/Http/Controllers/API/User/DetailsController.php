<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
         $count = User::where('id', Auth::user()->id)->count();
        if ($count > 0) {
            $user = User::where('id', Auth::user()->id)->select('id', 'name', 'email')->first();
            return response()->json(['data' => $user, 'status' => true, 'message' => 'Details found successfully.'], $this->successStatus);
        } else {
            return response()->json(['messager' => 'No detail found!', 'status' => false], 401);
        }
    }

    public function allUserDetails()
    {
        $count = User::role(['USER','BUSINESS_OWNER'])->get();
        if ($count !='') {
            $user = User::role(['USER','BUSINESS_OWNER'])->select('id', 'name', 'email','phone','zipcode','profile_picture')->get();
            return response()->json(['status' => true, 'message' => 'Users details found successfully.', 'data' => $user], $this->successStatus);
        } else {
            return response()->json(['messager' => 'No detail found!', 'status' => false], 401);
        }
    }
}
