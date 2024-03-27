<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            @if (Auth::user()->level == 'SuperAdmin')
            <li class="nav-item">
            <a class="nav-link" href="{{ route('kategori') }}">Kategori</a>
            </li>

            @elseif (Auth::user()->level == 'Admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('berita') }}">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pelatihan') }}">Pelatihan</a>
            </li>

            @endif

            <li class="nav-item">
                <a class="nav-link" href="{{ route('user') }}">User</a>
            </li>
        </ul>
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('user-edit', Auth::user()->id) }}">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li><button class="dropdown-item" type="submit" >Logout</button></li>
                  </form>
                </ul>
              </div>
        </div>
    </div>
</nav>
