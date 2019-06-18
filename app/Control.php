<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }
}
