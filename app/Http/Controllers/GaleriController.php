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
            'keterangan' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20480',
            'jenis' => 'required|in:foto,video',
            'tanggal' => 'required|date',
        ]);

        $path = $request->file('file')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'file' => $path,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('admin.galeri')->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:20480',
            'jenis' => 'required|in:foto,video',
            'tanggal' => 'required|date',
        ]);

        $path = $galeri->foto;
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('galeri', 'public');
        }

        $galeri->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'file' => $path,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Data galeri berhasil dihapus!');
    }

    public function publicIndex()
    {
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }
}
