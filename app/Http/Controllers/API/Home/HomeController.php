<?php

namespace App\Http\Controllers\Api\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\SellerService;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public $successStatus = 200;
    public function servicelist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_name'     => 'required',
        ]);
        if ($validator->fails()) {
            $errors['status_code'] = 401;
            $errors['message'] = [];
            $data = explode(',', $validator->errors());

            for ($i = 0; $i < count($validator->errors()); $i++) {
                // return $data[$i];
                $dk = explode('["', $data[$i]);
                $ck = explode('"]', $dk[1]);
                $errors['message'][$i] = $ck[0];
            }
            return response()->json(['error' => $errors, 'status' => false], 401);
        }
        
        $service_name = $request->service_name;    
        
        $service = SellerService::where('status',1)->select('service_id')->with('service','service.additionalService:id,name','service.images')->whereHas('service', function($query) use($service_name){
            $query->whereHas('serviceType', function($query) use($service_name){
                $query->where('name', $service_name);
            });
        })->groupBy('service_id')->get();

        if($service !='')
        {
            return response()->json(['data' => $service, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
        }
        else{
            return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service not found!'], 401);
        }

        try {
            return response()->json(['data' => $service, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }       
    }

    public function bestSeller()
    {
        try {
            $detail=[];
            $shop_detail=[];
            $detail_price=[];
            $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
            foreach($shop as $vall)
            {
                
                $detail['image'] = $vall['profile_picture'];
                $detail_price['total'] = User::appointmentsSum($vall->id);
                if($detail_price['total'] > 0)
                {
                    $shop_detail[] = $detail;
                }
                
            }
            $details = collect($shop_detail)->sortByDesc('total');
            return response()->json(['data' => $details, 'status' => true, 'message' => 'Best seller find successfully'], $this->successStatus);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }      
    }

   
}
