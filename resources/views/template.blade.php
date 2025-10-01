<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
        <div class="container">
          <a class="navbar-brand" href="{{ url ('/') }}">SMP 1 SUkaratu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <!-- <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Beranda</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>Profil Sekolah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Galeri</a>
              </li>
              <li class="nav-iitem">
                <a class="nav-link" href="#">Kontak</a>
              </li>
            </ul>
            <form class="d-flex ms-3">
              <a href="{{ route('login') }}" class="btn btn-warning btn-sm">Login</a>
            </form>
          </div> -->
        <!-- </div>
      </nav> -->
      @yield('content')
</body>
</html>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>