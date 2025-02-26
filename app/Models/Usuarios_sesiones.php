<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios_sesiones extends Model
{
    use HasFactory;

    protected $guarded = []; 
    
    public function user()
    {
    	return $this->hasOne('App\Models\Usuarios', 'usuarios_id');
    }
}
