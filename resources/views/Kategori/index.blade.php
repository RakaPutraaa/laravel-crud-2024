@extends('Layout.index')
@section('title', 'Data Kategori')
@section('content')

<div class="d-flex justify-content-end">
    <a href="{{ route('kategori-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kategori</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kategori as $no => $data)

        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nama_kategori }}</td>
            <td>
                <a href="{{ route('kategori-edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="{{ route('kategori-delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('anda yakin hapus ?')"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
