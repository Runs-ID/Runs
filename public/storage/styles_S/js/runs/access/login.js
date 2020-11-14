var login_form = new Vue({
	el:"#login_form",
	data:{
		loading:true,
		button_loading:false,
		token:_token,
		user:'',
		user_error:false,
		password:'',
		password_error:false,
		//steps
		button_recovery_password:false,
		first_step:true,
		first_step_error:false,
		second_step:false,
		Second_step_error:false,
		third_step:false,
		third_step_error:false,
		//recovery
		email_recovery_password:'',
		token_recovery_password:'',
		password_recovery:'',
		re_password_recovery:'',

	},
	mounted:function(){
		document.getElementById('ffff').className='featured-box featured-box-primary text-left mt-5';
		this.loading = false;
	},
	methods:{
		login_now:function(url){
			let validate = true;
			this.button_loading = true;
			this.user_error = '';
			this.password_error = '';
			if (this.user.length >= 4) {
				if (this.user.length <= 25) {
					
				}else{
					this.user_error = 'demasiado corto';
					validate = false;					
				}
			}else{
				this.user_error = 'demasiado corto';
				validate = false;
			}
			if (this.password.length >= 4) {
				if (this.password.length <= 25) {
					
				}else{
					this.password_error = 'demasiado corto';
					validate = false;					
				}
			}else{
				this.password_error = 'demasiado corto';
				validate = false;
			}
			if (validate) {
				let formData = new FormData();
				formData.append('_token', this.token.value);
				formData.append('user', this.user);
				formData.append('password', this.password);
				this.$http.post(url, formData).then(function(response){
					console.log(response.body);
					if (typeof(response.body.url) != 'undefined') {
						this.user = '';
						this.password = '';
						window.location.href = response.body.url;
					}else if(typeof(response.body.error) != 'undefined'){
						toastr.error(response.body.error, 3000);
						this.button_loading = false;
					}
				}, response=>{
					console.log(response.body);
					toastr.error('Formulario incorrecto', 3000);
					this.button_loading = false;
				});
			}else{
				this.button_loading = false;				
			}
		},
		first_step_function:function(url){
			this.button_recovery_password = true;
			let validate = true;
			let formData = new FormData();
			formData.append('email_recovery_password', this.email_recovery_password);
			formData.append('_token', this.token.value);
			if (this.email_recovery_password.length >= 4) {
				if (this.email_recovery_password.length <= 100) {

				}else{
					validate = false;
					this.first_step_error = 'demasiado largo';
				}
			}else{
				validate = false;
				this.first_step_error = 'demasiado corto';
			}
			if (validate) {
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.first_step = false;
						this.second_step = true;
						this.button_recovery_password = false;		
					}else if (typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error, 6000);
						this.button_recovery_password = false;
					}
				}, response=>{
					toastr.error('No se pudo enviar el formulario, reintentelo más tarde');
				});
			}else{
				toastr.error('Formulario incorrecto', 3000);
				this.button_recovery_password = false;		
			}
		},
		second_Step_function:function(url){
			this.button_recovery_password = true;
			let validate = true;
			let formData = new FormData();
			formData.append('token_recovery_password', this.token_recovery_password);
			formData.append('email_recovery_password', this.email_recovery_password);
			formData.append('_token', this.token.value);
			if (this.token_recovery_password.length >= 4) {
				if (this.token_recovery_password.length <= 15) {

				}else{
					validate = false;
					this.second_step_error = 'demasiado largo';
				}
			}else{
				validate = false;
				this.second_step_error = 'demasiado corto';
			}
			if (validate) {
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.second_step = false;
						this.third_step = true;
						this.button_recovery_password = false;		
					}else if (typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error, 6000);
						this.button_recovery_password = false;
					}
				}, response=>{
					toastr.error('No se pudo enviar el formulario, reintentelo más tarde', 6000);
				});
			}else{
				toastr.error('Formulario incorrecto', 3000);
				this.button_recovery_password = false;		
			}
		},
		third_Step_function:function(url){
			this.button_recovery_password = true;
			let validate = true;
			let formData = new FormData();
			formData.append('token_recovery_password', this.token_recovery_password);
			formData.append('email_recovery_password', this.email_recovery_password);
			formData.append('password_recovery', this.password_recovery);
			formData.append('_token', this.token.value);

			if (this.password_recovery == this.re_password_recovery) {
				if (this.password_recovery.length >= 4) {
					if (this.password_recovery.length <=20) {

					}else{
						validate = false;
						this.third_step_error = 'demasiado largo';
					}
				}else{
					validate = false;
					this.third_step_error = 'demasiado corto';	
				}
			}else{
				validate = false;
				this.third_step_error = 'ambas contraseñas deben coincidir';				
			}


			if (validate) {
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						toastr.success('Contraseña cambiada con éxito')
						this.button_recovery_password = false;
						this.first_step = true;
						this.third_step = false;
					}else if (typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error, 6000);
						this.button_recovery_password = false;
					}
				}, response=>{
					toastr.error('No se pudo enviar el formulario, reintentelo más tarde', 6000);
				});
			}else{
				toastr.error('Formulario incorrecto', 3000);
				this.button_recovery_password = false;		
			}
		}
	}

})