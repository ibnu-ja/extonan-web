<div id="slide-out" class="side-nav fixed">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-center">
                <a href="#" class="pl-0 white-text spacing"><img src=" {{ asset('images/tonan-inv.png') }} " width="50px"> ADMIN <EX></EX>TONAN</a>
            </div>
        </li>
        <!-- Search Form -->
        <li>
            <form class="search-form" role="search">
                <div class="md-form mt-0 waves-light">
                    <input type="text" id="navbarCari" class="form-control py-2" placeholder="Search">
                </div>
            </form>
        </li>
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion" id="menuSamping">
                <li>
                    <a href="#" class="collapsible-header waves-effect">
                        <i class="fas fa-chart-line"></i>Informasi</a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="far fa-video"></i>Anime<i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href=" {{url('anime')}}" class="waves-effect">Indeks</a>
                            </li>
                            <li>
                                <a href=" {{ url('/anime/tambah')}}" class="waves-effect">Tambah</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header waves-effect arrow-r">
                        <i class="far fa-pen-square"></i>Blog<i class="fas fa-angle-down rotate-icon"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="#" class="waves-effect">Tambah kiriman</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect">Daftar kiriman</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect">Buat Pengumuman</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect">Sunting Pengumuman</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="collapsible-header waves-effect">
                        <i class="w-fa fas fa-user"></i>Profil
                    </a>
                </li>

            </ul>
        </li>
        <!-- Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>