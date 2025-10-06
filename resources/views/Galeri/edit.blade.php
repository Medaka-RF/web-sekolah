@extends('template')

@section('title', 'Edit Media Galeri')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-success text-white">
            <i class="fas fa-edit"></i> Edit Media Galeri
        </div>
        <div class="card-body">
            <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $galeri->judul }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control" required>{{ $galeri->keterangan }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Media</label>
                    <select name="jenis" class="form-control" required>
                        <option value="foto" {{ $galeri->jenis == 'foto' ? 'selected' : '' }}>Foto</option>
                        <option value="video" {{ $galeri->jenis == 'video' ? 'selected' : '' }}>Video</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $galeri->tanggal }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">File Saat Ini</label><br>
                    @if ($galeri->jenis === 'foto')
                        <img src="{{ asset('storage/' . $galeri->file) }}" width="150" class="rounded mb-2">
                    @elseif ($galeri->jenis === 'video')
                        <video width="320" height="240" controls class="mb-2">
                            <source src="{{ asset('storage/' . $galeri->file) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Ganti File (Opsional)</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.galeri') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
