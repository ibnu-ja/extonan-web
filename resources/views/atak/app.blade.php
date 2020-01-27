<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('judul')</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    .fixed-sn .double-nav, .fixed-sn main, .fixed-sn footer {
    padding-left: initial;
}
  </style>
  @yield('style')
</head>
<body class="light-blue-skin bg">
  <!-- Navigation -->
  <header>
    
    @yield('header')
  </header>
  <!-- Navigation -->
  <!-- Main layout -->
  <main class="py-5">
    @yield('konten')
  </main>
  <!-- Main layout -->
  <!-- Footer -->
  <footer class="page-footer stylish-color-dark mt-4 pt-4">
    <!-- Footer Links -->
    <div class="container-fluid">
      <div class="row py-3 d-flex align-items-center">
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">
          <!-- Copyright -->
          <p class="text-center text-md-left grey-text">
            © 2019 Copyright: Extonan
            </a>
          </p>
          <!-- Copyright -->
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col ml-lg-0">
          <!-- Social buttons -->
          <div class="social-section text-center mr-auto text-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- Social buttons -->
        </div>
        <!-- Grid column -->
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/mdb.min.js') }}"></script>
  <script src="{{ asset('js/slick.min.js') }}"></script>
  <script src="{{ asset('js/ellipsis.js') }}"></script>
  <script type="text/javascript">
        // Animation init
    new WOW().init();
    
    $(document).on('click', function () {
      $(".dropdown-menu").removeClass('show');
    });

  </script>
  @yield('script')
</body>

</html>