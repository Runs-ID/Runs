<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\Empresas_referentes;

class AddNewReferenceCompanyController extends Controller
{
    public function AddNewReferenceCompanyController(Request $request)
    {
    	if (!$request->ajax()) {
    		return back();
    	}
    	if ($this->verify_exists_email($request->mail)) {
    		return ['error' => 'El email ya existe en la base de datos'];
    	}
    	$this->save_new_reference_company($request);
    	$get_reference_companys = $this->get_reference_companys();
    	$all_companys = $this->all_companys();
    	return [
	    	'success' => $request->nombre.' Se agregó con éxito', 
	    	'references_companys' => $this->get_reference_companys(), 
	    	'all_companys' => $this->all_companys()
	    ];
    }

    public function verify_exists_email($email)
    {
    	if (Empresas_referentes::where('email', $email)->first()) {
    		return true;
    	}
    }

    public function save_new_reference_company($request)
    {
    	Empresas_referentes::create([
    		'empresa_id' => $request->id_company,
    		'nombres' => $request->names,
    		'apellidos' => $request->last_names,
    		'telefono' => $request->phone,
    		'email' => $request->mail,
    		'horario_contacto' => $request->contact_time,
    		'observaciones' => $request->observations,
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
