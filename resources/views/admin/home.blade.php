@extends('admin.layout')
@section('title', 'Inicio')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    @section('module', 'Inicio')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('storage/img/example.jpg') }}"
                       alt="[usr img]">
                </div>

                <h3 class="profile-username text-center">[Nombre apellido]</h3>

                <p class="text-muted text-center">[Usuario perfil]</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Empleados</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Clientes</b> <a class="float-right">543</a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><small>visitas de </small><a href="#">[Nombre del sitio]</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <strong class="col text-left">Hoy</strong>
                  <span class="col text-right text-success">+60</span>
                </div>

                <hr>
                
                <div class="row">
                  <strong class="col text-left">Esta semana</strong>
                  <span class="col text-right text-success">+340</span>
                </div>

                <hr>

                <div class="row">
                  <strong class="col text-left">Este mes</strong>
                  <span class="col text-right text-danger">-480</span>
                </div>

                <hr>

                <div class="row">
                  <strong class="col text-left">Este Año</strong>
                  <span class="col text-right text-success">+9,646</span>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#notification" data-toggle="tab">Notificaciones</a></li>
                  <li class="nav-item"><a class="nav-link" href="#plus" data-toggle="tab">Mejorar</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Configuración</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="notification">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{ asset('storage/img/example.jpg') }}" alt="user image">
                        <span class="username">
                          <a href="#">Mauro Adriel Soriano</a>
                        </span>
                        <span class="description">Runs - hoy 7:30 PM</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="plus">
                    <!-- The plus -->
                    <div class="row">
                      <!-- plus -->
                      <h5 class="mb-2 col-lg-12 text-muted">Vos poseés estas mejoras</h5>
                      <div class="col-sm-12 col-lg-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-secondary"><i class="fas fa-check"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">Control de visitas en mi sitio!</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-secondary"><i class="fas fa-check"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">Control de clientes y empleados!</span>
                          </div>
                        </div>
                      </div>

                    </div>

                    <hr>

                    <div class="row">

                      <h5 class="mb-2 col-lg-12 text-primary">Añadir más mejoras para tu empresa!</h5>
                      <div class="col-sm-12 col-lg-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-primary"><i class="fas fa-plus"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">[algún beneficio]</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-primary"><i class="fas fa-plus"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">[algún beneficio]</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-primary"><i class="fas fa-plus"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">[algún beneficio]</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <div class="info-box">
                          <span class="info-box-icon bg-primary"><i class="fas fa-plus"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">[algún beneficio]</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" placeholder="Apellido">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">DNI</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="DNI">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Teléfono">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Guardar cambios</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection