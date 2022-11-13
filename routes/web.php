<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\InPatientController;
use App\Http\Controllers\OutPatientController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('header', function () {
    return view('layout/master');
});
Route::resource('patient', PatientController::class);
Route::resource('doctor', DoctorController::class);
Route::resource('hr', HrController::class);
Route::resource('appointments', AppointmentsController::class);
Route::resource('blood', BloodController::class);
Route::resource('departments', DepartmentsController::class);
Route::resource('finance', FinanceController::class);
Route::resource('inpatient', InPatientController::class);
Route::resource('outpatient', OutPatientController::class);
Route::resource('lab', LabController::class);
Route::resource('pharmacy', PharmacyController::class);
Route::resource('room', RoomController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
