
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{asset('css/album.css')}}" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">La app</h4>
              <p class="text-muted">AppWeb sencilla, hecha con laravel 5.6, bootstrap y Vuejs.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contactame</h4>
              <ul class="list-unstyled">
                <li><a href="https://twitter.com/yusukeJJPM" target="_blank" class="text-white">Mi Twitter</a></li>
                <li><a href="https://www.facebook.com/jhonnyprz1998" target="_blank" class="text-white">Mi Facebook</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="{{route('index.welcome')}}" class="navbar-brand d-flex align-items-center">
            <img src="https://image.winudf.com/v2/image/Y29tLmFuZHJvbW8uZGV2NDk5MzQxLmFwcDczMTU0OV9pY29uXzE1MTc1NTY3MTNfMDg3/icon.png?w=170&fakeurl=1&type=.png" width="50" alt="">&nbsp
            <strong>@yield('title')</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      @yield('content')

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Volver arriba?</a>
        </p>
        <p>Esta pagina la hice con fines educativos, para mis practicas de programacion, eres libre de copiar lo que quieras!</p>
        <i>By Jhonny Pérez</i>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/holder.min.js')}}"></script>
  </body>
</html>
