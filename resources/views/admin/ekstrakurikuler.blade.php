@extends('template')

@section('title', 'Data Ekstrakurikuler')

@section('content')
<div class="card mt-4">
    <div class="card-header bg-success text-white">
        <i class="fas fa-futbol"></i> Daftar Ekstrakurikuler (Total: {{ count($ekstrakurikuler ?? []) }})
    </div>

    <div class="table-responsive min-vh-100">
    <div class="card-body">
        <a href="{{ route('ekstrakurikuler.create') }}" class="btn btn-primary mb-3">+ Tambah Ekstrakurikuler</a>

        <table class="table table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Ekstrakurikuler</th>
                    <th>Pembina</th>
                    <th>Jadwal Latihan</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($ekstrakurikuler as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_ekstrakurikuler }}</td>
                    <td>{{ $item->pembina }}</td>
                    <td>{{ $item->jadwal_latihan }}</td>
                    <td>{{ $item->deksripsi }}</td>
                    <td>
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" width="60" height="60" class="rounded">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('ekstrakurikuler.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('ekstrakurikuler.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
