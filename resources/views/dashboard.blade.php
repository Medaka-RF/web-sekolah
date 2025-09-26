@extends('template')

@section('content')
<div class="Container">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <h4 class="text-center">SMP 1 Sukaratu</h4>
            <ul class="nav flex-column mt-4">
                <li class="nav-item" href="#">
                    <a class="nav-link" href="#">
                    <i class="fas fa-home"></i>
                    Beranda</a></li>
                <li class="nav-item" href="#">
                    <a class="nav-link" href="#">
                    <i class="fas fa-users"></i>
                    Siswa</a></li>
                </li>
                <li class="nav-item" href="#">
                    <a class="nav-link" href="#">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Guru</a></li>
                </li>
                <li class="nav-item" href="#">
                    <a class="nav-link" href="#">
                    <i class="fas fa-newspaper"></i>
                    Berita</a></li>
                </li>
                <li class="nav-item" href="#">
                    <a class="nav-link" href="#">
                    <i class="fas fa-image"></i>
                    Galeri</a></li>
                </li>
                <li class="nav-item" href="#">
                    <a class="nav-link" href="#">
                    <i class="fas fa-school"></i>
                    Profil</a></li>
                </li>
            </ul>
        </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Siswa</h5>
                            <p class="card-text display-4"></p>
                        </div>
                        
            </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Jumlah Guru</h5>
                <p class="card-text display-4"></p>
                </div>
                </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Berita</h5>
                <p class="card-text display-4"></p>
            </div>

        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Galeri</h5>
                <p class="card-text display-4"></p>
            </div>
        </div>
    </div>
    </div>
        </main>
    <footer class="mt-5 text-center">
        <hr>
        <p>2025 SMP 1 Sukaratu. All rights reserved.</p>
    </footer>
    @endsection
</div>