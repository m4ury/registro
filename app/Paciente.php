<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    function sector(){
        return $this->belongsTo(Sector::class);
    }

    function familia(){
        return $this->belongsTo(Familia::class);
    }
}
