@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-info">
        <h2 class="text-center text-info">CONSULTA MÉDICA</h2>
    </div>
    <h4 class="text-secondary">Buscar Paciente</h4>
<div class="container offset-md-3">
    <form>
        <div class="form-group row w-75">
            <input class="form-control form-control-dark w-50" type="text" placeholder="Por nombres y apellidos" aria-label="Search">
            <a href="#" class="btn btn-success col-sm-2" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </a>
        </div>
        <div class="form-group row w-75">
            <input class="form-control form-control-dark w-50" type="text" placeholder="Por número de cédula" aria-label="Search">
            <a href="#" class="btn btn-success col-sm-2" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </a>
        </div>
        </form>
</div>
    <hr>
<div class="container offset-md-1"><br/>
    <form method="post" action="diagnostico" name="form">
    <div class="form-group row">
        <h5 class="col-sm-3">Paciente</h5>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword">
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Motivo de Consulta</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" id="actividad" name="actividad"></textarea>
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Exámen Físico</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" id="actividad" name="actividad"></textarea>
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Observaciones</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" id="actividad" name="actividad"></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-primary offset-md-9">Guardar</button>
    </form>
</div>
    <br/>
@endsection
