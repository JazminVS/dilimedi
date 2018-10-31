<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function consulta()
    {
        return view('doctor/consulta');
    }
    public function diagnostico()
    {
        return view('doctor/diagnostico');
    }
}
