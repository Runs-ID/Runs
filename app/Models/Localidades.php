<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function partido()
    {
    	return $this->belongsTo(Partidos::class, 'partido_id');
    }
}
