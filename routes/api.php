<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\User\DetailsController;
use App\Http\Controllers\API\Seller\SellerController;
use App\Http\Controllers\API\ForgetPasswordController;
use App\Http\Controllers\API\User\ProfileController;
use App\Http\Controllers\API\category\ApiController;
use App\Http\Controllers\API\Appointment\AppointmentController;
use App\Http\Controllers\API\GoogleSocialiteController;

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

    Route::group(['prefix' => 'users'], function () {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword']);
    });

    //User
    Route::group(['prefix' => 'users', 'middleware' => 'auth:api'], function () {
        Route::post('me', [DetailsController::class, 'details']);
        Route::group(['prefix' => 'profile'], function () {
            Route::post('update', [ProfileController::class, 'updateProfile']);
        });

        Route::group(['prefix' => 'booking'], function () {
            Route::post('create', [AppointmentController::class, 'bookingcreate']);
        });
    });

    //seller
    Route::group(['prefix' => 'sellers', 'middleware' => 'auth:api'], function () {
        Route::post('me', [SellerController::class, 'sellerdetail']);
        Route::group(['prefix' => 'profile'], function () {
            Route::post('update', [SellerController::class, 'updateProfile']);
            Route::delete('delete', [SellerController::class, 'deleteProfile']);
        });
    });

    Route::get('users', [DetailsController::class, 'allUserDetails']);
    //google login
    Route::get('auth/{provider}/', [GoogleSocialiteController::class, 'redirectToProvider']);
    Route::get('auth/callback/{provider}', [GoogleSocialiteController::class, 'handleCallback']);

    //
    Route::group(['prefix' => 'category'], function () {
        Route::get('list', [ApiController::class, 'category']);
    });

    Route::group(['prefix' => 'service'], function () {
        Route::get('types', [ApiController::class, 'servicetype']);
        Route::get('details', [ApiController::class, 'servicedetails']);
    });

    Route::group(['prefix' => 'appointment'], function () {
        Route::get('booking-times', [ApiController::class, 'bookingtimes']);
    });
});
