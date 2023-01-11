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

          return  $user = Socialite::driver($provider)->stateless()->user();

            $finduser = User::where('email', $user->email)->first();

            if($finduser){

             $chhk = Auth::login($finduser);
            return response()->json(['message' => 'User login successfully', 'status' => true], 200);

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

                if($provider == 'google')
                {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id'=> $user->id,
                        'social_type'=> 'google',
                        'password' => Hash::make($user->name.'@'.$user->id),
                        'profile_picture' => $file_name,
                        'login_status' =>true
                    ]);

                }else if($provider == 'facebook') {

                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'facebook_id'=> $user->id,
                        'social_type'=> 'facebook',
                        'password' => Hash::make($user->name.'@'.$user->id),
                        'profile_picture' => $file_name,
                        'login_status' =>true
                    ]);
                }

                Auth::login($newUser);

                return response()->json(['message' => 'login successfully', 'status' => true], 200);
            }


    }




}
