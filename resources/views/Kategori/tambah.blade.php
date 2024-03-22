@extends('Layout.index')
@section('title', 'Tambah Kategori')
@section('content')
<form action="{{ route('kategori-insert') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nama Kateori</label>
      <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama Kategori ...">
      <div class="text-danger">
        @error('nama_kategori')
            {{ $message  }}
        @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('kategori') }}" class="btn btn-danger">Kembali</a>
</form>
@endsection
