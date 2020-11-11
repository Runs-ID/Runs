var configure_profile = new Vue({
	el:"#configure_profile",
	data:{
		//require
		loading_button:false,
		token:_token,
		//data
		name:'',
		last_name:'',
		dni:'',
		phone:'',
		email:'',
		//error
		name_error:null,
		last_name_error:null,
		dni_error:null,
		phone_error:null,
		email_error:null,

	},
	methods:{
		save_change:function(url){
			let validate = true;
			this.loading_button = true;
			this.name_error = null;
			this.last_name_error = null;
			this.dni_error = null;
			this.phone_error = null;
			this.email_error = null;
			if (this.name.length >= 3) {
				if (this.name.length <= 70) {
				}else{
					this.name_error = 'muy largo';
					validate = false;					
				}
			}else{
				this.name_error = 'muy corto';
				validate = false;
			}
			if (this.last_name.length >= 4) {
				if (this.last_name.length <= 70) {
				}else{
					this.last_name_error = 'muy largo';
					validate = false;					
				}
			}else{
				this.last_name_error = 'muy corto';
				validate = false;
			}
			if (this.dni.length >= 4) {
				if (this.dni.length <= 16) {
				}else{
					this.dni_error = 'muy largo';
					validate = false;					
				}
			}else{
				this.dni_error = 'muy corto';
				validate = false;
			}
			if (this.phone.length >= 4) {
				if (this.phone.length <= 15) {
				}else{
					this.phone_error = 'muy largo';
					validate = false;					
				}
			}else{
				this.phone_error = 'muy corto';
				validate = false;
			}
			if (this.email.length >= 4) {
				if (this.email.length <= 100) {
				}else{
					this.email_error = 'muy largo';
					validate = false;					
				}
			}else{
				this.email_error = 'muy corto';
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
					console.log(response);
					if (typeof(response.body.success) != 'undefined') {
						location.reload();
					}else if(typeof(response.body.error) != 'undefined'){
						toastr.error(response.body.error);
						this.loading_button = false;
					}
				}, response =>{
					console.log(response);
					if (typeof(response.status == 422)) {
						toastr.error('Formulario incorrecto, reinicie la página');
					}else{
						toastr.error('Ocurrió un error, porfavor reinicie la página');
					}
				});
			}else{
				toastr.error('Error, verifique el formulario');
				this.loading_button = false;
			}
		}
	}
})