<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('user_id', Auth::user()->id)->orderby('id', 'desc')->get();
        return view('seller.manage-booking.list')->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $serviceTypes = ServiceType::where('status', 1)->get();
        return view('seller.manage-booking.create')->with(compact('categories', 'serviceTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'category_id' => 'required',
            'service_type_id' => 'required',
            'name' => 'required',
            'rate' => 'required|numeric',
            'duration' => 'required',
            'image' => 'required',
            'description' => 'required',
        ], [
            'category_id.required' => 'Please select a category.',
            'service_type_id.required' => 'Please select a service type.'
        ]);

        $service = new Service;
        $service->name = $request->name;
        $service->user_id = Auth::user()->id;
        $service->service_type_id = $request->service_type_id;
        $service->category_id = $request->category_id;
        $service->duration = $request->duration;
        $service->rate = $request->rate;
        $service->description = $request->description;
        $service->save();
        if ($request->hasFile('image')) {
            foreach ($request->image as  $value) {
                $request->validate([
                    'image.*' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                $serviceImage = new ServiceImage();
                $file = $value;
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $image_path = $value->store('service', 'public');
                $serviceImage->slider_image = $image_path;
                $serviceImage->service_id = $service->id;
                $serviceImage->save();
            }
        }

        return redirect()->route('manage-booking.index')->with('message', 'Booking has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = Service::where(['user_id' => Auth::user()->id, 'id' => $id])->count();
        if ($count > 0) {
            $categories = Category::where('status', 1)->orderBy('id', 'desc')->get();
            $service = Service::findOrFail($id);
            $serviceTypes = ServiceType::where('status', 1)->get();
            return view('seller.manage-booking.edit')->with(compact('categories', 'service', 'serviceTypes'));
        } else {
            return redirect()->back();
        }
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
        Service::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Booking has been deleted!');
    }

    public function changeManageBookingStatus(Request $request)
    {
        $user = Service::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function manageBookingUpdate(Request $request)
    {
        // return $request->all();
        $request->validate([
            'category_id' => 'required',
            'service_type_id' => 'required',
            'name' => 'required',
            'rate' => 'required|numeric',
            'duration' => 'required',
            'description' => 'required',
        ], [
            'category_id.required' => 'Please select a category.',
            'service_type_id.required' => 'Please select a service type.'
        ]);

        $service = Service::findOrFail($request->id);
        $service->name = $request->name;
        $service->category_id = $request->category_id;
        $service->service_type_id = $request->service_type_id;
        $service->duration = $request->duration;
        $service->rate = $request->rate;
        $service->description = $request->description;
        $service->save();
        $count = ServiceImage::where('service_id', $service->id)->count();
        if ($count == 0) {
            $request->validate([
                'image' => 'required',
            ]);
        }
        if ($request->hasFile('image')) {
            foreach ($request->image as  $value) {
                $request->validate([
                    'image.*' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                $serviceImage = new ServiceImage();
                $file = $value;
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $image_path = $value->store('service', 'public');
                $serviceImage->slider_image = $image_path;
                $serviceImage->service_id = $service->id;
                $serviceImage->save();
            }
        }

        return redirect()->route('manage-booking.index')->with('message', 'Booking has been updated successfully.');
    }

    public function view($id)
    {
        $count = Service::where(['user_id' => Auth::user()->id, 'id' => $id])->count();
        if ($count > 0) {
            $booking = Service::findOrFail($id);
            return view('seller.manage-booking.view')->with(compact('booking'));
        } else {
            return redirect()->back();
        }
    }

    public function deleteImage($id)
    {
        ServiceImage::find($id)->delete();
        return response()->json(['message' => 'Image has been deleted successfully', 'status' => true]);
    }
}
