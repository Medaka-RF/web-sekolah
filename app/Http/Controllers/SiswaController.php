<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa = Siswa::orderBy('nama_siswa', 'asc')->get();
        $totalSiswa = Siswa::count();
        
        return view('admin.siswa', compact('siswa', 'totalSiswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswa,nisn|max:10',
            'nama_siswa' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tahun_masuk' => 'required|digits:4|integer|min:2000|max:' . (date('Y')),
        ]);

        Siswa::create($request->all());

        return redirect()->route('admin.siswa')
                         ->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nisn' => 'required|unique:siswa,nisn,' . $siswa->id_siswa . '|max:10',
            'nama_siswa' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tahun_masuk' => 'required|digits:4|integer|min:2000|max:' . (date('Y')),
        ]);

        $siswa->update($request->all());

        return redirect()->route('admin.siswa')
                         ->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.siswa')
                         ->with('success', 'Siswa berhasil dihapus.');
    }
}
