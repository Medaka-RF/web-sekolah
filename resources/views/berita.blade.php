@extends('template')

@section('title', 'Data Berita')

@section('content')
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-newspaper"></i> Daftar Berita (Total: {{ $totalBerita }})
    </div>

    <div class="card-body">
        <a href="{{ route('berita.create') }}" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i> Tambah Berita
        </a>

        @if (session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($berita as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->user->username ?? '-' }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                        <td>
                            @if ($item->gambar)
                                <img src="{{ asset('assets/image/' . $item->gambar) }}" alt="Gambar" width="80" class="rounded">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('berita.edit', $item->id_berita) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('berita.destroy', $item->id_berita) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus berita ini?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data berita</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
