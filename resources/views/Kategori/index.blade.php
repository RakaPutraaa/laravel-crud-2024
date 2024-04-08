@extends('Layout.index')
@section('title', 'Data Kategori')
@section('content')

{{-- <div class="d-flex justify-content-end">
    <a href="{{ route('kategori-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
</div> --}}

{{-- <table class="table">
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
</table> --}}

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            <a href="{{ route('kategori-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Nama Kategori</th>
                  <th>Aksi</th>
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
          </div>
        </div>
      </div>
      <!-- DataTable with Hover -->
    </div>
    <!--Row-->
</div>

@endsection
