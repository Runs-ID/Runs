var toastr = new Vue({
	methods:{
		success:function(msg, time){
			Vue.use(Toasted)
			let toast = this.$toasted.show(msg, { 
				 theme: "toasted-primary", 
				 position: "top-center", 
				 duration : time,
				 icon: 'check_circle',
			});
		},
		info:function(msg, time){
			Vue.use(Toasted)
			let toast = this.$toasted.show(msg, { 
				 theme: "toasted-primary", 
				 position: "top-center", 
				 duration : time,
				 icon: 'warning',
			});
		},
		error:function(msg, time){
			Vue.use(Toasted)
			let toast = this.$toasted.show(msg, { 
				 theme: "toasted-primary", 
				 position: "top-center", 
				 duration : time,
				 icon: 'error',
			});
		},
	}
})