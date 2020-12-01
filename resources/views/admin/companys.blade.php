@extends('admin.layout')
@section('title', 'Empresas')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
    	<div class="col-12">
        <div class="card">
          <div class="card-header">
          	<div class="row">
	            <h3 class="card-title col text-left"><strong>Datos</strong> de las <strong>empresas</strong></h3>
	            @if(in_array('crear_empresa', $permission))
                @include('admin.components.add_user')
	            @endif
            </div>
          </div>
          <div class="card-body">
            <table id="companys_table" class="table table-bordered table-hover">
              <thead>
              	<input type="hidden" value="{{ route('admin.GetCompanysAdminController') }}" id="companys_route">
              <tr>
                <th>Nombre</th>
                <th>Cuit</th>
                <th>Direccion</th>
                <th>Localidad</th>
                <th>Teléfono</th>
                <th>Email</th>
              </tr>
              </thead>
              <tbody>
                <form>
                <input type="hidden" value="{{ csrf_token() }}" id="_token">
                <tr v-for="company in companys">
                	<td>@{{company.nombre}}</td>
                	<td>@{{company.cuit}}</td>
                	<td>@{{company.direccion}}</td>
                	<td>falta acá</td>
                	<td>@{{company.telefono}}</td>
                	<td>@{{company.email}}</td>
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
<script src="{{ asset('storage/styles_S/js/runs/admin-companys/companys.js') }}"></script>
@endsection