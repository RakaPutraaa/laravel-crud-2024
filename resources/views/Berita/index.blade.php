@extends('Layout.index')
@section('title', 'Data Berita')
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
                        <a href="{{ route('berita-tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah
                            Data</a>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Judul Berita</th>
                                    {{-- <th scope="col">Isi Berita</th>     --}}
                                    <th scope="col">Tanggal Berita</th>
                                    <th scope="col">Gambar Berita</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $no => $data)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td>{{ $data->judul }}</td>
                                        {{-- <td>{{ $data->isi }}</td> --}}
                                        {{-- <td>{!! $data->isi !!}</td> --}}
                                        <td>{{ date('d M Y', strtotime($data->tanggal)) }}</td>
                                        <td>
                                            <img src="{{ url('foto/', $data->gambar) }}" alt="" width="100">
                                        </td>
                                        <td>
                                            <a href="{{ route('berita-detail', $data->id) }}" class="btn btn-warning"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="{{ route('berita-edit', $data->id) }}" class="btn btn-warning"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ route('berita-delete', $data->id) }}" class="btn btn-danger"><i
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
