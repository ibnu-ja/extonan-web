@extends('atak.app')
@section('style')
<style>
    html,
    body,
    header,
    .view.jarallax {
        min-height: 250px;
    }

    .card-body .rilisan:hover {
        overflow: visible;
        white-space: normal;
        height: auto;
        color: black;
        /* just added this line */
    }

    .carousel-inner {
        width: 90%;
        margin: auto;
        /* max-height: 400px; */
    }

    .controls-top {
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 37%;
        width: 90%;
        z-index: 1;
    }

    @media (max-width: 900px) {
        .controls-top {
            width: 85%;
        }
    }

    @media (max-width: 600px) {
        .controls-top {
            width: 70%;
        }
    }

    .right {
        position: absolute;
        top: 50%;
        left: 100%;
    }

    .left {
        position: absolute;
        top: 50%;
        right: 100%;
    }
</style>
@endsection
@section('header')
@parent
<!-- Main Navigation -->
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <!-- Authentication Links -->
                    @auth
                    @if (Auth::user()->is_admin==1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('post/') }}">Manajemen</a>
                    </li>
                    @endif
                    @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('list') }}">Daftar Anime</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('genre') }}" data-offset="100">Daftar Genre</a>
                </li>          
                </ul>
                <!-- Social Icons -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'>
        <div class="mask rgba-black-strong">
            <div class="container h-100 d-flex justify-content-center align-items-center pt-5">
                <div class="row smooth-scroll">
                    <div class="col-md-12">
                        <div class="text-center text-white">
                            <div class="wow fadeInDown" data-wow-delay=".2s">
                                <h1>{{ config('app.name', 'Laravel') }}</h1>
                                <span class="subheading">Akhirnya bisa revive</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- Main Navigation -->
