<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $count['customers'] = User::role('USER')->count();
        $count['business_owners'] = User::role('BUSINESS_OWNER')->count();
        $count['blogs'] = Blog::count();
        $count['gallery'] = Gallery::count();
        $count['contact_us'] = Contact::count();
        $users = User::select('name','id')->role('BUSINESS_OWNER')->get();
        $years = date('Y');
        return view('admin.dashboard')->with(compact('count','users','years'));
    }

    public function adminAjaxBarChart(Request $request)
    {
        // return $request;
        if ($request->ajax()) {
            $years = $request->year;
            $users = User::select('name','id')->role('BUSINESS_OWNER')->get();
            return response()->json(['view'=>(String)View::make('admin.admin-ajax-bar-chart')->with(compact('users','years'))]);
        }
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,'.Auth::user()->id,
            'phone'    => 'required|numeric|min:10',
        ]);

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        if ($request->password) {
            $request->validate([
                'password' => 'required|min:8',
            ]);
            $data->password = bcrypt($request->password);
        }

        if ($request->hasFile('profile_picture')) {
            $request->validate([
                'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('profile_picture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('profile_picture')->store('admin', 'public');
            $data->profile_picture = $image_path;
        }
        $data->save();
        return redirect()->back()->with('message', 'Profile updated successfully.');
    }
}
