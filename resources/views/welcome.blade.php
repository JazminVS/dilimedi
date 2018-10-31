<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Inicio Sistema Salud</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/estilo.css')}}" rel="stylesheet">

    <style>
        html, body {
            background-image: url("img/fondo1.png");
            background-size: 100% 200%;
            color: #00447c;
            font-family: 'Raleway', sans-serif;
            font-weight: 40;
            height: 50vh;
            margin: 0;
        }
        .container {
            min-width: 500px;
        }
        h1, h2 {
            color: #EE7401;
        }

        a{
            color: white;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="py-5">
            <img class="d-block mx-auto mb-4" src="img/dili.png" alt="" width="500" height="100">
            </div>
        </div>
        <div class="py-5 text-center col-md-6">
            <div class="offset-md-3">
            <h1>SISTEMA DE SALUD</h1>
            <h2>Dispensario Medico Dilipa</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="offset-md-2">
            <img class="" src="img/logotipo.png" alt="" width="500" height="150">
            </div>
        </div>
        <div class="col-md-8">
            <div class="offset-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="email" placeholder="e-mail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input id="password" placeholder="contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-9 offset-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Recuérdame') }}
                                        </label>
                                    </div>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto my-1">
                                            <a for="customControlAutosizing" href="{{ route('password.request')}}">
                                                Olvidaste tu contraseña?</a>
                                        </div>
                                        <div class="col-auto my-1">
                                            <div class="offset-md-6">
                                            <button type="submit" class="btn btn-warning">
                                                {{ __('Entrar') }}
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2018 Dispensario Medico Dilipa</p>
        <!--<ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>*/-->
    </div>
</div>


</body>
</html>


<!--
@if (Route::has('login'))
    <div class="top-right links">
       @auth
        <a href="{{ url('/home') }}">Home</a>
       @else
       <a href="{{ route('login') }}">INICIAR SESION</a>
       <a href="{{ route('register') }}">registro</a>
       @endauth
    </div>
@endif--->

