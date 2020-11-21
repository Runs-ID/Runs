<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Usuarios_perfiles;
use App\Models\Usuarios_perfiles_por_usuarios;

class AddNewUserController extends Controller
{
    public function AddNewUserController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	$this->save_new_user($request);
    	$this->save_profile_user($request);
    	$users = $this->get_all_users();
    	return ['success' => 'El usuario se creó con éxito', 'users' => $users];
    }

    public function save_new_user($request)
    {
    	Usuarios::create([
    		'nombres' => null,
    		'apellidos' => null,
    		'dni' => null,
    		'telefono' => null,
    		'email' => null,
    		'token' => $request->token,
    	]);
    }

    public function save_profile_user($request)
    {
    	//get-id
    	$id = Usuarios::select('id')->where('token', $request->token)->value('id');
    	//create
    	Usuarios_perfiles_por_usuarios::create([
    		'usuario_id' => $id,
    		'perfiles_id' => $request->profile,
    	]);
    }

    public function get_all_users()
    {
    	session_start();

    	$perfiles_id = Usuarios_perfiles::select('perfil')->pluck('perfil');
    	$users =  Usuarios::select('id', 'nombres', 'apellidos', 'dni', 'telefono', 'email')->get();
    	foreach ($users as $user) {
    		$data['id'] = $user->id;
    		$data['nombres'] = $user->nombres;
    		$data['apellidos'] = $user->apellidos;
    		$data['dni'] = $user->dni;
    		$data['telefono'] = $user->telefono;
    		$data['email'] = $user->email;
    		$data['perfil'] = Usuarios_perfiles::select()
    						->where('id', Usuarios_perfiles_por_usuarios::select('perfiles_id')->where('usuario_id', $user->id)->value('perfiles_id'))
    						->value('perfil');
    		$data_general[] = $data;
    	}
		return $data_general;
    }
}
