<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\SendCodeResetPassword;
use App\Models\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    public function forgetPasswordShow()
    {
        return view('frontend.auth.forget-password');
    }

    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
        ]);
        // return $validator->errors();
        $count = User::role(['USER', 'BUSINESS_OWNER'])->where('email', $request->email)->count();
        if ($count > 0) {
            $user = User::where('email', $request->email)->select('id', 'name', 'email')->first();
            ResetPassword::where('email', $request->email)->delete();
             $id = Crypt::encrypt($user->id);
             $token = Str::random(20) . 'pass' . $user->id;
             ResetPassword::create([
                'email' => $request->email,
                'token' => $token
             ]);

             $details = [
                'id' => $id,
                'token' => $token
             ];

            Mail::to($request->email)->send(new SendCodeResetPassword($details));
            return redirect()->back()->with('message', "Please! check your mail to reset your password.");
        } else {
             return redirect()->back()->with('error', "Couldn't find your account!");
        }
    }

    public function resetPassword($id, $token)
    {
        // return "dfs";
        $user = User::findOrFail(Crypt::decrypt($id));
        $resetPassword = ResetPassword::where('email', $user->email)->orderBy('id', 'desc')->first();
         $newTime =  date('h:i A', strtotime( $resetPassword->created_at->addHour()));
        //  return $newTime;
        //  return date('h:i A');
        if ($newTime > date('h:i A')) {
            $id = $id;
            return view('frontend.auth.reset-password')->with(compact('id'));
        } else {
            return redirect()->route('errors.link-expire');
        }

        
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password'
        ]);
        // return $request->all();
        try {
            if ($request->id != '') {
                $id = Crypt::decrypt($request->id);
                User::where('id', $id)->update(['password' => bcrypt($request->password)]);
                return redirect()->route('login')->with('message', 'Password has been changed successfully.');
            } else {
                abort(404);
            }
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('message', 'Something went wrong.');
        }
       
    }
}
