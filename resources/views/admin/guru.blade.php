@extends('template')

@section('title', 'Data Guru')

@section('content')
<div class="card mt-4">
    <div class="card-header bg-success text-white">
        <i class="fas fa-chalkboard-teacher"></i> Daftar Guru (Total: {{ count($guru ?? []) }})
    </div>

    <div class="card-body">
        <a href="{{ route('guru.create') }}" class="btn btn-success mb-3">+ Tambah Guru</a>

        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>NIP</th>
                    <th>Mata Pelajaran</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guru as $index => $item)
                <tr class="text-center">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_guru }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->mapel }}</td>
                    <td>
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Guru" width="60" height="60" class="rounded-circle">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('guru.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('guru.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
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
