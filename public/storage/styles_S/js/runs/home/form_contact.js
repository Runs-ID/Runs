var form = new Vue({
	el:"#form_contact",
	data:{
		token:_token,

		name_contact:'',
		name_error:null,

		email_contact:'',
		email_error:null,

		message_contact:'',
		message_contact_error:null,
		sending_form:false,
	},
	methods:{
		send_form:function(store){
			this.name_error = null;
			this.email_error = null;
			this.message_contact_error = null;
			let validate = true;
			if (this.name_contact.length >= 4) {
				if (this.name_contact.length <= 20) {

				}else{
					this.name_error = "Éste campo es muy largo";
					validate = false;
				}
			}else{
				this.name_error = "Éste campo es muy corto";
				validate = false;
			}
			if (this.email_contact.length >= 4) {
				if (this.email_contact.length <= 100) {
					if( /(.+)@(.+){2,}\.(.+){2,}/.test(this.email_contact) ){
						
					}else{
						this.email_error = "Email incorrecto";
						validate = false;
					}
				}else{
					this.email_error = "Éste campo es muy largo";
					validate = false;
				}
			}else{
				this.email_error = "Éste campo es muy corto";
				validate = false;
			}
			if (this.message_contact.length > 0) {
				if (this.message_contact.length <= 800) {

				}else{
					this.message_contact_error = "Éste campo es muy largo";
					validate = false;
				}
			}else{
				this.message_contact_error = "Éste campo es obligatorio";
				validate = false;
			}
			if (validate) {
				this.sending_form=true;
				let formData = new FormData();
				formData.append('_token', this.token.value);
				formData.append('name_contact',this.name_contact);
				formData.append('email_contact',this.email_contact);
				formData.append('message_contact',this.message_contact);
				this.$http.post(store+"/", formData).then(function(respuesta){
					if (typeof(respuesta.body.success) != 'undefined') {
						this.sending_form=false;
						toastr.success('Gracias por contactarte con nosotros! estate al tanto en tu correo' , 6000);
						this.name_contact = '';
						this.email_contact = '';
						this.message_contact = '';
					}else{
						this.sending_form=false;
						toastr.success('Ups, no se pudo enviar el correo, reintentelo de nuevo' , 6000);
						this.name_contact = '';
						this.email_contact = '';
						this.message_contact = '';							
					}
				}, respuesta=>{
					if (respuesta.status == 422) {
						toastr.error('El contacto no se envió, reinicie la página y reintentelo', 6000);
					}else{
						toastr.error('Hubo un problema con el servidor, reintentelo más tarde', 6000);
					}
					this.sending_form=false;
					console.log(respuesta);
				});
			}else{
				toastr.error('Formulario incorrecto, verifique los errores', 3000);
			}
		}
	}
})