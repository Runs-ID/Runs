<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function provincias()
    {
    	return $this->hasMany(Provincias::class, 'pais_id');
    }
}
