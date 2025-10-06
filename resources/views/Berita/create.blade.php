@extends('template')

@section('title', 'Tambah Berita')

@section('content')
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-newspaper"></i> Tambah Berita
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Periksa kembali inputan Anda!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi Berita</label>
                <textarea name="isi" class="form-control" rows="5" required>{{ old('isi') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') ?? date('Y-m-d') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar (Opsional)</label>
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <label class="form-label">Dibuat oleh</label>
                <select name="id_user" class="form-select" required>
                    <option value="">-- Pilih Admin --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id_user }}">{{ $user->username }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-end">
                <a href="{{ route('admin.berita') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan Berita</button>
            </div>
        </form>
    </div>
</div>
@endsection
