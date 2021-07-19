<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TESVB') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

    <!-- Styles -->
    <link href="../assets/css/material-kit.css?v=2.1.1" rel="stylesheet">
    <link href="../assets/demo/demo.css" rel="stylesheet">
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet">
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/45/6a/intl/es_419/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/45/6a/intl/es_419/common.js"></script>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        TESVB
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temas.index') }}">{{ __('Temas') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subtemas.index') }}">{{ __('Subtemas') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodespers.index') }}">{{ __('Productos Esperados') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('planpros.index') }}">{{ __('Plan de proyectos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('estrat-ins.index') }}">{{ __('Estrategias de instruccion') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('examenes.index') }}">{{ __('Examenes') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('actividades.index') }}">{{ __('Actividades') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sisevals.index') }}">{{ __('Sistema de evaluacion') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('unidades.index') }}">{{ __('Unidades') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('materias.index') }}">{{ __('Materias') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('planeaciones.index') }}">{{ __('Planeaciones') }}</a>
                    </li>
                </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<footer class="footer footer-black" data-background-color="black">
    <div class="container">
      <div class="copyright pull-center">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear())
                </script>Creative Tim All Rights Reserved.
        </div>
    </div>
  </footer>