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
        
        $service_type = $id;
        $additional_services = ServiceCategory::where('service_type_id', $service_type)->Orderby('id','desc')->get();
        return view('admin.additional-service.index',compact('additional_services','service_type'));
    }
    public function create($id)
    {

        $service_type = ServiceType::where('id', $id)->first();
        return view('admin.additional-service.create', compact('service_type'));

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
        
        $update_additional_service = ServiceCategory::where('id', $request->id)->update([
            'name' => $request->name
        ]);
    }
}
