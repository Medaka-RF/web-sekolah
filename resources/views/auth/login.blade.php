@extends('template')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background: #f5f6fa;">
    <div class="card shadow-lg" style="border-radius: 20px; width: 800px;">
        <div class="row no-gutters">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center p-4">
                <img src="{{ asset('assets/image/logosmp.jpg') }}" alt="Logo Sekolah" style="width: 100px; height: auto;">
                <h3 class="mt-3 mb-2">SMP 1 Sukaratu</h3>
                <img src="{{ asset('assets/image/orangsmp.png') }}" alt="Siswa" style="width: 100px; height: auto;">
            </div>
            <div class="col-md-6 bg-success text-white p-5" style="border-radius: 0 20px 20px 0;">
                <h2 class="mb-4 text-center">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username"><i class="fas fa-users">Username</i></label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-light btn-block mt-4">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection