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
    Route::get('/patients',[\App\Http\Controllers\PatientListController::class, 'index'])->name('patient');
    Route::get('/patients/all',[\App\Http\Controllers\PatientListController::class, 'allTimeAppointment'])->name('all.appointments');
    Route::get('/status/update/{id}',[\App\Http\Controllers\PatientListController::class, 'toggleStatus'])->name('update.status');
});



Route::group(['middleware'=>['auth','doctor']],function(){
    Route::resource('appointment',AppointmentController::class);
    Route::post('/appointment/check',[AppointmentController::class, 'check'])->name('appointment.check');
    Route::post('/appointment/update',[AppointmentController::class ,'updateTime'])->name('update');

    // prescription routes
    Route::get('patient-today', [\App\Http\Controllers\PresciptionController::class, 'index'])->name('patients.today');

    Route::post('/prescription', [\App\Http\Controllers\PresciptionController::class, 'store'])->name('prescription');

    Route::get('/prescription/{userId}/{date}', [\App\Http\Controllers\PresciptionController::class, 'show'])->name('prescription.show');
    Route::get('/prescribed-patients', [\App\Http\Controllers\PresciptionController::class, 'patientsFromPrescription'])->name('prescribed.patients');
});

Route::get('/new-appointment/{doctorId}/{date}', [FrontendController::class, 'show'])->name('create-appointment');


Route::group(['middleware'=>['auth','patient']],function() {
// make user booking
    Route::post('/book/appointment', [FrontendController::class, 'store'])->name('booking.appointment')->middleware('auth');
    Route::get('/my-booking', [FrontendController::class, 'myBookings'])->name('my.booking')->middleware('auth');

    Route::get('/user-profile', [\App\Http\Controllers\ProfileController::class, 'index']);
    Route::post('/profile', [\App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');
    Route::get('/my-prescription', [\App\Http\Controllers\FrontendController::class, 'myPrescription'])->name('my.prescription');

    // profile picture method in controller is the only one not here
});
