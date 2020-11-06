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
	},
	mounted(){
		this.loading_absolute = false;
		document.getElementById('fff').className = 'featured-box featured-box-primary text-left mt-5';
	},
	methods:{
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