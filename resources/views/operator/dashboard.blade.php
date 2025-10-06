@extends('template')

@section('title', 'Dashboard Operator')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="mb-3">Selamat Datang, {{ Auth::user()->username }}</h1>
    <p class="lead">Anda login sebagai <strong>Operator</strong>.</p>

    <div class="mt-4">
        <a href="{{ route('operator.berita') }}" class="btn btn-primary me-2">
            <i class="fas fa-newspaper"></i> Kelola Berita
        </a>

        <a href="{{ route('operator.galeri') }}" class="btn btn-info me-2">
            <i class="fas fa-images"></i> Kelola Galeri
        </a>

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="btn btn-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
    </div>
</div>
@endsection
