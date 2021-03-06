<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DANEZ™</title>
        <link href="https://fonts.googleapis.com/css?family=Muli|Oswald|Raleway:800i|Ubuntu&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
<body>
        <div class="flex-center position-ref full-height">


<!--NAVBAR-->

            <div class="content">
              <section id="nav-bar">

                <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/"><img src="/imagenes/tipografia.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                
               @if (Route::has('login'))
                <li class="nav-item">
                    @auth
                        <a class="nav-link enlace_desactivado" href="{{ url('/articulos') }}">ARTÍCULOS</a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </li>
            @endif

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">LOGUEATE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">REGISTRATE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/faqs">PREGUNTAS FRECUENTES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/aboutUs">NOSOTROS</a>
                </li>
                @auth
                   <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">DESCONECTAR</a>
                </li> 
                @endauth
              </ul>
            </div>
          </nav>

              </section>
    <body>
<div class="container">
    @yield('content')
</div>

<div class="container text-light p-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-light">{{ $product->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-light" href="{{ route('products.index') }}">Atras</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $product->detail }}
            </div>
        </div>
    </div>
</div>
    </body>
</html>
