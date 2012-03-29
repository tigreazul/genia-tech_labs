

<?php 

//$nombre=





	$a  = "tello_jr2@hotmail.com";
	$a = "blackearthskate@hotmail.com";
	$a = "the.julio@hotmail.com";
	
	$a2  = $_POST["email"];
//$_POST["email"];


	//asunto

	$asunto = "BLACKEARTH - CONTACTANOS " . $_POST["contactname"];
	
	$asunto2 = "BLACKEARTH - CONTACTANOS " . $_POST["contactname"];


	//message

	$mensaje2=" Su mensaje ah sido enviada correctamente habra una respuesta en 48 horas";
	
	$mensaje="
	
	<table>
		<tr>
			<td> Nombre contacto: </td>
			<td> ".$_POST["contactname"]."</td>
		</tr>
		<tr>
			<td> Mensaje: </td>
			<td> ".$_POST["message"]."</td>
		</tr>
		<tr>
			<td> Correo Electronico: </td>
			<td> ".$_POST["email"]."</td>
		</tr>
	</table>
	
	";
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";

	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


	// Additional headers

	$cabeceras .= 'From: <marketing-blackEarthsk8@blackearthskate.com>' . "\r\n";


	// Mail it

	
	mail($a, $asunto, $mensaje, $cabeceras);
	
	mail($a2, $asunto2, $mensaje2, $cabeceras);
	
//	echo "<script language='javascript' type='text/javascript'>
         //                    location.href='contactanos.html';
       //                   </script>";
	/*					  
echo "<script type='text/javascript'>
function redireccionar(){
  window.locationf='contactanos.html';
} 
setTimeout ('redireccionar()', 5000);";					  
						  
*/

 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Refresh" content="2;url=http://blackearthskate.com/contactanos.html">

<!--Title of your website-->
<title>.: Black Earth Skateboard :.</title>

<!--CSS Styles-->
<link rel="stylesheet" type="text/css" href="css/style-1.css"/>
<link rel="stylesheet" type="text/css" href="css/typography.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>

<!--Java Script-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/accordion.js"></script>
<script type="text/javascript" src="js/functions.js"></script> 
<script type="text/javascript" src="js/supersubs.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/nivo-slider.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

</head>

<!--Body-->
<body> 

<!--Wrapper-->
<div id="wrapper">

<!--Header-->
	<div id="header">
  
<!--Logo-->
	<div id="logo"> 
	<a href="index-2.html">
	<img src="images/style-1/logo/logo.jpg" width="210" height="50" alt="SkateboardLife" />
	</a>
	</div>
    
<!--Top Banner-->
	<div class="top-banner">
	<img src="images/demo/banners/top_banner.gif" width="468" height="60" alt="Top-banner" />
	</div>
	</div>

<!--Navigation-->
	<ul class="sf-menu">
		<li><a href="index.html" class="current"> INICIO </a></li>
		<li><a href="quienes_somos.html" >NOSOTROS</a>
			<ul>
				<li><a href="quienes_somos.html">Quienes Somos</a></li>
			</ul>
		</li>
		<li><a href="">PRODUCTOS</a>
			<ul>
				<li><a href="hombres.html">Hombres</a></li>
				<li><a href="mujeres.html">Mujeres</a></li>
			</ul>        
     </li>
		<li><a href="riders.html">RIDERS</a>
			<ul>
				<li><a href="mathias-masseur.html">Mathias Masseur</a></li>
				<li><a href="cristhian-valdivia.html">cristhian-valdivia</a></li>
				<li><a href="#">Cristian Rupay</a></li>
			</ul>  
		</li>
		<li><a href="">BLACK EARTH</a>
			<ul>
			<li><a href="spots.html">Spots SK8</a></li>
			<li><a href="eventos.html">Eventos</a></li>
			</ul>
		</li>
		<li> <a href="noticias.html"> NOTICIAS </a> </li>
		<li><a href="contactanos.html">CONTACTANOS</a></li>
	</ul>

<!--Sidebar-->
	<div id="sidebar">
    
    	<div class="sidebar-widget"> <a href="" target="_blank"><img src="images/demo/banners/widget_banner.jpg" width="225" height="150" alt="ThemeFOrest" /></a></div>
    
		<div class="sidebar-widget">
		<div class="sidebar-title">lOCALIZACIÓN:</div>
		<div class="sidebar-content">
		
   			 Celular: 946022009<BR>
Nextel: 602*2009
		</div>
        </div>
        
	</div>

<!--Main Content-->
	<div id="main-content">
    
    	<img src="images/demo/contact/people-q-c-80-80-9.jpg" width="80" height="80" class="border-frame alignleft"/>
        <H1>BLACK EARTH SKATEBOARDS</H1>
   	  <div class="line-sep"></div>    
   	  <div id="contact-wrapper">
	
		Su mensaje a sido enviado correctamente!!
	
	</div>
	<!--<div style="width=425px; heigth=350px; float:left">
	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?ll=-12.058396,-77.025814&amp;spn=0.001571,0.002411&amp;t=m&amp;z=19&amp;vpsrc=6"></iframe><br /><small><a href="http://maps.google.es/maps?ll=-12.058396,-77.025814&amp;spn=0.001571,0.002411&amp;t=m&amp;z=19&amp;vpsrc=6&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
	</div>-->
	</div>

<!--Footer-->
	<div id="footer">
    
		<!--First widget-->    
		<div class="one_half">
		<div class="footer-title">BLACK EARTH SKATE</div>
		
      
		</div>
        
		<!--First widget-->    
		<div class="one_fourth">
		<div class="footer-title">INICIO</div>
		<div class="footer-content">
        <ul>
        	<li><a href="#">Noticias</a></li>
            <li><a href="#">Riders</a></li>
            <li><a href="#">Spots </a></li>
            <li><a href="#">Eventos</a></li>
        </ul>
        </div>
		</div>
        
		<!--First widget-->    
		<div class="one_fourth column-last">
		<div class="footer-title">PRODUCTOS</div>
		<div class="footer-content">
        <ul>
        	<li><a href="#">Nuevos productos</a></li>
            <li><a href="#">Promociones</a></li>
            <li><a href="#">Hombres</a></li>
            <li><a href="#">Mujeres</a></li>
        </ul>
        </div>
		</div>
        
	</div>

<!--Copyright-->
	
	<div id="copyright">
	&copy; BlackEarthSkate Derechos reservados
	</div>

<!--End Wrapper-->
</div>
</body>
</html>