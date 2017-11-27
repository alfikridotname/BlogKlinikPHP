<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Klinik PHP') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="navbar-brand">
                        <a class="" href="{{ url('/') }}">
                        <img src="http://www.klinikphp.com/assets/img/logo.png" width="40" height="35" alt="Card image cap">

                        </a>
                        Klinik PHP
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <!-- Menu Depan -->
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('register') }}">HTML</a></li>
                            <li><a href="{{ route('post.create')}}">PHP</a></li>
                            <li><a href="{{ route('post.create')}}">CSS</a></li>
                            <li><a href="{{ route('post.create')}}">Python</a></li>
                            <li><a href="{{ route('post.create')}}">Ruby</a></li>
                            <li><a href="{{ route('post.create')}}">MySql</a></li>
                            <li><a href="{{ route('post.create')}}">JavaScript</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Framework <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('post.create')}}">Codeigniter</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.create')}}">Laravel</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.create')}}">Django</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.create')}}">Rails</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('post.create')}}">Write a Blog</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
        <hr>
        @include('layouts.partials._alerts')
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
