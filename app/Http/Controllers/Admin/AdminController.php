<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        // return $request;
        $admins = User::role('ADMIN')->get();
        return view('admin.admin.list')->with(compact('admins'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'phone' => 'required|numeric|digits:10',
            'image' => 'required',
        ]);

        $admin = new User;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = bcrypt($request->password);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('admin', 'public');
            $admin->profile_picture = $image_path;
        }
        $admin->save();
        $admin->assignRole('ADMIN');

        return redirect()->route('admin.index')->with('message', 'Admin has been added successfully');
    }

    public function adminEdit($id)
    {
        // return $id;
        $admin = User::findOrFail($id);
        return view('admin.admin.edit',compact('admin'));
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Admin has been deleted!');
    }

    public function update(Request $request)
    {
        // return $request;
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,'.Auth::user()->id,
            'phone'    => 'required|numeric|min:10',
        ]);

        $admin_update = User::findOrFail($request->admin_id);
        $admin_update->name = $request->name;
        $admin_update->email = $request->email;
        $admin_update->phone = $request->phone;
        if ($request->password) {
            $request->validate([
                'password' => 'required|min:8',
            ]);
            $admin_update->password = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('admin', 'public');
            $admin_update->profile_picture = $image_path;
        }
        $admin_update->update();
        return redirect()->back()->with('message', 'Admin details updated successfully.');
    }
}
