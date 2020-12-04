var companys = new Vue({
	el:"#companys_table",
	data:{
		companys:[],
		all_paises:[],
		all_provincias:[],
		all_partidos:[],
		all_localidades:[],
		//selected
		pais:0,
		select_pais:true,
		provincia:0,
		select_provincia:false,
		partido:0,
		select_partido:false,
		localidad:0,
		select_localidad:false,
		//values
		pais_input:null,
		provincia_input:null,
		partido_input:null,
		localidad_input:null,
		address_input:null,
		name_input:null,
		cuit_input:null,
		obervations_input:null,
		phone_input:null,
		email_input:null,
	},
	created:function(){
		this.$http.get(document.getElementById('companys_route').value).then(function(response){
			this.companys = response.body.companys;
			this.all_paises = response.body.all_paises;
		});
	},
	methods:{
		get_provincia:function(event, url){
			this.state_input_and_select(2);
			this.pais = event.target.value;
			let formData = new FormData();
			formData.append('_token', document.getElementById('token_company').value);
			formData.append('pais', this.pais);
			this.$http.post(url, formData).then(function(response){
				if (typeof(response.body.success) != 'undefined') {
					this.all_provincias = response.body.success;
					this.select_provincia = true;
				}else if(typeof(response.body.error) != 'undefined'){
					toastr.info(response.body.error);
					this.all_provincias = false;
					this.select_provincia = false;
				}
			}, response=> {
				toastr.error('No se pudo traer ninguna provincia, hubo un error en el servidor');
			});
		},
		get_partido:function(event, url){
			this.state_input_and_select(3);
			this.provincia = event.target.value;
			let formData = new FormData();
			formData.append('_token', document.getElementById('token_company').value);
			formData.append('provincia', this.provincia);
			this.$http.post(url, formData).then(function(response){
				if (typeof(response.body.success) != 'undefined') {
					this.all_partidos = response.body.success;
					this.select_partido = true;
				}
			}, response=> {
				toastr.error('No se pudo traer ningun partido, hubo un error en el servidor');
			});			
		},
		get_localidad:function(event, url){
			this.partido = event.target.value;
			let formData = new FormData();
			formData.append('_token', document.getElementById('token_company').value);
			formData.append('partido', this.partido);
			this.$http.post(url, formData).then(function(response){
				if (typeof(response.body.success) != 'undefined') {
					this.all_localidades = response.body.success;
					this.select_localidad = true;
				}
			}, response=> {
				toastr.error('No se pudo traer ninguna localidad, hubo un error en el servidor');
			});			
		},
		state_input_and_select:function(number){
			switch(parseInt(number)){
				case 1:
					this.select_pais = false;
					this.select_provincia = false;
					this.select_partido = false;
					this.select_localidad = false;
					this.pais = 0;
					this.provincia = 0;
					this.partido = 0;
					this.localidad = 0;
					this.all_provincias = false;
					this.all_partidos = false;
					this.all_localidades = false;
					this.pais_input=null;
					this.provincia_input=null;
					this.partido_input=null;
					this.localidad_input=null;
					break;
				case 2:
					this.select_provincia = false;
					this.select_partido = false;
					this.select_localidad = false;
					this.provincia = 0;
					this.partido = 0;
					this.localidad = 0;
					this.all_partidos = false;
					this.all_localidades = false;
					this.provincia_input=null;
					this.partido_input=null;
					this.localidad_input=null;
					break;
				case 3:
					this.select_partido = false;
					this.select_localidad = false;
					this.partido = 0;
					this.localidad = 0;
					this.all_localidades = false;
					this.partido_input=null;
					this.localidad_input=null;
					break;
				case 4:
					this.select_localidad = false;
					this.localidad = 0;
					this.localidad_input=null;
					break;
			}
		},
		create_new_company_now:function(url){
			let pais = null;
			let provincia = null;
			let partido = null;
			let localidad = null;
			let validate = "";

			//let pais_id_selected = document.getElementById('pais_id_selected');
			//pais_id_selected.options[pais_id_selected.selectedIndex].text
			if (this.select_pais) {
				let pais_id_selected = document.getElementById('pais_id_selected');
				if (pais_id_selected.options[pais_id_selected.selectedIndex].text != 'Sin seleccionar') {
					pais = pais_id_selected.options[pais_id_selected.selectedIndex].text;
				}else{
					validate = validate + 'País';
				}
			}else{
				if (this.pais_input != null) {
					pais = this.pais_input; 
				}else{
					validate = validate + 'País';
				}
			}

			if (this.select_provincia) {
				let provincia_id_selected = document.getElementById('provincia_id_selected');
				if (provincia_id_selected.options[provincia_id_selected.selectedIndex].text != 'Sin seleccionar') {
					provincia = provincia_id_selected.options[provincia_id_selected.selectedIndex].text;
				}else{
					validate = validate + ' Provincia';
				}
			}else{
				if (this.provincia_input != null) {
					provincia = this.provincia_input; 
				}else{
					validate = validate + ' Provincia';
				}
			}

			if (this.select_partido) {
				let partido_id_selected = document.getElementById('partido_id_selected');
				if (partido_id_selected.options[partido_id_selected.selectedIndex].text != 'Sin seleccionar') {
					partido = partido_id_selected.options[partido_id_selected.selectedIndex].text;
				}else{
					validate = validate + ' Partido';
				}
			}else{
				if (this.partido_input != null) {
					partido = this.partido_input; 
				}else{
					validate = validate + ' Partido';
				}
			}

			if (this.select_localidad) {
				let localidad_id_selected = document.getElementById('localidad_id_selected');
				if (localidad_id_selected.options[localidad_id_selected.selectedIndex].text != 'Sin seleccionar') {
					localidad = localidad_id_selected.options[localidad_id_selected.selectedIndex].text;
				}else{
					validate = validate + ' Localidad';
				}
			}else{
				if (this.localidad_input != null) {
					localidad = this.localidad_input; 
				}else{
					validate = validate + ' Localidad';
				}
			}

			if (validate.length == 0) {
				let formData = new FormData();
				formData.append('_token', document.getElementById('token_company').value);
				formData.append('pais', pais);
				formData.append('provincia', provincia);
				formData.append('partido', partido);
				formData.append('localidad', localidad);
				formData.append('address', this.address_input);
				formData.append('name', this.name_input);
				formData.append('cuit', this.cuit_input);
				formData.append('observations', this.obervations_input);
				formData.append('phone', this.phone_input);
				formData.append('email', this.email_input);
				this.$http.post(url, formData).then(function(response){
					console.log(response);
					if (typeof(response.body.success) != 'undefined') {
						this.companys = response.body.companys;
						this.all_paises = response.body.all_paises;
					}else if (typeof(response.body.error) != 'undefined'){
						toastr.error(response.body.error);
					}
				}, response=>{
					console.log(response);
					toastr.error('No se pudo crear la nueva empresa, hubo un error con el servidor');
				});
			}else{
				toastr.error(validate + ' son obligatorios');
			}
		}
	}
})