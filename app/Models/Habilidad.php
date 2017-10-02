<?php

namespace proyecto_asistentesaap\Models;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    protected @table = "habilidades";


protected $fillable =
['user_id','habilidad'];

public function user()
    {
    
    return $this->belongsTo('proyecto_asistentesaap\Models\User');

    }

}