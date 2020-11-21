<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Usuarios_perfiles;
use App\Models\Usuarios_perfiles_por_usuarios;

class GetUsersAdminController extends Controller
{
    public function get_users_admin_controller(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	return ['users' => $this->get_all_users()];
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