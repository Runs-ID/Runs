var add_user = new Vue({
	el:"#add_new_user",
	data:{
		//form
		token:null,
		code:null,
		profile:0,
	},
	methods:{
		generate_token:function(){
			document.getElementById('button_generate_token').disabled = true;
			this.code = "runs-"+Math.random().toString(36).substr(2, 5);
			this.token = true;
		},
		add_new_user_now:function(url){
			let validate = true;
			if (this.code != null) {

			}else{
				toastr.error('El código es obligatorio, recordá copiarlo y enviarselo al nuevo usuario');
				validate = false;
			}
			if (this.profile != 0) {

			}else{
				toastr.error('El perfíl es obligatorio');
				validate = false;
			}
			if (validate) {
				let formData = new FormData();
				formData.append('_token', document.getElementById('_token').value);
				formData.append('token', this.code);
				formData.append('profile', this.profile);
				this.$http.post(url, formData).then(function(response){
					if (typeof(response.body.success) != 'undefined') {
						this.code = null;
						this.token = null;
						this.profile = 0;
						document.getElementById('button_generate_token').disabled = false;
						toastr.success(response.body.success);
						get_users.users = response.body.users;
					}else{
						toastr.error('Ocurrió un error, reintentelo de nuevo');
						this.code = null;
						this.token = null;
						this.profile = 0;
						document.getElementById('button_generate_token').disabled = false;						
					}
				});
			}
		},
		cancel:function(){
			this.code = null;
			this.token = null;
			this.profile = 0;
			document.getElementById('button_generate_token').disabled = false;
		}
	}
})