<div id="add_new_user">
	<button class="btn btn-success text-right" data-toggle="modal" data-target="#add_new_company">
		<i class="fas fa-city"></i> Agregar nueva empresa
	</button>
	<!-- add_new_user -->
	<div class="modal fade" id="add_new_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Crear nueva empresa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<!--país-->
					  <label class="col-sm-12">País</label>
					  <select v-if="select_pais" @change="get_provincia($event, '{{ route('admin.PaisController') }}')" class="form-control col-sm-7">
					  	<option value="0" selected="selected">Sin seleccionar</option>
					  	<option v-for="pais in all_paises" :value="pais.id">@{{pais.pais}}</option>
					  </select>
					  <button v-if="select_pais" class="btn btn-primary mb-2 col-sm-5" 
					  @click="state_input_and_select(1)">Crear nuevo país</button>
					  <input v-if="select_pais == false" type="text" class="form-control col-sm-7" placeholder="argentina">
					  <button v-if="select_pais == false" class="btn btn-primary mb-2 col-sm-5" @click="select_pais = true">Seleccionar un país</button>
	      		<!--provincia-->
					  <label class="col-sm-12">Provincia</label>
					  <select v-if="select_provincia" @change="get_partido($event, '{{ route('admin.ProvinciaController') }}')" class="form-control col-sm-7">
					  	<option value="0" selected="selected">Sin seleccionar</option>
					  	<option v-for="provincia in all_provincias" :value="provincia.id">@{{provincia.provincia}}</option>
					  </select>
					  <button v-if="select_provincia" class="btn btn-primary mb-2 col-sm-5" 
					  @click="state_input_and_select(2)">Crear nueva provincia</button>
					  <input v-if="select_provincia == false" type="text" class="form-control col-sm-7" placeholder="buenos aires">
					  <button v-if="select_provincia == false" class="btn btn-primary mb-2 col-sm-5" @click="select_provincia = true">Seleccionar una provincia</button>
	      		<!--partido-->
					  <label class="col-sm-12">Partido</label>
					  <select v-if="select_partido" @change="get_localidad($event, '{{ route('admin.PartidoController') }}')" class="form-control col-sm-7">
					  	<option value="0" selected="selected">Sin seleccionar</option>
					  	<option v-for="partido in all_partidos" :value="partido.id">@{{partido.partido}}</option>
					  </select>
					  <button v-if="select_partido" class="btn btn-primary mb-2 col-sm-5" 
					  @click="state_input_and_select(3)">Crear nuevo partido</button>
					  <input v-if="select_partido == false" type="text" class="form-control col-sm-7" placeholder="la plata">
					  <button v-if="select_partido == false" class="btn btn-primary mb-2 col-sm-5" @click="select_partido = true">Seleccionar una partido</button>
	      		<!--localidad-->
					  <label class="col-sm-12">Localidad</label>
					  <select v-if="select_localidad" class="form-control col-sm-7">
					  	<option value="0" selected="selected">Sin seleccionar</option>
					  	<option v-for="localidad in all_localidades" :value="localidad.id">@{{localidad.localidad}}</option>
					  </select>
					  <button v-if="select_localidad" class="btn btn-primary mb-2 col-sm-5" 
					  @click="state_input_and_select(4)">Crear nuevo localidad</button>
					  <input v-if="select_localidad == false" type="text" class="form-control col-sm-7" placeholder="alto san lorenzo">
					  <button v-if="select_localidad == false" class="btn btn-primary mb-2 col-sm-5" @click="select_localidad = true">Seleccionar una localidad</button>
					  <!--datos de la empresa-->
					  <label class="col-sm-12">direccion</label>
					  <input type="text" class="form-control col-sm-12" placeholder="x entre x y x">
					  <label class="col-sm-12">nombre</label>
					  <input type="text" class="form-control col-sm-12" placeholder="runs">
					  <label class="col-sm-12">cuit</label>
					  <input type="text" class="form-control col-sm-12" placeholder="xx-xxxxxxx-x">
					  <label class="col-sm-12">observaciones</label>
					  <textarea placeholder="observaciones" class="form-control col-sm-12" maxlength="255"></textarea>
					  <label class="col-sm-12">telefono</label>
					  <input type="text" class="form-control col-sm-12" placeholder="221-xxx-xxxx">
					  <label class="col-sm-12">email</label>
					  <input type="text" class="form-control col-sm-12" placeholder="runs@runs.com">

	      	</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-primary">Crear empresa</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>