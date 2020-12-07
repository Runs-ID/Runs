var referece_companys = new Vue({
	el:"#reference_companys_id",
	data:{
		all_reference_companys:[],
	},
	created:function(){
		this.$http.get(document.getElementById('reference_companys_route').value).then(function(response){
			this.all_reference_companys = response.body.references_companys;
		})
	}
})