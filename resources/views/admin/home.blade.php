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
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nombres</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Nombres">
                          </div>
                          <!--DISABLED-->
                          <div class="col-sm-5">
                            <input disabled type="text" class="form-control" placeholder="Sin completar">
                          </div>
                          <!--/DISABLED-->
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Apellidos</label>
                          <div class="col-sm-5">
                            <input type="email" class="form-control" placeholder="Apellidos">
                          </div>
                          <!--DISABLED-->
                          <div class="col-sm-5">
                            <input disabled type="text" class="form-control" placeholder="Sin completar">
                          </div>
                          <!--/DISABLED-->
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">DNI</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="DNI">
                          </div>
                          <!--DISABLED-->
                          <div class="col-sm-5">
                            <input disabled type="text" class="form-control" placeholder="Sin completar">
                          </div>
                          <!--/DISABLED-->
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Teléfono</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Teléfono">
                          </div>
                          <!--DISABLED-->
                          <div class="col-sm-5">
                            <input disabled type="text" class="form-control" placeholder="Sin completar">
                          </div>
                          <!--/DISABLED-->
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">E-mail</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="E-mail">
                          </div>
                          <!--DISABLED-->
                          <div class="col-sm-5">
                            <input disabled type="text" class="form-control" placeholder="Sin completar">
                          </div>
                          <!--/DISABLED-->
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="button" class="btn btn-success" disabled>Guardar cambios</button>
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