@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5 text-primary">Daftar Guru SMP Negeri 1 Sukaratu</h2>

    <div class="row">
        @forelse($guru as $item)
            <div class="col-md-3 mb-4">
                <div class="card text-center shadow-sm h-100">
                    <img src="{{ asset('storage/' . $item->foto) }}"
                         class="card-img-top"
                         alt="{{ $item->nama_guru }}"
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">{{ $item->nama_guru }}</h5>
                        <p class="text-muted mb-0">{{ $item->mapel }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada data guru yang tersedia.</p>
            </div>
        @endforelse
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('home') }}" class="btn btn-secondary">
            ← Kembali ke Beranda
        </a>
    </div>
</div>
@endsection
