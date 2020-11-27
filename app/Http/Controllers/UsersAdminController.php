<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Usuarios_perfiles;
use App\Models\Usuarios_perfiles_por_usuarios;
use App\Models\Usuarios_modulos_por_perfiles;
use App\Models\Usuarios_modulos;

class UsersAdminController extends Controller
{
    public function index()
    {
		session_start();
		if (!$this->verify_auth()) {
			return redirect()->route('access.index');
		}
		$data_user = $this->get_data_user();
		$profile = $this->get_profile_user();
		$all_profiles = $this->get_all_profiles();
		$permission = $this->get_permission_user($profile);
		return view('admin.users', compact('data_user', 'all_profiles', 'profile', 'permission'));
    }

	public function verify_auth()
	{
		if (isset($_SESSION['id'])) {
			return true;
		}else{
			return false;
		}
	}

	public function get_all_profiles()
	{
		return Usuarios_perfiles::all();
	}

	public function get_data_user()
	{
		return Usuarios::find($_SESSION['id']);
	}

	public function get_profile_user()
	{
		$user_id = Usuarios_perfiles_por_usuarios::find($_SESSION['id']);
		return $user_id->perfil;
	}

	public function get_permission_user($perfil)
	{
		$modules_id = Usuarios_modulos_por_perfiles::select('modulos_id')->where('perfiles_id', $perfil->id)->pluck('modulos_id');
		foreach ($modules_id as $id) {
			$module_description[] = Usuarios_modulos::select('descripcion_modulo')->where('id', $id)->value('descripcion_modulo');
		}
		return $module_description;
	}
}
