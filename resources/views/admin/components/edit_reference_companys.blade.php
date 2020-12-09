<button class="btn btn-warning text-white" data-toggle="modal" @click="set_values(i,reference.id, reference.empresa.nombre, reference.empresa.id, reference.nombres, reference.apellidos, reference.telefono, reference.email, reference.horario_contacto,reference.observaciones, reference.activo)" :data-target="'#edit_reference_company_modal'+i"><i class="fas fa-pencil"></i></button>
<!-- read_reference_companys_modal -->
<div class="modal fade" :id="'edit_reference_company_modal'+i" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
      	<h3 class="text-center col-sm-12">datos de la empresa</h3>
      	<hr class="col-sm-12">
			  <label>Empresa</label>
			  <select class="form-control">
			  	<option :id="'company_selected'+i" class="form-control"  selected="selected"></option>
				  <option v-for="company in all_companys" :value="company.id">@{{company.nombre}}</option>
			  </select>
        <br>
        <hr class="col-sm-12">
        <h3 class="text-center col-sm-12">datos del referente</h3>
        <hr class="col-sm-12">
			  <label>Nombres</label>
			  <input type="text" class="form-control" placeholder="Nombres" v-model="edit_names">
			  <label>Apellidos</label>
			  <input type="text" class="form-control" placeholder="Apellidos" v-model="edit_last_names">
			  <label>Teléfono</label>
			  <input type="text" class="form-control" placeholder="Teléfono" v-model="edit_phone">
			  <label>Email</label>
			  <input type="text" class="form-control" placeholder="Email" v-model="edit_email">
			  <label>Horario contacto</label>
			  <input type="text" class="form-control" placeholder="Horario contacto" v-model="edit_contact_time">
			  <label>Observaciones</label>
			  <textarea class="form-control" v-model="edit_observations" placeholder="Observaciones">@{{reference.observaciones}}</textarea>
			  <label>Activo</label>
			  <button class="form-control btn btn-success" @click="edit_active = !edit_active;" v-if="edit_active">Activo</button>
			  <button class="form-control btn btn-danger" @click="edit_active = !edit_active;" v-if="!edit_active">Inactivo</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning text-white" @click="modify('{{ route('admin.ModifyReferenceCompanyController') }}')" data-dismiss="modal">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>