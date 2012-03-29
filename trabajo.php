<?php
require("class.phpmailer.php");
$msg = "";
if ($_POST['action'] == "send") {
	$varname = $_FILES['archivo']['name'];
    $vartemp = $_FILES['archivo']['tmp_name'];
	//$varttype = $_FILES['archivo']['type'];

	$arch = explode(".",$varname);
	$a = end($arch);
	
	if ($a == "docx" || $a == "doc" || $a == "pdf") {
		$mail = new PHPMailer();
		$mail->Host = "localhost";
		$mail->From = "correos@anonymus.com";
		$mail->FromName = "anonymus";
		$mail->Subject = "WEB GENIA-TECH CURRICULUM UNETE";
		$mail->AddAddress("tello_jr2@hotmail.com");
		$mail->AddAttachment($vartemp, $varname);
		$body = "<strong> NOMBRE:</strong>".$_POST['nombre']."<br>";
		$body .= "<strong> APELLIDOS:</strong>".$_POST['apellido']."<br>";
		$body .= "<strong> TELEFONO:</strong>".$_POST['telefono']."<br>";
		$body .= "<strong> CORREO ELECTRONICO:</strong>".$_POST['email']."<br>";
		$body.= "<i>Genia-tech.com</i>";
		$mail->Body = $body;
		$mail->IsHTML(true);
		$mail->Send();
		$msg = "Mensaje enviado correctamente";
	}else{
		$msg = "Solo se aceptan formatos de texto (.doc, .docx y .pdf )";
	}
	
	
	
}
?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>.:: Genia-tech ::.</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="js/modernizr-2.0.6.min.js"></script>
	
	<script src="js/jquery.accordion.js"></script>
	<script src="js/main.js"></script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
	<script type="text/javascript" src="js/cusel.js"></script>
	<script type="text/javascript" src="js/jScrollPane.html"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.dropDown.pack.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('ul#nav').NavDropDown({
            duration:300,
            hoverElement:'li',
            hoverClass:'hover',
            dropHolder:'div',
            showEffect:'fade' // slide, fade, slide&fade
        });                
    });
</script>

<script language="JavaScript">

function Validar(form)
{
		// Nombre
		 if (form.nombre.value == "")
  { alert("Por favor ingrese su nombre"); form.nombre.focus(); return; }
  
  //apellido
  if(form.apellido.value ==""){
	alert("Porfavor ingrese su apellido");
	form.apellido.focus();
	return;
  }
  
  //Telefono
  if(form.telefono.values == ""){
  alert("Ingrese su telefono");
  form.telefono.focus();
  return;
  }
		
		// Mail
		   if (form.email.value == "")
  { alert("Por favor ingrese correo electronico"); form.email.focus(); return; }
  
  
  if (form.email.value.indexOf('@', 0) == -1 ||
      form.email.value.indexOf('.', 0) == -1)
  { alert("Dirección de email inválida"); form.email.focus(); return; }
  //----------
  //adjunto
  if(form.archivo.value == ""){
  alert("Ingrese su curriculum");
  form.archivo.focus();
  return;
  }
  
   // Mensaje
  
   if (form.mensaje.value == "")
  { alert("Por favor ingrese su mensaje"); form.mensaje.focus(); return; }
  
  form.submit();
 }
 
	var nav4 = window.Event ? true : false;
	function acceptNum(evt){   
	var key = nav4 ? evt.which : evt.keyCode;   
	return (key <= 13 || (key>= 48 && key <= 57));
	}
</script>

<style type="text/css">
	#cont-a{
		width:242px;
		height:105px;
		float:left;
		background-color:red;
	}
	#cont-b{
		width:725px;
		height:105px;
		float:left;
		background-color:blue;
		padding:10px;
	}

	.conf {
	color: #CC0000;
	}

</style>
</head>
<body>
	<div id="wrapper">
				<!-- header -->
		<div id="header">
			<?php include("include/cabezera.php") ?>
		</div><!-- end header -->
		<!-- main -->
		<div id="main">
			<!-- main-content -->
			<div class="main-holder">
				<div class="main-frame">
					<!-- breadcrumbs and social icons -->
					
					<div class="panel-holder">
						<div class="panel">
							<ul class="breadcrumbs">
								<li><a href="index.php">Inicio</a></li>
								<li>Contactanos</li>
							</ul>
							<ul class="social-networks">
								<li><a href="https://www.facebook.com/pages/Genia-tech/386318784731637" class="facebook">facebook</a></li>
								<!--<li><a href="#" class="gmail">gmail</a></li>
								<li><a href="#" class="rss">rss</a></li>
								<li><a href="#" class="social-link">social-link</a></li>-->
								<li><a href="#" class="twitter">twitter</a></li>
								
							</ul>
						</div>
					</div>
					<!-- content -->
					<div id="content">
						
						
						
						<div class="content2"> 
						
						<h1 style="color:#034179"> Trabaja con nosotros </h1>
						<hr>
					
					
							
					
					
							<div style="padding:10px; width:605px;line-height:25px;float:left;text-align:justify">
									
									<!-- comments-form -->
															<div class="form-holder">
																<div class="form-frame">
																<?php if ($msg != "") { ?> <span class="conf"><?php echo $msg; ?></span><br><?php } ?>
																	<form method="post" action="trabajo.php" class="form" enctype="multipart/form-data">
																		<fieldset>
																			
																				<div style="width:116px;float:left;margin:4px;text-align:right">Nombre:</div>
																				<input type="text" name="nombre" class="text large" placeholder="Nombre" />
																				
																				<div style="width:116px;float:left;margin:4px;text-align:right">Apellido: </div>
																				<input type="text" name="apellido" class="text large" placeholder="apellido"  />
																				
																				<div style="width:116px;float:left;margin:4px;text-align:right">Telefono: </div>
																				<input type="text" name="telefono" class="text large" placeholder="Telefono" onKeyPress="return acceptNum(event)" maxlength="7" />

																				<div style="width:116px;float:left;margin:4px;text-align:right">Correo Electronico: </div>
																				<input type="text" name="email" class="text large" placeholder="e-mail"  />
																				
																				<div style="width:116px;float:left;margin:4px;text-align:right">Curriculum Vitae: </div>
																				<input type="file" name="archivo" class="text large" placeholder="archivo"  />
																				
																				<textarea class="textarea" name="mensaje" id="" cols="30" wrap="virtual" rows="10" placeholder="Mensaje" style="margin-left:125px" ></textarea>
																				<div class="info-box">
																					<!--<input type="button"  class="more"  value="Enviar" onclick="Validar(this.form)" />-->
																					<input type="button" name="btsend" class="more" onclick="Validar(this.form)" value="Enviar">
																					<input type="hidden" name="action" value="send" />
																					<!-- star rating -->
																					
																				</div>
																		</fieldset>
																	</form>
																</div>
															</div>
															
															<div style="padding:10px"> </div>
									
							</div>

							
							
					
						</div>
						
						<div style="width: 324px; margin-left:10px; float:right; margin-top:66px">
							<div style="margin:25px;line-height:22px">
							
									Si quieres trabajar con nosotros, tan solo tienes que rellenar los siguientes datos y pronto nos pondremos en contacto contigo para concertar una entrevista personal.
								<br><br>
								Un saludo cordial
								<br>    Gerencia Genia-Tech  
									
							</div>
							
							
						
							
						
							
						</div>
						
						
						
							
						
						
					</div><!-- end content -->
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include("include/footer.php") ?>
		<!-- end footer -->
	</div>
</body>

</html>
