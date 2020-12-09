<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas_referentes;
use App\Models\Empresas;
use App\Models\Paises;
use App\Models\Provincias;
use App\Models\Partidos;
use App\Models\Localidades;

class GetReferenceCompanysController extends Controller
{
    public function GetReferenceCompanysController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	return ['references_companys' => $this->get_reference_companys(), 'all_companys' => $this->all_companys()];
    }

    public function get_reference_companys()
    {
        $references_companys_bd = Empresas_referentes::with([
            'empresa:id,localidad_id,nombre,cuit,direccion,observaciones,telefono,email,activo',
            'empresa.localidad:id,localidad,partido_id',
            'empresa.localidad.partido:id,partido,provincia_id',
            'empresa.localidad.partido.provincia:id,provincia,pais_id',
            'empresa.localidad.partido.provincia.pais:id,pais',
        ])->get();
        if (!$references_companys_bd->isEmpty()) {
            return $references_companys_bd;
        }else{
            return null;
        }
    }

    public function all_companys()
    {
    	return Empresas::select('id', 'nombre')->get();
    }
}
