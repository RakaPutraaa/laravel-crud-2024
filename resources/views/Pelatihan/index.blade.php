@extends('Layout.index')
@section('title', 'Data Pelatihan')
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
                        <a href="{{ route('pelatihan-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah
                            Data</a>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
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
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $data->kategori_pelatihan }}</td>
                                        <td>{{ $data->nama_pelatihan }}</td>
                                        <td>{{ date('d M Y', strtotime($data->tanggal_pelatihan)) }}</td>
                                        <td>{{ $data->jam_pelatihan }}</td>
                                        <td>
                                            <img src="{{ url('foto/', $data->gambar_pelatihan) }}" alt=""
                                                width="100">
                                        </td>
                                        <td>{{ $data->deskripsi }}</td>

                                        <td>
                                            <a href="{{ route('pelatihan-edit', $data->id) }}" class="btn btn-warning"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ route('pelatihan-delete', $data->id) }}" class="btn btn-danger"><i
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
