<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;


class GuruController extends Controller
{
    //
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru', compact('guru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required',
            'mapel' => 'required',
            'foto' => 'nullable|image|max:2048'
        ]);

        $path = $request->file('foto') ? $request->file('foto')->store('guru', 'public') : null;

        Guru::create([
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'mapel' => $request->mapel,
            'foto' => $path
        ]);

        return redirect()->route('admin.guru')->with('success', 'Guru berhasil ditambahkan!');
    }

    public function edit($id_guru)
    {
        $guru = Guru::findOrFail($id_guru);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id_guru)
    {
        $guru = Guru::findOrFail($id_guru);

        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required',
            'mapel' => 'required',
            'foto' => 'nullable|image|max:2048'
        ]);

        $path = $guru->foto;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('guru', 'public');
        }

        $guru->update([
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'mapel' => $request->mapel,
            'foto' => $path
        ]);

        return redirect()->route('admin.guru')->with('success', 'Guru berhasil diperbarui!');
    }

    public function destroy($id_guru)
    {
        $guru = Guru::findOrFail($id_guru);
        $guru->delete();
        return redirect()->route('admin.guru')->with('success', 'Guru berhasil dihapus!');
    }
}
