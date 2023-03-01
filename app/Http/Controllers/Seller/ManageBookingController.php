<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceType;
use App\Models\ServiceCategory;
use App\Models\Review;
use App\Models\SellerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        if (Auth::user()->shop_name) {
            $services = SellerService::where('user_id', Auth::user()->id)->where('status',1)->with('service')->get();
            
            return view('seller.manage-services.list')->with(compact('services'));
        } else {
            return redirect()->route('seller.profile')->with('error', 'Please add the shop name for manage service section.');
        }

        return view('seller.manage-services.list');
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::Orderby('id', 'desc')->with('additionalService')->get();
        return view('seller.manage-services.create')->with(compact('services'));
    }

    public function serviceDetails(Request $request)
    {
        
        $service_details = Service::where('id', $request->additional_service_id)->with('category','serviceType')->first();
        return response()->json(['detail' => $service_details]);
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
            'service_id' => 'required',
            'rate' => 'required|numeric'
        ], [
            'service_id.required' => 'Please select a service.',
            'rate.required' => 'Please enter rate.'
        ]);

        $barber_service = new SellerService;
        $barber_service->user_id = Auth::user()->id;
        $barber_service->service_id = $request->service_id;
        $barber_service->rate = $request->rate;
        $barber_service->save();

        return redirect()->route('manage-services.index')->with('message', 'Seller service has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
        // $count = Service::where(['user_id' => Auth::user()->id, 'id' => $id])->count();
        // if ($count > 0) {
        //     $categories = Category::where('status', 1)->orderBy('id', 'desc')->get();
        //     $service = Service::findOrFail($id);
        //     $serviceTypes = ServiceType::where('status', 1)->get();
        //     return view('seller.manage-services.edit')->with(compact('categories', 'service', 'serviceTypes'));
        // } else {
        //     return redirect()->back();
        // }
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
        // $user = Service::find($request->user_id);
        // $user->status = $request->status;
        // $user->save();
        // return response()->json(['success' => 'Status change successfully.']);
    }

    public function manageBookingUpdate(Request $request)
    {
       
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

        return redirect()->route('manage-services.index')->with('message', 'Booking has been updated successfully.');
    }

    public function view($id)
    {   
        $sellerService = SellerService::where('id',$id)->where('status',1)->with('service')->first();
        return view('seller.manage-services.view',compact('sellerService'));
       
    }

    public function deleteImage($id)
    {
        ServiceImage::find($id)->delete();
        return response()->json(['message' => 'Image has been deleted successfully', 'status' => true]);
    }

    public function reviews($id)
    {  
        $reviews = Review::where('service_id',$id)->Orderby('id','desc')->with('user')->get();
        return view('seller.manage-services.review.list')->with(compact('reviews'));
    }

    
}
