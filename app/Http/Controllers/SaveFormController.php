<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class SaveFormController extends Controller
{
	public function save_form(Request $request)
	{
	    if (!$request->ajax()) {
	    	return back();
	    }
	    $this->save_form_now($request);
	    $data_user = $this->get_data_user();
	    return ['success' => 'Formulario cambiado con éxito', 'data_user' => $data_user];
	}

	public function save_form_now($request)
	{
		session_start();
		$data_user = Usuarios::where('id', $_SESSION['id'])->first();
		Usuarios::where('id', $_SESSION['id'])->update([
			'nombres' => $request->name ? $request->name : $data_user->nombres,
			'apellidos' => $request->last_name ? $request->last_name : $data_user->apellidos,
			'dni' => $request->dni ? $request->dni : $data_user->dni,
			'telefono' => $request->phone ? $request->phone : $data_user->telefono,
			'email' => $request->email ? $request->email : $data_user->email,
		]);
	}

	public function get_data_user()
	{
		return Usuarios::select('nombres', 'apellidos', 'dni', 'telefono', 'email')->where('id', $_SESSION['id'])->first();
	}
}
