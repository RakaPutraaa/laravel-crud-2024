@extends('Layout.index')
@section('title', 'Tambah Pelatihan')
@section('content')
<form action="{{ route('pelatihan-update', $pelatihan->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Judul Pelatihan</label>
        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul pelatihan ..." value="{{ $pelatihan->nama_pelatihan }}">
        <div class="text-danger">
            @error('nama_pelatihan')
            {{ $message  }}
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Pelatihan</label>
            <input type="date" class="form-control" col="30" rows="10" name="tanggal" value="{{ $pelatihan->tanggal_pelatihan }}">
            <div class="text-danger">
              @error('tanggal')
                  {{ $message  }}
              @enderror
        </div>
      <div class="mb-3">
          <label class="form-label">Gambar Pelatihan</label>
          <input type="file" class="form-control" name="gambar" name="tanggal" value="{{ old('gambar') }}">
          <div class="text-danger">
            @error('gambar')
                {{ $message  }}
            @enderror
      </div>

      <div class="mb-3">
        <img src="{{ url('foto/', $pelatihan->gambar_pelatihan) }}" alt="" width="200">
        </div>

      </div>
      <div class="mb-3">
          <label class="form-label">Deskripsi Pelatihan</label>
          <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10" placeholder="Masukkan deskripsi pelatihan ...">{{ $pelatihan->deskripsi }}</textarea>
          <div class="text-danger">
            @error('deskripsi')
                {{ $message  }}
            @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('pelatihan') }}" class="btn btn-danger">Kembali</a>
</form>
@endsection
