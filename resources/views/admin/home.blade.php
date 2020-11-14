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
                <h3 class="profile-username text-center">[Nombre Apellido]</h3>
                <p class="text-muted text-center">[Perfil]</p>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="post">
                A FULL EL CALL
                      <!--content-->
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nombres</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Nombres">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Apellidos</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Apellidos">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">DNI</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="DNI">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Teléfono</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Teléfono">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">E-mail</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="E-mail">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="button" class="btn btn-danger">Guardar cambios</button>
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