<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    use HasFactory;
    
    protected $guarded = []; 

    public function provincia()
    {
    	return $this->belongsTo(Provincias::class, 'provincia_id');
    }

    public function localidades()
    {
    	return $this->hasMany(Localidad::class, 'localidad_id');
    }
}
