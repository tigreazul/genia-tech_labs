<?php
//reemplace yo@email.com por la dirección a donde quieres que se mande los datos.
$recipiente = "cesarcarlos@genia-tech.com";
//reemplace miasunto por el asunto que quieres en el email
$asunto = "Un Comentario a Genia-Tech";
$error = 0;
//los campos mandados por el formulario
$nombre = $_POST['nombre'];
$telf = $_POST['telf'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
//verificación si los campos requeridos estan llenos
if($nombre == "" || $email == "" || $comentario == ""){$error=1;}
//verificación si el email es correcto
elseif(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email)){$error=2;}
//mensajes de error
if($error==1){
echo "El siguiente error ha ocurrido!<BR>";
echo "No ha rellenado todos los campos obligatorios.<BR> Por favor vuelva <A HREF=\"javascript:history.back()\">atra</A>.<BR>";}
elseif($error==2){
   echo "El siguiente error ha ocurrido!<BR>";
   echo "El correo electronico es invalido!<BR> Por favor vuelva <A HREF=\"javascript:history.back()\">atras</A>.<BR>";
}
//envio del email con los datos
else{
   $message ="nombre: ".$nombre."<br>";
   $message .="telf: ".$telf."<br>";
   $message .="email: ".$email."<br>";
   $message .="comentario: ".$comentario."<br>";
   $message = stripslashes($message);
   $headers = "MIME-Version: 1.0\r\n";
   $headers .= "Content-type:text/html; charset=iso-8859-1\r\n";
   $headers .= "From: $email\r\n";
   $headers .= "Repaly-to: $email\r\n";
   $headers .= "Cc: $email\r\n";
   mail($recipiente,$asunto,$message,$headers);
   //aqui puedes modificar los mensajes
   echo "El mensaje ha sido enviado!<br>";
   echo "Gracias por su mensage.<br>
   Le mandaremos una respuesta lo mas antes posible.<br>";
}
?>
