@extends('template')

@section('title', 'Profil Sekolah')

@section('content')
<div class="container">
    <h2>Profil Sekolah</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($profil)
        <div class="card p-3">
            <p><strong>Nama Sekolah:</strong> {{ $profil->nama_sekolah }}</p>
            <p><strong>Kepala Sekolah:</strong> {{ $profil->kepala_sekolah }}</p>
            <p><strong>NPSN:</strong> {{ $profil->npsn }}</p>
            <p><strong>Alamat:</strong> {{ $profil->alamat }}</p>
            <p><strong>Kontak:</strong> {{ $profil->kontak }}</p>
            <p><strong>Visi Misi:</strong> {{ $profil->visi_misi }}</p>
            <p><strong>Tahun Berdiri:</strong> {{ $profil->tahun_berdiri }}</p>
            <p><strong>Deskripsi:</strong> {{ $profil->deskripsi }}</p>
            @if ($profil->foto)
                <p><strong>Foto:</strong><br>
                    <img src="{{ asset('storage/'.$profil->foto) }}" width="150">
                </p>
            @endif
            @if ($profil->logo)
                <p><strong>Logo:</strong><br>
                    <img src="{{ asset('storage/'.$profil->logo) }}" width="100">
                </p>
            @endif
            <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-primary">Edit Profil</a>
        </div>
    @else
        <p>Data profil belum tersedia.</p>
    @endif
</div>
@endsection
