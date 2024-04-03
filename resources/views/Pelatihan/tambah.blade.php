@extends('Layout.index')
@section('title', 'Tambah Pelatihan')
@section('content')
<form action="{{ route('pelatihan-insert') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Kategori Pelatihan</label>
        <select name="kategori_pelatihan" id="">
            <option value="">- Pilih Kategori Pelatihan -</option>
            @foreach ($kat_pelatihan as $data)
                <option value="{{ $data->id }}">{{ $data->kategori_pelatihan }}</option>
            @endforeach
        </select>
        <div class="text-danger">
          @error('kategori_pelatihan')
              {{ $message  }}
          @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Judul Pelatihan</label>
      <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Pelatihan ..." value="{{ old('judul') }}"">
      <div class="text-danger">
        @error('judul')
            {{ $message  }}
        @enderror

    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Pelatihan</label>
        <input type="date" class="form-control" col="30" rows="10" name="tanggal" value="{{ old('tanggal') }}">
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
        <label class="form-label">Deskripsi Pelatihan</label>
        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10" placeholder="Masukkan deskripsi Pelatihan ...">{{ old('deskripsi') }}</textarea>
        <div class="text-danger">
          @error('deskripsi')
              {{ $message  }}
          @enderror
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('berita') }}" class="btn btn-danger">Kembali</a>
</form>
@endsection
