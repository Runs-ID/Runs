<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paises;
use App\Models\Provincias;
use App\Models\Partidos;
use App\Models\Localidades;
use App\Models\Empresas;

class AddNewCompanyController extends Controller
{
    #-------------------------#-------------------------#-------------------------#-------------------------
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
    #-------------------------#-------------------------#-------------------------#-------------------------
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
    #-------------------------#-------------------------#-------------------------#-------------------------
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
    #-------------------------#-------------------------#-------------------------#-------------------------
    #ACÁ GUARDO LA NUEVA COMPANIA
    #TRAIGO TODAS LAS COMPANIAS
    public function AddNewCompanyController(Request $request)
    {
        if (!$request->ajax()) {
            return back();
        }
        $this->add_new_company_now($request);
        $all_companys = $this->get_all_companys();
        return ['success' => $all_companys];


    }

    public function add_new_company_now($request)
    {
        $id_pais = $this->create_pais($request->pais);
        $id_provincia = $this->create_provincia($request->provincia, $id_pais);
        $id_partido = $this->create_partido($request->partido, $id_provincia);
        $id_localidad = $this->create_localidad($request->localidad, $id_partido);
        $company = $this->create_company($request, $id_localidad);
    }

    public function create_pais($pais)
    {
        if ($id = Paises::select('id')->where('pais', $pais)->value('id')) {
            return $id;
        }else{
            return Paises::create([
                'pais' => $pais,
            ])->id;
        }
    }

    public function create_provincia($provincia, $id_pais)
    {
        if ($id = Provincias::select('id')->where('provincia', $provincia)->where('pais_id', $id_pais)->value('id')) {
            return $id;
        }else{
            return Provincias::create([
                'provincia' => $provincia,
                'pais_id' => $id_pais,
            ])->id;
        }
    }

    public function create_partido($partido, $id_provincia)
    {
        if ($id = Partidos::select('id')->where('partido', $partido)->where('provincia_id', $id_provincia)->value('id')) {
            return $id;
        }else{
            return Partidos::create([
                'partido' => $partido,
                'provincia_id' => $id_provincia,
            ])->id;
        }
    }

    public function create_localidad($localidad, $id_partido)
    {
        if ($id = Localidades::select('id')->where('localidad', $localidad)->where('partido_id', $id_partido)->value('id')) {
            return $id;
        }else{
            return Localidades::create([
                'localidad' => $localidad,
                'partido_id' => $id_partido,
            ])->id;
        }
    }

    public function create_company($request, $id_localidad)
    {
        Empresas::create([
            'localidad_id' => $id_localidad,
            'nombre' => $request->name,
            'cuit' => $request->cuit,
            'direccion' => $request->address,
            'observaciones' => $request->observations,
            'telefono' => $request->phone,
            'email' => $request->email,
        ]);
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
