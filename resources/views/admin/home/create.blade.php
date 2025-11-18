@extends('layouts.app')

@section('title', 'Tambah Card Home')

@section('content')
<h2 class="mb-4">Tambah Card Baru</h2>

<form action="{{ route('home-cards.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" class="form-control" name="title" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea class="form-control" name="description"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Gambar</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="mb-3">
    <label class="form-label">Tipe</label>
    <select name="type" class="form-select">
      <option value="small">Small (Kategori)</option>
      <option value="big">Big (Hero/Utama)</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="{{ route('home-cards.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
