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
            $services = SellerService::where('user_id', Auth::user()->id)->Orderby('id','desc')->with('service')->get();
            
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
        $services = Service::Orderby('id', 'desc')->where('status',1)->with('additionalService')->get();
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
        $check_barberService = SellerService::where('service_id',$request->service_id)->where('user_id',Auth::user()->id)->count();
        if($check_barberService > 0){
            return redirect()->back()->with('error', 'This service already added.');
        }else{

        $barber_service = new SellerService;
        $barber_service->user_id = Auth::user()->id;
        $barber_service->service_id = $request->service_id;
        $barber_service->rate = $request->rate;
        $barber_service->save();
        }

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
       
        $services = Service::Orderby('id', 'desc')->with('additionalService')->get();
        $sellerService = SellerService::where('id',$id)->with('service')->first();
        return view('seller.manage-services.edit',compact('sellerService','services'));
        
    }

    
    public function edit($id)
    {
        
        

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
        SellerService::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Services has been deleted!');
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
            'seller_serviceId' => 'required',
            'service_id' => 'required',
            'rate' => 'required|numeric',
        ], [
            'service_id.required' => 'Please select a service.'
            
        ]);

        

        $update_barber_service = SellerService::where('id',$request->seller_serviceId)->where('user_id',Auth::user()->id)->first();
        $update_barber_service->service_id = $request->service_id;
        $update_barber_service->rate = $request->rate;
        $update_barber_service->update();
        

        return redirect()->route('manage-services.index')->with('message', 'Booking has been updated successfully.');
    }

    public function view($id)
    {   
        $sellerService = SellerService::where('id',$id)->with('service')->first();
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

    public function changeSellerServiceStatus(Request $request)
    {
        
        $sellerService = SellerService::find($request->seller_service);
        $sellerService->status = $request->status;
        $sellerService->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    
}
