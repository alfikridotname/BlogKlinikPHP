<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Klinik PHP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <hr>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    All Reference About Web Programming
                    <div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('post.details',$post) }}"><h4>{{ ucfirst($post->title)}}</h4></a>
                        <small>Posted on {{ $post->created_at }} | {{ $post->created_at->diffForHumans() }} | Alfikri</small>
                        <button class="btn btn-xs btn-danger">PHP</button>
                        <button class="btn btn-xs btn-danger">HTML</button>
                        <button class="btn btn-xs btn-danger">CSS</button>
                    </div>
                    <div class="panel-body">
                        <p style="text-align: justify;">
                            {{ str_limit($post->content, 300, ' . . . . .') }}
                        </p>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('post.details',$post) }}" class="btn btn-xs btn-success">Read More</a>
                    </div>
                </div>
                @endforeach
                {!! $posts->render() !!}
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Search</strong>
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="" method="post">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="go" class="btn btn-primary">Go</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Category</strong>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About Klinik PHP
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify;">
                                Klinik PHP is one of blog like many article about HTML, CSS, PHP
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About Klinik PHP
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify;">
                                Klinik PHP is one of blog like many article about HTML, CSS, PHP
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            About Klinik PHP
                        </div>
                        <div class="panel-body">
                            <p style="text-align: justify;">
                                Klinik PHP is one of blog like many article about HTML, CSS, PHP
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <footer class="py-1 bg-dark">
      <div class="container">
        <p class="m-0 text-left text-white">Copyright ©Klinik PHP {{ date('Y') }}</p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
