<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    //
    public function index($id)
    {
        
        // $service_type = $id;
        $service_type = ServiceType::where('id', $id)->first();
        $additional_services = ServiceCategory::where('service_type_id', $id)->Orderby('id','desc')->get();
        return view('admin.service-type.additional-service.list',compact('additional_services','service_type'));
    }
    public function create($id)
    {

        $service_type = ServiceType::where('id', $id)->first();
        return view('admin.service-type.additional-service.create', compact('service_type'));

    }

    public function store(Request $request)
    {
        foreach ($request->additional_service as $key => $service) {
            if($service != null){
                $additional_service = ServiceCategory::create([
                    'service_type_id' => $request->service_type_id,
                    'name' => $service
                ]);
            }
            
        }
        
        return redirect()->back()->with('message', 'Additional Service Added Successfully');
    }

    public function update(Request $request)
    {

        // return $request;
        $update_additional_service = ServiceCategory::where('service_type_id', $request->service_typeId)->where('id', $request->addiitional_serviceId)->update([
            'name' => $request->additional_service
        ]);

        return redirect()->back()->with('message', 'Additional Service Updated Successfully');
    }

    public function delete($id)
    {
        
        $delete_additional_service = ServiceCategory::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Additional Service Deleted Successfully');
    }

    public function changeAdditionalServiceStatus(Request $request)
    {
        
        $additional_service = ServiceCategory::where('id', $request->additional_service_id)->first();
        $additional_service->status = $request->status;
        $additional_service->update();
        return response()->json(['message' => 'Additional Service status change successfully.', 'status' => true]);
    }
}
