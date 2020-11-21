var get_users = new Vue({
	el:"#users_table",
	data:{
		users:[],
	},
	created:function(){
		this.$http.get(document.getElementById('url_get_users').value).then(function(response){
			this.users = response.body.users
		});
	}
})