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
  <main id="aaaa">
    <div class="container-fluid">
      @include('admin.partials.form-status')
      <div id="content">
        @yield('konten')
      </div>
    </div>
  </main>
  <!--/Main layout-->
  <!--Footer-->
  @include('admin.partials.footer')
  <!--/.Footer-->
  <script src="{{ asset('js/app.js') }}"></script>
  <script id="ori">
    $(".button-collapse").sideNav();

    $("#slide-out a").on('click', function(event) {
      if ($(this).attr("href") !== undefined) {
        event.preventDefault();
        var url = $(this).attr("href");
        $.ajax({
          url: url,
          cache: false,
          // beforeSend: function() {
          //     $(".loaderOverlay").fadeIn();
          // },
          success: function(html) {
            // $('#new').remove();
            // $('body').append(html.script); 
            $("#content").html(html.content);
            document.title = html.title;
            $('#ori').append(html.script);

            // $('#new').html(html.script);

            // document.body.appendChild(html.script);
            // alert(html.script);
            // alert(url);
            // $(".loaderOverlay").fadeOut();
            // pageCvInit();
            // initAjaxHeadline();
          }
        });
      }
    });
  </script>
  @yield('script')
</body>

</html>