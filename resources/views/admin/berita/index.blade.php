@extends('layouts.app')

@section('title', 'Kelola Berita')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Daftar Berita</h2>
  <a href="{{ route('berita.create') }}" class="btn btn-primary">+ Tambah Berita</a>
</div>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse($beritas as $b)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ Str::limit($b->deskripsi, 80) }}</td>
        <td>@if($b->gambar)<img src="{{ asset('storage/'.$b->gambar) }}" width="80">@endif</td>
        <td>
          <a href="{{ route('berita.edit', $b->id) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('berita.destroy', $b->id) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button onclick="return confirm('Hapus berita ini?')" class="btn btn-sm btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="5" class="text-center">Belum ada berita</td></tr>
    @endforelse
  </tbody>
</table>
@endsection
