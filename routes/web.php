<?php

// () {} []

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;



/**-----------------------------------  Frontend ROUTES   --------------------------------------------**/

Route::get('/',[HomeController::class,'index'])->name('home');

/* Room Amenity */

// Show Amenity Page
Route::get('/admin/amenity/show',[AmenityController::class,'show'])->name('admin_amenity_show')->middleware('admin:admin');

// Create Amenity Page
Route::get('/admin/amenity/create',[AmenityController::class,'create'])->name('admin_amenity_create')->middleware('admin:admin');

// Amenity Submit/Store
Route::post('/admin/amenity/store',[AmenityController::class,'store'])->name('admin_amenity_store');

// Amenity Edit Page Show
Route::get('/admin/amenity/edit/{id}',[AmenityController::class,'edit'])->name('admin_amenity_edit')->middleware('admin:admin');

// Amenity Update
Route::post('/admin/amenity/update/{id}',[AmenityController::class,'update'])->name('admin_amenity_update');

// Amenity Data Delete
Route::get('/admin/amenity/delete/{id}',[AmenityController::class,'delete'])->name('admin_amenity_delete');


/* Room */

// Show Room Page
Route::get('/admin/room/show',[AdminRoomController::class,'show'])->name('admin_room_show')->middleware('admin:admin');

// Create Room Page
Route::get('/admin/room/create',[AdminRoomController::class,'create'])->name('admin_room_create')->middleware('admin:admin');

// Room Submit/Store
Route::post('/admin/room/store',[AdminRoomController::class,'store'])->name('admin_room_store');

// Room Edit Page Show
Route::get('/admin/room/edit/{id}',[AdminRoomController::class,'edit'])->name('admin_room_edit')->middleware('admin:admin');

// Room Update
Route::post('/admin/room/update/{id}',[AdminRoomController::class,'update'])->name('admin_room_update');

// Room Data Delete
Route::get('/admin/room/delete/{id}',[AdminRoomController::class,'delete'])->name('admin_room_delete');

Route::get('/admin/room/gallery/{id}',[AdminRoomController::class,'gallery'])->name('admin_room_gallery')->middleware('admin:admin');

Route::post('/admin/room/gallery/store/{id}',[AdminRoomController::class,'gallery_store'])->name('admin_room_gallery_store');

Route::get('/admin/room/gallery/delete/{id}',[AdminRoomController::class,'gallery_delete'])->name('admin_room_gallery_delete');




/**-----------------------------------  Admin ROUTES   -----------------------------------------------**/

Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware('admin:admin');
Route::get('admin/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::post('/login/submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