@endsection
@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <section>
                <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 m-2" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating left" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating right" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <div class="carousel-inner v-2" role="listbox">
                        <div class="carousel-item active">
                            <figure class="col-xl-2 col-md-3 col-6">
                                <a href="http://placehold.it/300x400/9cc2ff/?text=Digital.com" data-size="300x400">
                                    <img src="http://placehold.it/300x400/9cc2ff/?text=Digital.com" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="col-xl-2 col-md-3 col-6">
                                <a href="http://placehold.it/300x400/9cc2ff/?text=mum.com" data-size="300x400">
                                    <img src="http://placehold.it/300x400/9cc2ff/?text=mum.com" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="col-xl-2 col-md-3 col-6">
                                <a href="http://placehold.it/300x400/9cc2ff/?text=mumaa.com" data-size="300x400">
                                    <img src="http://placehold.it/300x400/9cc2ff/?text=mumaa.com" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="col-xl-2 col-md-3 col-6">
                                <a href="http://placehold.it/300x400/9cc2ff/?text=a.com" data-size="300x400">
                                    <img src="http://placehold.it/300x400/9cc2ff/?text=a.com" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="col-xl-2 col-md-3 col-6">
                                <a href="http://placehold.it/300x400/9cc2ff/?text=b.com" data-size="300x400">
                                    <img src="http://placehold.it/300x400/9cc2ff/?text=b.com" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="col-xl-2 col-md-3 col-6">
                                <a href="http://placehold.it/300x400/9cc2ff/?text=Dicgital.com" data-size="300x400">
                                    <img src="http://placehold.it/300x400/9cc2ff/?text=Dicgital.com" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Magazine -->
    <div class="row">
        <!-- Main news -->
        <div class="col-xl-8 col-md-12">
            <!-- Section: Magazine posts -->
            <section class="section extra-margins mt-2">
                <h4 class="font-weight-bold"><strong>LATESTS NEWS</strong></h4>
                <hr class="red title-hr">
                <!-- Grid row -->
                <div class="row mb-4">
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-sm-6 col-6 text-left my-3">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Button -->
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="rilisan text-truncate">
                                    Lorem ipsum loremmm sdsds asdasd
                                    <h6>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                <ul class="list-unstyled list-inline font-small">
                                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                                </ul>
                            </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <!-- Grid column 12 brp biji -->
                </div>
                <!-- Grid row -->
            </section>
            <!-- Section: Magazine posts -->
            <!-- Pagination dark -->
            <nav>
                <ul class="pagination pg-dark flex-center pt-4">
                    <!-- Arrow left -->
                    <li class="page-item">
                        <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <!-- Numbers -->
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">4</a></li>
                    <li class="page-item"><a class="page-link">5</a></li>
                    <!-- Arrow right -->
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Pagination dark grey -->
        </div>
        <!-- Main news -->
        <!-- Sidebar -->
        <div class="col-xl-4 col-md-12 widget-column mt-0">
            <!-- Section: Categories -->
            <section class="section mb-5">
                <h4 class="font-weight-bold mt-2"><strong>CATEGORIES</strong></h4>
                <hr class="red title-hr">
                <ul class="list-group z-depth-1 mt-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a>Business</a>
                        <span class="badge badge-danger badge-pill">4</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a>Entertainment</a>
                        <span class="badge badge-danger badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a>Health</a>
                        <span class="badge badge-danger badge-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a>Lifestyle</a>
                        <span class="badge badge-danger badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a>Photography</a>
                        <span class="badge badge-danger badge-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a>Technology</a>
                        <span class="badge badge-danger badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a>Sport</a>
                        <span class="badge badge-danger badge-pill">5</span>
                    </li>
                </ul>
            </section>
            <!-- Section: Featured posts -->
            <section class="section widget-content">
                <!-- Heading -->
                <h4 class="font-weight-bold pt-2"><strong>FEATURED POSTS</strong></h4>
                <hr class="red title-hr mb-4">
                <!-- Card -->
                <div class="card card-body pb-0">
                    <!-- Grid row -->
                    <div class="row">
                        <div class="col-4">
                            <!-- Image -->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(121).jpg" class="img-fluid rounded-0" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Excerpt -->
                        <div class="col-8">
                            <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                            <div class="post-data">
                                <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 18/08/2017</p>
                            </div>
                        </div>
                        <!-- Excerpt -->
                    </div>
                    <!-- Grid row -->
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Image -->
                        <div class="col-4">
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(30).jpg" class="img-fluid rounded-0" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <!-- Excerpt -->
                        <div class="col-8">
                            <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                            <div class="post-data">
                                <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2017</p>
                            </div>
                        </div>
                        <!-- Excerpt -->
                    </div>
                    <!-- Grid row -->
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Image -->
                        <div class="col-4">
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(118).jpg" class="img-fluid rounded-0" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <!-- Excerpt -->
                        <div class="col-8">
                            <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                            <div class="post-data">
                                <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 27/08/2017</p>
                            </div>
                        </div>
                        <!-- Excerpt -->
                    </div>
                    <!-- Grid row -->
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Image -->
                        <div class="col-4">
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(124).jpg" class="img-fluid rounded-0" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <!-- Excerpt -->
                        <div class="col-8">
                            <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                            <div class="post-data">
                                <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                            </div>
                        </div>
                        <!-- Excerpt -->
                    </div>
                    <!-- Grid row -->
                    <!-- Grid row -->
                    <div class="row mb-0">
                        <!-- Image -->
                        <div class="col-4">
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(85).jpg" class="img-fluid rounded-0" alt="sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <!-- Excerpt -->
                        <div class="col-8">
                            <h6 class="mt-0  mb-3"><a><strong>This is title of the news</strong></a></h6>
                            <div class="post-data">
                                <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2018</p>
                            </div>
                        </div>
                        <!-- Excerpt -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Featured posts -->
        </div>
        <!-- Sidebar -->
    </div>
    <!-- Magazine -->
</div>
@endsection
@section('script')
<script>

</script>
@endsection