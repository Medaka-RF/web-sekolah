@extends('template')

@section('title', 'Edit Siswa')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Data Siswa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" id="nisn" class="form-control" 
                   value="{{ old('nisn', $siswa->nisn) }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" 
                   value="{{ old('nama_siswa', $siswa->nama_siswa) }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-Laki" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
            <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control" 
                   value="{{ old('tahun_masuk', $siswa->tahun_masuk) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.siswa') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
