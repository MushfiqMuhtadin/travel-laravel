<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TravellerController;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', [CustomAuthController::class, 'index'])->name('index');
Route::get('login', [CustomAuthController::class, 'login'])->name('login');

Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

//Custom login authentication with validation
Route::post('login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::get('register', [CustomAuthController::class, 'register'])->name('register');
//registration post
Route::post('registerpost', [CustomAuthController::class, 'registerpost'])->name('registerpost');

Route::get('traveller/dashboard', [TravellerController::class, 'TravellerDashboard'])->name('traveller/dashboard');
Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin/dashboard');

Route::get('createpackage', [AdminController::class, 'createpackage'])->name('createpackage');
Route::post('CreatepackagePost', [AdminController::class, 'CreatepackagePost'])->name('CreatepackagePost');

//traveller checkout
Route::get('checkout/{id}', [TravellerController::class, 'checkout'])->name('checkout');

//traveller checkout post
Route::post('checkoutpost', [TravellerController::class, 'checkoutpost'])->name('checkoutpost');

//payment history get
Route::get('payment.history/{id}', [TravellerController::class, 'paymenthistory'])->name('payment.history');

//patient profile view with patientid passed through session
Route::get('traveller/dashboard/profile/{id}', [TravellerController::class, 'TravellerProfile'])->name('traveller.profile');

////patient edit profile view passed patient id
Route::get('/traveller/dashboard/profile/{id}/edit',  [TravellerController::class, 'TravellerEditProfile'])->name('traveller.edit');

//patient update profile submit
Route::put('/traveller/dashboard/profile/{id}/update',  [TravellerController::class, 'TravellerUpdateProfile'])->name('travellerprofile.update');


Route::get('about', [CustomAuthController::class, 'about'])->name('about');
Route::get('contact', [CustomAuthController::class, 'contact'])->name('contact');
Route::get('package', [CustomAuthController::class, 'tourpackage'])->name('package');
Route::get('service', [CustomAuthController::class, 'service'])->name('service');
       