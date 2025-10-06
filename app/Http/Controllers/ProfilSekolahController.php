<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;

class ProfilSekolahController extends Controller
{
    //
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('admin.profil', compact('profil'));
    }

    public function edit($id)
{
    $profil = ProfilSekolah::findOrFail($id);
    return view('ProfilSekolah.edit', compact('profil'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:40',
            'kepala_sekolah' => 'required|string|max:40',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png',
            'npsn' => 'required|string|max:10',
            'alamat' => 'required',
            'kontak' => 'required|max:15',
            'visi_misi' => 'required',
            'tahun_berdiri' => 'required|digits:4',
            'deskripsi' => 'required',
        ]);

        $profil = ProfilSekolah::findOrFail($id);
        $data = $request->except(['foto', 'logo']);

        // Upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto', 'public');
            $data['foto'] = $foto;
        }

        // Upload logo
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('logo', 'public');
            $data['logo'] = $logo;
        }

        $profil->update($data);

        return redirect()->route('admin.profil')->with('success', 'Profil sekolah berhasil diperbarui.');
    }
}
