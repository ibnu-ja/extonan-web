@extends('atak.app')
@section('header')
@parent
<!-- Main Navigation -->
<header>
  <nav class="navbar navbar-expand-lg navbar-light white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jadwal Rilis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Genre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Daftar Anime
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">A-Z</a>
            <a class="dropdown-item" href="#">Sedang Tayang</a>
            <a class="dropdown-item" href="#">Selesai Tayang</a>
          </div>
        </li>
      </ul>
      <!-- Search form -->
      <form class="form-inline md-form form-xl active-cyan-2 m-0">
        <input class="form-control form-control-xl mr-3 w-20" type="text" placeholder="Search"
          aria-label="Search">
        <i class="fas fa-search"></i>
      </form>
    </div>
  </nav>
  <div class="masthead rgba-gradient">
  </div>
</header>
<!-- Main Navigation -->
@endsection
@section('konten')
<div class="container pt-3">
  <div class="text-white logo"><img src=" {{asset('/images/tonan-inv.png') }}" alt="" width="50px" height="auto"> asdada
  </div>
  <!-- Blog -->
  <div class="row mt-3 pt-3">
    <!-- Main listing -->
    <div class="col-lg-9 col-12 mt-1 white px-4 content ">
      <section class="pb-3 text-center text-lg-left">
        <h4 class="font-weight-bold dark-grey-text mt-4 spacing">KUCING</h4>
        
        <iframe width="560" height="315" src="https://www.fembed.com/v/yzdyxiezrwwz530" frameborder="0" allowfullscreen></iframe>
        <hr>
        <div class="row p-3 trending">
          
        </div>
      </section>
      
    </div>
    <!-- Main listing -->
    <!-- Sidebar -->
    <div class="col-lg-3 col-12 px-4 mt-1 blue-grey lighten-5 widget ">
      <p class="mt-4 font-weight-bold dark-grey-text text-center heading spacing">
        <strong>RILISAN HARI INI</strong>
      </p>
      <hr>
      <!-- Section: Recent posts -->
      <section class="section mb-5">

        <div class="post-border">
          <!-- Grid row -->
          <div class="row mt-4">
            <!-- Grid column -->
            <div class="col-5">
              <!-- Image -->
              <div class="view overlay z-depth-1 mb-3">
                <img src="http://placehold.it/300x200/9cc2ff/?text=nimu" class="img-fluid" alt="Post">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            </div>
            <!-- Grid column -->
            <!-- Second column -->
            <div class="col-7 mb-1">
              <!-- Post data -->
              <div class="">
                <p class="mb-1">
                  <a href="#!" class="text-hover font-weight-bold">Judul Kartun</a>
                </p>
                <p class="font-small dark-grey-text">
                  <em>July 22, 2017</em>
                </p>
              </div>
            </div>
            <!-- Second column -->
          </div>
          <!-- Grid row -->
        </div>
        <div class="post-border">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-5">
              <!-- Image -->
              <div class="view overlay z-depth-1 mb-3">
                <img src="http://placehold.it/300x200/9cc2ff/?text=nimu" class="img-fluid" alt="Post">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            </div>
            <!-- Grid column -->
            <!-- Second column -->
            <div class="col-7 mb-1">
              <!-- Post data -->
              <div class="">
                <p class="mb-1">
                  <a href="#!" class="text-hover font-weight-bold">Judul Kartun</a>
                </p>
                <p class="font-small dark-grey-text">
                  <em>July 22, 2017</em>
                </p>
              </div>
            </div>
            <!-- Second column -->
          </div>
          <!-- Grid row -->
        </div>
        <div class="post-border">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-5">
              <!-- Image -->
              <div class="view overlay z-depth-1 mb-3">
                <img src="http://placehold.it/300x200/9cc2ff/?text=nimu" class="img-fluid" alt="Post">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            </div>
            <!-- Grid column -->
            <!-- Second column -->
            <div class="col-7 mb-1">
              <!-- Post data -->
              <div class="">
                <p class="mb-1">
                  <a href="#!" class="text-hover font-weight-bold">Judul Kartun</a>
                </p>
                <p class="font-small dark-grey-text">
                  <em>July 22, 2017</em>
                </p>
              </div>
            </div>
            <!-- Second column -->
          </div>
          <!-- Grid row -->
        </div>
        <div class="post-border">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-5">
              <!-- Image -->
              <div class="view overlay z-depth-1 mb-3">
                <img src="http://placehold.it/300x200/9cc2ff/?text=nimu" class="img-fluid" alt="Post">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            </div>
            <!-- Grid column -->
            <!-- Second column -->
            <div class="col-7 mb-1">
              <!-- Post data -->
              <div class="">
                <p class="mb-1">
                  <a href="#!" class="text-hover font-weight-bold">Judul Kartun</a>
                </p>
                <p class="font-small dark-grey-text">
                  <em>July 22, 2017</em>
                </p>
              </div>
            </div>
            <!-- Second column -->
          </div>
          <!-- Grid row -->
        </div>
        <div class="post-border">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-5">
              <!-- Image -->
              <div class="view overlay z-depth-1 mb-3">
                <img src="http://placehold.it/300x200/9cc2ff/?text=nimu" class="img-fluid" alt="Post">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
            </div>
            <!-- Grid column -->
            <!-- Second column -->
            <div class="col-7 mb-1">
              <!-- Post data -->
              <div class="">
                <p class="mb-1">
                  <a href="#!" class="text-hover font-weight-bold">Judul Kartun</a>
                </p>
                <p class="font-small dark-grey-text">
                  <em>July 22, 2017</em>
                </p>
              </div>
            </div>
            <!-- Second column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Recent posts -->
      <!-- Title -->
      <hr>
      <p class="font-weight-bold dark-grey-text text-center heading spacing">
        <strong>MUSIM</strong>
      </p>
      <hr>
      <!-- Archive -->
      <section class="archive mb-5">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12 text-center">
            <!-- List -->
            <ul class="list-unstyled mt-3">
              <li>
                <h6 class="font-weight-normal">
                  <a href="#!" class="dark-grey-text">Winter 2020</a>
                </h6>
              </li>
              <li>
                <h6 class="font-weight-normal">
                  <a href="#!" class="dark-grey-text">Fall 2019</a>
                </h6>
              </li>
            </ul>
            <!-- List -->
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </section>
      <!-- Archive -->
      <!-- Title -->
      <hr>
      <!-- Archive -->
      <section class="mb-5">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12">

          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </section>
      <!-- Archive -->
    </div>
    <!-- Sidebar -->
  </div>
  <!-- Blog -->
</div>
@endsection
@section('script')
<!-- Custom scripts -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<script type="text/javascript">
  // Animation
  Ellipsis({
    ellipsis: '…', //default ellipsis value
    debounce: 0, //if you want to chill out your memory usage on resizing
    responsive: true, //if you want the ellipsis to move with the window resizing
    className: '.clamp', //default class to apply the ellipsis
    lines: 3, //default number of lines when the ellipsis will appear
    portrait: 4, //default no change, put a number of lines if you want a different number of lines in portrait mode,
    break_word: true //default the ellipsis can truncate words
  });
  $('.trending').slick({
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: "<button type='button' class='btn btn-flat btn-sm waves-effect custom-prev'><i class='fa fa-chevron-left'></i></button>",
    nextArrow: "<button type='button' class='btn btn-flat btn-sm waves-effect custom-next'><i class='fa fa-chevron-right'></i></button>",
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@endsection