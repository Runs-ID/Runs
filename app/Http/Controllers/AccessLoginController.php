<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios_sesiones;
use App\Models\Usuarios;

class AccessLoginController extends Controller
{	
    public function login(Request $request)
    {
    	if ($request->ajax()) {
    		if ($this->exists_user($request->user, $request->password)) {
          $this->save_session($request->user);
    			return ['url' => route('admin.index')];
    		}else{
    			return ['error' => 'Usuario o contraseña incorrectos'];
    		}
    	}
    	return back();
    }

    public function exists_user($user, $password)
    {
      if($password_crypt = Usuarios_sesiones::select('clave')->where('usuario', $user)->first()){
        if (password_verify($password, $password_crypt->clave)) {
          return true;
        }else{
          return false;
        }
    	}else{
    		return false;
    	}
    }

    public function save_session($user)
    {
      $user_id = Usuarios_sesiones::select('usuarios_id')->where('usuario', $user)->first();
      session_start();
      $_SESSION['id'] = $user_id->usuarios_id;
    }
}
