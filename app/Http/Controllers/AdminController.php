<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AdminController extends Controller
{
    public function index()
    {
    	session_start();
    	if (isset($_SESSION['id'])) {
            $data = Usuario::select('nombres', 'apellidos', 'dni', 'telefono', 'email', 'usuario')->where('id', $_SESSION['id'])->first();
            $verify = Usuario::select('nombres', 'apellidos', 'dni', 'telefono', 'email', 'usuario')->where('id', $_SESSION['id'])->first()->toArray();
    		return view('admin.home', compact('data', 'verify'));
    	}else{
    		return redirect()->route('access.index');
    	}
    }
    public function logout()
    {
    	session_start();
    	session_destroy();
    	return redirect()->route('access.index');
    }
}
