var get_users = new Vue({
	el:"#users_table",
	data:{
		users:[],
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
				console.log(response)
				if (typeof(response.body.success) != 'undefined') {
					this.users = response.body.users;
					toastr.success(response.body.success);
				}else if(typeof(response.body.error) != 'undefined'){
					toastr.error(response.body.error)
				}
			}, response=>{
				console.log(response)
				toastr.error('No se pudo eliminar el usuario, reintentelo más tarde');
			})
		}
	}
})