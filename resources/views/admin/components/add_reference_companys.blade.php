<div id="add_new_user">
	<button class="btn btn-success text-right" @click="reset_values" data-toggle="modal" data-target="#add_new_reference_company">
		<i class="fas fa-address-card"></i> Agregar nueva empresa
	</button>
	<!-- add_new_user -->
	<div class="modal fade" id="add_new_reference_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Crear referente de empresa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
				  <div class="form-group">
				    <label>Empresas</label>
				    <select id="select_company" class="form-control">
				    	<option value="0">Sin seleccionar</option>
				    	<option v-for="company in all_companys" :value="company.id">@{{company.nombre}}</option>
				    </select>
				    <hr>
					  <div class="form-group">
					    <label>Nombres</label>
					    <input type="text" class="form-control" v-model="names" placeholder="Nombres">
					  </div>
					  <div class="form-group">
					    <label>Apellidos</label>
					    <input type="text" class="form-control" v-model="last_names" placeholder="Apellidos">
					  </div>
					  <div class="form-group">
					    <label>Teléfono</label>
					    <input type="text" class="form-control" v-model="phone" placeholder="Teléfono">
					  </div>
					  <div class="form-group">
					    <label>Email</label>
					    <input type="text" class="form-control" v-model="mail" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label>Horario de contacto</label>
					    <textarea type="text" class="form-control" v-model="contact_time" placeholder="Horario de contacto"></textarea>
					  </div>
					  <div class="form-group">
					    <label>Observaciones</label>
					    <input type="text" class="form-control" v-model="observations" placeholder="Observaciones">
					  </div>
				  </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-primary" @click="add_reference_company_now('{{ route('admin.AddNewReferenceCompanyController') }}')">Crear empresa</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>