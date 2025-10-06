<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Ekstrakurikuler;
use App\Models\Galeri;

class HomeController extends Controller
{
    //
    public function index() {
    $profil = ProfilSekolah::first();
    $guru = Guru::all();
    $siswa = Siswa::all();
    $ekskul = Ekstrakurikuler::all();
    $galeri = Galeri::all();
    return view('home', compact('profil','guru','siswa','ekskul','galeri'));
}
    public function profilSekolah()
    {
        $profil = ProfilSekolah::first();
        return view('profilsekolah', compact('profil'));
    }
}
