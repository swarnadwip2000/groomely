<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\User\DetailsController;
use App\Http\Controllers\API\Seller\SellerController;
use App\Http\Controllers\API\ForgetPasswordController;
use App\Http\Controllers\API\User\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//User & business owner portal authentication
Route::group(['prefix' => 'v1'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword']);
    
    //User
    Route::group(['prefix' => 'user','middleware'=>'auth:api'], function () {
        Route::post('details', [DetailsController::class, 'details']);
        Route::post('update-profile', [ProfileController::class, 'updateProfile']);
    });

    //seller
    Route::group(['prefix' => 'seller','middleware'=>'auth:api'], function () {
        Route::post('seller-detail', [SellerController::class, 'sellerdetail']);
        Route::post('profile-update', [SellerController::class, 'updateProfile']);
        Route::post('profile-delete', [SellerController::class, 'deleteProfile']);
    });
    
    Route::get('all-user-details', [DetailsController::class, 'allUserDetails']);
});



