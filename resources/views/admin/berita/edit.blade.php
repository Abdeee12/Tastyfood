@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')
<div class="container mt-4">
  <h2 class="mb-4 text-center">Edit Berita</h2>

  {{-- Pesan sukses --}}
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  {{-- Pesan error --}}
  @if($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="card shadow-sm p-4">
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      {{-- Judul --}}
      <div class="mb-3">
        <label class="form-label fw-semibold">Judul Berita</label>
        <input 
          type="text" 
          name="judul" 
          class="form-control @error('judul') is-invalid @enderror"
          value="{{ old('judul', $berita->judul) }}" 
          placeholder="Masukkan judul berita"
          required>
        @error('judul')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Deskripsi --}}
      <div class="mb-3">
        <label class="form-label fw-semibold">Deskripsi</label>
        <textarea 
          name="deskripsi" 
          class="form-control @error('deskripsi') is-invalid @enderror" 
          rows="5" 
          placeholder="Tulis isi berita di sini...">{{ old('deskripsi', $berita->deskripsi) }}</textarea>
        @error('deskripsi')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      {{-- Gambar --}}
      <div class="mb-3">
        <label class="form-label fw-semibold">Gambar Berita</label>
        <input 
          type="file" 
          name="gambar" 
          class="form-control @error('gambar') is-invalid @enderror">
        @error('gambar')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if($berita->gambar)
          <div class="mt-3">
            <p class="text-muted mb-1">Gambar saat ini:</p>
            <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Gambar Berita" width="150" class="rounded border shadow-sm">
          </div>
        @endif
      </div>

      {{-- Tombol --}}
      <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('berita.index') }}" class="btn btn-secondary px-4">
          <i class="bi bi-arrow-left"></i> Kembali
        </a>
        <button type="submit" class="btn btn-primary px-4">
          <i class="bi bi-save"></i> Update
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
