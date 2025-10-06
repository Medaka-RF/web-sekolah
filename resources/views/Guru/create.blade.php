@extends('template')

@section('title', 'Tambah Guru')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Tambah Data Guru</h2>

    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama_guru" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="mapel" class="form-label">Mata Pelajaran</label>
            <input type="text" name="mapel" id="mapel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.guru') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
