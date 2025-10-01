@extends('template')

@section('content')
<div class="row no-gutters">
    <div class="col-md-2 bg-dark text-white min-vh-100">
        <div class="text-center py-4">
            <img src="{{ asset('') }}" alt="Admin" class="rounded-circle mb-2" width="60">
            <div>Admin</div>
            <small class="text-success">Online</small>
        </div>
        <input type="text" class="form-control mb-3" placeholder="Search...">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white active bg-secondary" href="#">
                    <i class="fas fa-tachometer-alt"></i> 
                    Dashboard</a></li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.siswa') }}">
                    <i class="fas fa-users"></i> 
                    Siswa</a></li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.guru') }}">
                    <i class="fas fa-chalkboard-teacher"></i> 
                    Guru</a></li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.berita') }}">
                    <i class="fas fa-newspaper"></i> 
                    Berita</a></li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.galeri') }}">
                    <i class="fas fa-images"></i> 
                    Galeri</a></li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-school"></i> 
                    Profil Sekolah</a></li>
            <li class="nav-item mt-4">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-user-cog"></i> 
                    Pengguna</a></li>
        </ul>
    </div>
    <div class="col-md-10 bg-light min-vh-100">
        <nav class="navbar navbar-expand navbar-light bg-primary mb-4">
            <span class="navbar-brand text-white">Dashboard Admin</span>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-white mr-3"><i class="fas fa-user"></i> admin</li>
                <li class="nav-item"><img src="{{ asset('img/admin.jpg') }}" alt="Admin" class="rounded-circle" width="30"></li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-2x text-primary"></i>
                        <h5 class="mt-2">Siswa</h5>
                        <p class="h4">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-chalkboard-teacher fa-2x text-success"></i>
                        <h5 class="mt-2">Guru</h5>
                        <p class="h4">20</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-newspaper fa-2x text-warning"></i>
                        <h5 class="mt-2">Berita</h5>
                        <p class="h4">5</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-images fa-2x text-info"></i>
                        <h5 class="mt-2">Galeri</h5>
                        <p class="h4">12</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mt-5 text-center">
            <hr>
            <p>2025 SMP Sukaratu. All rights reserved.</p>
        </footer>
    </div>
</div>
@endsection