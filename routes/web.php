<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);


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

Route::get('admin/guru', [GuruController::class, 'index'])->name('admin.guru');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('admin/guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');

Route::get('admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('admin/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::get('admin/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('admin.ekstrakurikuler');
Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('ekstrakurikuler.create');
Route::post('admin/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('ekstrakurikuler.store');
Route::get('/ekstrakurikuler/{id_ekstrakurikuler}/edit', [EkstrakurikulerController::class, 'edit'])->name('ekstrakurikuler.edit');
Route::put('/ekstrakurikuler/{id_ekstrakurikuler}', [EkstrakurikulerController::class, 'update'])->name('ekstrakurikuler.update');
Route::delete('/ekstrakurikuler/{id_ekstrakurikuler}', [EkstrakurikulerController::class, 'destroy'])->name('ekstrakurikuler.destroy');

Route::get('admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('admin/galeri', [GaleriController::class, 'store'])->name('galeri.store');
Route::get('/galeri/{id_galeri}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
Route::put('/galeri/{id_galeri}', [GaleriController::class, 'update'])->name('galeri.update');
Route::delete('/galeri/{id_galeri}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

Route::get('admin/profil', [ProfilSekolahController::class, 'index'])->name('admin.profil');
Route::get('/profil/{id}/edit', [ProfilSekolahController::class, 'edit'])->name('profil.edit');
Route::put('profil/{id}', [ProfilSekolahController::class, 'update'])->name('profil.update');