<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/berita',[DashboardController::class, 'show']);
Route::get('/dashboard/galeri',[DashboardController::class, 'show']);

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/guru', [DashboardController::class, 'guru'])->name('admin.guru');
Route::get('/admin/berita', [DashboardController::class, 'berita'])->name('admin.berita');
Route::get('/admin/galeri', [DashboardController::class, 'galeri'])->name('admin.galeri');
Route::get('/admin/profil', [DashboardController::class, 'profil'])->name('admin.profil');
Route::get('/admin/profilsekolah', [DashboardController::class, 'kelas'])->name('admin.profilsekolah');
Route::get('/admin/pengguana', [DashboardController::class, 'pengguna'])->name('admin.pengguna');

Route::get('admin/siswa', [SiswaController::class, 'index'])->name('admin.siswa');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('admin/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
