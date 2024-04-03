@extends('Layout.index')
@section('title', 'Edit Kategori Pelatihan')
@section('content')
<form action="{{ route('kategori-pelatihan-update', $kat_pelatihan->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Kateori Pelatihan</label>
        <input type="text" class="form-control" name="kategori_pelatihan" placeholder="Masukkan nama Kategori ..." value="{{ $kat_pelatihan->kategori_pelatihan }}">
        <div class="text-danger">
          @error('nama_kategori')
              {{ $message  }}
          @enderror
          </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('kategori-pelatihan-home') }}" class="btn btn-danger">Kembali</a>
</form>
@endsection
