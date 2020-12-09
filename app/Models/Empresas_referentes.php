<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas_referentes extends Model
{

    protected $guarded = []; 
    

    public function empresa()
    {
    	return $this->belongsTo(Empresas::class, 'empresa_id');
    }
}
