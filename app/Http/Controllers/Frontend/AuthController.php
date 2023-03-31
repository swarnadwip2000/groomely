<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'first_name'     => 'required',
            'last_name'     => 'required',
            'zipcode'     => 'required|numeric',
            'phone'     => 'required|numeric|digits:10',
            'email'    => 'required|email|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8',
            'user_type' => 'required',
            'confirm_password' => 'required|min:8|same:password',
            'confirm' => 'required',
        ], [
            'email.email' => 'The email format is invalid.',
            'confirm.required' => 'Please fill the filed.'
        ]);

        $input = $request->all();
        $user = new User;
        $user->name = $input['first_name'] . " " . $input['last_name'];
        $user->email = $input['email'];
        $user->zipcode = $input['zipcode'];
        $user->phone = $input['phone'];
        $user->password = bcrypt($input['password']);
        $user->save();
        if ($request->user_type == 'USER') {
            $user->assignRole('USER');
        } else {
            $user->assignRole('BUSINESS_OWNER');
        }

        $email = $request->email;

        $maildata = [
            'user' => $user,
        ];

        Mail::to($email)->send(new RegistrationMail($maildata));
        return redirect()->route('login')->with('message', 'Your account was created successfully.');
    }

    public function loginCheck(Request $request)
    {
        // return $request->all();
        $request->validate([
            'email'    => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8',
            'user_type' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::where('email', $request->email)->select('id', 'name', 'email', 'status')->first();

            if ($request->user_type == 'USER' && $user->hasRole('USER') && $user->status == 1) {
                return redirect()->route('appointments.index');
            } else if ($request->user_type == 'BUSINESS_OWNER' && $user->hasRole('BUSINESS_OWNER') && $user->status == 1) {
                return redirect()->route('seller.dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Invalid email or password!');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email or password!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
