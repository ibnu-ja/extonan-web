<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav white-skin navy-blue-skin">

  <!-- SideNav slide-out button -->
  <div class="float-left">
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
  </div>

  <!-- Breadcrumb -->
  <div class="breadcrumb-dn mr-auto">
    <p>@yield('halaman')</p>
  </div>

  <div class="d-flex ">
    <!-- Navbar links -->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
      @if (\Request::is('anime'))
      <li class="nav-item">
        <a class="nav-link waves-effect" href=" {{url('/anime/tambah')}}"><i class="far fa-plus-square"></i> <span class="clearfix d-none d-sm-inline-block">Tambah Anime</span></a>
      </li>
      @elseif (\Request::is('anime/tambah'))
      @elseif (\Request::is('anime/*'))
      <li class="nav-item">
        <a class="nav-link waves-effect" data-toggle="modal" data-target="#ajaxModal"><i class="far fa-plus-square"></i> <span class="clearfix d-none d-sm-inline-block">Tambah Episode</span></a>
      </li>
      @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>

        </div>
      </li>



    </ul>
  </div>

</nav>