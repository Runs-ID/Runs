<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios_sesiones;
use App\Models\Usuarios;

class AccessRegisterController extends Controller
{
    public function register(Request $request)
    {
    	if ($request->ajax()) {
    		if($this->exists_token($request->token)){
    			if ($this->exists_email($request->email)) {
    				if ($this->exists_user($request->user)) {
    					$this->save_record($request);
    					return ['url' => route('admin.index')];
    				}else{
    					return ['error' => 'El usuario ya exíste, proba otro'];
    				}
    			}else{
    				return ['error' => 'El email ya exíste, proba otro'];
    			}
    		}else{
    			return ['error' => 'Token incorrecto'];
    		}
    	}
    	return back();
    }

    public function exists_token($token)
    {
    	if (Usuarios::where('token', $token)->first()) {
    		return true;
    	}else{
    		return false;
    	}
    }

    public function exists_email($email)
    {
    	if (!Usuarios::where('email', $email)->first()) {
    		return true;
    	}else{
    		return false;
    	}
    }

    public function exists_user($user)
    {
    	if (!Usuarios_sesiones::where('usuario', $user)->first()) {
    		return true;
    	}else{
    		return false;
    	}
    }

    public function save_record($request)
    {
    	$request->password = password_hash($request->password, PASSWORD_BCRYPT, ['cost' => 11]);
        $user = new Usuarios;
        $user_id = Usuarios::select('id')->where('token', $request->token)->first();
        $user::where('token', $request->token)->update([
            'token' => null,
            'email' => $request->email,
        ]);
        $user->sesion()->create([
            'usuarios_id' => $user_id->id, 
            'usuario' => $request->user,
            'clave' => $request->password,            
        ]);

        //guardo sesion
        session_start();
        $_SESSION['id'] = $user_id->id;
    }
}
