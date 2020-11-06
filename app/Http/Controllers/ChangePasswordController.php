<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ChangePasswordController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->ajax()) {
    		if ($data = Usuario::where('token', $request->token_validate)->first()) {
    			if ($data->usuario == $request->user) {
    				$new_password = password_hash($request->password_change, PASSWORD_BCRYPT, ['cost' => 11]);
    				Usuario::where('token', $request->token_validate)
    				->update([
    					'token' => null,
    					'clave' => $new_password,
    				]);
    				return $request->all();
    			}else{
    				return ['error' => 'Hubo un problema con su navegador, porfavor reinicielo.'];
    			}
    		}else{
    			return ['error' => 'Hubo un problema con su navegador, porfavor reinicielo.'];
    		}
    	}
    	return back();
    }
}
