<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'nombres', 'apellidos', 'dni', 'telefono', 'activo', 'created_at', 'updated_at'];

    public function perfiles_por_usuarios()
    {
    	
    }
}
