<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DANEZ™ / PREGUNTAS FRECUENTES</title>
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </div>
            @endif

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
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">LOGUEATE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">REGISTRATE</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link enlace_desactivado" href="/faqs">PREGUNTAS FRECUENTES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/aboutUs">NOSOTROS</a>
                </li>
              </ul>
            </div>
          </nav>

              </section>

<!-- PREGUNTAS FRECUENTES -->
              <div class="container p-5">
                <h4 class="text-center titulopf">PREGUNTAS FRECUENTES</h4>

                    <div class="container">
                        <div class="row"><div class="col">
                            <h3 class="text-center pf">¿Los artículos son gratuitos y de uso libre?</h3>
                            </div></div>
                        <div class="row"><div class="col">
                            <p class="text-center pf">Si, son de uso libre, solo ténes que hacer referencia a su desarrollador en tu futura aplicación.</p>
                            </div></div>
                        <div class="row"><div class="col">
                            <h3 class="text-center pf">¿Para descargar contenido debo registrarme?</h3>
                            </div></div>
                        <div class="row"><div class="col">
                            <p class="text-center pf">Si, para descargar cualquier contenido de nuestra página web es necesario que tengas una cuenta y estes logeado. <a href="login.php">Hacelo acá</a>.</p>
                            </div></div>
                        <div class="row"><div class="col">
                            <h3 class="text-center pf">¿Que debo hacer si otro usuario revende articulos que no son de su autoría?</h3>
                            </div></div>
                        <div class="row"><div class="col">
                            <p class="text-center pf">En caso de que veas una actividad irregular de un usuario comunicalo a nuestro email danez.atencion@gmail.com .</p>
                            </div></div>
                        <div class="row"><div class="col">
                            <h3 class="text-center pf">¿Sus plantillas funcionan en cualquier dispositivo?</h3>
                            </div></div>
                        <div class="row"><div class="col">
                            <p class="text-center pf">Si, todas nuestras plantillas son responsive.</p>
                            </div></div>
                        <div class="row"><div class="col">
                            <h3 class="text-center pf">¿Es un sitio fiable?</h3>
                            </div></div>
                        <div class="row"><div class="col">
                            <p class="text-center pf">Si, toda tu informacion de usuario esta protegida por nosotros.</p>
                            </div></div>
                        <div class="row"><div class="col">
                        </div></div>
                        <h3 class="text-center pf">¿Las plantillas utilizan algun marco de trabajo?</h3>
                        <div class="row"><div class="col">
                        </div></div>
                        <p class="text-center pf">Depende de su creador, la mayoría de plantillas responsive simples utilizan Bootstrap 4.</p>
                    </div>        
                </div>
                </div>

<!--FOOTER DEL COPYRIGHT-->
        <div class="footer-copyright text-center py-3 fixed-bottom pie">
                © 2020 Copyright: Daira Mazza &amp; Enzo Fernandez
        </div> 



    </body>
</html>
