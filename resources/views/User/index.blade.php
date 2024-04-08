@extends('Layout.index')
@section('title', 'Data User')
@section('content')

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
                        <a href="{{ route('user-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah
                            Data</a>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
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
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>
                                            <a href="{{ route('user-edit', $data->id) }}" class="btn btn-warning"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ route('user-delete', $data->id) }}" class="btn btn-danger"><i
                                                    class="fa fa-trash"
                                                    onclick="return confirm('anda yakin hapus ?')"></i></a>
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
