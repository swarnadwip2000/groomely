<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CmsController;
use App\Http\Controllers\Frontend\ContactusController;
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

// CMS page view
Route::get('/', [CmsController::class, 'home'])->name('home');
Route::get('/about', [CmsController::class, 'about'])->name('about');
Route::get('/services', [CmsController::class, 'services'])->name('services');
Route::get('/best-sellers', [CmsController::class, 'bestSellers'])->name('best.sellers');
Route::get('/gallery', [CmsController::class, 'gallery'])->name('gallery');

// Contact us
Route::get('/contact', [ContactusController::class, 'contact'])->name('contact');
Route::post('/contact-store', [ContactusController::class, 'contactStore'])->name('contact.store');

// Blog
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blog-details/{blogslug}/{slug}/{id}', [BlogController::class, 'blogDetails'])->name('blog.details');
Route::get('blog-category/{slug}/{id}', [BlogController::class, 'blogCategory'])->name('blog.category');