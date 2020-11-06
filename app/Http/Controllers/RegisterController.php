<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\IndexRegister;
use App\Models\Usuario;

class RegisterController extends Controller
{
	/*
	1- verifico que exísta el token
	2- verifico que no haya coincidencia con otro email
	3- verifico que no haya coincidencia con otro usuario
	4- encripto la clave
	5- donde está el token ingresado, actualizo los datos y dejo el token en null
	*/
    public function index(IndexRegister $request)
    {
    	if (Usuario::where('token', $request->token)->first()) {
    		if (!Usuario::where('email', $request->email)->first()) {
    			if (!Usuario::where('usuario', $request->user)->first()) {
	    			$request->password = password_hash($request->password, PASSWORD_BCRYPT, ['cost' => 11]);
	    			Usuario::where('token', $request->token)
	    			->update([
	    				'usuario' => $request->user,
	    				'token' => null,
	    				'clave' => $request->password,
	    				'email' => $request->email,
	    			]);
	    			return ['url' => route('admin.index')];
	    		}else{
	    			return ['error' => 'El usuario ya exíste, pruebe otro'];
	    		}
    		}else{
    			return ['error' => 'El email ya exíste, pruebe otro'];	
    		}
    	}else{
    		return ['error' => 'Token no válido'];
    	}
    	return back();
    }
}
