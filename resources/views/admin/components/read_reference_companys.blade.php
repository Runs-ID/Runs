<button class="btn btn-success" data-toggle="modal" :data-target="'#read_reference_companys_modal'+i"><i class="fas fa-eye"></i></button>
<!-- read_reference_companys_modal -->
<div class="modal fade" :id="'read_reference_companys_modal'+i" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <div class="col-sm-12"><strong>País:<code> @{{reference.empresa.localidad.partido.provincia.pais.pais}}</code></strong></div>
        <div class="col-sm-12"><strong>Provincia:<code> @{{reference.empresa.localidad.partido.provincia.provincia}}</code></strong></div>
        <div class="col-sm-12"><strong>Partido:<code> @{{reference.empresa.localidad.partido.partido}}</code></strong></div>
        <div class="col-sm-12"><strong>Localidad:<code> @{{reference.empresa.localidad.localidad}}</code></strong></div>
        <div class="col-sm-12"><strong>Nombre:<code> @{{reference.empresa.nombre}}</code></strong></div>
        <div class="col-sm-12"><strong>Cuit:<code> @{{reference.empresa.cuit}}</code></strong></div>
        <div class="col-sm-12"><strong>DIrección:<code> @{{reference.empresa.direccion}}</code></strong></div>
        <div class="col-sm-12"><strong>Teléfono:<code> @{{reference.empresa.telefono}}</code></strong></div>
        <div class="col-sm-12"><strong>Email:<code> @{{reference.empresa.email}}</code></strong></div>
        <div class="col-sm-12" v-if="reference.empresa.activo == 1"><strong>Estado:</strong> <code>Activo</code></div>
        <div class="col-sm-12" v-if="reference.empresa.activo == 0"><strong>Estado:</strong> <code>Inactivo</code></div>
        <div class="col-sm-12"><strong>Observaciones:<code> @{{reference.empresa.observaciones}}</code></strong></div>
        <br>
        <hr class="col-sm-12">
        <h3 class="text-center col-sm-12">datos del referente</h3>
        <hr class="col-sm-12">
        <div class="col-sm-12"><strong>Nombres:</strong> <code>@{{reference.nombres}}</code></div>
        <div class="col-sm-12"><strong>Apellidos:</strong> <code>@{{reference.apellidos}}</code></div>
        <div class="col-sm-12"><strong>Teléfono:</strong> <code>@{{reference.telefono}}</code></div>
        <div class="col-sm-12"><strong>Horario de contacto:</strong> <code>@{{reference.horario_contacto}}</code></div>
        <div class="col-sm-12" v-if="reference.activo == 1"><strong>Estado:</strong> <code>Activo</code></div>
        <div class="col-sm-12" v-if="reference.activo == 0"><strong>Estado:</strong> <code>Inactivo</code></div>
        <div class="col-sm-12"><strong>Observaciones:</strong> <code>@{{reference.observaciones}}</code></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>