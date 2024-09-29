<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Driver\DriverController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CustomerController::class ,'index' ])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/reservation', ReservationController::class);
    Route::delete('/reservation/{id}', 'ReservationController@delete')->name('reservation.delete');
    Route::resource('/post', PostController::class);


});

require __DIR__.'/auth.php';



Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard'); 
    
});

Route::middleware(['auth','role:owner'])->group(function () {
    Route::get('owner/dashboard',[OwnerController::class,'index'])->name('owner.dashboard'); 
});

Route::middleware(['auth','role:company'])->group(function () {
    Route::get('company/dashboard',[CompanyController::class,'index'])->name('company.dashboard'); 
    
});


Route::middleware(['auth','role:driver'])->group(function () {
    Route::get('driver/dashboard',[DriverController::class,'index'])->name('driver.dashboard'); 
    
});


    


