<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class DataUserHomeAdmin extends Controller
{
    public function data_user_home_Admin(Request $request)
    {
		session_start();
		if (!$this->verify_auth()) {
			return redirect()->route('access.index');
		}
		if (!$request->ajax()) {
			return back();
		}
		$data_user = $this->get_data_user();
		return compact('data_user');
    }

	public function verify_auth()
	{
		if (isset($_SESSION['id'])) {
			return true;
		}else{
			return false;
		}
	}

	public function get_data_user()
	{
		return Usuarios::select('nombres', 'apellidos', 'dni', 'telefono', 'email')->where('id', $_SESSION['id'])->first();
	}
}
