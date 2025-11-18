@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="text-center my-5">
  <h1 class="mb-4">Selamat Datang di Dashboard Admin 🍽️</h1>
  <p class="text-muted mb-4">Kelola konten utama website Tasty Food di sini.</p>

  <div class="row justify-content-center">
    <div class="col-md-3 mb-3">
      <a href="{{ route('home-cards.index') }}" class="btn btn-primary w-100 py-3">Kelola Halaman Home</a>
    </div>
    <div class="col-md-3 mb-3">
      <a href="{{ route('berita.index') }}" class="btn btn-success w-100 py-3">Kelola Berita</a>
    </div>
    <div class="col-md-3 mb-3">
      <a href="{{ route('admin.kontak.edit') }}" class="btn btn-warning w-100 py-3">Edit Kontak</a>
    </div>
  </div>
</div>
@endsection
