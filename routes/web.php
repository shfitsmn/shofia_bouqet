<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'index']);

Route::get('/login', [LandingController::class, 'login']);
Route::post('/login', [LandingController::class, 'loginStore']);
Route::get('/register', [LandingController::class,'register']);
Route::post('/register', [LandingController::class, 'registerStore']);

Route::get('/logout', [LandingController::class, 'logout']);

Route::get('/dashboard', function () {
    return 'Dashboard';
});