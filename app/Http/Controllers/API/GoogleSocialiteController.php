<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use File;
use Illuminate\Support\Facades\Storage;

/**
 * @group Social Login APIs
 *
 * APIs for Social Login
 */


class GoogleSocialiteController extends Controller
{
    
    public $successStatus = 200;
    /**
     * Getting Strarted Api.
     * @bodyParam provider string required provider, must be google or facebook.
     * @return void
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Logged in successfully.",
     * "data": {
     * "auth_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1N",
     * "user_details": {
     * "id": 1,
     * "name": "John Doe",
     * "email": "john@gmail.com",
     * "email_verified_at": null,
     * "phone": "1234567890",
     * "zipcode": "123456",
     * "status": 1,
     * "profile_picture": "user/20210914121212image.jpg",
     * "created_at": "2021-09-14T12:12:12.000000Z",
     * "updated_at": "2021-09-14T12:12:12.000000Z",
     * "deleted_at": null,
     * "login_status": 1,
     * "google_id": "1234567890",
     * "social_type": "google"
     * }
     * }
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The provider field is required."
     * ]
     * }
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

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }

    /**
     * Social login Api.
     * @bodyParam provider string required provider, must be google or facebook.
     * @return void
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Logged in successfully.",
     * "data": {
     * "auth_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1N",
     * "user_details": {
     * "id": 1,
     * "name": "John Doe",
     * "email": "john@gmail.com",
     * "email_verified_at": null,
     * "phone": "1234567890",
     * "zipcode": "123456",
     * "status": 1,
     * "profile_picture": "user/20210914121212image.jpg",
     * "created_at": "2021-09-14T12:12:12.000000Z",
     * "updated_at": "2021-09-14T12:12:12.000000Z",
     * "deleted_at": null,
     * "login_status": 1,
     * "google_id": "1234567890",
     * "social_type": "google"
     * }
     * }
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The provider field is required."
     * ]
     * }
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
    public function handleCallback($provider)
    {

            $user = Socialite::driver($provider)->stateless()->user();

            $finduser = User::where('email', $user->email)->first();

            if($finduser){
                $data['auth_token'] = $finduser->createToken('accessToken')->accessToken;
                return response()->json(['data' => $data, 'status' => true, 'message' => 'Logged in successfully.'], $this->successStatus);

            }else{

               $user->avatar = NULL;

                if($user->avatar !='')
                {
                    $fileContents = file_get_contents($user->avatar);
                    $filename = 'en'. $user->id . date('YmdHi').'.jpg';
                    Storage::put('public/user/'.$filename, $fileContents);
                    $file_name = 'user/'.$filename;
                }else{
                    $file_name = NULL;
                }

               
                    $newUser = new User();
                    $newUser->name = $user->name;
                    $newUser->email = $user->email;
                    
                    if($provider == 'google')
                    {
                        $newUser->google_id = $user->id;
                        $newUser->social_type =  'google';
                    }else {
                        $newUser->facebook_id =  $user->id;
                        $newUser->social_type = 'facebook';
                    }
                    $newUser->password = Hash::make($user->name.'@'.$user->id);
                    $newUser->profile_picture = $file_name;
                    $newUser->login_status = true;
                    $newUser->save();
                    $data['auth_token'] = $newUser->createToken('accessToken')->accessToken;  
                    $data['user_details'] = $newUser;

                    return response()->json(['data' => $data, 'status' => true, 'message' => 'Logged in successfully.'], $this->successStatus);
            }

    }

}
