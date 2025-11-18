@extends('layouts.app')

@section('title', isset($berita) ? 'Edit Berita' : 'Tambah Berita')

@section('content')
<div class="container mt-4">
  <h2 class="mb-4 text-center">{{ isset($berita) ? 'Edit' : 'Tambah' }} Berita</h2>

  <div class="card shadow-sm p-4">
    <form action="{{ isset($berita) ? route('berita.update', $berita->id) : route('berita.store') }}" 
          method="POST" enctype="multipart/form-data">
      @csrf
      @if(isset($berita)) 
        @method('PUT') 
      @endif

      <div class="mb-3">
        <label class="form-label fw-semibold">Judul</label>
        <input type="text" 
               class="form-control @error('judul') is-invalid @enderror" 
               name="judul" 
               value="{{ old('judul', $berita->judul ?? '') }}" 
               placeholder="Masukkan judul berita" 
               required>
        @error('judul')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Deskripsi</label>
        <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                  name="deskripsi" 
                  rows="5" 
                  placeholder="Tulis isi berita di sini...">{{ old('deskripsi', $berita->deskripsi ?? '') }}</textarea>
        @error('deskripsi')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Gambar</label>
        <input type="file" 
               class="form-control @error('gambar') is-invalid @enderror" 
               name="gambar">
        @error('gambar')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if(isset($berita) && $berita->gambar)
          <div class="mt-3">
            <p class="text-muted">Gambar saat ini:</p>
            <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Gambar Berita" width="150" class="rounded shadow-sm">
          </div>
        @endif
      </div>

      <div class="mt-4 d-flex justify-content-between">
        <a href="{{ route('berita.index') }}" class="btn btn-secondary px-4">Kembali</a>
        <button type="submit" class="btn btn-primary px-4">
          {{ isset($berita) ? 'Update' : 'Simpan' }}
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
