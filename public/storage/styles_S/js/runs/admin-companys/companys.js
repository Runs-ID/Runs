var companys = new Vue({
	el:"#companys_table",
	data:{
		companys:[],
	},
	created:function(){
		this.$http.get(document.getElementById('companys_route').value).then(function(response){
			console.log(response.body);
			this.companys = response.body.companys;
		}, response=>{
			console.log(response.body);
		});
	}
})