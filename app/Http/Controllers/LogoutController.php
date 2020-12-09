<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function LogoutController()
    {
    	session_start();
    	session_destroy();
    	return redirect()->route('access.index');
    }
}
