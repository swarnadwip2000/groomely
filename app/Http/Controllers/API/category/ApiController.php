<?php

namespace App\Http\Controllers\API\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\BookingTime;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\SellerService;
use App\Models\Review;
use Exception;
use Illuminate\Support\Facades\Validator;

/**
 * @group Listing APIs
 *
 * APIs for Listing
 */


class ApiController extends Controller
{
    public $successStatus = 200;
    /**
     *  Category API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Category find successfully.",
     * "data": [
     *       {
     *           "id": "1",
     *           "name": "Women",
     *           "slug": "women",
     *           "icon": "category/women-hair-cut.png"
     *       },
     *       {
     *          "id": "2",
     *          "name": "Men's",
     *          "slug": "men",
     *          "icon": "category/men-hair-cut.png"
     *      }
     *   ]
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     *      "No detail found!"
     *  ]
     * }
     * }
    */
    public function category()
    {
        try {
            $category = Category::select('id','name','slug','icon')->where('status',1)->get(); 
            if($category !='')
            {
                return response()->json([ 'status' => true, 'statusCode' => 200, 'data' => $category, 'message' => 'Category find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'Category not found!'], 401);
            }
        } catch (\Throwable $th) {
            return response()->json([ 'status' => false, 'statusCode' => 401, 'message' => 'Something went wrong!'], 401);
        }    
    }
    
      /**
     * Service Type API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Servicetype find successfully.",
     * "data": [
     *       {
     *           "id": "1",
     *           "name": "Styling",
     *           "icon": "service_type/styling.png"
     *       },
     *      {
     *          "id": "2",
     *          "name": "Spa",
     *          "icon": "service_type/spa.png"
     *      }
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

    public function servicetype()
    {
        try {
            $service = ServiceType::select('id','name','image')->where('status',1)->get(); 
            if($service !='')
            {
                return response()->json(['status' => true, 'statusCode' => 200, 'data' => $service, 'message' => 'Servicetype find successfully'], $this->successStatus);
            }
            else{
                return response()->json([ 'status' => false, 'statusCode' => 401, 'message' => 'Servicetype not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong'], 401);
        }
    }

    /**
     * Booking Time API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     *   "statusCode": 200,
     *   "data": [
     *       {
     *           "id": "1",
     *           "time": "9:00 am - 10:00 am"
     *       },
     *       {
     *            "id": 2,
     *            "time": "10:00 am - 11:00 am"
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

    public function bookingtimes()
    {
        // return "okkk";
        try {
            $booking_time_count = BookingTime::select('id','time')->count();
            if($booking_time_count > 0)
            {
                $booking_time = BookingTime::select('id','time')->get();
                return response()->json(['status' => true, 'statusCode' => $this->successStatus, 'data' => $booking_time, 'message' => 'Booking time find successfully'], $this->successStatus);
            }
            else{
                return response()->json([ 'status' => false,  'statusCode' => 401, 'message' => 'Bookingtimes not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json([ 'status' => false , 'statusCode' => 401, 'message' => 'something went wrong'], 401);
        }    
    }


      /**
     * Service Listing API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Services find successfully.",
     * "data": [
     *       {
     *           "id": 1,
     *           "category_id": 1,
     *           "service_type_id": 1,
     *           "additional_service_id": 13,
     *           "duration": "2:30",
     *           "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
     *           "status": 1,
     *           "popular_services": 1,
     *           "created_at": "2023-03-27T08:48:30.000000Z",
     *           "updated_at": "2023-04-13T10:57:11.000000Z"
     *       },
     *      {
     *           "id": 2,
     *           "category_id": 1,
     *           "service_type_id": 1,
     *           "additional_service_id": 14,
     *           "duration": "2:30",
     *           "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
     *           "status": 1,
     *           "popular_services": 1,
     *           "created_at": "2023-03-27T08:48:30.000000Z",
     *           "updated_at": "2023-04-13T10:57:11.000000Z"
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

    public function servicelist()
    {
        // return "okkk";
        try {
            $service_list_count = Service::where('status',1)->count();
            if($service_list_count > 0)
            {
                $service_list = Service::where('status',1)->get();
                return response()->json(['data' => $service_list, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }        

    }

    /**
      * Get Service Details API
      * @return \Illuminate\Http\Response
      * @response {
      * "status": true,
      * "statusCode": 200,
      * "message": "Service found successfully.",
      * "data": {
      *          "id": 5,
      *          "duration": "1:15",
      *          "description": "lorem ipsum dolor sit amet",
      *          "additional_service_id": 3,
      *          "images": [
      *             {
      *                  "id": 17,
      *                  "service_id": 5,
      *                  "slider_image": "service/oAFHFz3En6styJNLxwepcJCxVZhg3Q7bujyJaTsy.jpg",
      *                  "created_at": "2023-03-27T09:41:10.000000Z",
      *                  "updated_at": "2023-03-27T09:41:10.000000Z"
      *              }
      *          ],
      *          "additional_service": {
      *              "id": 3,
      *              "service_type_id": 6,
      *              "name": "Shaving + Hair cutting + Massage",
      *             "status": 1,
      *              "created_at": "2023-03-27T08:45:08.000000Z",
      *              "updated_at": "2023-03-27T08:45:08.000000Z"
      *          },
      *          "seller_service": [
      *              {
      *                  "id": 6,
      *                  "user_id": 6,
      *                  "service_id": 5,
      *                  "rate": "450",
      *                  "status": 1,
      *                  "created_at": "2023-04-13T06:45:16.000000Z",
      *                  "updated_at": "2023-04-13T06:45:16.000000Z",
      *                  "user": {
      *                      "id": 6,
      *                      "shop_name": "Diamond Shop"
      *                  }
      *              }
      *          ]    
      *      }       
      * }
      * }
      * @response 401 {
      * "status": false,
      * "statusCode": 401,
      * "error": {
      * "message": [
      * "Service not found successfully."
      * ]
      *  }
      * }
      * @response 401 {
      * "message": "No detail found!",
      * "status": false
      * }
      */

    public function servicedetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id'     => 'required|numeric|gt:0',
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
        
        $service_detail = Service::with('images','additionalService','SellerService','SellerService.user:id,shop_name')->select('id','duration','description','additional_service_id')->where('id',$request->service_id)->first();
        if($service_detail !='')
        {
            return response()->json(['data' => $service_detail, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
        }
        else{
            return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service not found!'], 401);
        }
    
    }

     /**
     * Popular service API
     * @return \Illuminate\Http\Response
     * @response {
     * "status": true,
     *   "statusCode": 200,
     *   "data": [
     *       "id": 1,
     *       "category_id": 1,
     *       "service_type_id": 1,
     *       "additional_service_id": 13,
     *       "duration": "2:30",
     *       "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
     *       "status": 1,
     *       "popular_services": 1,
     *       "created_at": "2023-03-27T08:48:30.000000Z",
     *       "updated_at": "2023-04-13T10:57:11.000000Z",
     *       "additional_service": {
     *            "id": 13,
     *           "service_type_id": 1,
     *           "name": "Hair starighning",
     *           "status": 1,
     *           "created_at": "2023-03-27T08:47:47.000000Z",
     *           "updated_at": "2023-03-27T08:47:47.000000Z"
     *       },
     *       "review": [
     *           {
     *               "id": 1,
     *               "appointment_id": 3,
     *               "user_id": 2,
     *               "service_id": 1,
     *               "comment": "good service",
     *               "rating": "4",
     *               "created_at": "2023-04-27T04:51:35.000000Z",
     *              "updated_at": "2023-04-27T04:51:35.000000Z"
     *           }
     *       ]
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

    public function popularServices()
    {
        try {
            $services = Service::where('status',1)->where('popular_services',1)->with('additionalService','review')->get();
            if($services !='')
            {              
                $val=[];
                foreach($services as $service)
                {                    
                    $seller_exit = SellerService::where('service_id',$service->id)->where('status',1)->count();
                    if($seller_exit > 0)
                    {
                        $val[] = $service;
                    }    
                }
                $popular_services = collect($val);
                return response()->json(['data' => $popular_services, 'status' => true, 'message' => 'Popular service find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Popular service not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }        
    }

     /** 
     * Service Types By Category Api 
     * 
     * @return \Illuminate\Http\Response 
     * @bodyParam category_id string required Category Id
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Service type find successfully",
     * "data": [
     *   {
     *       "id": 4,
     *       "category_id": 2,
     *       "name": "Trimming",
     *       "image": "service_type/trimming.png",
     *       "status": 1,
     *       "main": 1,
     *       "created_at": "2023-03-27T06:41:40.000000Z",
     *       "updated_at": "2023-03-27T06:41:40.000000Z"
     *   },
     *   {
     *       "id": 5,
     *       "category_id": 2,
     *       "name": "Shaving",
     *       "image": "service_type/shaving.png",
     *       "status": 1,
     *       "main": 1,
     *       "created_at": "2023-03-27T06:41:40.000000Z",
     *       "updated_at": "2023-03-27T06:41:40.000000Z"
     *   }
     * ]
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     *      "message": [
     *              "The category_id field is required.",
     *      ]
     *  }
     * }
     * @response 401 {
     * "message": "No detail found!",
     * "status": false
     * }
     */

    public function serviceTypes(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id'     => 'required|numeric|gt:0',
        ]);

        try {
            $service_type_count = ServiceType::where('category_id',$request->category_id)->where('status',1)->count();
            if($service_type_count > 0)
            {
                $service_type = ServiceType::where('category_id',$request->category_id)->where('status',1)->get();
                return response()->json(['data' => $service_type, 'status' => true, 'message' => 'Service type find successfully'], $this->successStatus);
            }else{
                return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service type not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        } 
    }

    
     /** 
     * Service List by Service Types Api 
     * 
     * @return \Illuminate\Http\Response 
     * @bodyParam category_id string required Category Id
     * @response {
     * "status": true,
     * "statusCode": 200,
     * "message": "Service type find successfully",
     * "data": [
     * {
     *       "id": 1,
     *       "user_id": 3,
     *       "service_id": 1,
     *       "rate": "250",
     *       "status": 1,
     *       "created_at": "2023-03-27T09:42:02.000000Z",
     *       "updated_at": "2023-03-31T10:12:19.000000Z",
     *       "service": {
     *           "id": 1,
     *           "category_id": 1,
     *           "service_type_id": 1,
     *           "additional_service_id": 13,
     *           "duration": "2:30",
     *           "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
     *           "status": 1,
     *           "popular_services": 1,
     *           "created_at": "2023-03-27T08:48:30.000000Z",
     *           "updated_at": "2023-04-13T10:57:11.000000Z",
     *           "additional_service": {
     *               "id": 13,
     *               "name": "Hair starighning"
     *           },
     *           "images": [
     *               {
     *                   "id": 1,
     *                  "service_id": 1,
     *                   "slider_image": "service/XhIe7mjMDLasIGKWOjiXGYXk2pR3zGcSX5CytQjX.jpg",
     *                   "created_at": "2023-03-27T08:48:31.000000Z",
     *                   "updated_at": "2023-03-27T08:48:31.000000Z"
     *               }
     *          ],
     *           "seller_service": [
     *               {
     *                   "id": 1,
     *                   "user_id": 3,
     *                   "service_id": 1,
     *                   "rate": "250",
     *                   "status": 1,
     *                   "created_at": "2023-03-27T09:42:02.000000Z",
     *                   "updated_at": "2023-03-31T10:12:19.000000Z"
     *               }
     *           ],
     *            "review": [
     *               {
     *                   "id": 1,
     *                   "appointment_id": 3,
     *                   "user_id": 2,
     *                   "service_id": 1,
     *                   "comment": "good service",
     *                   "rating": "4",
     *                  "created_at": "2023-04-27T04:51:35.000000Z",
     *                   "updated_at": "2023-04-27T04:51:35.000000Z"
     *               }
     *           ]
     *           }
     *       }           
     *  ]
     * }
     * @response 401 {
     * "status": false,
     * "statusCode": 401,
     * "error": {
     * "message": [
     * "The category_id field is required.",
     * ]
     *  }
     * }
     * @response 401 {
     * "message": "No detail found!",
     * "status": false
     * }
     */

    public function servicelistByServiceType(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'service_type'     => 'required',
        ]);
        
        try {
            $service_type = $request->service_type;
            // $Allservices = Service::where('service_type_id',$request->service_type)->where('status',1)->with('additionalService','images','SellerService')->get();
            $Allservices = SellerService::where('status',1)->with('service','service.additionalService:id,name','service.images','service.SellerService','service.review')->whereHas('service', function($query) use($service_type){
                $query->whereHas('serviceType', function($query) use($service_type){
                    $query->where('service_type_id', $service_type)->where('status',1);
                });
            })->groupBy('service_id')->get();
           
            if($Allservices !='')
            {
                return response()->json(['data' => $Allservices, 'status' => true, 'message' => 'Service find successfully'], $this->successStatus);
            }
            else{
                return response()->json(['status' => false , 'statusCode' => 401,'statusCode' => 401, 'message' => 'Service not found!'], 401);
            }
        } catch (Exception $e) {
            return response()->json(['status' => false, 'statusCode' => 401, 'message' => 'something went wrong' ], 401);
        }
    }
}
