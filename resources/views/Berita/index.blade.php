@extends('Layout.index')
@section('title', 'Data Berita')
@section('content')

<div class="d-flex justify-content-end">
    <a href="{{ route('berita-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kategori</th>
        <th scope="col">Judul Berita</th>
        <th scope="col">Isi Berita</th>
        <th scope="col">Tanggal Berita</th>
        <th scope="col">Gambar Berita</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($berita as $no => $data)

        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nama_kategori }}</td>
            <td>{{ $data->judul }}</td>
            {{-- <td>{!! $data->isi !!}</td> --}}
            <td>{{ date('d M Y', strtotime($data->tanggal))}}</td>
            <td>
                <img src="{{ url('foto/', $data->gambar) }}" alt="" width="100">
            </td>
            <td>
                <a href="{{ route('berita-detail', $data->id) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                <a href="{{ route('berita-edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="{{ route('berita-delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('anda yakin hapus ?')"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
