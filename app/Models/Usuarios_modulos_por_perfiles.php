<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios_modulos_por_perfiles extends Model
{
    use HasFactory;

    protected $primaryKey = 'perfiles_id';

    public function modulo()
    {
    	return $this->belongsTo('App\Models\Usuarios_modulos', 'modulos_id');
    }

}