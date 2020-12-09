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
    	$all_companys = $this->get_all_companys();
    	$all_paises = $this->get_all_paises();
    	return [
    		'companys' => $all_companys, 
    		'all_paises' => $all_paises, 
    	];
    }

    public function get_all_companys()
    {
    	$companys = Empresas::all();
    	foreach ($companys as $row) {
    		$companys_load['nombre'] = $row->nombre;
    		$companys_load['cuit'] = $row->cuit;
    		$companys_load['direccion'] = $row->direccion;
    		$companys_load['observaciones'] = $row->observaciones;
    		$companys_load['telefono'] = $row->telefono;
    		$companys_load['email'] = $row->email;
    		$companys_load['activo'] = $row->activo;

    		$localidad_bd = Localidades::select('id', 'partido_id', 'localidad')->where('id', $row->localidad_id)->first();
    		$companys_load['id_localidad'] = $localidad_bd->id;
    		$companys_load['localidad'] = $localidad_bd->localidad;

    		$partido_bd = Partidos::select('id', 'provincia_id', 'partido')->where('id', $localidad_bd->partido_id)->first();
    		$companys_load['id_partido'] = $partido_bd->id;
    		$companys_load['partido'] = $partido_bd->partido;
    		

    		$provincia_bd = Provincias::select('id', 'pais_id', 'provincia')->where('id', $partido_bd->provincia_id)->first();
    		$companys_load['id_provincia'] = $provincia_bd->id;
    		$companys_load['provincia'] = $provincia_bd->provincia;
    		

    		$pais_bd = Paises::select('id', 'pais')->where('id', $provincia_bd->pais_id)->first();
    		$companys_load['id_pais'] = $pais_bd->id;
    		$companys_load['pais'] = $pais_bd->pais;

    		$companys_return[] = $companys_load; 
    	}
    	return $companys_return;
    }

    public function get_all_paises()
    {
    	return Paises::select('id', 'pais')->get();
    }
}