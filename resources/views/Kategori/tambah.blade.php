@extends('Layout.index')
@section('title', 'Tambah Kategori')
@section('content')
    {{-- <form action="{{ route('kategori-insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Kateori</label>
            <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama Kategori ...">
            <div class="text-danger">
                @error('nama_kategori')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('kategori') }}" class="btn btn-danger">Kembali</a>
    </form> --}}

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori-insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Nama Kateori</label>
                                <input type="text" class="form-control" name="nama_kategori" placeholder="Masukkan nama Kategori ...">
                                <div class="text-danger">
                                    @error('nama_kategori')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('kategori') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
