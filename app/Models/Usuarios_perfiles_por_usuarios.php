<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios_perfiles_por_usuarios extends Model
{
    use HasFactory;

    protected $primaryKey = 'usuario_id';

    public function perfil()
    {
    	return $this->belongsTo('App\Models\Usuarios_perfiles', 'perfiles_id');
    }

}
