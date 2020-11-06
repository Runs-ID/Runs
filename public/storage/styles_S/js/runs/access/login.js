var login = new Vue({
	el:"#login",
	data:{
		//recovery_password modal
		loading_absolute:true,
		loading_button:false,
		step_1:true,
		step_2:false,
		step_3:false,
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
				console.log(response);
					if (typeof(response.body.url) != 'undefined') {
						window.location.href = response.body.url;
					}else if(typeof(response.body.error) != 'undefined') {
						toastr.error(response.body.error);
						this.sending_form = false;
					}
				}, response=>{
					toastr.error('Hubo un problema con su navegador, porfavor reinicielo.');
					this.sending_form = false;
					console.log(response);
				});
			}else{
				toastr.error('Formulario incorrecto, verifique que está mal');
				console.log(response);
			}
		},
		//modal
		recovery_password_email:function(){
			this.step_1 = false;
			this.step_2 = true;
		},
		recovery_password_token:function(){
			this.step_2 = false;
			this.step_3 = true;
		},
		recovery_password_change:function(){
			alert('falta terminar')
		}
	}
})