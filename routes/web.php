<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;

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

Route::get('/',[PageController::class,'login']);

// this is for CAO account creation and authentication
Route::get('/user/signup',[PageController::class,'signup']);
Route::post('/user/signups',[AuthController::class,'signupAuthentication']);


// requestor dashboard
// Route::get('/requestor/dashboard',[PageController::class,'requestorDashboard']);
Route::post('/requestors/dashboard',[AuthController::class,'signupRequestorAuthentication']);


// this is for workstaff account creation and authenticaton
// Route::get('/user/signupStaff',[PageController::class,'signupStaff'])->middleware('auth');
Route::post('/staffs/dashboard',[AuthController::class,'signupStaffAuthentication']);


// this is for the login and authentication of the accounts
Route::get('/user/login/',[PageController::class,'login'])->name('login');


Route::post('/user/login/admin',[AuthController::class,'adminLoginAuthentication']);
Route::post('/user/login/requestor',[AuthController::class, 'requestorLoginAuthentication']);
Route::post('/user/login/staff',[AuthController::class, 'staffLoginAuthentication']);

Route::get('/admin/dashboard',[PageController::class,'adminDashboard'])->middleware('auth');
Route::get('/requestor/dashboard',[PageController::class,'requestorDashboard'])->middleware('auth');
Route::get('/staff/dashboard',[PageController::class,'staffDashboard'])->middleware('auth');

Route::get('user/logout',[AuthController::class,'logout']);