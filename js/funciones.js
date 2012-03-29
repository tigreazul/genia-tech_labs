$(document).ready(function(){
    $(".boton_envio").click(function() {
 
        var nombre = $(".nombre").val();
            email = $(".email").val();
			apellido = $(".apellido").val();
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            
            mensaje = $(".mensaje").val();
 
        if (nombre == "") {
            $(".nombre").focus();
            return false;
        }else if(email == "" || !validacion_email.test(email)){
            $(".email").focus();
            return false;
        }else if(mensaje == ""){
            $(".mensaje").focus();
            return false;
        }else{
               $('.ajaxgif').removeClass('hide');
				var datos = 'nombre='+ nombre + '&email=' + email + '&apellido=' + apellido + '&mensaje=' + mensaje;
				$.ajax({
					type: "POST",
					url: "../contacto.php",
					data: datos,
					success: function() {
						$('.ajaxgif').hide();
						$('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);
					},
					error: function() {
						$('.ajaxgif').hide();
						$('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);
					}
				});
				return false;
        }
 
    });
});