<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\AdminController;


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
    return view('dashboard');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('admin', [CustomAuthController::class, 'admin']); 



Route::post('topup', [TopUpController::class, 'topup']); 
Route::get('showwalletbalance', [TopUpController::class, 'showwalletbalance']);
Route::get('sendmoney', [TopUpController::class, 'sendmoney']); 
Route::post('sendmoneyto', [TopUpController::class, 'sendmoneyto']); 
Route::get('transactionlist', [TopUpController::class, 'transactionlist']); 



Route::get('adminp', [AdminController::class, 'adminp']); 
Route::get('dashboard1', [AdminController::class, 'dashboard1']); 

Route::get('registercustomer', [AdminController::class, 'registercustomer']); 
Route::get('customerdetails', [AdminController::class, 'customerdetails']); 
Route::get('transactionlist1', [AdminController::class, 'transactionlist1']); 

Route::get('viewdetail/{id}', [AdminController::class, 'viewdetail'])->name('customer.view'); 









