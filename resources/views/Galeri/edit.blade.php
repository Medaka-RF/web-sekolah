@extends('template')

@section('title', 'Edit Foto Galeri')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <i class="fas fa-edit"></i> Edit Foto Galeri
        </div>
        <div class="card-body">
            <form action="{{ route('galeri.update', $galeri->id_galeri) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $galeri->judul }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{ $galeri->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label><br>
                    @if ($galeri->foto)
                        <img src="{{ asset('storage/' . $galeri->foto) }}" width="150" class="rounded mb-2">
                    @endif
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-warning text-white">Update</button>
                <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
