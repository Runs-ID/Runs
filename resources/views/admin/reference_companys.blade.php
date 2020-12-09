@extends('admin.layout')
@section('title', 'Empresas referentes')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
    	<div class="col-12">
        <div class="card" id="reference_companys_id">
          <div class="card-header">
          	<div class="row">
	            <h3 class="card-title col text-left"><strong>Datos</strong> de los <strong> referentes de las empresas</strong></h3>
	            @if(in_array('crear_empresa_referente', $permission))
                @include('admin.components.add_reference_companys')
	            @endif
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
              	<input type="hidden" value="{{ route('admin.GetReferenceCompanysController') }}" id="reference_companys_route">
              <tr>
                <th>Empresa</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Activo</th>
              </tr>
              </thead>
              <tbody>
                <form>
                <input type="hidden" value="{{ csrf_token() }}" id="token_reference_companys">
                <tr v-for="(reference, i) in all_reference_companys">
                  <td>@{{reference.empresa.nombre}}</td>
                  <td>@{{reference.nombres}}</td>
                  <td>@{{reference.apellidos}}</td>
                  <td>@{{reference.telefono}}</td>
                  <td class="text-truncate">@{{reference.email}}</td>
                  <td v-if="reference.activo == 1" class="text-success">Activo</td>
                  <td v-if="reference.activo == 0" class="text-danger">Inactivo</td>
                  <td>
                    @if(in_array('leer_empresa_referente', $permission))
                      @include('admin.components.read_reference_companys')
                    @endif
                    @if(in_array('editar_empresa_referente', $permission))
                      @include('admin.components.edit_reference_companys')
                    @endif
                    <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                  </td>
                </tr>
                </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
<script src="{{ asset('storage/styles_S/js/runs/admin-reference-companys/referece_companys.js') }}"></script>
@endsection