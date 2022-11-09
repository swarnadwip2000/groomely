<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\BusinessOwnerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactUsController as AdminContactUsController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BookNowController;
use App\Http\Controllers\Frontend\CmsController;
use App\Http\Controllers\Frontend\ContactusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ForgetPasswordController;
use App\Http\Controllers\Seller\BookingController;
use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;
use App\Http\Controllers\Seller\ManageBookingController;

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
Route::get('/package', [CmsController::class, 'package'])->name('package');
Route::get('/service-category/{slug}/{id}', [CmsController::class, 'serviceCategory'])->name('service.category');

// Contact us
Route::get('/contact', [ContactusController::class, 'contact'])->name('contact');
Route::post('/contact-store', [ContactusController::class, 'contactStore'])->name('contact.store');

// Blog
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blog-details/{blogslug}/{slug}/{id}', [BlogController::class, 'blogDetails'])->name('blog.details');
Route::get('blog-category/{slug}/{id}', [BlogController::class, 'blogCategory'])->name('blog.category');

// Booking 
Route::get('/book-now/{id}', [BookNowController::class, 'bookNow'])->name('book-now');
Route::post('/submit-appointment', [BookNowController::class, 'submitAppointment'])->name('submit-appointment');

/*--------------------------------------------------------------------   Admin Panel ---------------------------------------------------------*/
Route::get('/admin', [AdminAuthController::class, 'admin'])->name('admin');

Route::group(['prefix' => 'admin'], function () {
        Route::get('/login', [AdminAuthController::class, 'login'])->name('admin.login');
        Route::post('/login-check', [AdminAuthController::class, 'loginCheck'])->name('admin.login.check');
        Route::group(['middleware' => 'admin'], function () {
                Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
                Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
                Route::post('/profile-update', [DashboardController::class, 'profileUpdate'])->name('admin.profile.update');
                Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

                Route::resource('customers', CustomerController::class);
                Route::resource('business-owner', BusinessOwnerController::class);
                Route::resource('contact-us', AdminContactUsController::class);
                Route::resource('blogs', AdminBlogController::class);
                Route::resource('category', CategoryController::class);

                Route::get('/changeCustomerStatus', [CustomerController::class, 'changeCustomerStatus'])->name('admin.customers.change-status');
                Route::get('/customer-delete/{id}', [CustomerController::class, 'delete'])->name('customers.delete');
                Route::post('/customer-update', [CustomerController::class, 'customerUpdate'])->name('admin.customers.update');
                // business owner crud
                Route::get('/changeBusinessOwnerStatus', [BusinessOwnerController::class, 'changeBusinessOwnerStatus'])->name('admin.business-owner.change-status');
                Route::get('/business-owner-delete/{id}', [BusinessOwnerController::class, 'delete'])->name('business-owner.delete');
                Route::post('/business-owner-update', [BusinessOwnerController::class, 'businessOwnerUpdate'])->name('admin.business-owner.update');
                // blog section
                Route::get('/changeBlogStatus', [AdminBlogController::class, 'changeBlogStatus'])->name('admin.blogs.change-status');
                Route::get('/blog-delete/{id}', [AdminBlogController::class, 'delete'])->name('blogs.delete');
                Route::post('/blog-update', [AdminBlogController::class, 'blogUpdate'])->name('admin.blogs.update');
                // Service category
                Route::get('/changeCategoryStatus', [CategoryController::class, 'changeCategoryStatus'])->name('admin.category.change-status');
                Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
                Route::post('/category-update', [CategoryController::class, 'categoryUpdate'])->name('admin.category.update');
        });
});



/*-------------------------------------------------------- Business owner panel -----------------------------------------------------------------------*/

Route::group(['prefix' => 'seller', 'middleware' => 'seller'], function () {
        Route::get('/dashboard', [SellerDashboardController::class, 'dashboard'])->name('seller.dashboard');
        Route::get('/profile', [SellerDashboardController::class, 'profile'])->name('seller.profile');
        Route::post('/profile-update', [SellerDashboardController::class, 'profileUpdate'])->name('seller.profile.update');
        Route::get('/logout', [SellerDashboardController::class, 'logout'])->name('seller.logout');

        Route::resource('manage-booking', ManageBookingController::class);
        Route::resource('booking-history', BookingController::class);

        // Manage Booking
        Route::get('/changeManageBookingStatus', [ManageBookingController::class, 'changeManageBookingStatus'])->name('seller.manage-booking.change-status');
        Route::get('/manage-booking-delete/{id}', [ManageBookingController::class, 'delete'])->name('manage-booking.delete');
        Route::get('manage-booking/manage-booking-view/{id}', [ManageBookingController::class, 'view'])->name('manage-booking.view');
        Route::post('/manage-booking-update', [ManageBookingController::class, 'manageBookingUpdate'])->name('seller.manage-booking.update');
        Route::get('/deleteImage/{id}', [ManageBookingController::class, 'deleteImage'])->name('manage-booking.delete-image');

        // Booking history
        Route::get('booking-history/booking-history-view/{id}', [BookingController::class, 'view'])->name('booking-history.view');
        Route::get('booking-history/accept-booking/{id}', [BookingController::class, 'acceptBooking'])->name('seller.booking.accept');
});
