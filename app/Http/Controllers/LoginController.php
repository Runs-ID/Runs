<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndexLogin;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index(IndexLogin $request)
    {
    	if ($request->ajax()) {
    		if ($data = Usuario::select('clave')->where('usuario', $request->user)->first()) {
    			if (password_verify($request->password, $data->clave)) {
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
