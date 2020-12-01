var get_users = new Vue({
	el:"#users_table",
	data:{
		users:[],
		//edit
		edit_profile:null,
		edit_names:null,
		edit_last_names:null,
		edit_dni:null,
		edit_phone:null,
		edit_status:null,
		edit_email:null,
	},
	created:function(){
		this.$http.get(document.getElementById('url_get_users').value).then(function(response){
			this.users = response.body.users
		});
	},
	methods:{
		delete_user_now:function(url, id){
			let formData = new FormData();
			formData.append('_token', document.getElementById('_token').value);
			formData.append('id', id);
			this.$http.post(url, formData).then(function(response){
				if (typeof(response.body.success) != 'undefined') {
					this.users = response.body.users;
					toastr.success(response.body.success);
				}else if(typeof(response.body.error) != 'undefined'){
					toastr.error(response.body.error)
				}
			}, response=>{
				toastr.error('No se pudo eliminar el usuario, reintentelo más tarde');
			})
		},
		set_values_edit:function(edit_profile, edit_names, edit_last_names, edit_dni, edit_phone, edit_status, edit_email){
			this.edit_profile = edit_profile;
			this.edit_names = edit_names;
			this.edit_last_names = edit_last_names;
			this.edit_dni = edit_dni;
			this.edit_phone = edit_phone;
			this.edit_status = edit_status;
			this.edit_email = edit_email;
		},
		edit_user_now:function(url, id){
			let formData = new FormData();
			formData.append('_token', document.getElementById('_token').value);
			formData.append('id', id);
			formData.append('profile_id', this.edit_profile);
			formData.append('names', this.edit_names ? this.edit_names : '');
			formData.append('last_names', this.edit_last_names ? this.edit_last_names : '');
			formData.append('dni', this.edit_dni ? this.edit_dni : '');
			formData.append('phone', this.edit_phone ? this.edit_phone : '');
			formData.append('email', this.edit_email ? this.edit_email : '');
			formData.append('status', this.edit_status);
			this.$http.post(url, formData).then(function(response){
				console.log(response);
				if (typeof(response.body.success) != 'undefined') {
					this.users = response.body.users;
					toastr.success(response.body.success);
				}else if(typeof(response.body.error) != 'undefined'){
					toastr.error(response.body.error);
				}
			}, response=>{
				console.log(response);
				if (response.status == 419) {
					toastr.error('reinicie la página');
				}
				toastr.error('No se pudo modificar');
			})
		}
	}
})