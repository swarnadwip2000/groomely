<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceTypes = ServiceType::orderby('id', 'desc')->with('category')->get();
        return view('admin.service-type.list')->with(compact('serviceTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service-type.create');
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
            'name' => 'required',
            'image' => 'required',
            
        ]);

        $serviceType = new ServiceType();
        $serviceType->name = $request->name;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $image_path = $request->file('image')->store('service-type', 'public');
            $serviceType->image = $image_path;
        }
        $serviceType->save();
        return redirect()->route('service-type.index')->with('message', 'Service type has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serviceType = ServiceType::findOrFail($id);
        return view('admin.service-type.edit')->with(compact('serviceType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        ServiceType::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Service type has been deleted!');
    }

    public function changeServiceTypeStatus(Request $request)
    {
        $serviceType = ServiceType::find($request->service_type_id);
        $serviceType->status = $request->status;
        $serviceType->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function serviceTypeUpdate(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
        ]);

        $serviceType = ServiceType::findOrFail($request->id);
        $serviceType->name = $request->name;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $image_path = $request->file('image')->store('service-type', 'public');
            $serviceType->image = $image_path;
        }
        $serviceType->save();
        return redirect()->route('service-type.index')->with('message', 'Service type has been updated successfully');
    }
}
