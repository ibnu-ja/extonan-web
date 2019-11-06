<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
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
                    <a class="nav-link" href="{{ url('genre') }}">Daftar Genre</a>
                </li>                

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
               
                @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link p-0" href="https://www.facebook.com/TonanEX"><ion-icon name="logo-facebook" size="large"></ion-icon></a>
                </li>    
            </ul>
        </div>
    </div>
</nav>