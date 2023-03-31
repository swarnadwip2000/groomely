<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function admin()
    {
        if (Auth::check() && Auth::user()->hasRole('ADMIN')) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email'    => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8'
        ]);
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me  )) {
            $user = User::where('email', $request->email)->select('id', 'name', 'email', 'status')->first();
            if ($user->hasRole('ADMIN') && $user->status == 1) {
                return redirect()->route('admin.dashboard');
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
        return redirect()->route('admin.login');
    }
}
