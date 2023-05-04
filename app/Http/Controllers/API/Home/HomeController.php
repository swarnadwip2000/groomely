<?php

namespace App\Http\Controllers\Api\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\SellerService;
use App\Models\HomeCms;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Validator;


/**
 * @group Service  APIs
 *
 * APIs for Services
 */

class HomeController extends Controller
{
    public $successStatus = 200;

    /**
     *  Service List API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     *   "statusCode": 200,
     *   "data": [
     *       {
     *           "service_id": "1",
     *           "service": { 
     *           "id": 1,
     *           "category_id": 1,
     *           "service_type_id": 1,
     *           "additional_service_id": 13,
     *           "duration": "2:30",
     *           "description": "lorem ipsum dolor sit amet",
     *           "status": 1,
     *           "popular_services": 1,
     *           "created_at": "2021-09-14T12:12:12.000000Z",
     *           "updated_at": "2021-09-14T12:12:12.000000Z",
     *           "additional_service": {
     *              "id": 13,
     *               "name": "Hair starighning"
     *           },
     *          "images": [
                    {
                        "id": 1,
                        "service_id": 1,
                        "slider_image": "service/XhIe7mjMDLasIGKWOjiXGYXk2pR3zGcSX5CytQjX.jpg",
                        "created_at": "2023-03-27T08:48:31.000000Z",
                        "updated_at": "2023-03-27T08:48:31.000000Z"
                    }
                ]     
     *          }
     *       }
     *   ]
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "No detail found!"
     * ]
     * }
     * }
    */

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
        
        try{
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
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }       
    }

     /**
     *  Best Seller API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Best seller find successfully",
     *  "data": [
     *       {
     *       
     *           "image": "user/2021-05-12-1620813781.jpg"
     *       }
     *   ]
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     *      "message": [
     *          "No detail found!"
     *      ]
     *  }
     * }
    */ 

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
            if(count($details) > 0)
            {
                return response()->json(['data' => $details, 'status' => true, 'message' => 'Best seller find successfully'], $this->successStatus);
            }else{
                return response()->json(['status' => false , 'statusCode' => 401, 'message' => 'currently there is no Best Seller'], 401);
            }
            
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }      
    }

     /**
     *  Banner API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Banner find successfully",
     * "data": {
     *      "middle_banner_1": "home/middle_banner_1.jpg",
     *      "middle_banner_2": "home/middle_banner_2.jpg",
     *      "middle_banner_3": "home/middle_banner_3.jpg"
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     *      "message": [
     *          "No detail found!"
     *      ]
     * }
     * }
    */ 

    public function banner()
    {
        $banner = HomeCms::select('middle_banner_1','middle_banner_2','middle_banner_3')->first();
        if($banner !='')
        {
            return response()->json(['data' => $banner, 'status' => true, 'message' => 'Banner find successfully'], $this->successStatus);
        }
        else{
            return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Banner not found!'], 401);
        }
    }

   
}
