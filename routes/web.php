<?php

// () {} []

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RoomController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Front\BookingController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerHomeController;
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

    
    /* Room Amenity */

    // Show Amenity Page
    Route::get('/admin/amenity/show',[AmenityController::class,'show'])->name('admin_amenity_show');

    // Create Amenity Page
    Route::get('/admin/amenity/create',[AmenityController::class,'create'])->name('admin_amenity_create');

    // Amenity Submit/Store
    Route::post('/admin/amenity/store',[AmenityController::class,'store'])->name('admin_amenity_store');

    // Amenity Edit Page Show
    Route::get('/admin/amenity/edit/{id}',[AmenityController::class,'edit'])->name('admin_amenity_edit');

    // Amenity Update
    Route::post('/admin/amenity/update/{id}',[AmenityController::class,'update'])->name('admin_amenity_update');

    // Amenity Data Delete
    Route::get('/admin/amenity/delete/{id}',[AmenityController::class,'delete'])->name('admin_amenity_delete');


    /* Room */

    // Show Room Page
    Route::get('/admin/room/show',[AdminRoomController::class,'show'])->name('admin_room_show');

    // Create Room Page
    Route::get('/admin/room/create',[AdminRoomController::class,'create'])->name('admin_room_create');

    // Room Submit/Store
    Route::post('/admin/room/store',[AdminRoomController::class,'store'])->name('admin_room_store');

    // Room Edit Page Show
    Route::get('/admin/room/edit/{id}',[AdminRoomController::class,'edit'])->name('admin_room_edit');

    // Room Update
    Route::post('/admin/room/update/{id}',[AdminRoomController::class,'update'])->name('admin_room_update');

    // Room Data Delete
    Route::get('/admin/room/delete/{id}',[AdminRoomController::class,'delete'])->name('admin_room_delete');

    Route::get('/admin/room/gallery/{id}',[AdminRoomController::class,'gallery'])->name('admin_room_gallery');

    Route::post('/admin/room/gallery/store/{id}',[AdminRoomController::class,'gallery_store'])->name('admin_room_gallery_store');

    Route::get('/admin/room/gallery/delete/{id}',[AdminRoomController::class,'gallery_delete'])->name('admin_room_gallery_delete');

    Route::get('/admin/datewise-rooms', [AdminDatewiseRoomController::class, 'index'])->name('admin_datewise_rooms');
    
    Route::post('/admin/datewise-rooms/submit', [AdminDatewiseRoomController::class, 'show'])->name('admin_datewise_rooms_submit');





});

/**------------------------------------- End Admin Routes --------------------------------------------**/