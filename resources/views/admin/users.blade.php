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
                <th>Estado</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th>Email</th>
              </tr>
              </thead>
              <tbody>
                <form>
                <input type="hidden" value="{{ csrf_token() }}" id="_token">
                <tr v-for="(user,i) in users">
                  <input type="hidden" :value="user.id">
                  <td>@{{user.perfil}}</td>
                  <td>@{{user.nombres ? user.nombres : 'Sin completar'}}</td>
                  <td v-if="user.activo == 1" class="text-success">Activo</td>
                  <td v-if="user.activo == 0" class="text-danger">Inactivo</td>
                  <td>@{{user.dni ? user.dni : 'Sin completar'}}</td>
                  <td>@{{user.telefono ? user.telefono : 'Sin completar'}}</td>
                  <td>@{{user.email ? user.email : 'Sin completar'}}</td>
                  <td>
                    @if(in_array('editar_usuario', $permission))
                      @include('admin.components.edit_user')
                    @endif
                    @if(in_array('eliminar_usuario', $permission))
                      @include('admin.components.delete_user')
                    @endif
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
<script src="{{ asset('storage/styles_S/js/runs/admin-users/get_users.js') }}"></script>
<script src="{{ asset('storage/styles_S/js/runs/admin-users/add_user.js') }}"></script>
@endsection