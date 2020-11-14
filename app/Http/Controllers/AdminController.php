<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class AdminController extends Controller
{
	public function index()
	{
		session_start();
		if (!$this->verify_auth()) {
			#return redirect()->route('access.index');
			return $_SESSION['id'];
		}
			return $_SESSION['id'];
		$data_user = $this->get_data_user();
		$profile = $this->get_profile_user();
		return view('admin.home', compact('data_user', 'profile'));
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
		return Usuarios::find($_SESSION['id'])->first();
	}

	public function get_profile_user()
	{
		return Usuarios::find($_SESSION['id'])->sesion;
	}
}
