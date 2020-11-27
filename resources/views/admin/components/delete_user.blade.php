<button class="btn btn-sm btn-danger" data-toggle="modal" :data-target="'#delete_user'+i"><i class="fas fa-minus"></i></button>

<!-- delete user -->
<div class="modal fade" :id="'delete_user'+i" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Eliminar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text-center text-danger">¿Estás seguro?</h3>
        <p><strong>Perfil:</strong><code> @{{user.perfil ? user.perfil : 'Sin completar'}}</code></p>
        <p><strong>Nombres:</strong><code> @{{user.nombres ? user.nombres : 'Sin completar'}}</code></p>
        <p><strong>Apellidos:</strong><code> @{{user.apellidos ? user.apellidos : 'Sin completar'}}</code></p>
        <p><strong>DNI:</strong><code> @{{user.dni ? user.dni : 'Sin completar'}}</code></p>
        <p><strong>Teléfono:</strong><code> @{{user.telefono ? user.telefono : 'Sin completar'}}</code></p>
        <p><strong>Email:</strong><code> @{{user.email ? user.email : 'Sin completar'}}</code></p>
      </div>
      <hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button @click="delete_user_now('{{ route('admin.DeleteUserController') }}', user.id)" type="button" data-dismiss="modal" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>