<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Usuarios_perfiles;
use App\Models\Usuarios_perfiles_por_usuarios;

class ModifyUserController extends Controller
{
    public function ModifyUserController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
        if (!$this->exists_email($request)) {
            return ['error' => 'El email ya exíste'];
        }
    	$this->modify_user($request);
    	$users = $this->get_all_users();
    	return ['success' => 'El usuario se modificó con éxito', 'users' => $users];
    }

    public function exists_email($request)
    {
        if ($first_email = Usuarios::select('email')->where('email', $request->email)->value('email')) {
            $second_email= Usuarios::select('email')->where('email', $request->email)->orderBy('id', 'desc')->value('email');
            if ($first_email == $second_email) {
                //pass
            }else{
                return false;
            }
        }
        return true;
    }

    public function modify_user($request)
    {
    	Usuarios::where('id', $request->id)->update([
    		'nombres' => $request->names ? $request->names : null,
    		'apellidos' => $request->last_names ? $request->last_names : null,
    		'dni' => $request->dni ? $request->dni : null,
    		'telefono' => $request->phone ? $request->phone : null,
    		'email' => $request->email ? $request->email : null,
    		'activo' => $request->status,
    	]);
    	Usuarios_perfiles_por_usuarios::where('usuario_id', $request->id)->update([
    		'perfiles_id' => $request->profile_id,
    	]);
    }

    public function get_all_users()
    {
    	session_start();

    	$perfiles_id = Usuarios_perfiles::select('perfil')->pluck('perfil');
    	$users =  Usuarios::select('id', 'nombres', 'apellidos', 'dni', 'telefono', 'email', 'activo')->get();
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
            $data['activo'] = $user->activo;
    		$data_general[] = $data;
    	}
		return $data_general;
    }
}
