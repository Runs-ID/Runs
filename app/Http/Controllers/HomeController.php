<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function store(Request $request)
    {
    	if ($request->ajax()) {
	    	$form = new ContactMailable($request->all());
            Mail::to('mauroasoriano22@gmail.com')->send($form);
            Mail::to('francoesoriano@gmail.com')->send($form);
            Mail::to('permucel@gmail.com')->send($form);
	    	$success = "true";
	    	return compact('success');
    	}
    	return back();
    }
}
