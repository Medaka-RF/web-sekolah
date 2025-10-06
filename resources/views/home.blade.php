@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')
<style>
    html {
        scroll-behavior: smooth;
    }
    .hero {
        position: relative;
        text-align: center;
        color: white;
        background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.7)),
                    url('{{ asset('images/sekolah.jpg') }}') center/cover no-repeat;
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    section {
        padding: 80px 0;
    }
    .section-title {
        text-align: center;
        margin-bottom: 50px;
        font-weight: bold;
        color: #0d6efd;
    }
</style>

<section id="beranda" class="hero">
    <div>
        <img src="{{ asset('images/logo.png') }}" width="100" class="mb-3" alt="Logo Sekolah">
        <h1>{{ $profil->nama_sekolah ?? 'SMPN 1 Sukaratu' }}</h1>
        <p>{{ $profil->alamat ?? 'Kp.Sindanggalih, Kec.Sukaratu, Kab.Tasikmalaya' }}</p>
        <a href="#profil" class="btn btn-light mt-3">Lihat Selengkapnya</a>
    </div>
</section>

<section id="profil">
    <div class="container">
        <h2 class="section-title">Profil Sekolah</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/tentang-sekolah.jpg') }}" alt="Tentang Sekolah" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h4>{{ $profil->nama_sekolah ?? 'SMPN 1 Sukaratu' }}</h4>
                <p><strong>Kepala Sekolah:</strong> {{ $profil->kepala_sekolah ?? 'Nama Kepala Sekolah' }}</p>
                <p><strong>NPSN:</strong> {{ $profil->npsn ?? '-' }}</p>
                <p><strong>Kontak:</strong> {{ $profil->kontak ?? '-' }}</p>
                <p>{{ $profil->deskripsi ?? 'Sekolah' }}</p>
            </div>
        </div>
    </div>
</section>

<section id="guru" class="bg-light">
    <div class="container">
        <h2 class="section-title">Guru</h2>
        <div class="row">
            @foreach($guru as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center shadow-sm">
                    <img src="{{ asset('storage/'.$item->foto) }}" class="card-img-top" alt="foto guru">
                    <div class="card-body">
                        <h5>{{ $item->nama_guru }}</h5>
                        <p>{{ $item->mapel }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="siswa">
    <div class="container">
        <h2 class="section-title">Siswa</h2>
        <div class="row">
            @foreach($siswa->take(8) as $item)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <h5>{{ $item->nama_siswa }}</h5>
                        <p class="text-muted">{{ $item->jenis_kelamin }}</p>
                        <small>Tahun Masuk: {{ $item->tahun_masuk }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="ekstrakurikuler" class="bg-light">
    <div class="container">
        <h2 class="section-title">Ekstrakurikuler</h2>
        <div class="row">
            @foreach($ekskul as $item)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top" alt="gambar ekskul">
                    <div class="card-body">
                        <h5>{{ $item->nama_ekskul }}</h5>
                        <p>Pembina: {{ $item->pembina }}</p>
                        <small>{{ $item->deskripsi }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="galeri">
    <div class="container">
        <h2 class="section-title">Galeri Sekolah</h2>
        <div class="row">
            @foreach($galeri as $item)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    @if($item->kategori == 'File')
                        <img src="{{ asset('storage/'.$item->file) }}" class="card-img-top" alt="file">
                    @else
                        <video class="w-100" controls>
                            <source src="{{ assets('storage/'.$item->file) }}" type="video/mp4">
                        </video>
                    @endif
                    <div class="card-body">
                        <h5>{{ $item->judul }}</h5>
                        <p>{{ $item->keterangan }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
