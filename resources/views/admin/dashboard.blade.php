@extends('template')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="row text-center">
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-users fa-2x text-primary"></i>
                    <h5 class="mt-2">Siswa</h5>
                    <p>{{ $totalSiswa ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-chalkboard-teacher fa-2x text-success"></i>
                    <h5 class="mt-2">Guru</h5>
                    <p>{{ $totalGuru ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-newspaper fa-2x text-warning"></i>
                    <h5 class="mt-2">Berita</h5>
                    <p>{{ $totalBerita ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-images fa-2x text-info"></i>
                    <h5 class="mt-2">Galeri</h5>
                    <p>{{ $totalGaleri ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
