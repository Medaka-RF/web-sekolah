@extends('template')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-success text-white">
            <i class="fas fa-plus"></i> Tambah Ekstrakurikuler
        </div>
        <div class="card-body">
            <form action="{{ route('ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text" name="nama_ekstrakurikuler" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pembimbing</label>
                    <input type="text" name="pembimbing" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jadwal</label>
                    <input type="text" name="jadwal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary text-white">Simpan</button>
                <a href="{{ route('admin.ekstrakurikuler') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
