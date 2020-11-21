@extends('admin.layout')
@section('title', 'Usuarios')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
    	<div class="col-12">
        <div class="card">
          <div class="card-header">
          	<div class="row">
	            <h3 class="card-title col text-left"><strong>Datos</strong> de los <strong>usuarios</strong></h3>
	            @if(in_array('crear_usuario', $permission))
                @include('admin.components.add_user')
	            @endif
            </div>
          </div>
          <div class="card-body">
            <table id="users_table" class="table table-bordered table-hover">
              <input type="hidden" value="{{ route('admin.get_users_admin_controller') }}" id="url_get_users">
              <thead>
              <tr>
                <th>Perfil</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th>Email</th>
              </tr>
              </thead>
              <tbody>
              <tr v-for="user in users">
                <input type="hidden" :value="user.id">
                <td>@{{user.perfil}}</td>
                <td>@{{user.nombres ? user.nombres : 'Sin completar'}}</td>
                <td>@{{user.apellidos ? user.apellidos : 'Sin completar'}}</td>
                <td>@{{user.dni ? user.dni : 'Sin completar'}}</td>
                <td>@{{user.telefono ? user.telefono : 'Sin completar'}}</td>
                <td>@{{user.email ? user.email : 'Sin completar'}}</td>
                <td>
                  @if(in_array('editar_usuario', $permission))
                  <button class="btn btn-sm btn-warning text-white"><i class="fas fa-pencil"></i></button>
                  @endif
                  @if(in_array('eliminar_usuario', $permission))
                  <button class="btn btn-sm btn-danger"><i class="fas fa-minus"></i></button>
                  @endif
                </td>
              </tr>
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
<script src="{{ asset('storage/styles_S/js/runs/admin-users/get_users.js') }}"></script>
<script src="{{ asset('storage/styles_S/js/runs/admin-users/add_user.js') }}"></script>
@endsection