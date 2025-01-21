<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
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

    Route::get("/user/all", [UserController::class, 'index'])->name('user.index');
    Route::get("/user/create", [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get("/produk/all", [ProdukController::class, 'index'])->name('produk.index');
    Route::get("/produk/create", [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');
});
