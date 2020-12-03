@extends('admin.layout')
@section('title', 'Empresas')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
    	<div class="col-12">
        <div class="card" id="companys_table" >
          <div class="card-header">
          	<div class="row">
	            <h3 class="card-title col text-left"><strong>Datos</strong> de las <strong>empresas</strong></h3>
	            @if(in_array('crear_empresa', $permission))
                @include('admin.components.add_company')
	            @endif
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
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
                <input type="hidden" value="{{ csrf_token() }}" id="token_company">
                <tr v-for="(company, i) in companys">
                	<td>@{{company.nombre}}</td>
                	<td>@{{company.cuit}}</td>
                	<td>@{{company.direccion}}</td>
                	<td>
                		<a href="#" data-toggle="modal" :data-target="'#localidad_modal'+i">@{{company.localidad}}</a>
										<!-- Modal -->
										<div class="modal fade" :id="'localidad_modal'+i" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">@{{company.nombre}}</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	<p><strong>Direccion:</strong> <code>@{{company.direccion}}</code></p>
										      	<p><strong>Localidad:</strong> <code>@{{company.localidad}}</code></p>
										      	<p><strong>Partido:</strong> <code>@{{company.partido}}</code></p>
										      	<p><strong>Provincia:</strong> <code>@{{company.provincia}}</code></p>
										      	<p><strong>Pais:</strong> <code>@{{company.pais}}</code></p>
										      	<hr>
										      	<p><strong>Nombre:</strong> <code>@{{company.nombre}}</code></p>
										      	<p><strong>Cuit:</strong> <code>@{{company.cuit}}</code></p>
										      	<p><strong>Observaciones:</strong> <code>@{{company.observaciones}}</code></p>
										      	<p><strong>telefono:</strong> <code>@{{company.telefono}}</code></p>
										      	<p><strong>email:</strong> <code>@{{company.email}}</code></p>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
										      </div>
										    </div>
										  </div>
										</div>
									</td>
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