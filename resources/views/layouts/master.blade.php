<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- estilos -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/plantilla.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/modal.css')}}" type="text/css">
  <title>Oca</title>

</head>


<body>
  <!-- menu -->
  <nav class="navbar">
    <a class="navbar-brand" id="homePage" href="{{url('/')}}">
      <img src="https://lh3.googleusercontent.com/proxy/C2QW8oRRulINy3xuoD5-yr465OUuH_j8mqGvUuRWv85isWEhv0jmcCGzbPc5xmKXUseZXJJTPDR20GnWJALJBwyLvqTNOEk6SWV_JUz0mCYx6cgOzWbkY5SCL5yw0AK86S5RdrA" width="30" height="30" alt="">
      Desayunos Feministas
    </a>
  </nav>
  <nav class="navbar navbar-expand-lg jessica">
    <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
      </svg>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/galeria')}}">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/clasificacion')}}">Clasificación</a>
        </li>
        @php
            // Si el usuario ha iniciado sesión sale el boton guardar
            if(isset(Auth::user()->name)){
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="'.url('/alta').'">Añadir Mujer</a>';
              echo '</li>';
            }
        @endphp 
      </ul>
 
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#loginModal" id="login" >{{ __('Login') }}</a>
                </li>
            @endif
            
            <!-- REGISTRO ESTA ACTIVADO PARA HACER PRUEBAS CON USUARIOS. MAS ADELANTE SE BORRARA -->
            {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                </li>
            @endif --}}
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>


    </div>
  </nav>

  <!-- formulario para el login -->
  <div class="modal hide fade in" data-backdrop="static" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="d-flex flex-column text-center">

            <!-- Formulario -->
            <form method="POST" class="formLogin" action="{{ route('login') }}">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Correo') }}</label>

                <div class="col-md-9">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="col-md-9">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-9">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      {{ __('Mantener sesión iniciada') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Entrar') }}
                  </button>

                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Recuperar contraseña') }}
                    </a>
                  @endif
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="app">
    @yield('content')
  </div>


  <footer>
    <p>Web creada por <b>Grupo 2</b></p>
    <p>Jon Ander, Jessica, Sendoa y Eric</b></p>
  </footer>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  {{-- <script src="js/bootstrap.min.js"></script> --}}
</body>
  
  <script src="{{ asset('js/tablero.js') }}"></script>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
 
    
  @if (\Request::is('/') || \Request::is('juego/*'))
    <script src="{{ asset('js/jugadores.js') }}"></script>
  @endif

</body>
  
</html>
