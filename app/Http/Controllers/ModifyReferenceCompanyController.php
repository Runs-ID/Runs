<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMpresas;
use App\Models\Empresas_referentes;

class ModifyReferenceCompanyController extends Controller
{
    public function ModifyReferenceCompanyController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
        if (!$this->exists_email($request)) {
            return ['error' => 'El email ya exíste'];
        }
    	$this->modify_reference_company($request);
    	return ['success' => true, 'references_companys' => $this->get_reference_companys(), 'all_companys' => $this->all_companys()];
    }

    public function exists_email($request)
    {
    	if ($id_first = Empresas_referentes::select('id')->where('email', $request->email)->value('id')) {
    		$id_second = Empresas_referentes::select('id')->where('email', $request->email)->orderBy('id','desc')->value('id');
    		if ($id_first == $request->id && $id_first == $id_second) {
    			//pass
    		}else{
    			return false;
    		}
    	}
    	return true;
    }

    public function modify_reference_company($request)
    {
    	Empresas_referentes::where('id', $request->id)->update([
    		'empresa_id' => $request->id_company,
    		'nombres' => $request->names,
    		'apellidos' => $request->last_names,
    		'telefono' => $request->phone,
    		'email' => $request->email,
    		'horario_contacto' => $request->contact_time,
    		'observaciones' => $request->observations,
    		'activo' => $request->status,
    	]);
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
