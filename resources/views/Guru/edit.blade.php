@extends('template')

@section('title', 'Edit Guru')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Data Guru</h2>

    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama_guru" class="form-control" 
                   value="{{ $guru->nama_guru }}" required>
        </div>

        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" 
                   value="{{ $guru->nip }}" required>
        </div>

        <div class="mb-3">
            <label for="mapel" class="form-label">Mata Pelajaran</label>
            <input type="text" name="mapel" id="mapel" class="form-control" 
                   value="{{ $guru->mapel }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
            @if($guru->foto)
                <img src="{{ asset('storage/foto_guru/' . $guru->foto) }}" 
                     alt="Foto Guru" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('admin.guru') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
