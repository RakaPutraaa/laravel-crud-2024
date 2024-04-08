<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('assets/ruang-admin') }}/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="{{ asset('assets/ruang-admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/ruang-admin') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/ruang-admin') }}/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" action="{{ route('proses-register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Nama</label>

                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Masukkan Nama..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email..">
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>

                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"

                        placeholder="Masukkan Password..">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a href="{{ route('register') }}">Login Disini</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="{{ asset('assets/ruang-admin') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('assets/ruang-admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/ruang-admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('assets/ruang-admin') }}/js/ruang-admin.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
      @if (session('success'))
          Swal.fire({
              title: "Good job!",
              text: '{{ session('success') }}',
              icon: "success"
          });
      @endif
      @if (session('error'))
          Swal.fire({
              title: "Good job!",
              text: '{{ session('error') }}',
              icon: "error"
          });
      @endif
  </script>
</body>

</html>

