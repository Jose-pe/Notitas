<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Worklyto</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-info" href="{{ url('/') }}">
                   Notitas
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                            <a class="nav-link text-success" href="{{route('home')}}">Mis Notitas</a>
                           </li>
                            <li class="nav-item">
                             <a class="nav-link text-success" href="{{route('creartarea')}}">Nueva Notita</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

       
    
    <section class="main mb-5">

            @yield('contenido')

    </section>

    <footer id="footerjl" class="container-fluid mt-5 bg-dark text-white" >
        <section class="col text-center">
            <div class="row mb-5">
                <div class="col-sm text-center mt-5 text-warning">
                  BitBucket
                </div>
                <div class="col-sm text-center text-warning mt-5">
                  Hecho con Laravel
                </div>
                <div class="col-sm text-center text-warning mt-5">
                  Mas Proyectos
                </div>
              </div>
            <small class="mt-5 text-success">Hecho por Jose L</small>
        </section>           

    </footer>




    </header>
    

</body>
</html>