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

class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $successStatus = 200;
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
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
