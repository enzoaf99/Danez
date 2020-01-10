<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DANEZ™</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway:800i|Ubuntu&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/style.css">
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
                        <a class="nav-link" href="{{ url('/home') }}">CATÁLOGO</a>
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

<!--ABOUT US-->

              
                <div class="container text-center text-white mx-auto my-auto p-5">
                <h3 class="font-weight-bold" style="font-size: 50px">DANEZ™: Por Enzo Fernandez y Daira Mazza</h3>
                <p class="font-italic" style="font-size: 30px">Somos un pequeño equipo de programadores, que iniciamos nuestros primeros pasos en el mundo de la programación web con este proyecto.
                  Nuestra idea es que este sirva a la comunidad de desarrolladores de América latina con un foro donde se plantees dudas y se lleven a cabo debates sobre el rubro.
                  A su vez, estamos en el desarrollo de una página con artículos descargables que sean de utilidad para cualquier proyecto.
                </p>
              </div>


<!--FOOTER DEL COPYRIGHT-->
        <div class="footer-copyright text-center py-3 fixed-bottom pie">
                © 2020 Copyright: Daira Mazza &amp; Enzo Fernandez
        </div> 



    </body>
</html>