<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Panel</title>

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body, html {
            overflow-x: hidden;
        }

        @media (min-width: 768px) {
            .offcanvas-md {
                width: 250px !important;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                z-index: 1030;
            }

            .main-content {
                margin-left: 250px;
                width: calc(100% - 250px);
            }
        }

        .sidebar-profile {
            text-align: center;
            padding: 1.5rem 1rem;
            border-bottom: 1px solid #444;
        }

        .sidebar-profile img {
            width: 60px;
            border-radius: 50%;
        }

        .sidebar-nav {
            padding: 1rem;
        }

        .sidebar-nav .nav-link {
            color: #fff;
        }

        .sidebar-nav .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <div class="offcanvas-md offcanvas-start bg-dark text-white" tabindex="-1" id="sidebar">
        <div class="offcanvas-header d-md-none">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0 d-flex flex-column">
            <div class="sidebar-profile">
                <img src="{{ asset('assets/image/afternoon.jpg') }}" alt="Admin">
                <div class="mt-2">Admin</div>
                <small class="text-success">Online</small>
            </div>

            <div class="sidebar-nav flex-grow-1">
                <ul class="nav flex-column">
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ route('admin.siswa') }}">
                            <i class="fas fa-users me-2"></i> Siswa
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ route('admin.guru') }}">
                            <i class="fas fa-chalkboard-teacher me-2"></i> Guru
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ route('admin.berita') }}">
                            <i class="fas fa-newspaper me-2"></i> Berita
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ route('admin.galeri') }}">
                            <i class="fas fa-images me-2"></i> Galeri
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ route('admin.ekstrakurikuler') }}">
                            <i class="fas fa-futbol me-2"></i> Ekstrakurikuler
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ route('admin.profil') }}">
                            <i class="fas fa-school me-2"></i> Profil Sekolah
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-content bg-light min-vh-100">
        <nav class="navbar navbar-light bg-white shadow-sm px-3 mb-4">
            <button class="btn btn-outline-dark d-md-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                <i class="fas fa-bars"></i>
            </button>

            <span class="navbar-brand mb-0 h5">@yield('title')</span>

            <div class="ms-auto">
                <span class="me-3"><i class="fas fa-user-circle"></i> Admin</span>
                <a href="{{ route('login') }}" class="btn btn-outline-danger btn-sm">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
