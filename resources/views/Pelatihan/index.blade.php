@extends('Layout.index')
@section('title', 'Data Pelatihan')
@section('content')

<div class="d-flex justify-content-end">
    <a href="{{ route('pelatihan-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kategori Pealatihan</th>
        <th scope="col">Nama Pealatihan</th>
        <th scope="col">Tanggal Pelatihan</th>
        <th scope="col">Jam Pealatihan</th>
        <th scope="col">Gambar Pelatihan</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pelatihan as $no => $data)

        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->kategori_pelatihan }}</td>
            <td>{{ $data->nama_pelatihan }}</td>
            <td>{{ date('d M Y', strtotime($data->tanggal_pelatihan))}}</td>
            <td>{{ $data->jam_pelatihan }}</td>
            <td>
                <img src="{{ url('foto/', $data->gambar_pelatihan) }}" alt="" width="100">
            </td>
            <td>{{ $data->deskripsi }}</td>

            <td>
                <a href="{{ route('pelatihan-edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="{{ route('pelatihan-delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('anda yakin hapus ?')"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
