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

								<h3 class="profile-username text-center">{{ $data->nombres }} {{ $data->apellidos }}</h3>

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
									<li class="nav-item"><a class="nav-link" href="#projects" data-toggle="tab">Proyectos</a></li>
									@if(!in_array(null, $verify))
										<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Configuración</a></li>
										@else
										<li class="nav-item">
											<a class="nav-link" href="#settings" data-toggle="tab">Configuración
												<sup class="text-danger">
												<i class="fas fa-exclamation-triangle"></i>
												</sup>
											</a>
										</li>
									@endif
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
									<div class="tab-pane" id="projects">
										<!-- The projects -->
										<div class="row">
											<!-- projects -->
											<div class="card-body p-0">
												<table class="table table-striped projects">
														<thead>
																<tr>
																		<th style="width: 1%">
																				#
																		</th>
																		<th style="width: 20%">
																				Proyecto
																		</th>
																		<th>
																				Progreso
																		</th>
																		<th style="width: 8%" class="text-center">
																				Estado
																		</th>
																		<th style="width: 20%">
																		</th>
																</tr>
														</thead>
														<tbody>
																<tr>
																		<td>
																				# <input type="hidden" value="">
																		</td>
																		<td>
																				<a>
																						AdminLTE v3
																				</a>
																				<br/>
																				<small>
																						Created 01.01.2019
																				</small>
																		</td>
																		<td class="project_progress">
																				<div class="progress progress-sm">
																						<div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
																						</div>
																				</div>
																				<small>
																						57% Complete
																				</small>
																		</td>
																		<td class="project-state">
																				<span class="badge badge-success">Success</span>
																		</td>
																		<td class="project-actions text-right">
																				<a class="btn btn-primary btn-sm" href="#">
																						<i class="fas fa-folder">
																						</i>
																				</a>
																				<!--edit-->
																				<a data-target=".bd-example-modal-lg" data-toggle="modal" class="btn btn-info btn-sm" href="#">
																						<i class="fas fa-pencil-alt">
																						</i>
																				</a>
																				<!--modal-edit-->
																				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																					<div class="modal-dialog modal-lg">
																						<div class="modal-content">
																							<div class="modal-header">
																								<h5 class="modal-title" id="exampleModalLabel">Editar</h5>
																								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																									<span aria-hidden="true">&times;</span>
																								</button>
																							</div>
																							<div class="modal-body text-left">
																								<div class="row">
																									<!--general-->
																									<div class="row col-sm-12 col-md-6">
			        																			<div class="col-sm-12 col-md-12">
																						          <div class="card card-primary">
																						            <div class="card-header">
																						              <h3 class="card-title">General</h3>
																						              <div class="card-tools">
																						                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
																						                  <i class="fas fa-minus"></i>
																						                </button>
																						              </div>
																						            </div>
																						            <div class="card-body">
																						              <div class="form-group">
																						                <label for="inputName">Proyecto</label>
																						                <input type="text" id="inputName" class="form-control">
																						              </div>
																						              <div class="form-group">
																						                <label for="inputDescription">Descripción</label>
																						                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
																						              </div>
																						              <div class="form-group">
																						                <label for="inputStatus">Estado</label>
																						                <select id="inputStatus" class="form-control custom-select">
																						                  <option disabled>Selecciona uno</option>
																						                  <option>Olvidado</option>
																						                  <option>Cancelado</option>
																						                  <option selected>En marcha</option>
																						                </select>
																						              </div>
																						              <div class="form-group">
																						                <label for="inputClientCompany">Dueño de la empresa</label>
																						                <input type="text" id="inputClientCompany" class="form-control">
																						              </div>
																						            </div>
																						          </div>
																						        </div>
																					        </div>
																					        <!--price and time-->
																					        <div class="row col-sm-12 col-md-6">
																					        	<div class="col-sm-12">
																						          <div class="card card-secondary">
																						            <div class="card-header">
																						              <h3 class="card-title">Budget</h3>
																						              <div class="card-tools">
																						                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
																						                  <i class="fas fa-minus"></i>
																						                </button>
																						              </div>
																						            </div>
																						            <div class="card-body">
																						              <div class="form-group">
																						                <label for="inputEstimatedBudget">Precio acordado</label>
																						                <input type="number" id="inputEstimatedBudget" class="form-control" step="1">
																						              </div>
																						              <div class="form-group">
																						                <label for="inputEstimatedDuration">Duración</label>
																						                <input type="number" id="inputEstimatedDuration" class="form-control" step="0.1">
																						              </div>
																						            </div>
																						          </div>
																					        	</div>
																					        	<!--files-->
																					        	<div class="col-sm-12">
																											<div class="card card-info">
																						            <div class="card-header">
																						              <h3 class="card-title">Archivos</h3>

																						              <div class="card-tools">
																						                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
																						                  <i class="fas fa-minus"></i>
																						                </button>
																						              </div>
																						            </div>
																						            <div class="card-body p-0">
																						              <table class="table">
																						                <thead>
																						                  <tr>
																						                    <th>Nombre</th>
																						                    <th>File Size</th>
																						                    <th></th>
																						                  </tr>
																						                </thead>
																						                <tbody>

																						                  <tr>
																						                    <td>Functional-requirements.docx</td>
																						                    <td>49.8005 kb</td>
																						                    <td class="text-right py-0 align-middle">
																						                      <div class="btn-group btn-group-sm">
																						                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
																						                      </div>
																						                    </td>
																						                  <tr>
																						                    <td>UAT.pdf</td>
																						                    <td>28.4883 kb</td>
																						                    <td class="text-right py-0 align-middle">
																						                      <div class="btn-group btn-group-sm">
																						                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
																						                      </div>
																						                    </td>
																						                  <tr>

																						                </tbody>
																						              </table>
																						            </div>
																						            <!-- /.card-body -->
																						          </div>
																					        	</div>
																					        </div>
																				        </div>
																							</div>
																							<div class="modal-footer">
																								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																								<button type="button" class="btn btn-primary">Send message</button>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--/end-edit-->
																				<a class="btn btn-danger btn-sm" href="#">
																						<i class="fas fa-trash">
																						</i>
																				</a>
																		</td>
																</tr>
																<tr>
																		<td>
																				#
																		</td>
																		<td>
																				<a>
																						AdminLTE v3
																				</a>
																				<br/>
																				<small>
																						Created 01.01.2019
																				</small>
																		</td>
																		<td class="project_progress">
																				<div class="progress progress-sm">
																						<div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
																						</div>
																				</div>
																				<small>
																						77% Complete
																				</small>
																		</td>
																		<td class="project-state">
																				<span class="badge badge-success">Success</span>
																		</td>
																		<td class="project-actions text-right">
																				<a class="btn btn-primary btn-sm" href="#">
																						<i class="fas fa-folder">
																						</i>
																				</a>
																				<a class="btn btn-info btn-sm" href="#">
																						<i class="fas fa-pencil-alt">
																						</i>
																				</a>
																				<a class="btn btn-danger btn-sm" href="#">
																						<i class="fas fa-trash">
																						</i>
																				</a>
																		</td>
																</tr>
														</tbody>
												</table>
											</div>
										</div>

										<hr>

									</div>
									<!-- /.tab-pane -->

									<div class="tab-pane" id="settings">
										<form id="configure_profile" class="form-horizontal">
											<input type="hidden" value="{{ csrf_token() }}" id="_token" name="_token">
											<div class="form-group row">
												<label for="inputName" class="col-sm-2 col-form-label">Nombres</label>
												<div class="col-sm-8">
													<input type="text" minlength="3" v-model="name" maxlength="70" class="form-control" placeholder="{{ $data->nombres }}">
												</div>
												<small class="col-sm-2 text-danger" v-if="name_error">@{{name_error}}</small>
											</div>
											<div class="form-group row">
												<label for="inputEmail" class="col-sm-2 col-form-label">Apellidos</label>
												<div class="col-sm-8">
													<input type="text" minlength="3" v-model="last_name" maxlength="70" class="form-control" placeholder="{{ $data->apellidos }}">
												</div>
												<small class="col-sm-2 text-danger" v-if="last_name_error">@{{last_name_error}}</small>
											</div>
											<div class="form-group row">
												<label for="inputName2" class="col-sm-2 col-form-label">DNI</label>
												<div class="col-sm-8">
													<input type="text" minlength="3" v-model="dni" maxlength="16" class="form-control" placeholder="{{ $data->dni }}">
												</div>
												<small class="col-sm-2 text-danger" v-if="dni_error">@{{dni_error}}</small>
											</div>
											<div class="form-group row">
												<label for="inputName2" class="col-sm-2 col-form-label">Teléfono</label>
												<div class="col-sm-8">
													<input type="text" minlength="3" v-model="phone" maxlength="15" class="form-control" placeholder="{{ $data->telefono }}">
												</div>
												<small class="col-sm-2 text-danger" v-if="phone_error">@{{phone_error}}</small>
											</div>
											<div class="form-group row">
												<label for="inputName2" class="col-sm-2 col-form-label">Email</label>
												<div class="col-sm-8">
													<input type="email" minlength="3" v-model="email" maxlength="100" class="form-control" placeholder="{{ $data->email }}">
												</div>
												<small class="col-sm-2 text-danger" v-if="email_error">@{{email_error}}</small>
											</div>
											<div class="form-group row">
												<div class="offset-sm-2 col-sm-10">
													<button @click="save_change('{{ route('admin.change_profile') }}')" v-if="loading_button == false" type="button" class="btn btn-success">Guardar cambios</button>

													<button class="btn btn-success" v-if="loading_button == true" type="button" disabled>
													  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
													  Espere...
													</button>
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
@section('script')
	<script src="{{ asset('storage/styles_S/js/runs/admin/configure_profile.js') }}"></script>
@endsection