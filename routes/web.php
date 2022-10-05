<?php

// () {} []

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**-----------------------------------  Admin ROUTES   -----------------------------------------------**/

Route::get('/home',[AdminHomeController::class,'index'])->name('admin_home');
Route::get('/login',[AdminLoginController::class,'index'])->name('admin_login');
