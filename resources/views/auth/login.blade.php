<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMP 1 Sukaratu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="background: #f5f6fa;">

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow-lg" style="border-radius: 20px; width: 800px;">
            <div class="row g-0">

                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center p-4">
                    <img src="{{ asset('assets/image/logosmp.jpg') }}" alt="Logo Sekolah" style="width: 100px; height: auto;">
                    <h3 class="mt-3 mb-2 text-center">SMP 1 Sukaratu</h3>
                    <img src="{{ asset('assets/image/orangsmp.png') }}" alt="Siswa" style="width: 100px; height: auto;">
                </div>

                <div class="col-md-6 bg-success text-white p-5" style="border-radius: 0 20px 20px 0;">
                    <h2 class="mb-4 text-center">Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="username"><i class="fas fa-user"></i> Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password"><i class="fas fa-lock"></i> Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-light w-100 mt-3">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
