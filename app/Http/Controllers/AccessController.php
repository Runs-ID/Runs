<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function index()
    {
    	if ($this->verify_logged()) {
    		return redirect()->route('admin.index');
    	}else{
    		return view('access');
    	}
    }

    public function verify_logged()
    {
    	session_start();
    	if (isset($_SESSION['id'])) {
    		return true;
    	}else{
    		return false;
    	}
    }
}
