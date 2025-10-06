<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    public function index()
    {

        if (Auth::user()->role !== 'operator') {
            return redirect('/admin/dashboard');
        }

        $totalSiswa = Siswa::count();
        $totalGuru = Guru::count();

        return view('operator.dashboard', compact('totalSiswa', 'totalGuru'));
    }
}
