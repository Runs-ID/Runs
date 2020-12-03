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
					break;
				case 3:
					this.select_partido = false;
					this.select_localidad = false;
					this.partido = 0;
					this.localidad = 0;
					this.all_localidades = false;
					break;
				case 4:
					this.select_localidad = false;
					this.localidad = 0;
					break;
			}
		},
		create_new_company_now:function(){
			let pais = null;
			let provincia = null;
			let partido = null;
			let localidad = null;
			let direccion = null;
			let nombre = null;
			let cuit = null;
			let observaciones = null;
			let telefono = null;
			let email = null;
			let validate = "";

			//let pais_id_selected = document.getElementById('pais_id_selected');
			//pais_id_selected.options[pais_id_selected.selectedIndex].text
			if (this.pais_input != null) {
				pais = this.pais_input;
			}
			console.log(this.pais_input)
		}
	}
})