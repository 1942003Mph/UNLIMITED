<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\Registrcontroller;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\FeatursController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\site\SiteController;

Route::get('/',  [SiteController::class ,'index'])->name('home');
Route::post('home',  [SiteController::class ,'contact_data'])->name('contactus');


Route::prefix('admin')->name('admin.')->middleware(['auth','is_admin'])->group(function() { 
Route::get('/' , [AdminController::class , "index"])->name('index');    
Route::get('Send_enrollment' , [EnrollmentController::class , "SendNotification"]);    
Route::resource('user', UserController::class);  
Route::resource('caregory', categoryController::class);  
Route::resource('sliders', SliderController::class);  
Route::resource('services', ServiceController::class);  
Route::resource('ourwork', WorkController::class);  
Route::resource('featurs', FeatursController::class);  
Route::resource('teams', TeamController::class);  
Route::resource('settings', TeamController::class);  
});

Route::prefix('Auth')->name('Auth.')->group(function() { 
    
    Route::get('login',  [LoginController::class ,'index'])->name('login');
    Route::post('validate_login', [LoginController::class ,'validate_login'])->name('validate_login');

    Route::get('registration', [Registrcontroller::class ,'registration'])->name('registration');
    Route::post('registration', [Registrcontroller::class ,'validate_registration'])->name('validateRegistration');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
    });
    // Auth::routes(['verify' => true]);
