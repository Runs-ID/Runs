<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndexLogin;
use App\Models\Usuario;

class LoginController extends Controller
{
    /*
    1- valida el formulario
    2- verifica si existe el usuario, de ser así lo reserva en la variable $data
    3- verifica que la clave sea correcta
    4- asigno sesion id
    */
    public function index(IndexLogin $request)
    {
    	if ($request->ajax()) {
    		if ($data = Usuario::select('id', 'clave')->where('usuario', $request->user)->first()) {
    			if (password_verify($request->password, $data->clave)) {
                    session_start();
                    $_SESSION['id'] = $data->id;
    				return ['url' => route('admin.index')];
    			}else{
    				return ['error' => 'Usuario o contraseña incorrectos'];
    			}
    		}else{
    			return ['error' => 'Usuario o contraseña incorrectos'];
    		}
    	}
    	return back();
    }
}
