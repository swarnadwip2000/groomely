<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\CmsController;
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


// User & business owner portal authentication
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register-store', [AuthController::class, 'registerStore'])->name('register.store');
Route::post('login-check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::get('reset-password/{id}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');

// CMS page vie
Route::get('/', [CmsController::class, 'home'])->name('home');
Route::get('/about', [CmsController::class, 'about'])->name('about');
Route::get('/services', [CmsController::class, 'services'])->name('services');
Route::get('/best-sellers', [CmsController::class, 'bestSellers'])->name('best.sellers');
Route::get('/blog', [CmsController::class, 'blog'])->name('blog');
Route::get('/gallery', [CmsController::class, 'gallery'])->name('gallery');
Route::get('/contact', [CmsController::class, 'contact'])->name('contact');