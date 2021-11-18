<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CantinaController;
use Illuminate\Support\Facades\Route;

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
// HomeController
Route::get('/', [HomeController::class,'index'])->name('home');

// AuthController
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.do');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

// CantinaController
Route::get('registration', [CantinaController::class, 'showRegistration'])->name('register.user');
Route::post('custom-registration', [CantinaController::class, 'registration'])->name('register.user.do'); 

