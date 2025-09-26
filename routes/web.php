<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/dashboard',[LoginController::class, 'autenticate'])->name('login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/berita',[DashboardController::class, 'show']);
Route::get('/dashboard/galeri',[DashboardController::class, 'show']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');





