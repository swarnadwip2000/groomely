<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\BusinessOwnerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CmsController as AdminCmsController;
use App\Http\Controllers\Admin\ContactUsController as AdminContactUsController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BookNowController;
use App\Http\Controllers\Frontend\CmsController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\ServiceSearchController;
use App\Http\Controllers\User\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ForgetPasswordController;
use App\Http\Controllers\Seller\BookingController;
use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;
use App\Http\Controllers\Seller\ManageBookingController;
use App\Http\Controllers\User\AppointmentController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Artisan;

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

// Clear cache
Route::get('clear', function () {
        Artisan::call('optimize:clear');
        return "Optimize clear has been successfully";
});

// Error for expire link
Route::get('link-expire', function(){
        return view('frontend.errors.link-expired');
})->name('errors.link-expire');


// User & business owner portal authentication
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register-store', [AuthController::class, 'registerStore'])->name('register.store');
Route::post('login-check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('change-password', [ForgetPasswordController::class, 'changePassword'])->name('change.password');
Route::get('forget-password/show', [ForgetPasswordController::class, 'forgetPasswordShow'])->name('forget.password.show');
Route::get('reset-password/{id}/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');

// CMS page view
Route::get('/', [CmsController::class, 'home'])->name('home');
Route::get('/about', [CmsController::class, 'about'])->name('about');
Route::get('/services', [CmsController::class, 'services'])->name('services');
Route::get('/best-sellers', [CmsController::class, 'bestSellers'])->name('best.sellers');
Route::get('/gallery', [CmsController::class, 'gallery'])->name('gallery');
Route::get('/package', [CmsController::class, 'package'])->name('package');
Route::get('/service-category/{slug}/{id}', [CmsController::class, 'serviceCategory'])->name('service.category');
Route::get('/shop-category/{slug}/{id}', [CmsController::class, 'shopCategory'])->name('shop.category');
Route::get('/shop-servcies/{id}', [CmsController::class, 'shopServices'])->name('shop.services');
Route::get('/offer-services/{id}', [CmsController::class, 'offerService'])->name('offer.services');

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
Route::get('/service-price', [BookNowController::class, 'servicePrice'])->name('book-now.service-price');

// service search
Route::get('/service-search', [ServiceSearchController::class, 'serviceSearch'])->name('search.service');

// service category search
Route::get('/service-category-search', [ServiceSearchController::class, 'serviceSerachByCategory'])->name('service-category.filter'); 



/*--------------------------------------------------------------------   Admin Panel ---------------------------------------------------------*/
Route::get('/admin', [AdminAuthController::class, 'admin'])->name('admin');

Route::group(['prefix' => 'admin'], function () {
        Route::get('/login', [AdminAuthController::class, 'login'])->name('admin.login');
        Route::post('/login-check', [AdminAuthController::class, 'loginCheck'])->name('admin.login.check');
        Route::group(['middleware' => 'admin', 'preventBackHistory'], function () {
                Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
                Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
                Route::post('/profile-update', [DashboardController::class, 'profileUpdate'])->name('admin.profile.update');
                //admin ajax barchart
                Route::post('/admin-ajax-bar-chart', [DashboardController::class, 'adminAjaxBarChart'])->name('admin.ajax-bar-chart');
                Route::post('/admin-ajax-line-chart', [DashboardController::class, 'ajaxLineChart'])->name('admin.ajax-line-chart');
                Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

                Route::resource('customers', CustomerController::class);
                Route::resource('business-owner', BusinessOwnerController::class);
                Route::resource('contact-us', AdminContactUsController::class);
                Route::resource('blogs', AdminBlogController::class);
                Route::resource('category', CategoryController::class);
                Route::resource('blog-category', BlogCategoryController::class);
                Route::resource('gallery', GalleryController::class);
                Route::resource('service-type', ServiceTypeController::class);
                
                Route::resource('admin', AdminController::class);
                //admin 
                Route::get('/admin/edit/{id}', [AdminController::class, 'adminEdit'])->name('admin.edits');
                Route::get('/admin-delete/{id}', [AdminController::class, 'delete'])->name('admin.destroys');
                Route::post('/admin-update', [AdminController::class, 'update'])->name('admin.updates');

                Route::get('/service-type/additional-service/create/{id}', [ServiceCategoryController::class, 'create'])->name('additional-service.create');
                Route::post('/service-type/add-additional-service', [ServiceCategoryController::class, 'store'])->name('additional-service.store');
                Route::get('/service-type/additional-service/{id}', [ServiceCategoryController::class, 'index'])->name('additional-service.index');
                Route::post('/service-type/update-additional-service/', [ServiceCategoryController::class, 'update'])->name('additional-service.update');
                Route::get('/service-type/delete-additional-service/{id}', [ServiceCategoryController::class, 'delete'])->name('additional-service.delete');
                Route::get('/changeAdditionalServiceStatus', [ServiceCategoryController::class, 'changeAdditionalServiceStatus'])->name('admin.additional-service.change-status');
                
                Route::get('appointment-download-invoice', [CustomerController::class, 'downloadAppointmentInvoice'])->name('appointment.download.invoice');
                // Route::get('pdfview',array('as'=>'pdfview','uses'=>'CustomerController@downloadAppointmentInvoice'));   
                Route::resource('services', ServiceController::class);
                Route::get('/services-edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
                Route::get('/services-delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');
                Route::get('services-category', [ServiceController::class, 'additionalService'])->name('admin.service.get-additional-service'); 
                Route::get('getServiceType', [ServiceController::class, 'getServiceType'])->name('admin.service.get-service-type');  
                Route::get('additional-services-id', [ServiceController::class, 'additionalServiceId'])->name('admin.service.get-additional-service-id');
                Route::get('editServiceType', [ServiceController::class, 'editServiceType'])->name('admin.service.get-editServiceType');
                Route::post('/services-update', [ServiceController::class, 'updateService'])->name('admin.service.update');
                Route::get('/deleteServiceImage/{id}', [ServiceController::class, 'deleteServiceImage'])->name('admin.deleteServiceImage');
                Route::get('/changeServiceStatus', [ServiceController::class, 'changeServiceStatus'])->name('admin.service.change-status');
                Route::get('/changePopuplarServiceStatus', [ServiceController::class, 'changePopuplarServiceStatus'])->name('admin.service.popular-service');
                
                
                Route::post('/admin-seller-transaction', [DashboardController::class, 'transactionDownload'])->name('admin.transaction.download');

                Route::get('/business-owner/appointment/{id}', [BusinessOwnerController::class, 'appointmentList'])->name('appointments-details.show');
                
                Route::get('/customer-order', [CustomerController::class, 'customerOrder'])->name('customer-order.list');
                Route::post('/customer-order-price', [CustomerController::class, 'customerOrderPrice'])->name('customer-order.edit-price');

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
                // blog category
                Route::get('/blog-category-delete/{id}', [BlogCategoryController::class, 'delete'])->name('blog-category.delete');
                Route::post('/blog-category-update', [BlogCategoryController::class, 'blogCategoryUpdate'])->name('admin.blog-category.update');
                // Service category
                Route::get('/changeCategoryStatus', [CategoryController::class, 'changeCategoryStatus'])->name('admin.category.change-status');
                Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
                Route::post('/category-update', [CategoryController::class, 'categoryUpdate'])->name('admin.category.update');
                // Gallery 
                Route::get('/deleteImage/{id}', [GalleryController::class, 'deleteImage'])->name('admin.deleteImage');
                // Service Type
                Route::get('/changeServiceTypeStatus', [ServiceTypeController::class, 'changeServiceTypeStatus'])->name('admin.service-type.change-status');
                Route::get('/service-type-delete/{id}', [ServiceTypeController::class, 'delete'])->name('service-type.delete');
                Route::post('/service-type-update', [ServiceTypeController::class, 'serviceTypeUpdate'])->name('admin.service-type.update');

                Route::resource('offer', OfferController::class);
                Route::post('/offer-update', [OfferController::class, 'offerUpdate'])->name('admin.offer.update');
 

                Route::group(['prefix'=>'cms'], function(){
                        Route::get('/home-cms', [AdminCmsController::class, 'homeCms'])->name('home.cms');
                        Route::post('/home-cms/store', [AdminCmsController::class, 'homeCmsStore'])->name('home-cms.store');
                        Route::get('/about-cms', [AdminCmsController::class, 'aboutCms'])->name('about.cms');
                        Route::post('/about-cms/store', [AdminCmsController::class, 'aboutCmsStore'])->name('about-cms.store');
                        Route::get('/best-sellers-cms', [AdminCmsController::class, 'BestSellerCms'])->name('best-seller.cms');
                        Route::post('/best-sellers-cms/store', [AdminCmsController::class, 'BestSellerCmsStore'])->name('best-seller-cms.store');
                        Route::get('/service-cms', [AdminCmsController::class, 'serviceCms'])->name('service.cms');
                        Route::get('/service-cms/create', [AdminCmsController::class, 'serviceCmsCreate'])->name('service-cms.create');
                        Route::post('/service-cms/store', [AdminCmsController::class, 'serviceCmsStore'])->name('service-cms.store');
                        Route::get('/service-delete/{id}', [AdminCmsController::class, 'serviceCmsDelete'])->name('service-cms.delete');
                        Route::get('/service-cms/edit/{id}', [AdminCmsController::class, 'serviceCmsEdit'])->name('service-cms.edit');
                        Route::post('/service-cms-update', [AdminCmsController::class, 'serviceCmsUpdate'])->name('service-cms.update');
                        Route::get('/footer-cms', [AdminCmsController::class, 'footerCms'])->name('footer.cms');
                        Route::post('/footer-cms/store', [AdminCmsController::class, 'footerCmsStore'])->name('footer-cms.store');
                        Route::get('/contact-us-cms', [AdminCmsController::class, 'contactUsCms'])->name('contact-us.cms');
                        Route::post('/contact-us-cms/store', [AdminCmsController::class, 'contactUsCmsStore'])->name('contact-us-cms.store');
                });  

        });
});

/*-------------------------------------------------------- Business owner panel -----------------------------------------------------------------------*/

Route::group(['prefix' => 'seller', 'middleware' => ['seller', 'preventBackHistory']], function () {
        Route::get('/dashboard', [SellerDashboardController::class, 'dashboard'])->name('seller.dashboard');
        Route::get('/profile', [SellerDashboardController::class, 'profile'])->name('seller.profile');
        Route::post('/profile-update', [SellerDashboardController::class, 'profileUpdate'])->name('seller.profile.update');
        Route::get('/logout', [SellerDashboardController::class, 'logout'])->name('seller.logout');
        Route::post('/ajax-bar-chart', [SellerDashboardController::class, 'ajaxBarChart'])->name('seller.ajax-bar-chart');       
        Route::post('/transaction-download', [SellerDashboardController::class, 'downloadTransaction'])->name('seller.transaction.download');
        
        Route::resource('manage-services', ManageBookingController::class);
        Route::resource('booking-history', BookingController::class);

        // Manage Booking
        
        Route::get('/changeSellerServiceStatus', [ManageBookingController::class, 'changeSellerServiceStatus'])->name('seller.seller-services.change-status');
        Route::get('/manage-services-delete/{id}', [ManageBookingController::class, 'delete'])->name('manage-services.delete');
        Route::get('manage-services/manage-services-view/{id}', [ManageBookingController::class, 'view'])->name('manage-services.view');
        Route::post('/manage-services-update', [ManageBookingController::class, 'manageBookingUpdate'])->name('seller.manage-services.update');
        Route::get('/deleteImage/{id}', [ManageBookingController::class, 'deleteImage'])->name('manage-services.delete-image');
        Route::get('manage-services/reviews/{id}',[ManageBookingController::class,'reviews'])->name('service-reviews.view');
        Route::get('/manage-servicesDetails',[ManageBookingController::class,'serviceDetails'])->name('seller.manage-services.get-service-details');

        // Booking history
        Route::get('booking-history/booking-history-view/{id}', [BookingController::class, 'view'])->name('booking-history.view');
        Route::get('booking-history/accept-booking/{id}', [BookingController::class, 'acceptBooking'])->name('seller.booking.accept');
        Route::get('booking-history/complete-booking/{id}', [BookingController::class, 'completeBooking'])->name('seller.booking.complete');
        Route::get('booking-history/reshedule-booking/{id}', [BookingController::class, 'resheduleBooking'])->name('seller.booking.reshedule');
        Route::post('booking-history/reshedule-store', [BookingController::class, 'resheduleStore'])->name('booking-history.reshedule.store');
        Route::post('add-extra-service', [BookingController::class, 'addExtraService'])->name('add.extra.service');
        Route::get('send-invoice/{id}', [BookingController::class, 'sendInvoice'])->name('seller.send-invoice');
});

        // resheduling accept & reject process
        Route::get('booking-accepted/{id}', [BookingController::class, 'bookingAccepted'])->name('booking.accepted');
        Route::get('booking-rejected/{id}', [BookingController::class, 'bookingRejected'])->name('booking.rejected');

/*-----------------------------------------------------------User protal----------------------------------------------------------------------------- */
Route::group(['prefix' => 'user', 'middleware' => ['user', 'preventBackHistory']], function () {
        Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('user.dashboard');
        Route::get('/profile', [UserDashboardController::class, 'profile'])->name('user.profile');
        Route::post('/profile-update', [UserDashboardController::class, 'profileUpdate'])->name('user.profile.update');

        Route::resource('appointments', AppointmentController::class);
        
        // appointments
        Route::get('appointments/reshedule-booking/{id}', [AppointmentController::class, 'resheduleBooking'])->name('user.appointment.reshedule');
        Route::post('appointments/reshedule-store', [AppointmentController::class, 'resheduleStore'])->name('appointment.reshedule.store');
        Route::get('appointments/accept-appointment/{id}', [AppointmentController::class, 'acceptAppointment'])->name('user.appointment.accept');
        Route::get('appointments/view/{id}', [AppointmentController::class, 'view'])->name('appointments.view');
        Route::get('download-invoice/{id}', [AppointmentController::class, 'downloadInvoice'])->name('download.invoice');

        //wishlist
        Route::get('wishlists', [WishlistController::class, 'viewWishlist'])->name('wishlists.index');

        //Review
        Route::post('/review',[ReviewController::class, 'submitReview'])->name('user.review');
        Route::get('/reviews',[ReviewController::class, 'view'])->name('reviews.view'); 

});

