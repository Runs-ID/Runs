<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class RecoverySecondStepController extends Controller
{
    public function second_step(Request $request)
    {
    	if ($request->ajax()) {
    		if ($this->token_email_match($request)) {
    			return ['success' => true];
    		}else{
    			return ['error' => 'token incorrecto'];
    		}
    	}

    	return back(); 
    }

    public function token_email_match($request)
    {
        $email = $request->email_recovery_password;
        $token = $request->token_recovery_password;
    	if (Usuarios::where([['email', '=', $email], ['token', '=', $token]])->first()) {
    		return true;
    	}else{
    		return false;
    	}
    }
}
