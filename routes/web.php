<?php

// () {} []

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RoomController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Front\BookingController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminDatewiseRoomController;
use App\Http\Controllers\Customer\CustomerProfileController;





/**-----------------------------------  Frontend Routes   --------------------------------------------**/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/room/{id}',[RoomController::class,'single_room'])->name('room_detail');
Route::get('/rooms',[RoomController::class,'rooms'])->name('rooms');
Route::post('/booking/submit', [BookingController::class, 'cart_submit'])->name('cart_submit');
Route::get('/cart', [BookingController::class, 'cart_view'])->name('cart');
Route::get('/cart/delete/{id}', [BookingController::class, 'cart_delete'])->name('cart_delete');
Route::get('/checkout', [BookingController::class, 'checkout'])->name('checkout');
Route::post('/payment', [BookingController::class, 'payment'])->name('payment');
Route::get('/payment/paypal/{price}', [BookingController::class, 'paypal'])->name('paypal');
Route::post('/payment/stripe/{price}', [BookingController::class, 'stripe'])->name('stripe');

/**------------------------------------ End Frontend Routes   ----------------------------------------**/





/**------------------------------------- Customer Routes ---------------------------------------------**/


/* Customer */
Route::get('/login', [CustomerAuthController::class, 'login'])->name('customer_login');
Route::post('/login-submit', [CustomerAuthController::class, 'login_submit'])->name('customer_login_submit');
Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer_logout');
Route::get('/signup', [CustomerAuthController::class, 'signup'])->name('customer_signup');
Route::post('/signup-submit', [CustomerAuthController::class, 'signup_submit'])->name('customer_signup_submit');
Route::get('/signup-verify/{email}/{token}', [CustomerAuthController::class, 'signup_verify'])->name('customer_signup_verify');
Route::get('/forget-password', [CustomerAuthController::class, 'forget_password'])->name('customer_forget_password');
Route::post('/forget-password-submit', [CustomerAuthController::class, 'forget_password_submit'])->name('customer_forget_password_submit');
Route::get('/reset-password/{token}/{email}', [CustomerAuthController::class, 'reset_password'])->name('customer_reset_password');
Route::post('/reset-password-submit', [CustomerAuthController::class, 'reset_password_submit'])->name('customer_reset_password_submit');




/* Customer - Middleware */
Route::group(['middleware' =>['customer:customer']], function(){
    Route::get('/customer/home', [CustomerHomeController::class, 'index'])->name('customer_home');
    Route::get('/customer/edit-profile', [CustomerProfileController::class, 'index'])->name('customer_profile');
    Route::post('/customer/edit-profile-submit', [CustomerProfileController::class, 'profile_submit'])->name('customer_profile_submit');
});

/**------------------------------------- End Customer Routes -----------------------------------------**/





/**-----------------------------------  Admin Routes   -----------------------------------------------**/

/* Admin */
Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware('admin:admin');

Route::get('admin/login',[AdminLoginController::class,'index'])->name('admin_login');

Route::post('/login/submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');

Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');



/* Admin - Middleware */

Route::group(['middleware'=>['admin:admin']],function(){

    
    /* Room Amenities */

    Route::get('/admin/amenity/show',[AmenityController::class,'show'])->name('admin_amenity_show');

    Route::get('/admin/amenity/create',[AmenityController::class,'create'])->name('admin_amenity_create');

    Route::post('/admin/amenity/store',[AmenityController::class,'store'])->name('admin_amenity_store');

    Route::get('/admin/amenity/edit/{id}',[AmenityController::class,'edit'])->name('admin_amenity_edit');

    Route::post('/admin/amenity/update/{id}',[AmenityController::class,'update'])->name('admin_amenity_update');

    Route::get('/admin/amenity/delete/{id}',[AmenityController::class,'delete'])->name('admin_amenity_delete');


    /* Room */

    Route::get('/admin/room/show',[AdminRoomController::class,'show'])->name('admin_room_show');
    
    Route::get('/admin/room/create',[AdminRoomController::class,'create'])->name('admin_room_create');

    Route::post('/admin/room/store',[AdminRoomController::class,'store'])->name('admin_room_store');

    Route::get('/admin/room/edit/{id}',[AdminRoomController::class,'edit'])->name('admin_room_edit');

    Route::post('/admin/room/update/{id}',[AdminRoomController::class,'update'])->name('admin_room_update');

    Route::get('/admin/room/delete/{id}',[AdminRoomController::class,'delete'])->name('admin_room_delete');

    Route::get('/admin/room/gallery/{id}',[AdminRoomController::class,'gallery'])->name('admin_room_gallery');

    Route::post('/admin/room/gallery/store/{id}',[AdminRoomController::class,'gallery_store'])->name('admin_room_gallery_store');

    Route::get('/admin/room/gallery/delete/{id}',[AdminRoomController::class,'gallery_delete'])->name('admin_room_gallery_delete');

    Route::get('/admin/datewise-rooms', [AdminDatewiseRoomController::class, 'index'])->name('admin_datewise_rooms');
    
    Route::post('/admin/datewise-rooms/submit', [AdminDatewiseRoomController::class, 'show'])->name('admin_datewise_rooms_submit');


    
    /* Features */

    Route::get('/admin/feature/view', [AdminFeatureController::class, 'index'])->name('admin_feature_view');

    Route::get('/admin/feature/add', [AdminFeatureController::class, 'add'])->name('admin_feature_add');
    
    Route::post('/admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin_feature_store');
    
    Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin_feature_edit');
    
    Route::post('/admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin_feature_update');
    
    Route::get('/admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin_feature_delete');



    /* Testimonials */

    Route::get('/admin/testimonial/view', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_view');

    Route::get('/admin/testimonial/add', [AdminTestimonialController::class, 'add'])->name('admin_testimonial_add');
    
    Route::post('/admin/testimonial/store', [AdminTestimonialController::class, 'store'])->name('admin_testimonial_store');
    
    Route::get('/admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin_testimonial_edit');
    
    Route::post('/admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin_testimonial_update');
    
    Route::get('/admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin_testimonial_delete');



    /* Post */

    Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin_post_view');
    
    Route::get('/admin/post/add', [AdminPostController::class, 'add'])->name('admin_post_add');
    
    Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('admin_post_store');
    
    Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin_post_edit');
    
    Route::post('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin_post_update');
    
    Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin_post_delete');

    
    /* Photos */

    Route::get('/admin/photo/view', [AdminPhotoController::class, 'index'])->name('admin_photo_view');
    
    Route::get('/admin/photo/add', [AdminPhotoController::class, 'add'])->name('admin_photo_add');
    
    Route::post('/admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin_photo_store');
    
    Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin_photo_edit');
    
    Route::post('/admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin_photo_update');
    
    Route::get('/admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin_photo_delete');


    /* Videos */

    Route::get('/admin/video/view', [AdminVideoController::class, 'index'])->name('admin_video_view');
    
    Route::get('/admin/video/add', [AdminVideoController::class, 'add'])->name('admin_video_add');
    
    Route::post('/admin/video/store', [AdminVideoController::class, 'store'])->name('admin_video_store');
    
    Route::get('/admin/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin_video_edit');
    
    Route::post('/admin/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin_video_update');
    
    Route::get('/admin/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('admin_video_delete');



    /* Faqs */

    Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin_faq_view');
    
    Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin_faq_add');
    
    Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store');
    
    Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit');
    
    Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update');
    
    Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin_faq_delete');


});

/**------------------------------------- End Admin Routes --------------------------------------------**/