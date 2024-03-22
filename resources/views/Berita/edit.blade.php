@extends('Layout.index')
@section('title', 'Tambah Berita')
@section('content')
<form action="{{ route('berita-update', $berita->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <select name="id_kategori" id="" class="form-control">
            <option value="">- Pilih Nama Kategori -</option>
            @foreach ($Kategori as $data)
                <option value="{{ $data->id }}" {{ $data->id == $berita->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>
            @endforeach
        </select>
        <div class="text-danger">
          @error('id_kategori')
              {{ $message  }}
          @enderror

    </div>
    <div class="mb-3">
        <label class="form-label">Judul Berita</label>
        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Berita ..." value="{{ $berita->judul }}">
        <div class="text-danger">
          @error('nama_berita')
              {{ $message  }}
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label">Isi Berita</label>
          <textarea name="isi" class="form-control" id="" cols="30" rows="10" placeholder="Masukkan Isi Berita ...">{{ $berita->isi }}</textarea>
          <div class="text-danger">
            @error('isi')
                {{ $message  }}
            @enderror
      </div>
      <div class="mb-3">
          <label class="form-label">Tanggal Berita</label>
          <input type="date" class="form-control" col="30" rows="10" name="tanggal" value="{{ $berita->tanggal }}">
          <div class="text-danger">
            @error('tanggal')
                {{ $message  }}
            @enderror
      </div>
      <div class="mb-3">
          <label class="form-label">Gambar Berita</label>
          <input type="file" class="form-control" name="gambar" name="tanggal" value="{{ old('gambar') }}">
          <div class="text-danger">
            @error('gambar')
                {{ $message  }}
            @enderror
      </div>

      <div class="mb-3">
        <img src="{{ url('foto/', $berita->gambar) }}" alt="" width="200">
        </div>

      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('berita') }}" class="btn btn-danger">Kembali</a>
</form>
@endsection
