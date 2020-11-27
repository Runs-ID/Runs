<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Usuarios_sesiones;

class RecoveryThirdStepController extends Controller
{
	protected $email;
	protected $token;
	protected $password;

    public function third_step(Request $request)
    {
    	if ($request->ajax()) {
    		if ($this->exists_email_token($request)) {
    			return $this->change_password();
    		}else{
    			return ['error' => 'El token ya no exíste, o tu email se modificó intente otra vez'];
    		}
    	}
    	return back();
    }

    public function exists_email_token($request)
    {
    	if (Usuarios::where('email', $request->email_recovery_password)->first()) {
    		if (Usuarios::where('token', $request->token_recovery_password)->first()) {
    			$this->email = $request->email_recovery_password;
    			$this->token = $request->token_recovery_password;
    			return true;
    		}else{
    			return false;
    		}
    	}else{
    		return false;
    	}
    }

    public function change_password()
    {
    	$id = Usuarios::select('id')->where('email', $this->email)->pluck('id')->first();
    	$this->password = password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 11]);
    	Usuarios::where('email', $this->email)->update([
            'token' => null,
    	]);
		Usuarios_sesiones::where('id', $id)->update([
			'clave' => $this->password,
		]);
    	return ['success' => true];
    }
}
