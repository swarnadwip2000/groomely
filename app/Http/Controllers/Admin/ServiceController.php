<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\Category;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::Orderby('id','desc')->with('category','serviceType','service_category')->get();
        return view('admin.service.list',compact('services'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        $serviceTypes = ServiceType::where('status', 1)->get();
        $additionalServices = ServiceCategory::where('status', 1)->get();
        return view('admin.service.create',compact('categories','additionalServices','serviceTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'service_type_id' => 'required',
            'additional_service_id' => 'required',
            'duration' => 'required',
            'image' => 'required',
            'description' => 'required',
        ], [
            'category_id.required' => 'Please select a category.',
            'service_type_id.required' => 'Please select a service type.'
        ]);

        $service = new Service;
        $service->category_id = $request->category_id;
        $service->service_type_id = $request->service_type_id;
        $service->additional_service_id = $request->additional_service_id;
        $service->duration = $request->duration;
        $service->description = $request->description;
        $service->save();

        if ($request->hasFile('image')) {    
            $request->validate([
                'image' => 'array|min:4',
                'image.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
            ]);
          
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

        return redirect()->route('service.index')->with('message', 'Service has been added successfully');
    }

    public function additionalService(Request $request){

        $get_service = ServiceCategory::where('service_type_id', $request->service_type_id)->where('status',1)->get();
        return response()->json(['data' => $get_service]);
    }

    public function edit($id)
    {
        $categories = Category::where('status', 1)->get();
        $serviceTypes = ServiceType::where('status', 1)->get();
        $additionalServices = ServiceCategory::where('status', 1)->get();
        $Service = Service::with('category','serviceType','service_category')->findOrFail($id);
        return view('admin.service.edit')->with(compact('Service','categories','serviceTypes','additionalServices'));
    }

    public function delete()
    {

    }
}