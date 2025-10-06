<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }
    
    public function show()
    {

    }

    // public function siswa()
    // {
    //     return view('admin.siswa', [
    //     'title' => 'Data Siswa',
    //     'active' => 'siswa'
    //     ]);
    // }

    public function guru()
    {
        return view('admin.guru',[
        'title' => 'Data Guru',
        'active' => 'guru'
        ]);
    }

    public function berita()
    {
        return view('admin.berita',[
            'title' => 'Data Berita',
            'active' => 'berita'
        ]);
    }
    
    public function galeri()
    {
        return view('admin.galeri',[
        'title' => 'Data Galeri',
        'active' => 'galeri' 
        ]);
    }

    public function profil()
    {
        return view('admin.galeri',[
            'title' => 'Data Profil',
            'active' => 'profil'
        ]);
    }

    public function kelas()
    {
        return view('admin.profil',[
            'title' => 'Data Profil Sekolah',
            'active' => 'profilsekolah'
        ]);
    }

    public function pengguna()
    {
        return view('admin.pengguna',[
            'title' => 'Data Pengguna',
            'active' => 'pengguna'
        ]);
    }
}
