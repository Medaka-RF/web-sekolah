<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row g-0">
        
        {{-- Sidebar --}}
        <div class="col-md-2 bg-dark text-white min-vh-100">
            <div class="text-center py-4 border-bottom border-secondary">
                <img src="{{ asset('images/admin.png') }}" alt="Admin" class="rounded-circle mb-2" width="60">
                <div>Admin</div>
                <small class="text-success">Online</small>
            </div>

            <div class="p-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-1">
                        <a class="nav-link text-white" href="{{ url('admin/dashboard') }}">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link text-white" href="{{ route('admin.siswa') }}">
                            <i class="fas fa-users me-2"></i> Siswa
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link text-white" href="{{ route('admin.guru') }}">
                            <i class="fas fa-chalkboard-teacher me-2"></i> Guru
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link text-white" href="{{ route('admin.berita') }}">
                            <i class="fas fa-newspaper me-2"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link text-white" href="{{ route('admin.galeri') }}">
                            <i class="fas fa-images me-2"></i> Galeri
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link text-white" href="{{ route('admin.ekstrakurikuler') }}">
                            <i class="fas fa-futbol me-2"></i> Ekstrakurikuler
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link text-white" href="{{ route('admin.profil') }}">
                            <i class="fas fa-school me-2"></i> Profil Sekolah
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Konten Utama --}}
        <div class="col-md-10 bg-light min-vh-100">
            {{-- Navbar --}}
            <nav class="navbar navbar-light bg-white shadow-sm px-3 mb-4">
                <span class="navbar-brand mb-0 h5">@yield('title')</span>
                <div>
                    <span class="me-3"><i class="fas fa-user-circle"></i> Admin</span>
                    <a href="#" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </nav>

            {{-- Halaman Konten --}}
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>
</div>
</body>
</html>
