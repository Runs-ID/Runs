var register_form = new Vue({
	el:"#register_form",
	data:{
		loading:true,
		button_loading:false,
		email:'',
		email_error:false,
		token:'',
		token_error:false,
		password:'',
		password_error:false,
		user:'',
		user_error:false,
		re_password:'',
		re_password_error:false,
	},
	mounted:function(){
		document.getElementById('fff').className = 'featured-box featured-box-primary text-left mt-5';
		this.loading = false;
	},
	methods:{
		register_now:function(url){
			this.email_error = '';
			this.token_error = '';
			this.user_error = '';
			this.password_error = '';
			this.re_password_error = '';
			this.button_loading = true;
			let validation = true;
			if (this.email.length >= 4) {
				if (this.email.length <= 100) {

				}else{
					this.email_error = 'es demasiado largo';
					validation = false;
				}
			}else{
				this.email_error = 'es muy corto';
				validation = false;
			}
			if (this.token.length >= 4) {
				if (this.token.length <= 15) {

				}else{
					this.token_error = 'es demasiado largo';
					validation = false;
				}
			}else{
				this.token_error = 'es muy corto';
				validation = false;
			}
			if (this.password.length >= 4) {
				if (this.password.length <= 25) {
					if (this.password == this.re_password) {

					}else{
						this.password = '';
						this.re_password = '';
						this.password_error = 'ambas claves deben coincidir';
						validation = false;
					}
				}else{
					this.password_error = 'es demasiado largo';
					validation = false;
				}
			}else{
				this.password_error = 'es muy corto';
				validation = false;
			}
			if (this.user.length >= 4) {
				if (this.user.length <= 25) {

				}else{
					this.user_error = 'es demasiado largo';
					validation = false;
				}
			}else{
				this.user_error = 'es muy corto';
				validation = false;
			}
			if (validation) {
				let formData = new FormData;
				formData.append('_token', document.getElementById('register_token').value);
				formData.append('email', this.email);
				formData.append('token', this.token);
				formData.append('user', this.user);
				formData.append('password', this.password);
				this.$http.post(url, formData).then(function(response){
					console.log(response.body.message);
					if (typeof(response.body.url) != 'undefined') {
						this.email = '';
						this.token = '';
						this.user = '';
						this.password = '';
						this.re_password = '';
						window.location.href = response.body.url;
					}else if (typeof(response.body.error) != 'undefined') {
						this.button_loading = false;
						toastr.error(response.body.error, 5000);
					}
				}, response=>{
					toastr.info('No se pudo completar el registro, porfavor reinicie la página y reintentelo', 5000);
					this.button_loading = false;
					console.log(response.body.message);
				})
			}else{
				toastr.error('Formulario incorrecto, verifique los errores', 5000);
				this.button_loading = false;
			}
		}
	}
})