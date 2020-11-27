									<div class="col-md-6" id="login_form">
										<div class="text-center">
											<div class="spinner-border" v-if="loading == true" style="width: 6rem; height: 6rem; margin-top:150px;margin-bottom: 150px" role="status">
											  <span class="sr-only">Loading...</span>
											</div>
										</div>
										<div id="ffff" class="d-none featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Iniciar sesión</h4>
												<form>
													<input type="hidden" value="{{ csrf_token() }}" id="_token">
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">Usuario <small class="text-danger" v-if="user_error">@{{user_error}}</small></label>
															<input type="text" v-model="user" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<a class="float-right" href="#recovery_password_modal" data-toggle="modal" data-target="#recovery_password_modal">(¿Olvidaste tu contraseña?)</a>
															<label class="font-weight-bold text-dark text-2">Contraseña <small class="text-danger" v-if="password_error">@{{password_error}}</small></label>
															<input type="password" v-model="password" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<p class="text-muted">acá un recaptcha</p>
														</div>
														<div class="form-group col-lg-6">
															<button @click="login_now('{{ route('access.login') }}')" v-if="button_loading == false" class="btn btn-primary btn-modern float-right" type="button">Ingresar</button>
															<!---->
															<button class="btn btn-primary btn-modern float-right" v-if="button_loading == true" type="button" disabled>
															  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
															  Espere...
															</button>
														</div>
													</div>
												</form>
											</div>
										</div>
										<div class="modal fade" id="recovery_password_modal" tabindex="-1" role="dialog" aria-labelledby="none" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title">Recuperar contraseña</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	<div v-if="first_step == true">
										        	<h4 class="text-center text-muted">Ingrese su <strong>correo electrónico</strong></h4>
										        	<p class="text-danger text-center" v-if="first_step_error">@{{first_step_error}}</p>
															<div class="form-group">
																<label class="font-weight-bold text-dark text-2">correo electrónico</label>
																<input type="text" v-model="email_recovery_password" class="form-control form-control-lg" placeholder="tu_correo@correo.com">
															</div>
										        </div>
										      	<div v-if="second_step == true">
										        	<h4 class="text-center text-muted">¡Bien! ahora vaya a su <strong>correo electrónico</strong>, copie el código y ponlo aquí</h4>
										        	<p class="text-danger text-center" v-if="first_step_error">@{{second_step_error}}</p>
															<div class="form-group">
																<label class="font-weight-bold text-dark text-2">código de verificación</label>
																<input type="text" v-model="token_recovery_password" class="form-control form-control-lg" placeholder="runs-codigo123">
															</div>
										        </div>
										      	<div v-if="third_step == true">
										        	<h4 class="text-center text-muted">¡Último paso! ingrese su <strong>nueva contraseña</strong></h4>
										        	<p class="text-danger text-center" v-if="first_step_error">@{{third_step_error}}</p>
															<div class="form-group">
																<label class="font-weight-bold text-dark text-2">Contraseña</label>
																<input type="password" v-model="password_recovery" class="form-control form-control-lg">
															</div>
															<div class="form-group">
																<label class="font-weight-bold text-dark text-2">Repetir contraseña</label>
																<input type="password" v-model="re_password_recovery" class="form-control form-control-lg">
															</div>
										        </div>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
										        <!---->
										        <button @click="first_step_function('{{ route('admin.first_step') }}')" v-if="button_recovery_password == false && first_step == true" type="button" class="btn btn-primary">Lísto!</button>
										        <!---->
										        <button @click="second_Step_function('{{ route('admin.second_step') }}')" v-if="button_recovery_password == false && second_step == true" type="button" class="btn btn-primary">Lísto!</button>
										        <!---->
										        <button @click="third_Step_function('{{ route('admin.third_step') }}')" v-if="button_recovery_password == false && third_step == true" type="button" class="btn btn-primary">Lísto!</button>
										        <!---->
														<button v-if="button_recovery_password == true" class="btn btn-primary" type="button" disabled>
														  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
														  Espere...
														</button>
										      </div>
										    </div>
										  </div>
										</div>
									</div>