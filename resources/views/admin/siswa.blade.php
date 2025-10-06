@extends('template')

@section('title', 'Data Siswa')

@section('content')
    <div class="card">
        <div class="card-header bg-success text-white">
            <i class="fas fa-users"></i> Daftar Siswa (Total: {{ count($siswa) }})
        </div>
        <div class="card-body">
            <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">+ Tambah Siswa</a>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Tahun Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>
                                <span class="badge bg-danger">{{ $item->jenis_kelamin }}</span>
                            </td>
                            <td>{{ $item->tahun_masuk }}</td>
                            <td>
                                <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
