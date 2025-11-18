@extends('layouts.app')

@section('title', 'Edit Kontak')

@section('content')
<h2>Edit Informasi Kontak</h2>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('admin.kontak.update') }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input 
      type="email" 
      name="email" 
      value="{{ $kontak->email ?? '' }}" 
      class="form-control" 
      required
    >
  </div>

  <div class="mb-3">
    <label class="form-label">No Telepon</label>
    <input 
      type="text" 
      name="telepon" 
      value="{{ $kontak->telepon ?? '' }}" 
      class="form-control" 
      required
    >
  </div>

  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input 
      type="text" 
      name="alamat" 
      value="{{ $kontak->alamat ?? '' }}" 
      class="form-control" 
      required
    >
  </div>

  <button class="btn btn-success">Simpan Perubahan</button>
</form>
@endsection
