@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profil Sekolah</h2>

    <form action="{{ route('profil.update', $profil->id_profil) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" value="{{ old('nama_sekolah', $profil->nama_sekolah) }}" required>
        </div>

        <div class="mb-3">
            <label>Kepala Sekolah</label>
            <input type="text" name="kepala_sekolah" class="form-control" value="{{ old('kepala_sekolah', $profil->kepala_sekolah) }}" required>
        </div>

        <div class="mb-3">
            <label>NPSN</label>
            <input type="text" name="npsn" class="form-control" value="{{ old('npsn', $profil->npsn) }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ old('alamat', $profil->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" value="{{ old('kontak', $profil->kontak) }}" required>
        </div>

        <div class="mb-3">
            <label>Visi Misi</label>
            <textarea name="visi_misi" class="form-control" required>{{ old('visi_misi', $profil->visi_misi) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Tahun Berdiri</label>
            <input type="number" name="tahun_berdiri" class="form-control" value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $profil->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Foto Sekolah</label><br>
            @if ($profil->foto)
                <img src="{{ asset('assets/image'.$profil->foto) }}" width="100" class="mb-2"><br>
            @endif
            <input type="file" name="foto" class="form-control">
        </div>

        <div class="mb-3">
            <label>Logo Sekolah</label><br>
            @if ($profil->logo)
                <img src="{{ asset('storage/'.$profil->logo) }}" width="100" class="mb-2"><br>
            @endif
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('admin.profil') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
