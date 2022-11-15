<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\SendCodeResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class ForgetPasswordController extends Controller
{
    public function forgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
        ]);

        $count = User::where('email', $request->email)->count();
        if ($count > 0) {
            $user = User::where('email', $request->email)->select('id', 'name', 'email')->first();
             $id = Crypt::encrypt($user->id);
            Mail::to($request->email)->send(new SendCodeResetPassword($id));
            return redirect()->back()->with('message', "Please! check your mail to reset your password.");
        } else {
             return redirect()->back()->with('message', "Couldn't find your account!");
        }
    }

    public function resetPassword($id)
    {
        return $id;
        $id = Crypt::decrypt($id);
        echo $id;
        return "done";
    }
}
