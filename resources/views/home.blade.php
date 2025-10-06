@extends('layouts.app')

@section('content')
<style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        scroll-behavior: smooth;
    }

    .hero {
        position: relative;
        text-align: center;
        color: white;
        background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.7)),
        url('{{ asset('assets/image/halaman.jpg') }}') center/cover no-repeat;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 80px;
        overflow: hidden;
    }

    .hero h1, .hero p, .hero a {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeSlideUp 1.2s ease-out forwards;
    }

    .hero h1 { animation-delay: 0.2s; }
    .hero p { animation-delay: 0.5s; }
    .hero a { animation-delay: 0.8s; }

    @keyframes fadeSlideUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    section {
        padding: 80px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
        font-weight: bold;
        color: #0d6efd;
        opacity: 0;
        transform: translateY(40px);
        animation: fadeSlideUp 1s ease-out forwards;
    }

    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    .card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .btn-selengkapnya {
        display: block;
        margin: 40px auto 0;
        padding: 10px 30px;
        border-radius: 25px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-selengkapnya:hover {
        transform: scale(1.05);
    }
</style>

<section class="hero">
    <div>
        <h1>SMP NEGERI 1 SUKARATU</h1>
        <p>Jl. Raya Sukaratu No. 15, Tasikmalaya</p>
        <a href="#profil" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
    </div>
</section>

<section id="profil">
    <div class="container">
        <h2 class="section-title reveal">Profil Sekolah</h2>
        <div class="row align-items-center reveal">
            <div class="col-md-6">
                <img src="{{ asset('assets/image/upacara.jpeg') }}" alt="Tentang Sekolah" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h4>{{ $profil->nama_sekolah ?? 'SMPN 1 Sukaratu' }}</h4>
                <p><strong>Kepala Sekolah:</strong> {{ $profil->kepala_sekolah ?? 'Yanto' }}</p>
                <p><strong>NPSN:</strong> {{ $profil->npsn ?? '00000000001' }}</p>
                <p><strong>Kontak:</strong> {{ $profil->kontak ?? '08123456789' }}</p>
                <p><strong>Email:</strong>{{ $profil->email ?? ' smpn1sukaratu@gmail.com' }}</p>
                <p>{{ $profil->deskripsi ?? 'Sekolah unggulan berkarakter dan berprestasi.' }}</p>
            </div>
        </div>
        <a href="{{ route('profil.detail') }}" class="btn btn-primary mt-3">Lhat Selengkapnya</a>
    </div>
</section>

<section id="guru" class="bg-light">
    <div class="container">
        <h2 class="section-title reveal">Guru</h2>
        <div class="row">
            @foreach($guru->take(8) as $item)
            <div class="col-md-3 mb-4 reveal">
                <div class="card h-100 text-center">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="{{ $item->nama }}">
                    <div class="card-body">
                        <h5>{{ $item->nama }}</h5>
                        <p>{{ $item->mapel }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('guru.index') }}" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
    </div>
</section>

<section id="siswa">
    <div class="container">
        <h2 class="section-title reveal">Siswa</h2>
        <div class="row">
            @foreach($siswa->take(8) as $item)
            <div class="col-md-3 mb-4 reveal">
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
        <a href="{{ route('admin.siswa') }}" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
    </div>
</section>

<section id="galeri" class="bg-light">
    <div class="container">
        <h2 class="section-title reveal">Galeri Sekolah</h2>
        <div class="row">
            @foreach($galeri->take(8) as $item)
            <div class="col-md-3 mb-4 reveal">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="{{ $item->judul }}">
                    <div class="card-body text-center">
                        <h5>{{ $item->judul }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('admin.galeri') }}" class="btn btn-primary mt-3">Lihat Selengkapnya</a>
    </div>
</section>

<section id="ekskul">
    <div class="container">
        <h2 class="section-title reveal">Ekstrakurikuler</h2>
        <div class="row">
            @foreach($ekskul->take(8) as $item)
            <div class="col-md-3 mb-4 reveal">
                <div class="card h-100 text-center">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="{{ $item->nama }}">
                    <div class="card-body">
                        <h5>{{ $item->nama }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('admin.ekstrakurikuler') }}" class="btn btn-primary mt-3 bg-center">Lihat Selengkapnya</a>
    </div>
</section>

<script>
    const reveals = document.querySelectorAll('.reveal');
    window.addEventListener('scroll', () => {
        for (let i = 0; i < reveals.length; i++) {
            const windowHeight = window.innerHeight;
            const elementTop = reveals[i].getBoundingClientRect().top;
            const elementVisible = 100;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add('active');
            }
        }
    });
</script>
@endsection
