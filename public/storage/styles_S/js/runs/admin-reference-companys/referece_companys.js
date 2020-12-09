var referece_companys = new Vue({
	el:"#reference_companys_id",
	data:{
		all_reference_companys:[],
		all_companys:[],
		names:'',
		last_names:'',
		phone:'',
		mail:'',
		contact_time:'',
		observations:'',
		//edit
		edit_id_company:'',
		edit_id:'',
		edit_names:'',
		edit_last_names:'',
		edit_phone:'',
		edit_email:'',
		edit_contact_time:'',
		edit_observations:'',
		edit_active:true,
	},
	created:function(){
		this.$http.get(document.getElementById('reference_companys_route').value).then(function(response){
			this.all_reference_companys = response.body.references_companys;
			this.all_companys = response.body.all_companys;
		})
	},
	methods:{
		reset_values:function(){
			let select = document.getElementById('select_company');
			let text = select.options[select.selectedIndex].text = 'Sin elegir';
			let value = select.options[select.selectedIndex].value = 0;
			let validate = '';
			this.names = '';
			this.last_names = '';
			this.phone = '';
			this.mail = '';
			this.contact_time = '';
			this.observations = '';
		},
		add_reference_company_now:function(url){
			let select = document.getElementById('select_company');
			let company = select.options[select.selectedIndex].text;
			let id_company= select.options[select.selectedIndex].value;
			let validate = '';
			if (parseInt(id_company) == 0) {
				validate = validate + 'Empresas';
			}
			if (this.names.length == 0) {
				validate = validate + ' Nombres';	
			}
			if (this.last_names.length == 0) {
				validate = validate + ' Apellidos';	
			}
			if (this.phone.length == 0) {
				validate = validate + ' Teléfono';	
			}
			if (this.mail.length == 0) {
				validate = validate + ' Email';	
			}
			if (this.contact_time.length == 0) {
				validate = validate + ' Horario de contacto';	
			}
			if (this.observations.length == 0) {
				validate = validate + ' Observaciones';	
			}
			if (validate.length == 0) {
				let formData = new FormData();
				formData.append('_token', document.getElementById('token_reference_companys').value);
				formData.append('id_company', id_company);
				formData.append('names', this.names);
				formData.append('last_names', this.last_names);
				formData.append('phone', this.phone);
				formData.append('mail', this.mail);
				formData.append('contact_time', this.contact_time);
				formData.append('observations', this.observations);
				this.$http.post(url, formData).then(function(response){
					console.log(response.body);
					if (typeof(response.body.success) != 'undefined') {
						toastr.success(response.body.success);
						this.all_reference_companys = response.body.references_companys;
						this.all_companys = response.body.all_companys;
					}else if(typeof(response.body.error) != 'undefined'){
						toastr.error(response.body.error);
					}
				}, response=>{
					console.log(response.body);
					toastr.error('No se pudo guardar los valores, reinicie la página')
				});
			}else{
				toastr.error(validate + ' estan vacíos o son incorrectos');
			}
		},
		//edit
		set_values:function(i, id, company, id_company, names, last_names, phone, email, time_contact, observations, active){
			this.edit_id_company = document.getElementById('company_selected'+i).value = id_company;
			document.getElementById('company_selected'+i).textContent = company;
			this.edit_id = id;
			this.edit_names = names;
			this.edit_last_names = last_names;
			this.edit_phone = phone;
			this.edit_email = email;
			this.edit_contact_time = time_contact;
			this.edit_observations = observations;
			if (active == 1) {
				this.edit_active = true;
			}else{
				this.edit_active = false;
			}
		},
		modify:function(url){
			let validate = '';
			if (this.edit_names.length > 0) {

			}else{
				validate = validate + 'Nombres';
			}
			if (this.edit_last_names.length > 0) {

			}else{
				validate = validate + ' Apellidos';
			}
			if (this.edit_phone.length > 0) {

			}else{
				validate = validate + ' Teléfono';
			}
			if (this.edit_email.length > 0) {

			}else{
				validate = validate + ' Email';
			}
			if (this.edit_contact_time.length > 0) {

			}else{
				validate = validate + ' Horario de contacto';
			}
			if (this.edit_observations.length > 0) {

			}else{
				validate = validate + ' Observaciones';
			}
			if (validate.length == 0) {
				let formData = new FormData();
				formData.append('_token', document.getElementById('token_reference_companys').value);
				formData.append('id_company', this.edit_id_company);
				formData.append('id', this.edit_id);
				formData.append('names', this.edit_names);
				formData.append('last_names', this.edit_last_names);
				formData.append('phone', this.edit_phone);
				formData.append('email', this.edit_email);
				formData.append('contact_time', this.edit_contact_time);
				formData.append('observations', this.edit_observations);
				if (this.edit_active) {
					formData.append('status', 1);	
				}else{
					formData.append('status', 0);
				}
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.all_reference_companys = response.body.references_companys;
						this.all_companys = response.body.all_companys;
						toastr.success(this.edit_names + ' se modificó correctamente');
					}else if (typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error);
					}
				})
			}else{
				toastr.error(validate + ' Están vacíos o son incorrectos');
			}
		}
	}
})