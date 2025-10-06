@extends('template')

@section('title', 'Edit Berita')

@section('content')
<div class="card mt-4">
    <div class="card-header bg-warning text-dark">
        <i class="fas fa-edit"></i> Edit Berita
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

        <form action="{{ route('berita.update', $berita->id_berita) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi Berita</label>
                <textarea name="isi" class="form-control" rows="5" required>{{ old('isi', $berita->isi) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $berita->tanggal) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar Saat Ini</label><br>
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" width="120" class="rounded mb-2">
                @else
                    <p class="text-muted">Tidak ada gambar</p>
                @endif
                <input type="file" name="gambar" class="form-control mt-2" accept="image/*">
            </div>

            <div class="mb-3">
                <label class="form-label">Dibuat oleh</label>
                <select name="id_user" class="form-select" required>
                    <option value="">-- Pilih Admin --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id_user }}" {{ $user->id_user == $berita->id_user ? 'selected' : '' }}>
                            {{ $user->username }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="text-end">
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-warning text-dark">Perbarui Berita</button>
            </div>
        </form>
    </div>
</div>
@endsection
