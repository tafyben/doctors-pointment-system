<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [FrontendController::class, 'index']);

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>['auth','admin']],function() {
    Route::resource('doctor', \App\Http\Controllers\DoctorController::class);
});



Route::group(['middleware'=>['auth','doctor']],function(){
    Route::resource('appointment',AppointmentController::class);
    Route::post('/appointment/check',[AppointmentController::class, 'check'])->name('appointment.check');
    Route::post('/appointment/update',[AppointmentController::class ,'updateTime'])->name('update');
});

Route::get('/new-appointment/{doctorId}/{date}', [FrontendController::class, 'show'])->name('create-appointment');
