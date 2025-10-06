<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri', compact('galeri'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'required|image|max:2048',
        ]);

        $path = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
            'tanggal_upload' => now(),
        ]);

        return redirect()->route('admin.galeri')->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    public function edit($id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        $path = $galeri->foto;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('galeri', 'public');
        }

        $galeri->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
            'tanggal_upload' => now(),
        ]);

        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil diperbarui!');
    }

    public function destroy($id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);
        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil dihapus!');
    }
}
