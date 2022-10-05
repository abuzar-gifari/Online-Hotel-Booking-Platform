<?php

// () {} []

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**-----------------------------------  Admin ROUTES   -----------------------------------------------**/

Route::get('/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::get('/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
Route::post('/login/submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');
