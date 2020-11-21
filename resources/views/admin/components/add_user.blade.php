<div id="add_new_user">
	<button class="btn btn-success text-right" data-toggle="modal" data-target="#add_new_user_modal">
		<i class="fas fa-user"></i> Agregar nuevo usuario
	</button>
	<!-- add_new_user -->
	<div class="modal fade" id="add_new_user_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Crear nuevo usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
					<form>
						<input type="hidden" value="{{ csrf_token() }}" id="_token" name="_token">
					  <div class="form-group col-sm-12">
					    <label for="perfil_id">Perfil</label>
					    <select id="perfil_id" class="form-control" v-model="profile">
					    	<option value="0" selected="selected">Sin elegir</option>
					    	@foreach($all_profiles as $perfil)
					    	<option value="{{ $perfil->id }}">{{ $perfil->perfil }}</option>
					    	@endforeach
					    </select>
					  </div>
					  <div class="form-group col-sm-12">
					    <label for="token_id">Código <small v-if="token" class="text-success">El código se generó con éxito, copialo y envialo</small></label>
					    <input type="text" class="form-control" id="token_id" v-model="code" disabled="disabled">
					  </div>
					  <button type="button" id="button_generate_token" @click="generate_token" class="btn btn-success col-sm-12">generar código</button>
					</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" @click="cancel" data-dismiss="modal">Cancelar</button>
	        <button type="button" @click="add_new_user_now('{{ route('admin.AddNewUserController') }}')" class="btn btn-primary">Crear usuario</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>