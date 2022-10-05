<?php

// () {} []

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;



/**-----------------------------------  Frontend ROUTES   --------------------------------------------**/

Route::get('/',[HomeController::class,'index'])->name('home');


/**-----------------------------------  Admin ROUTES   -----------------------------------------------**/

Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware('admin:admin');
Route::get('admin/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::post('/login/submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
