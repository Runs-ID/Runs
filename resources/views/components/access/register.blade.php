									<div class="col-md-6" id="register_form">
										<div class="text-center">
											<div class="spinner-border" v-if="loading == true" style="width: 6rem; height: 6rem; margin-top:150px;margin-bottom: 150px" role="status">
											  <span class="sr-only">Loading...</span>
											</div>
										</div>
										<div id="fff" class="d-none featured-box featured-box-primary text-left mt-5">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Registrarme</h4>
												<form>
													<input type="hidden" value=" {{ csrf_token() }}" id="register_token">
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">Email <small class="text-danger" v-if="email_error">@{{email_error}}</small></label>
															<input type="text" v-model="email" class="form-control form-control-lg" required>
														</div>
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">Token <small class="text-danger" v-if="token_error">@{{token_error}}</small></label>
															<input type="text" v-model="token" class="form-control form-control-lg" required>
														</div>
														<div class="form-group col-sm-12">
															<label class="font-weight-bold text-dark text-2">Usuario <small class="text-danger" v-if="user_error">@{{user_error}}</small></label>
															<input type="text" v-model="user" class="form-control form-control-lg" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Contraseña <small class="text-danger" v-if="password_error">@{{password_error}}</small></label>
															<input type="password" v-model="password" class="form-control form-control-lg" required>
														</div>
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark text-2">Repetir contraseña <small class="text-danger" v-if="re_password_error">@{{re_password_error}}</small></label>
															<input type="password" v-model="re_password" class="form-control form-control-lg" required>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<p class="text-muted">acá un recaptcha</p>
														</div>
														<div class="form-group col-lg-6">
															<button @click="register_now('{{ route('access.register') }}')" v-if="button_loading == false" class="btn btn-primary btn-modern float-right" type="button">Registrarme</button>
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
									</div>