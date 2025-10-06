<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    //
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        return view('admin.ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function create()
    {
        return view('ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekstrakurikuler' => 'required|string|max:100',
            'pembina' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|max:2048'
        ]);

        $path = $request->hasFile('foto') 
            ? $request->file('foto')->store('ekstrakurikuler', 'public') 
            : null;

        Ekstrakurikuler::create([
            'nama_ekstrakurikuler' => $request->nama_ekstrakurikuler,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
            'foto' => $path
        ]);

        return redirect()->route('admin.ekstrakurikuler')->with('success', 'Ekstrakurikuler berhasil ditambahkan!');
    }

    public function edit($id_ekstrakurikuler)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id_ekstrakurikuler);
        return view('ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id_ekstrakurikuler)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id_ekstrakurikuler);

        $request->validate([
            'nama_ekstrakurikuler' => 'required|string|max:100',
            'pembina' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|max:2048'
        ]);

        $path = $ekstrakurikuler->foto;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('ekstrakurikuler', 'public');
        }

        $ekstrakurikuler->update([
            'nama_ekstrakurikuler' => $request->nama_ekstrakurikuler,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
            'foto' => $path
        ]);

        return redirect()->route('admin.ekstrakurikuler')->with('success', 'Data berhasil diperbarui!');
    }

     public function destroy($id_ekstrakurikuler)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id_ekstrakurikuler);
        $ekstrakurikuler->delete();
        return redirect()->route('admin.ekstrakurikuler')->with('success', 'Data berhasil dihapus!');
    }
}
