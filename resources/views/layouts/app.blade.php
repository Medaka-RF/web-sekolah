<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#beranda">
            <img src="{{ asset('assets/image/logosmp.jpg') }}" alt="Logo" width="40" class="me-2">
            {{ $profil->nama_sekolah ?? 'SMPN 1 SUKARATU' }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#beranda" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#profil" class="nav-link">Profil Sekolah</a></li>
                <li class="nav-item"><a href="#galeri" class="nav-link">Galeri</a></li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-success ms-2">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div style="margin-top: 80px;">
    @yield('content')
</div>

<footer class="bg-primary text-white text-center py-3 mt-5">
    <small>&copy; {{ date('Y') }} {{ $profil->nama_sekolah ?? 'Sekolah' }}</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
