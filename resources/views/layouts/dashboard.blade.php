<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow navbar-laravel">
    <img src="img/logotipo.png" class="navbar-brand col-md-2 mr-0" alt="logo_dispensario" width="auto" height="auto">
    <div class="navbar-text">
        <h4 class="text-light">Sistema de Salud Dispensario Medico Dilipa</h4>
    </div>

    <ul class="navbar-nav px-3 text-light">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
            </li>
            @else
                Usuario: {{ Auth::user()->name }}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
        @endguest
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar ">
            <div class="sidebar-sticky ">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items">
                    <div class="d-flex w-100">
                        <img src="img/doctor.png" alt="logo_dispensario" width="100" height="50">
                        <h6 class="mb-1">PERFIL DOCTOR<br></h6>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <small>Dr(a).{{ Auth::user()->name }}</small>
                    </div>
                </a>
                <div class="list-group text-uppercase">
                    <a href="home" class="list-group-item ">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                    <a href="consulta" class="list-group-item list-group-item-action">
                        <span data-feather="heart"></span>
                        Consulta médica
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <span data-feather="calendar"></span>
                        Cita médica
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <span data-feather="users"></span>
                        Pacientes
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <span data-feather="truck"></span>
                        Farmacia
                    </a>
                </div>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('content')
        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
</body>
</html>
