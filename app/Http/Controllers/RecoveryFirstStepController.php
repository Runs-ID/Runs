<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Mail\FirstStepRecovery;
use Illuminate\Support\Facades\Mail;

class RecoveryFirstStepController extends Controller
{
	protected $key;
    public function first_step(Request $request)
    {
    	if ($request->ajax()) {
    		if ($this->exists_email($request->email_recovery_password)){
    			if ($this->send_mail($request->email_recovery_password)) {
    				$this->change_token_from_user($request->email_recovery_password);
    				return ['success' => true];
    			}else{
    				return ['error' => 'No se pudo enviar el email de confirmación, reitentelo más tarde'];
    			}
    		}else{
	    		return ['error' => 'Correo incorrecto'];
    		}
    	}
    	return back();
    }

    public function exists_email($email){
    	if (Usuarios::select('email')->where('email', $email)->first()) {
    		return true;
    	}else{
    		return false;
    	}
    }

    public function send_mail($email){
    	$this->key = 'runs-'.str_shuffle('abcd12345');
		$form = new FirstStepRecovery($this->key);
		Mail::to($email)->send($form);
		return true; 
    }

    public function change_token_from_user($email){
    	Usuarios::where('email', $email)->update([
    		'token' => $this->key,
    	]);
    }
}
