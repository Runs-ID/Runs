<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\Localidades;
use App\Models\Partidos;
use App\Models\Provincias;
use App\Models\Paises;

class GetCompanysAdminController extends Controller
{
    public function GetCompanysAdminController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	return ['companys' => $this->get_all_companys()];    	
    }

    public function get_all_companys()
    {
    	return Empresas::all();
    }
}