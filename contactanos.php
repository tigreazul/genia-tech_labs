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
  
  if(form.apellido.value ==""){
	alert("Porfavor ingrese su apellido");
	form.apellido.focus();
	return;
  }
		/////////////////
		// Mail
		   if (form.email.value == "")
  { alert("Por favor ingrese correo electronico"); form.email.focus(); return; }
  
  
  if (form.email.value.indexOf('@', 0) == -1 ||
      form.email.value.indexOf('.', 0) == -1)
  { alert("Dirección de email inválida"); form.email.focus(); return; }
  //----------
   // Mensaje
  ///////////
   if (form.mensaje.value == "")
  { alert("Por favor ingrese su mensaje"); form.mensaje.focus(); return; }
  //////////////
  form.submit();
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
						
						<h1 style="color:#034179"> Contactanos </h1>
						<hr>
					
					
							<div style="border:slateGray solid">
							
									<iframe width="610" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=av+castilla+la+nueva+f-20+la+molina+peru&amp;aq=&amp;sll=-12.104704,-76.941344&amp;sspn=0.006766,0.008272&amp;ie=UTF8&amp;hq=&amp;hnear=Castilla+La+Nueva,+Lima,+Per%C3%BA&amp;ll=-12.10633,-76.942159&amp;spn=0.003383,0.004136&amp;t=m&amp;z=14&amp;output=embed"></iframe>
							</div>
					
					
							<div style="padding:10px; width:605px;line-height:25px;float:left;text-align:justify">
									
									<!-- comments-form -->
															<div class="form-holder">
																<div class="form-frame">
																	<form method="post" action="contactame.php" class="form" >
																		<fieldset>
																			
																				<div style="width:116px;float:left;margin:4px;text-align:right">Nombre:</div>
																				<input type="text" name="nombre" class="text large" placeholder="Nombre" />
																				
																				<div style="width:116px;float:left;margin:4px;text-align:right">Apellido: </div>
																				<input type="text" name="apellido" class="text large" placeholder="apellido"  />

																				<div style="width:116px;float:left;margin:4px;text-align:right">Correo Electronico: </div>
																				<input type="text" name="email" class="text large" placeholder="e-mail"  />
																				
																				
																				<textarea class="textarea" name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje" style="margin-left:125px" ></textarea>
																				<div class="info-box">
																					<input type="button"  class="more"  value="Enviar" onclick="Validar(this.form)" />
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
							<div style="float:left"> 
								<div style="width:100px;float:left; color:#034179"> <strong> Direccion: </strong></div>
								<div style="width:320px;float:left; padding:10px">Av. Castilla La Nueva F-20. La Molina  Lima-Peru </div>
							</div>
							
							<div style="float:left"> 
								<div style="width:200px;float:left; color:#034179"> <strong>Gerente General: </strong> </div>
								<div style="width:317px;float:left; padding:10px"> cesarcarlos@genia-tech.com </div>
							</div>
							<div style="float:left"> 
								<div style="width:200px;float:left; color:#034179"> <strong>Gerente Administrativa: </strong> </div>
								<div style="width:317px;float:left; padding:10px"> rosanacamones@genia-tech.com </div>
							</div>
							<div style="float:left"> 
								<div style="width:100px;float:left; color:#034179"> <strong>Ventas: </strong> </div>
								<div style="width:317px;float:left; padding:10px"> ventas@genia-tech.com </div>
							</div>
							<div style="float:left"> 
								<div style="width:100px;float:left; color:#034179"> <strong>Soporte: </strong> </div>
								<div style="width:317px;float:left; padding:10px"> soporte@genia-tech.com </div>
							</div>
							
							<div style="float:left"> 
								<div style="width:100px;float:left; color:#034179"> <strong> Telefono/fax: </strong></div>
								<div style="width:317px;float:left; padding:10px"> 51-1-3656115</div>
							</div>
							
							<div style="float:left"> 
								<div style="width:100px;float:left; color:#034179"> <strong> Nextel: </strong> </div>
								<div style="width:317px;float:left; padding:10px"> 51*402*5582 </div>
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
