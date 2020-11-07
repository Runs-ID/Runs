<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RecoverPasswordMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Usuario;

class FindUserController extends Controller
{
	/*
		1- verifico que el usuario exista
		2- genero un valor aleatorio
		3- envio este valor aleatorio a App\Mail\RecoverPasswordMailable
		4- RecoverPasswordMailable le envia al hotmail del usuario el valor aleatorio
		5- modifico el mail de la tabla usuario con el valor aleatorio
	*/
    public function index(Request $request)
    {
    	if ($request->ajax()) {
    		if ($data = Usuario::where('usuario', $request->user)->first()) {
    			$token_generate = 'runs-'.str_shuffle('1bc4e59hi');
		    	$form = new RecoverPasswordMailable(compact('token_generate'));
		    	Mail::to($data->email)->send($form);
	    		Usuario::where('usuario', $request->user)
	    		->update([
		   			'token' => $token_generate,
	    		]);
    			return ['success' => 'true'];
    		}else{
    			return ['error' => 'Usuario incorrecto'];
    		}
    	}
    	return back();
    }
}
