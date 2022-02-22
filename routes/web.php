<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);

//admin
Route::get('/add-doctor-view', [AdminController::class, 'add_doctor_view']);
Route::post('/insert-doctor', [AdminController::class, 'insert_doctor']);


//doctor
Route::get('/show-appointment', [DoctorController::class, 'show_appointment']);
Route::get('/approved/{id}', [DoctorController::class, 'approved']);
Route::get('/canceled/{id}', [DoctorController::class, 'canceled']);


//user
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancel-appoint/{id}', [HomeController::class, 'cancel_appoint']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
