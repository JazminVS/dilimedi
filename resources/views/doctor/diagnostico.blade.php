@extends('layouts.dashboard')

@section('content')
    <div class="container">
                <h4>Diagnóstico</h4>


                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo de diagnóstico</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Enfermedad</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Prescripcion de medicamento</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Indicaciones</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="">
                    </div>
                </div>

                <button type="button" class="btn btn-primary ">Guardar</button>

            </div>
        </div>
    </div>
@endsection
