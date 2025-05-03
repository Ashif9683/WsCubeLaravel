<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistraitionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', [PageController::class, 'index']);


// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', 'App\Http\Controllers\PageController@about');

// Route::resource('/photo',PhotoController::class);

// Form Routes

// Route::get('/register', [RegistraitionController::class, 'index'])->name('index');
// Route::post('/register', [RegistraitionController::class, 'register'])->name('register');
    
Route::get('/',[CustomerController::class,'index'])->name('customer.index');
Route::get('customer/viewData',[CustomerController::class,'viewData'])->name('customer.viewData');
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::post('/customer',[CustomerController::class,'store'])->name('store');
