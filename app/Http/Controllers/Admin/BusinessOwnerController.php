<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Service;

class BusinessOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_owners = User::orderby('id', 'desc')->Role('BUSINESS_OWNER')->get();      
   
        return view('admin.business-owners.list')->with(compact('business_owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business-owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'shop_name' => 'required',
            'email'    => 'required|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'phone'    => 'required|numeric|min:10',
            'zipcode'    => 'required|numeric',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password',
            'profile_picture' =>  'required'
        ],[
            'profile_picture.required' =>'Image filed is required.'
        ]);

        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->zipcode = $request->zipcode;
        $data->shop_name = $request->shop_name;
        $data->password = bcrypt($request->password);

        if ($request->hasFile('profile_picture')) {
            $request->validate([
                'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('profile_picture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('profile_picture')->store('business_owner', 'public');
            $data->profile_picture = $image_path;
        }
        $data->save();
        $data->assignRole('BUSINESS_OWNER');
        return redirect()->route('business-owner.index')->with('message', 'Profile updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $business_owner = User::findOrFail($id);
        return view('admin.business-owners.edit')->with(compact('business_owner'));
    }

  

    public function appointmentList($id)
    {
        // return $id;
        $business_owners = User::findOrFail($id);
        return view('admin.business-owners.appointment.list')->with(compact('business_owners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function businessOwnerUpdate(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,'.$request->id,
            'phone'    => 'required|numeric|min:10',
            'zipcode'    => 'required|numeric',
            'shop_name' => 'required',
        ],[
            'profile_picture.required' =>'Image filed is required.'
        ]);

        $data = User::findOrFail($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->zipcode = $request->zipcode;
        $data->shop_name = $request->shop_name;

        if ($request->hasFile('profile_picture')) {
            $request->validate([
                'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('profile_picture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('profile_picture')->store('business_owner', 'public');
            $data->profile_picture = $image_path;
        }
        $data->save();
        $data->assignRole('BUSINESS_OWNER');
        return redirect()->route('business-owner.index')->with('message', 'Profile updated successfully.');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Business owner has been deleted!');
    }

    public function changeBusinessOwnerStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function serviceReviews()
    {
        return "okk";
    }
}
