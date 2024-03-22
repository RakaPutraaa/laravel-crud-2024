@extends('Layout.index')
@section('title', 'Detail Berita')
@section('content')
    <div class="card" style="width: 100%;">
        <img src="{{ url('foto/', $berita->gambar) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3>{{ $berita->judul }}</h3>
            <p>{{ date('d M Y', strtotime($berita->tanggal)) }}</p>
            <p class="card-text">{!! $berita->isi !!}</p>
        </div>
    </div>
@endsection
