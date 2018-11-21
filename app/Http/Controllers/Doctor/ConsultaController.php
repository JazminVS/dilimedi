<?php

namespace App\Http\Controllers\Doctor;

use App\Consulta;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     */
    public function insert(Request $request) {
        $motivo = $request -> input('motivo');
        $examen = $request -> input('examen');
        $observaciones = $request -> input('observaciones');;
        //$id=$request->('paciente');
        ECHO $motivo,"",$observaciones,"",$id;
        /*$create = Consulta::create(
            ['motivo_consulta'=>$motivo,
            'observaciones'=>$observaciones]
        );
        $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
        °*/
        echo 'DATOS INGRESADOS CORRECTAMENTE';
    }

    public function diagnostico()
    {
        return view('doctor/diagnostico');
    }
    public function cita()
    {
        return view('doctor/cita');
    }
}
