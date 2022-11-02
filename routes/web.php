<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ForgetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// User & business owner portal authentication
Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::get('reset-password/{id}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');
