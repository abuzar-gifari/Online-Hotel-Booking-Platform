<?php

// () {} []

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
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



/**-----------------------------------  Admin ROUTES   -----------------------------------------------**/

Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware('admin:admin');
Route::get('admin/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::post('/login/submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
