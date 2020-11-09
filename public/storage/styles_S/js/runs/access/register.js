var register = new Vue({
	el:"#register",
	data:{
		//required
		loading_absolute:true,
		sending_form:false,
		//info
		user:'',
		error_user:null,
		token:'',
		error_token:null,
		password:'',
		error_password:null,
		re_password:'',
		error_re_password:null,
		email:'',
		error_email:null,
	},
	mounted(){
		this.loading_absolute = false;
		document.getElementById('ffff').className = 'featured-box featured-box-primary text-left mt-5';
	},
	methods:{
		register_now(url){
			this.error_user=null;
			this.error_token=null;
			this.error_password=null;
			this.error_re_password=null;
			this.error_email=null;
			let validate = true;
			if (this.user.length >= 4) {
				if (this.user.length <= 20) {
					if (this.user.match(/^[0-9a-zA-Z]+$/)) {

					}else{
						this.error_user = ('solo letras y números');
						validate=false;						
					}
				}else{
					this.error_user = ('es muy largo');
					validate=false;
				}
			}else{
				this.error_user = ('es muy corto');
				validate=false;
			}
			if (this.password.length >= 4) {
				if (this.password.length <= 20) {
					if (this.user.match(/^[0-9a-zA-Z]+$/)) {
						if (this.password == this.re_password) {

						}else{
							this.error_password = ('ambas contraseñas no coinciden');
							validate=false;
							this.password = '';
							this.re_password = '';									
						}
					}else{
						this.error_password = ('solo letras y números');
						validate=false;						
					}					
				}else{
					this.error_password = ('es muy largo');
					validate=false;
				}
			}else{
				this.error_password = ('es muy corto');
				validate=false;
			}
			if (this.email.length >= 4) {
				if (this.email.length <= 100) {

				}else{
					this.error_email = ('es muy largo');
					validate=false;
				}
			}else{
				this.error_email = ('es muy corto');
				validate=false;
			}
			if (this.token.length >= 4) {
				if (this.token.length <= 100) {

				}else{
					this.error_token = ('es muy largo');
					validate=false;
				}
			}else{
				this.error_token = ('es muy corto');
				validate=false;
			}

			if (validate) {
				this.sending_form = true;
				let formData = new FormData();
				formData.append('_token', document.getElementById('register_token').value);
				formData.append('user', this.user);
				formData.append('token', this.token);
				formData.append('password', this.password);
				formData.append('email', this.email);
				this.$http.post(url,formData).then(function(response){
					console.log(response);
					if (typeof(response.body.url) != 'undefined') {
						window.location.href = response.body.url;
					}else if(typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error);
						this.sending_form = false;
					}
				}, response=>{
					toastr.error('Hubo un problema con su navegador, porfavor reinicielo.', 6000);
					this.sending_form = false;
					console.log(response);
				})
			}else{
				toastr.error('Formulario incorrecto, verifique que está mal', 6000);
			}
		}
	}
})