@extends('admin.layout')
@section('title', 'Inicio')
@section('content')
    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{ asset('storage/img/user.png') }}"
                   alt="User profile">
            </div>
            <h3 class="profile-username text-center">{{$data_user->nombres}} {{$data_user->apellidos}}</h3>
            <p class="text-muted text-center">{{$profile->perfil}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Perfíl</a></li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="profile">
                <div class="post">
                  <!--content-->
                  <form class="form-horizontal" id="form_profile">
                    <input type="hidden" value="{{ csrf_token() }}" id="_token">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="col-sm-12">
                            <small class="text-danger" style="position: absolute;top: 3px;right: 13px">
                              <i class="fas fa-exclamation-triangle" v-if="error_name" :title="error_name"></i>
                            </small>
                            <input type="text" class="form-control" placeholder="Nombres" @change="change_value_inputs" v-model="name">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <small class="text-danger" style="position: absolute;top: 3px;right: 13px">
                              <i class="fas fa-exclamation-triangle" v-if="error_last_name" :title="error_last_name"></i>
                            </small>
                            <input type="email" class="form-control" placeholder="Apellidos" @change="change_value_inputs" v-model="last_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <small class="text-danger" style="position: absolute;top: 3px;right: 13px">
                              <i class="fas fa-exclamation-triangle" v-if="error_dni" :title="error_dni"></i>
                            </small>
                            <input type="text" class="form-control" placeholder="DNI" @change="change_value_inputs" v-model="dni">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <small class="text-danger" style="position: absolute;top: 3px;right: 13px">
                              <i class="fas fa-exclamation-triangle" v-if="error_phone" :title="error_phone"></i>
                            </small>
                            <input type="text" class="form-control" placeholder="Teléfono" @change="change_value_inputs" v-model="phone">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <small class="text-danger" style="position: absolute;top: 3px;right: 13px">
                              <i class="fas fa-exclamation-triangle" v-if="error_email" :title="error_email"></i>
                            </small>
                            <input type="text" class="form-control" placeholder="E-mail" @change="change_value_inputs" v-model="email">
                          </div>
                        </div>
                      </div>
                      <!-- DISABLED -->
                      <div class="col-sm-6">
                        <input type="hidden" value="{{ route('admin.data_user_home_Admin') }}" id="data_set">
                        <div class="form-group" v-for="data in data_user">
                          <div class="col-sm-12">
                            <input disabled type="text" class="form-control" :value='data'>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="offset-sm-2 col-sm-10">
                        <button v-if="button_send == false" type="button" class="btn btn-success" id="button_bloqued" @click="save_form_profile('{{ route('admin.save_form') }}')" disabled>Guardar cambios</button>
                        <button v-if="button_send == true" class="btn btn-success" type="button" disabled>
                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                          Guardando cambios...
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
  <script src="{{ asset('storage/styles_S/js/runs/admin-inicio/form_profile.js') }}"></script>
@endsection