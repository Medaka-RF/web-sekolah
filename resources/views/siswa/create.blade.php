@extends('template')

@section('title', 'Tambah Siswa')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Tambah Data Siswa</h2>

    {{-- Pesan Error Validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Tambah Siswa --}}
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control" id="nisn" 
                   value="{{ old('nisn') }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" 
                   value="{{ old('nama_siswa') }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
            <input type="number" name="tahun_masuk" class="form-control" id="tahun_masuk" 
                   value="{{ old('tahun_masuk') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.siswa') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
