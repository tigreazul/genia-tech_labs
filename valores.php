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
								<li >Valores</li>
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
						
						
					
					<div style="padding:10px; width:496px;line-height:25px;float:left;text-align:justify">
							<h1 style="color:#034179">Valores </h1>
							<hr>
							
	<li>El cliente es nuestra principal prioridad.</li>
	<li>Cumplir y fomentar el cumplimiento de las normas oficiales establecidas por  las  leyes nacionales, c&#243;digos y farmacopeas internacionales.</li>
	<li>Realizar un trabajo en equipo que garantice un servicio profesional, r&#225;pido y de calidad.</li>
	<li>Lograr con nuestros productos el mayor nivel de satisfacci&#243;n en nuestros clientes y de las instituciones que forman parte del estado peruano.</li>
	<li>Contribuir al desarrollo profesional del personal que labora en la empresa.</li>
	<li>Conseguir un justo retorno para los inversionistas.</li>
	<li>Convertir al Trabajo en Equipo en parte de nuestra cultura organizacional.</li>
	<li>Buscar  la excelencia en nuestros productos y el servicio que brindamos.</li>
	<li>La relaci&#243;n con nuestros proveedores se basa en la confianza, ya que estos cumplen con todos los est&#225;ndares de calidad a nivel internacional.</li>
	<li>Consideramos que la atenci&#243;n oportuna a nuestros clientes es parte esencial del servicio que brindamos.</li>

							
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
											<li >
												
												<a href="quienes.php" class="opener"><span>Quienes Somos</span></a>
												
											</li>
											<li >
												<a href="mision.php" class="opener"><span>Misi&#243;n y Visi&#243;n</span></a>
												
											</li>
											<li class="ui-state-active">
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
