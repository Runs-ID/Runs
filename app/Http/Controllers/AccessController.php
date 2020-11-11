<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function index()
    {
    	session_start();
    	if (isset($_SESSION['id'])) {
    		return redirect()->route('admin.index');
    	}else{
    		return view('access');
    	}
    }
}
