var form = new Vue({
	el:"#form_contact",
	data:{
		token:_token,

		name_contact:'',
		name_error:null,

		email_contact:'',
		email_error:null,

		phone_contact:'',
		phone_error:null,

		message_contact:'',
		message_contact_error:null,
		sending_form:false,
	},
	methods:{
		send_form:function(store){
			this.name_error = null;
			this.email_error = null;
			this.phone_error = null;
			this.message_contact_error = null;
			let validate = true;
			if (this.name_contact.length >= 4) {
				if (this.name_contact.length <= 20) {

				}else{
					this.name_error = 'Es demasiado largo';
					validate = false;					
				}
			}else{
				this.name_error = 'Es demasiado corto';
				validate = false;
			}
			if (this.email_contact.length >= 4) {
				if (this.email_contact.length <= 60) {
					if( /(.+)@(.+){2,}\.(.+){2,}/.test(this.email_contact) ){
						
					} else {
						this.email_error = 'El email es incorrecto';
						validate = false;
					}
				}else{
					this.email_error = 'Es demasiado largo';
					validate = false;					
				}
			}else{
				this.email_error = 'Es demasiado corto';
				validate = false;
			}
			if (this.phone_contact.length >= 4) {
				if (this.phone_contact.length <= 20) {

				}else{
					this.phone_error = 'Es demasiado largo';
					validate = false;					
				}
			}else{
				this.phone_error = 'Es demasiado corto';
				validate = false;
			}
			if (validate) {
				this.sending_form=true;
				let formData = new FormData();
				formData.append('_token', this.token.value);
				formData.append('name_contact',this.name_contact);
				formData.append('email_contact',this.email_contact);
				formData.append('phone_contact',this.phone_contact);
				formData.append('message_contact',this.message_contact);
				this.$http.post(store+"/", formData).then(function(respuesta){
					if (typeof(respuesta.body.success) != 'undefined') {
						this.sending_form=false;
						toastr.success('Gracias por contactarte con nosotros! estate al tanto en tu correo' , 10000);
						this.name_contact = '';
						this.email_contact = '';
						this.message_contact = '';
					}else{
						this.sending_form=false;
						toastr.error('Ups, no se pudo enviar el correo, reintentelo de nuevo' , 10000);
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
				})
			}else{
				toastr.error('Formulario incorrecto, verifique los errores', 3000);
			}
		}
	}
})