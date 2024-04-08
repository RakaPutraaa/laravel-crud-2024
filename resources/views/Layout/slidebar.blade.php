    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/ruang-admin') }}/img/logo/logo2.png">
          </div>
          <div class="sidebar-brand-text mx-3">RuangAdmin</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
          <a class="nav-link" href="./">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          MENU
        </div>
        @if (Auth::user()->level == 'Admin')

        <li class="nav-item">
            <a class="nav-link" href="{{ route('kategori') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Kategori</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('berita') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Berita</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pelatihan') }}">
              <i class="fas fa-fw fa-user"></i>
              <span>Pelatihan</span>
            </a>
        </li>
        @elseif(Auth::user()->level == 'SuperAdmin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user') }}">
              <i class="fas fa-fw fa-user"></i>
              <span>User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kategori-pelatihan-home') }}">
              <i class="fas fa-fw fa-user"></i>
              <span>Kategori Pelatihan</span>
            </a>
        </li>
          @endif
        <hr class="sidebar-divider">
      </ul>
      <!-- Sidebar -->
