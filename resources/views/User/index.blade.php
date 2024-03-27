@extends('Layout.index')
@section('title', 'Data User')
@section('content')

<div class="d-flex justify-content-end">
    <a href="{{ route('user-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama user</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $no => $data)

        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>
                <a href="{{ route('user-edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="{{ route('user-delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash" onclick="return confirm('anda yakin hapus ?')"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
