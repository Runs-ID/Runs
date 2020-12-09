<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function localidad()
    {
    	return $this->belongsTo(Localidades::class, 'localidad_id');
    }

    public function referentes()
    {
    	return $this->hasMany(Empresas_referentes::class, 'empresa_id');
    }
}
