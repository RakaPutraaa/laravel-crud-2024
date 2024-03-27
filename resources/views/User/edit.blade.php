@extends('Layout.index')
@section('title', 'Edit user')
@section('content')
<form action="{{ route('user-update', $user->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama User</label>
        <input type="text" class="form-control" name="name_user" placeholder="Masukkan nama user ..." value="{{ $user->name }}">
        <div class="text-danger">
          @error('nama_user')
              {{ $message  }}
          @enderror
        </div>
    </div>

    <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email_user" placeholder="Masukkan email ..." value="{{ $user->email }}">
          <div class="text-danger">
            @error('email')
                {{ $message  }}
            @enderror
          </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password_user" placeholder="Masukkan password untuk password baru...">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('user') }}" class="btn btn-danger">Kembali</a>
</form>
@endsection
