<?php

namespace App\Http\Controllers\Doctor;

use App\cie;
use App\TipoDiagnostico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiagnosticoController extends Controller
{
    public function index()
    {
        $diagnosticos=TipoDiagnostico::all();
        $enfermedades=cie::all();
        return view ('doctor.diagnostico',compact('diagnosticos', 'enfermedades'));
    }


}
