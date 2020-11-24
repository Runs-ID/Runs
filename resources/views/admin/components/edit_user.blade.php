<button @click="set_values_edit(user.perfil, user.nombres, user.apellidos, user.dni, user.telefono, user.activo,  user.email)" class="btn btn-sm btn-warning text-white" data-toggle="modal" :data-target="'#edit_user_modal'+i"><i class="fas fa-pencil"></i></button>
<!-- edit user -->
<div class="modal fade" :id="'edit_user_modal'+i" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Perfil</label>
              <select v-model="edit_profile"  class="form-control">
                  @foreach($all_profiles as $perfil)
                  <option value="{{ $perfil->id }}">{{ $perfil->perfil }}</option>
                  @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nombres</label>
              <input type="text" class="form-control" v-model="edit_names">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Apellidos</label>
              <input type="text" class="form-control" v-model="edit_last_names">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>DNI</label>
              <input type="text" class="form-control" v-model="edit_dni">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Teléfono</label>
              <input type="text" class="form-control" v-model="edit_phone">
            </div>
          </div>
          <div class="col-sm-6 text-center">
            <div class="form-group">
              <label>Estado</label>
              <input type="hidden" v-model="edit_status">
              <button @click="edit_status = 0; user.activo = 0" v-if="user.activo == 1 && edit_status == 1" class="btn btn-success">Activo</button>
              <button @click="edit_status = 1; user.activo = 1" v-if="user.activo == 0 && edit_status == 0" class="btn btn-danger">Inactivo</button>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" v-model="edit_email">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button @click="edit_user_now('{{ route('admin.ModifyUserController') }}', user.id)" type="button" class="btn btn-warning text-white">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>