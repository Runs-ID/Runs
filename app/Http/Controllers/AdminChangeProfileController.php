<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AdminChangeProfileController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->ajax()) {
    		session_start();
    		$request->validate([
    			'name' => 'required|min:3|max:70',
    			'last_name' => 'required|min:4|max:70',
    			'dni' => 'required|min:4|max:16',
    			'phone' => 'required|min:4|max:15',
    			'email' => 'required|min:4|max:100',
    		]);
    		if (isset($_SESSION['id'])) {
    			Usuario::whereId($_SESSION['id'])->update([
    				'nombres' => $request->name,
    				'apellidos' => $request->last_name,
    				'dni' => $request->dni,
    				'telefono' => $request->phone,
    				'email' => $request->email,
    			]);
    			return ['success' => true];
    		}else{
    			return ['error' => 'Su sesión caducó, reinicie la página'];
    		}
    	}
    	return back();
    }
}
