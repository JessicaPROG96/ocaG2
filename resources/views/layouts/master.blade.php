<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo asset('css/plantilla.css') ?>" type="text/css">

  <title>Hello, world!</title>
</head>


<body>
  <!-- menu -->
  <nav class="navbar">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="https://images.vexels.com/media/users/3/156767/isolated/preview/229408895847d8dabf22167e049c88b7-icono-plano-de-la-taza-de-caf--caliente-by-vexels.png" width="30" height="30" alt="">
      Desayunos Feministas
    </a>
  </nav>
  <nav class="navbar navbar-expand-lg jessica">
    <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/galeria')}}">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/clasificacion')}}">Clasificación</a>
        </li>
      </ul>
      <!-- <span class="navbar-text" id="login">
        Login
      </span> -->
      <button class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal" id="login">
        Login
      </button>
    </div>
  </nav>

  <!-- formulario para el login -->
  <!-- <div class="modal fade" id="loginModal"> -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="d-flex flex-column text-center">
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="email1" placeholder="Correo">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password1" placeholder="Contraseña">
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Guardar usuario y contraseña
                </label>
              </div>
              <button type="button" class="btn btn-info btn-block btn-round">Entrar</button>
              <br>
              <div class="form-group">
              <button type="button" class="btn btn-info btn-block btn-round">Recuperar contraseña</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div>
    @yield('content')

  </div>


  <footer>
    <p>Web creada por <b>Grupo 2</b></p>
    <p>Jon Ander, Jessica, Sendoa y Eric</b></p>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
<script>
  $(document).ready(function() {
    $('#loginModal').modal('show');
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  });
</script>

</html>
