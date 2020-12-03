<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincias;
use App\Models\Partidos;
use App\Models\Localidades;

class AddNewCompanyController extends Controller
{
	#PAISES TRAYENDO PROVINCIAS
    public function PaisController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	$all_provincias = $this->get_all_provincias($request);
    	return $all_provincias ? ['success' => $all_provincias] : ['error' => 'Aún no hay provincias para este país'];
    }

    public function get_all_provincias($request)
    {
    	$all_provincias = Provincias::select('id', 'provincia')->where('pais_id', $request->pais)->get();
    	if (!$all_provincias->isEmpty()) {
    		return $all_provincias;
    	}else{
    		return false;
    	}
    }
    #PROVINCIAS TRAYENDO PARTIDOS
    public function ProvinciaController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	$all_partidos = $this->get_all_partidos($request);
    	return ['success' => $all_partidos];
    }

    public function get_all_partidos($request)
    {
    	$all_partidos = Partidos::select('id', 'partido')->where('provincia_id', $request->provincia)->get();
    	if (!$all_partidos->isEmpty()) {
    		return $all_partidos;
    	}else{
    		return false;
    	}
    }
    #PARTIDOS TRAYENDO LOCALIDADES
    public function PartidoController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	$all_localidades = $this->get_all_localidades($request);
    	return ['success' => $all_localidades];
    }

    public function get_all_localidades($request)
    {
    	$all_localidades = Localidades::select('id', 'localidad')->where('partido_id', $request->partido)->get();
    	if (!$all_localidades->isEmpty()) {
    		return $all_localidades;
    	}else{
    		return false;
    	}
    }

}
