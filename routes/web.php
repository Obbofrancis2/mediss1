<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\UpdatesController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [HospitalController::class,'index'])->name('indexroute');
Route::get('/update', [UpdatesController::class,'updates'])->name('updateroute');
Route::get('/emergency', [EmergencyController::class,'emergency'])->name('emergencyroute');
Route::get('/pending', [PendingController::class,'pending'])->name('pendingroute');
Route::get('/signup', [SignupController::class,'signup'])->name('signuproute');
Route::get('/signin', [SigninController::class,'signin'])->name('signinroute');



Route::get('/addservice', [ServicesController::class, 'add'])->name('addservice');
Route::post('/addservice', [ServicesController::class, 'store'])->name('addservice.store');
Route::get('/pending', [Appointmentcontroller::class, 'pending'])->name('pending');