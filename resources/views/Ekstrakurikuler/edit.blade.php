@extends('template')

@section('title', 'Edit Ekstrakurikuler')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <i class="fas fa-edit"></i> Edit Ekstrakurikuler
        </div>
        <div class="card-body">
            <form action="{{ route('ekstrakurikuler.update', $ekstrakurikuler->id_ekstrakurikuler) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text" name="nama_ekstrakurikuler" class="form-control" value="{{ $ekstrakurikuler->nama_ekstrakurikuler }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pembimbing</label>
                    <input type="text" name="pembimbing" class="form-control" value="{{ $ekstrakurikuler->pembimbing }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jadwal</label>
                    <input type="text" name="jadwal" class="form-control" value="{{ $ekstrakurikuler->jadwal }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{ $ekstrakurikuler->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label><br>
                    @if ($ekstrakurikuler->foto)
                        <img src="{{ asset('storage/' . $ekstrakurikuler->foto) }}" width="100" class="rounded mb-2">
                    @endif
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-warning text-white">Update</button>
                <a href="{{ route('ekstrakurikuler.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection