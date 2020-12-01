<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    use HasFactory;

    public function pais()
    {
    	return $this->belongsTo(Paises::class, 'pais_id');
    }

    public function partidos()
    {
    	return $this->hasMany(Partidos::class, 'provincia_id');
    }
}
	