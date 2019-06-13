<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    function pacientes(){
        return $this->hasMany(Paciente::class);
    }
}
