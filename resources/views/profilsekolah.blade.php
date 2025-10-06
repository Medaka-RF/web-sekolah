@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center text-primary fw-bold mb-5">Profil Sekolah</h2>

    <div class="card shadow p-4 border-0 rounded-4 mb-5">
        <div class="text-center mb-4">
            <img src="{{ asset('assets/image/upacara.jpeg') }}"
                 alt="Foto Sekolah"
                 class="rounded shadow-sm img-fluid"
                 style="max-width: 500px;">
        </div>

        <h3 class="text-center">{{ $profil->nama_sekolah ?? 'SMPN 1 Sukaratu' }}</h3>
        <p class="text-center text-muted">{{ $profil->alamat ?? 'Jl. Raya Sukaratu No. 15, Tasikmalaya' }}</p>

        <hr>

        <p><strong>Kepala Sekolah:</strong> {{ $profil->kepala_sekolah ?? 'Yanto, S.Pd' }}</p>
        <p><strong>NPSN:</strong> {{ $profil->npsn ?? '0000000001' }}</p>
        <p><strong>Kontak:</strong> {{ $profil->kontak ?? '08123456789' }}</p>
        <p><strong>Email:</strong> {{ $profil->email ?? 'smpn1sukaratu@gmail.com' }}</p>

        <hr>

        <h4 class="text-primary">Sejarah Sekolah</h4>
        <p class="text-muted" style="text-align: justify;">
            {{ $profil->sejarah ?? 'SMPN 1 Sukaratu berdiri pada tahun 1985 sebagai salah satu sekolah negeri pertama di wilayah Sukaratu. Sekolah ini terus berkembang dengan berbagai prestasi akademik dan non-akademik.' }}
        </p>

        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="btn btn-secondary">
                ← Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection
