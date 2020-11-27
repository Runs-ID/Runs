var form_profile = new Vue({
	el:"#form_profile",
	data:{
		//hide
		data_user:[],
		//require
		token:_token,
		//disabled
		disabled_name:null,
		disabled_last_name:null,
		disabled_dni:null,
		disabled_phone:null,
		disabled_email:null,
		//form
		button_send:false,
		name:'',
		last_name:'',
		dni:'',
		phone:'',
		email:'',
		error_name:false,
		error_last_name:false,
		error_dni:false,
		error_phone:false,
		error_email:false,
	},
	created:function(){
		this.$http.get(document.getElementById('data_set').value).then(function(response){
			if (typeof(response.body.data_user) != 'undefined') {
				this.data_user = response.body.data_user;
			}else if(typeof(response.body.error) != 'undefined'){
				toastr.info(response.body.error);
			}
		}, response=>{
			console.log(response.body.message);
			toastr.info('El servidor no pudo traer tus datos personales');
		});
	},
	methods:{
		change_value_inputs:function(){
			let validate = false;
			if (this.name.length > 0) {
				validate = true;				
			}
			if (this.last_name.length > 0) {
				validate = true;				
			}
			if (this.dni.length > 0) {
				validate = true;				
			}
			if (this.phone.length > 0) {
				validate = true;				
			}
			if (this.email.length > 0) {
				validate = true;				
			}
			if (validate) {
				document.getElementById('button_bloqued').disabled = false;
			}else{
				document.getElementById('button_bloqued').disabled = true;
			}
		},
		save_form_profile:function(url){
			let validate = true;
			if (this.name.length <= 70) {
				validate = true;				
				this.error_name = false;
			}else{
				this.error_name = 'nombres demasiado largo';
				validate = false;
			}
			if (this.last_name.length <= 70) {
				validate = true;
				this.error_last_name = false;
			}else{
				this.error_last_name = 'apellidos demasiado largo';
				validate = false;
			}
			if (this.dni.length <= 15) {
				validate = true;
				this.error_dni = false;
			}else{
				this.error_dni = 'dni demasiado largo';
				validate = false;
			}
			if (this.phone.length <= 16) {
				validate = true;
				this.error_phone = false;
			}else{
				this.error_phone = 'teléfono demasiado largo';
				validate = false;
			}
			if (this.email.length <= 100) {
				validate = true;
				this.error_email = false;
			}else{
				this.error_email = 'email demasiado largo';
				validate = false;
			}
			if (validate) {
				let formData = new FormData();
				formData.append('_token', this.token.value);
				formData.append('name', this.name);
				formData.append('last_name', this.last_name);
				formData.append('dni', this.dni);
				formData.append('phone', this.phone);
				formData.append('email', this.email);
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.data_user = response.body.data_user;
						toastr.success(response.body.success);
					}else if (typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error);
					}
				}, response=>{
					toastr.info('No se pudo enviar el formulario, reintentelo más tarde');
				})
			}else{
				toastr.error('Formulario incorrecto');
			}

		}
	}

})