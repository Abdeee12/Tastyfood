@extends('layouts.app')

@section('title', 'Edit Card Home')

@section('content')
<h2 class="mb-4">Edit Card</h2>

<form action="{{ route('home-cards.update', $homeCard->id) }}" method="POST" enctype="multipart/form-data">
  @csrf @method('PUT')

  <div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" class="form-control" name="title" value="{{ $homeCard->title }}" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea class="form-control" name="description">{{ $homeCard->description }}</textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Gambar</label>
    <input type="file" class="form-control" name="image">
    @if($homeCard->image)
      <img src="{{ asset('storage/'.$homeCard->image) }}" width="100" class="mt-2">
    @endif
  </div>

  <div class="mb-3">
    <label class="form-label">Tipe</label>
    <select name="type" class="form-select">
      <option value="small" {{ $homeCard->type == 'small' ? 'selected' : '' }}>Small</option>
      <option value="big" {{ $homeCard->type == 'big' ? 'selected' : '' }}>Big</option>
    </select>
  </div>

  <button class="btn btn-success">Update</button>
  <a href="{{ route('home-cards.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
