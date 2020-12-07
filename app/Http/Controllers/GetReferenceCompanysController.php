<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas_referentes;
use App\Models\Empresas;

class GetReferenceCompanysController extends Controller
{
    public function GetReferenceCompanysController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	return ['references_companys' => $this->get_reference_companys()];
    }

    public function get_reference_companys()
    {
    	$references_companys_bd = Empresas_referentes::all();
    	foreach ($references_companys_bd as $row) {
    		$fill['empresa_id'] = $row['empresa_id'];
    		$fill['empresa'] = Empresas::select('nombre')->where('id', $fill['empresa_id'])->value('nombre');
    		$fill['nombres'] = $row['nombres'];
    		$fill['apellidos'] = $row['apellidos'];
    		$fill['telefono'] = $row['telefono'];
    		$fill['email'] = $row['email'];
    		$fill['horario_contacto'] = $row['horario_contacto'];
    		$fill['observaciones'] = $row['observaciones'];
    		$fill['activo'] = $row['activo'];
    		$references_companys_return[] = $fill;
    	}
    	return $references_companys_return;
    }
}
