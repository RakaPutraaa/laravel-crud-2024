<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                  Register
                </div>
                <div class="card-body">
                    <form action="{{ route('proses-register') }}" method="post">

                        @csrf
                        <div class="mb-3">

                            <label for="name" class="form-label">Nama</label>

                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Masukkan Nama..">

                        </div>

                        <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Email address</label>

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email..">

                        </div>

                        <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label">Password</label>

                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"

                        placeholder="Masukkan Password..">

                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>


                    </form>
                    {{-- <form action="{{ route('post-login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password...">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> --}}
                </div>
            </div>
        </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
