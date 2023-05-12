<?php

namespace App\Http\Controllers\API\Wishlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    //
    public function createwishlist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id'     => 'required',
        ]);
        try {   
            $count = User::where('id', Auth::user()->id)->count();
            if ($count > 0) {
                $user = User::where('id', Auth::user()->id)->first();
                $wishlist = new Wishlist();
                $wishlist->user_id = $user->id;
                $wishlist->service_id = $request->service_id;
                $wishlist->save();

                return response()->json(['status' => true,'statusCode' => 200,'message' => 'Wishlist created successfully.','data' => [
                        'wishlist' => $wishlist
                    ]
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'statusCode' => 401,
                    'error' => [
                        'message' => [
                            'User not found successfully.'
                        ]
                    ]
                ], 401);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'something went wrong' , 'status' => false], 401);
        }    

    }

    public function wishlisting(Request $request)
    {
        $count = User::where('id', Auth::user()->id)->count();
            if ($count > 0) {
                $user = User::where('id', Auth::user()->id)->first();
                $wishlist = Wishlist::where('user_id', $user->id)->with('service','service.category','service.additionalService')->get();

                return response()->json(['status' => true,'statusCode' => 200,'message' => 'Wishlist created successfully.','data' => [
                        'wishlist' => $wishlist
                    ]
                ], 200);
                
            }else{
                return response()->json([
                    'status' => false,
                    'statusCode' => 401,
                    'error' => [
                        'message' => [
                            'User not found successfully.'
                        ]
                    ]
                ], 401);
            }

    }
}
