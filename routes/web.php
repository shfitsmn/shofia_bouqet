<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [LandingController::class, 'index'])->name("landing");

// middleware group guest
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LandingController::class, 'login'])->name("login");
    Route::post('/login', [LandingController::class, 'loginStore']);
    Route::get('/register', [LandingController::class, 'register'])->name("register");
    Route::post('/register', [LandingController::class, 'registerStore']);
});


// route group for authentication
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LandingController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});