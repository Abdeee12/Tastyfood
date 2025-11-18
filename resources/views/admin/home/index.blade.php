@extends('layouts.app')

@section('title', 'Kelola Halaman Home')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Daftar Card Home</h2>
  <a href="{{ route('home-cards.create') }}" class="btn btn-primary">+ Tambah Card</a>
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
      <th>Tipe</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cards as $card)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $card->title }}</td>
        <td>{{ $card->description }}</td>
        <td>
          @if($card->image)
            <img src="{{ asset('storage/' . $card->image) }}" width="80" alt="img">
          @endif
        </td>
        <td><span class="badge bg-info text-dark">{{ ucfirst($card->type) }}</span></td>
        <td>
          <a href="{{ route('home-cards.edit', $card->id) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('home-cards.destroy', $card->id) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="6" class="text-center text-muted">Belum ada data</td></tr>
    @endforelse
  </tbody>
</table>
@endsection
