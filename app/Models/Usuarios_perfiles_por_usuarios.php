<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios_perfiles_por_usuarios extends Model
{
    use HasFactory;

    public function perfil()
    {
    	return $this->belongsTo('App\Models\Usuarios_perfiles', 'usuario_id');
    }

}
