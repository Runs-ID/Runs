<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function sesion()
    {
    	return $this->belongsTo('App\Models\Usuarios_sesiones');
    }
}
