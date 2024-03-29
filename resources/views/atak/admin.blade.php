<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('judul')</title>
  <!-- Scripts -->
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    /* Only for snippet */
    .double-nav .breadcrumb-dn {
      color: #fff;
    }

    ::-webkit-input-placeholder {
      color: white;
    }

    .bg {
      background-color: #ddd;
    }
  </style>
  @yield('style')
</head>

<body class="fixed-sn light-blue-skin bg">
  <!--Double navigation-->
  <header>
    <!-- Sidebar navigation -->
    @include('admin.partials.sidebar')
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    @include('admin.partials.navbar')
    <!-- /.Navbar -->
  </header>
  <!--/.Double navigation-->
  <!--Main layout-->
  <main>
    <div class="container-fluid">
      @include('admin.partials.form-status')
      @yield('konten')
    </div>
  </main>
  <!--/Main layout-->
  <!--Footer-->
  @include('admin.partials.footer')
  <!--/.Footer-->
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    $(".button-collapse").sideNav();
  </script>
  @yield('script')
</body>

</html>