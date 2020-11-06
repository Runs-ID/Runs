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
			if (this.name_contact.length <= 20 && this.email_contact.length <= 40) {
				if (this.name_contact.length != 0 && this.email_contact.length != 0 && this.message_contact.length) {
					this.sending_form=true;
					let formData = new FormData();
					formData.append('_token', this.token.value);
					formData.append('name_contact',this.name_contact);
					formData.append('email_contact',this.email_contact);
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
							toastr.success('Ups, no se pudo enviar el correo, reintentelo de nuevo' , 10000);
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
					})
				}else{
					toastr.info('Hay campos demasiados cortos');
					if (this.name_contact.length == 0) {
						this.name_error = 'Éste campo es obligatorio';
					}else if(this.email_contact.length == 0){
						this.email_error = 'Éste campo es obligatorio';
					}else if(this.message_contact.length == 0){
						this.message_contact_error = 'Éste campo es obligatorio';
					}
					this.sending_form=false;
				}
			}else{
				toastr.info('Hay campos demasiados largos', 5000);
				if (this.name_contact.length > 20) {
					this.name_error = 'Tu nombre es muy largo';
				}else if(this.email_contact.length > 40){
					this.email_error = 'Tu email es muy largo';
				}
			}
		}
	}
})