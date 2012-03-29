<!doctype html>

<head>
	<meta charset="utf-8">
	<title>.:: Genia-tech ::.</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/PIE.htc">
	<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="js/modernizr-2.0.6.min.js"></script>
	<script src="js/inputs.js"></script>
	<script src="js/slide.js"></script>
	<script src="js/jquery.accordion.js"></script>
	<script src="js/main.js"></script>
	<script src="js/tabs.js"></script>
	<script src="js/addClass.html"></script>
	<script type="text/javascript" src="js/jquery.galleryScroll.1.5.2.js"></script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
	<script type="text/javascript" src="js/jquery.dropDown.pack.js"></script>
	
	<!-- slider-proveedores -->
	<?php include("include/js-proveedor.php") ?>
	<!-- end slider-proveedores -->
	
<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>

<link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
	
	
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
	<script type="text/javascript">
	jQuery(function(){
		jQuery('div.G4').galleryScroll({
			slideNum:'div.s2',
			autoSlide:3000
		});
	});
</script>


<style type"text/css">

body{margin:0px;padding:0px;font-family:Arial;}
a img,:link img,:visited img { border: none; }
table { border-collapse: collapse; border-spacing: 0; }
:focus { outline: none; }
*{margin:0;padding:0;}
p, blockquote, dd, dt{margin:0 0 8px 0;line-height:1.5em;}
fieldset {padding:0px;padding-left:7px;padding-right:7px;padding-bottom:7px;}
fieldset legend{margin-left:15px;padding-left:3px;padding-right:3px;color:#333;}
dl dd{margin:0px;}
dl dt{}

.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden;}
.clearfix{display:block;zoom:1}


ul#thumblist{display:block;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{display:block;border:1px solid #CCC;}
ul#thumblist li a.zoomThumbActive{
    border:1px solid red;
}

.jqzoom{

	text-decoration:none;
	float:left;
}





</style>
<script type="text/javascript">

$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'innerzoom',
            preloadImages: false,
            alwaysOn:false
        });
});


</script>





</head>
<body>
	<div id="wrapper">
		<!-- header -->
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
								<li><a href="categoria.php">Categoria</a></li>
								<li>Producto</li>
							</ul>
							<ul class="social-networks">
								<li><a href="#" class="facebook">facebook</a></li>
								<!--<li><a href="#" class="gmail">gmail</a></li>
								<li><a href="#" class="rss">rss</a></li>
								<li><a href="#" class="social-link">social-link</a></li>-->
								<li><a href="#" class="twitter">twitter</a></li>
								
							</ul>
						</div>
					</div>
				
				<div id="content">
						<!-- content -->
						
						<div class="content">
							<div class="box">
								<h2>PRUEBAS RAPIDAS  </h2>
								<!--<span class="top-new big-top">top</span>-->
								<div class="holder">
									<div class="frame-box">
										<div class="container">
											<!-- description -->
											<div class="description-box">
												
												
												
												<div class="text-holder">
													<p>
													DIAsource inmunoassaysSA ofrece una nueva gama de Pruebas r&#225;pidos para suministrar a los 
													laboratorios cl&#237;nicos con una excelente alternativa(ocomplementaria) para los inmuno ensayos en gorrosos y 
													lentos. El uso de estos Pruebas r&#225;pidos se reducir&#225; autom&#225;ticamente el tiempo de respuesta(TAT) de una muestra 
													determinada y ampliar las posibilidades de los hospitales para desarrollar centros POCT(Punto de Tratamiento) 
													para la cardiolog&#237;a, el embarazo y la fertilidad, las drogas de abuso, las enfermedades infecciosas. 
													Estas pruebas r&#225;pidas innovadoras combinan alta calidad, sencillez, rapidez y especificidad.
													</p>
													
													
													<div class="btns-area">
														
													
														<a href="contactanos.php" target="_blank" class="more sub-more compare"><span>Contactanos</span></a>
														
													</div>
												</div>
											</div>
											<!-- carousel -->
											<div class="carousel">
												
												<div id="gallery">
												
													<div class="clearfix" id="content" style="width:395px;"  >
    <div class="clearfix" style="margin-left:46px;float:left">
        <a href="imgProd/diabetes_met/diabetes_met.jpg" class="jqzoom" rel='gal1'  title="Genia-tech" >
            <img src="imgProd/diabetes_met/diabetes_met.jpg"  title="Genia-tech"  style="border: 4px solid #666;">
        </a>

    </div>
	<br/>
     
</div>
												
												</div>
												
											</div>
											
										</div>
										
										
										<!-- -->
										
									</div>
								</div>
							</div>
							
							
							
							
							
						</div>
						<!-- aside -->
						<aside id="sidebar">
							<?php include("include/acordeon-menu.php") ?>
												
						<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FGenia-tech%2F386318784731637%3Fref%3Dts&amp;width=222&amp;height=266&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=true&amp;appId=186694071384170" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:222px; height:266px;" allowTransparency="true"></iframe>
						</aside>
						
						
						<!-- Nuestros proveedores -->	
								<div style="padding:290px"> </div>
								<?php include("include/proveedores.php") ?>
								<div style="padding:20px"> </div>
        						<!-- end proveedores -->
						
						
					</div> <!-- -->
				</div>
			</div>
		</div>
		
		
		<!-- footer -->
		<?php include("include/footer.php") ?>
		<!-- end footer -->
	
	</div>
</body>

</html>
