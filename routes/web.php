<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistraitionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index']);


// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', 'App\Http\Controllers\PageController@about');

Route::resource('/photo',PhotoController::class);

// Form Routes

Route::get('/register', [RegistraitionController::class, 'index'])->name('index');
Route::post('/register', [RegistraitionController::class, 'register'])->name('register');;
    