@extends('template')

@section('title', 'Data Siswa')
@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Data Siswa</h2>
                <a href="{{ route('siswa.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Siswa
                </a>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-users"></i> Daftar Siswa (Total: {{ $totalSiswa }})</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="siswaTable">
                    <thead class="table-dark">
                        <tr>
                            <th width="5%">No</th>
                            <th width="12%">NISN</th>
                            <th width="25%">Nama Siswa</th>
                            <th width="12%">Jenis Kelamin</th>
                            <th width="12%">Tahun Masuk</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($siswa as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>
                                @if($item->jenis_kelamin == 'Laki-Laki')
                                    <span class="badge bg-info">
                                        <i class="fas fa-mars"></i> Laki-Laki
                                    </span>
                                @else
                                    <span class="badge bg-danger">
                                        <i class="fas fa-venus"></i> Perempuan
                                    </span>
                                @endif
                            </td>
                            <td>{{ $item->tahun_masuk }}</td>
                            <td class="text-center">
                                <a href="{{ route('siswa.edit', $item->id_siswa) }}" 
                                   class="btn btn-sm btn-warning" 
                                   title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('siswa.destroy', $item->id_siswa) }}" 
                                      method="POST" 
                                      class="d-inline"
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-danger" 
                                            title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">
                                <i class="fas fa-inbox fa-3x mb-3"></i>
                                <p>Belum ada data siswa</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>