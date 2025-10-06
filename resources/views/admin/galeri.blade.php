@extends('template')

@section('title', 'Galeri Sekolah')

@section('content')
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <i class="fas fa-images"></i> Galeri Sekolah (Total: {{ count($galeri ?? []) }})
    </div>

    <div class="card-body">
        <a href="{{ route('galeri.create') }}" class="btn btn-primary mb-3">+ Tambah Foto</a>

        <div class="row">
            @foreach ($galeri as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    @if ($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" height="180" style="object-fit: cover;">
                    @else
                        <div class="p-5 text-center text-muted">No Image</div>
                    @endif
                    <div class="card-body">
                        <h6 class="card-title">{{ $item->judul }}</h6>
                        <p class="small text-muted">{{ $item->deskripsi }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('galeri.edit', $item->id_galeri) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('galeri.destroy', $item->id_galeri) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus foto ini?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
