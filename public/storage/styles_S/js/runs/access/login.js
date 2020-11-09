var login = new Vue({
	el:"#login",
	data:{
		//recovery_password modal
		loading_absolute:true,
		loading_button:false,
		step_1:true,
		step_2:false,
		step_3:false,
		step_finish:false,
		error:null,
		check_user:'',
		token_validate:'',
		password_change:'',
		re_password_change:'',
		//login
		sending_form:false,
		user:'',
		error_user:null,
		password:'',
		error_password:null,
	},
	mounted(){
		this.loading_absolute = false;
		document.getElementById('fff').className = 'featured-box featured-box-primary text-left mt-5';
	},
	methods:{
		//login
		login_now:function(url){
			let validate = true;
			if (this.user.length >= 4) {
				if (this.user.length <= 20) {

				}else{
					this.error_user = 'es demasiado largo';
					validate = false;
				}
			}else{
				this.error_user = 'es demasiado corto';
				validate = false;
			}
			if (this.password.length >= 4) {
				if (this.password.length <= 20) {

				}else{
					this.error_password = 'es demasiado largo';
					validate = false;
				}
			}else{
				this.error_password = 'es demasiado corto';
				validate = false;
			}
			if (validate) {
				this.sending_form = true;
				let formData = new FormData();
				formData.append('_token', document.getElementById('login_token').value)
				formData.append('user', this.user);
				formData.append('password', this.password);
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.url) != 'undefined') {
						window.location.href = response.body.url;
					}else if(typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error, 6000);
						this.sending_form = false;
					}
				}, response=>{
					toastr.error('Hubo un problema con su navegador, porfavor reinicielo.', 6000);
					this.sending_form = false;
				});
			}else{
				toastr.error('Formulario incorrecto, verifique que está mal',6000);
			}
		},
		//modal
		find_user:function(url){
			let validate = true;
			this.error = null;
			this.loading_button = true;
			if (this.check_user.length >= 4) {
				if (this.check_user.length <= 20) {

				}else{
					this.error = 'El usuario ingresado es muy largo';
					validate = false;
				}
			}else{
				this.error = 'El usuario ingresado es muy corto';
				validate = false;
			}
			if (validate) {
				let formData = new FormData();
				formData.append('_token', document.getElementById('login_token').value)
				formData.append('user', this.check_user);
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.loading_button = false;
						this.step_1 = false;
						this.step_2 = true;
					}else if(typeof(response.body.error) != 'undefined'){
						this.loading_button = false;
						this.error = response.body.error;
					}
				}, response=>{
					console.log(response);
					this.error = 'Hubo un problema con su navegador, porfavor reinicielo.';
				});
			}else{
				this.loading_button = false;				
			}
		},
		recovery_password_token:function(url){
			let validate = true;
			this.error = null;
			this.loading_button = true;
			if (this.token_validate.length >= 4) {
				if (this.token_validate.length <=20) {
					
				}else{
					this.error = 'El código de verificación es muy largo';
				}
			}else{
				this.error = 'El código de verificación es muy corto';
			}
			if (validate) {
				let formData = new FormData();
				formData.append('_token', document.getElementById('login_token').value)
				formData.append('token_validate', this.token_validate);
				formData.append('user', this.check_user);
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.loading_button = false;
						this.step_2 = false;
						this.step_3 = true;
					}else if(typeof(response.body.error) != 'undefined'){
						this.loading_button = false;
						this.error = response.body.error;
					}
				}, response=>{
					this.error = 'Hubo un problema con su navegador, porfavor reinicielo.';
				});
			}
		},
		recovery_password_change:function(url){
			let validate = true;
			this.error = null;
			this.loading_button = true;
			if (this.password_change.length >= 4) {
				if (this.password_change.length <= 20) {
					if (this.password_change == this.re_password_change) {

					}else{
						this.error = 'Ambas contraseñas deben coincidir';
						validate = false;						
					}
				}else{
					this.error = 'La contraseña ingresada es muy larga';
					validate = false;
				}
			}else{
				this.error = 'La contraseña ingresada es muy corta';
				validate = false;
			}
			if (validate) {
				let formData = new FormData();
				formData.append('_token', document.getElementById('login_token').value)
				formData.append('token_validate', this.token_validate);
				formData.append('user', this.check_user);
				formData.append('password_change', this.password_change);
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.step_3 = false;
						this.step_finish = true;
					}else if(typeof(response.body.error) != 'undefined'){
						this.loading_button = false;
						this.error = response.body.error;
					}
				}, response=>{
					this.error = 'Hubo un problema con su navegador, porfavor reinicielo.';
				});
			}else{
				this.loading_button = false;				
			}	
		}
	}
})