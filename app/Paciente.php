<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nombres','apellidos','CI','fecha_nacimiento','lugar_nacimiento'];

    protected $table = 'pacientes';
}
