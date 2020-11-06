<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class TokenValidateController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->ajax()) {
    		if ($data = Usuario::where('token', $request->token_validate)->first()) {
    			if ($data->usuario == $request->user) {
    				return ['success' => 'true'];
    			}else{
    				return ['error' => 'Token incorrecto, reintentelo'];
    			}
    		}else{
    			return ['error' => 'Token incorrecto, reintentelo'];
    		}
    	}
    	return back();
    }
}
