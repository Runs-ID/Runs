<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    public function localidad()
    {
    	return $this->belongsTo(Localidades::class, 'localidad_id');
    }
}
