<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
