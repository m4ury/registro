<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    function pacientes(){
        return $this->hasMany(Paciente::class);
    }

    /*function profesionales(){
        return $this->hasMany(Profesional::class);
    }*/
}
