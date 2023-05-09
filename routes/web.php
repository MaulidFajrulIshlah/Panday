<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;

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

// Route::get('/', [LayoutController::class, 'index'])->name('beranda');

// Login
Route::controller(LoginController::class)->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/postLogin', [LoginController::class, 'authenticate'])->name('postLogin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda')->middleware('auth');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa')->middleware('auth');
