<!doctype html>

<head>
	<meta charset="utf-8">
	<title>.:: Genia-tech ::.</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="js/modernizr-2.0.6.min.js"></script>
	
	<!-- slider-proveedores -->
	<?php include("include/js-proveedor.php") ?>
	<!-- end slider-proveedores -->
	
	
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
								<li>Quienes</li>
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
						
						
						
						<div class="content"> 
						
						
					
					<div style="padding:10px; width:496px;line-height:20px;float:left;text-align:justify">
					<h1 style="color:#034179"> Genia Tech S.A.C. </h1>
					<hr>
						<!--Es una empresa l&#237;der especializada en el rubro de ventas de reactivos de diagn&#243;stico, equipos e instrumental m&#233;dico en Per&#250;.
 Fue fundada el 4 de Noviembre del 2002 como una empresa familiar siendo el due&#241;o y actual gerente general el <strong>Ing. C&#233;sar Carlos</strong> Canales y su esposa CPC. Rosana Camones.
Actualmente contamos con una s&#243;lida y variada cartera de clientes en todo Lima constituida por Laboratorios, Cl&#237;nicas, Universidades, Centros de Investigaci&#243;n, Hospitales, Consultorios privados y otros.
Nuestra empresa esta orientada a brindar un servicio de calidad que garantice una total satisfacci&#243;n de nuestros clientes y as&#237; mismo, fortalecer la relaci&#243;n comercial con nuestros proveedores internacionales en base a la confianza adquirida a lo largo de los a&#241;os.-->
	<p> Es una empresa l&#237;der que est&#243; orientada a brindar un servicio de calidad que garantice una total satisfacci&#243;n a nuestros clientes, as&#237; mismo  apuesta por la tecnolog&#237;a de vanguardia y se lo hace llegar con el fin de que Ud. y su empresa tengan lo mejor para un buen desempe&#241;o. </P>
	<p> Fue <strong>fundada en el a&#241;o 2002 </strong>y desde ese momento <strong>mantenemos el compromiso de suministrar innovadoras pruebas de diagn&#243;stico, equipo y material m&#233;dico de calidad internacional.</strong> </p>
	<p> Actualmente somos reconocidos como una de las empresas m&#225;s importantes en su campo y por eso contamos con una s&#243;lida y variada cartera de clientes  constituida por <strong>Laboratorios, Cl&#237;nicas, Universidades, Centros de Investigaci&#243;n, Hospitales, Consultorios privados y otros. </strong> </p>
	<p> Sabemos que el crecimiento de la empresa se basa en el fortalecimiento de las relaciones comerciales con nuestros usuarios y proveedores internacionales en base a la confianza adquirida a lo largo de los a&#241;os </p>


					</div>
					<img src="images/quienes/img2.jpg" width="200" height="400" style="padding:10px;float:right" />

						</div>
						
						<aside id="sidebar">
						
							<div class="box">
								<!-- category box -->
								<h2>Genia- tech</h2>
								<div class="holder">
									<div class="frame-box">
										<!-- accordion -->
										<ul class="accordion2">
											<li class="ui-state-active">
												
												<a href="quienes.php" class="opener"><span>Quienes Somos</span></a>
												
											</li>
											<li >
												<a href="mision.php" class="opener"><span>Misi&#243;n y Visi&#243;n</span></a>
												
											</li>
											<li>
												<a href="valores.php" class="opener"><span>Valores</span></a>
												
											</li>
											
										</ul>
										</div>
									</div>
								</div>
						<img src="images/quienes/banner.jpg" class="banner" width="220" height="260" alt="" />
						
						</aside>

						
						<!-- Nuestros proveedores -->	
								
								<?php include("include/proveedores.php") ?>
								<div style="padding:20px"> </div>
        						<!-- end proveedores -->
						
						
						
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
