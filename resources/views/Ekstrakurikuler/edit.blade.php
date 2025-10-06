@extends('template')

@section('title', 'Edit Ekstrakurikuler')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-success text-white">
            <i class="fas fa-edit"></i> Edit Ekstrakurikuler
        </div>
        <div class="card-body">
            <form action="{{ route('ekstrakurikuler.update', $ekstrakurikuler->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text" name="nama_ekstrakurikuler" class="form-control" value="{{ $ekstrakurikuler->nama_ekstrakurikuler }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pembina</label>
                    <input type="text" name="pembina" class="form-control" value="{{ $ekstrakurikuler->pembina }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jadwal Latihan</label>
                    <input type="text" name="jadwal_latihan" class="form-control" value="{{ $ekstrakurikuler->jadwal_latihan }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <input type="deksripsi" class="form-control" value="{{ $ekstrakurikuler->deksripsi }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label><br>
                    @if ($ekstrakurikuler->file)
                        <img src="{{ asset('storage/' . $ekstrakurikuler->file) }}" width="100" class="rounded mb-2">
                    @endif
                    <input type="file" name="file" class="form-control">
                </div>
                <button type="submit" class="btn btn-success text-white">Update</button>
                <a href="{{ route('admin.ekstrakurikuler') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
