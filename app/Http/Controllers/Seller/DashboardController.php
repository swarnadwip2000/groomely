<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $count['accepted'] = Appointment::where('status', 'accepted')->whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->count();
        $count['reshedule'] = Appointment::where('status', 'reshedule')->whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->count();

        $count['completed'] = Appointment::where('status', 'completed')->whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->count();

        $count['cancelled'] = Appointment::where('status', 'cancelled')->whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->count();

        return view('seller.dashboard')->with(compact('count'));
    }

    public function profile()
    {
        return view('seller.profile');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,' . Auth::user()->id,
            'phone'    => 'required|numeric|min:10',
            'shop_name'    => 'required',
        ]);

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->shop_name = $request->shop_name;
        $data->phone = $request->phone;
        if ($request->password) {
            $request->validate([
                'password' => 'required|min:8',
            ]);
            $data->password = bcrypt($request->password);
        }
        $now_time = Carbon::now()->toDateTimeString();  
        $data->password_update_time = $now_time;


        if ($request->hasFile('profile_picture')) {
            $request->validate([
                'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $file = $request->file('profile_picture');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $image_path = $request->file('profile_picture')->store('seller', 'public');
            $data->profile_picture = $image_path;
        }
        $data->save();
        return redirect()->back()->with('message', 'Profile updated successfully.');
    }
}
