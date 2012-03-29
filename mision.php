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
								<li>misi&#243;n</li>
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
					<span style="font-weight:bold;color:#034179">MISI&#211;N :  </span><br><br>
							Proporcionar a la poblaci&#243;n peruana reactivos de diagn&#243;stico, equipos e instrumental m&#233;dico, procurando la total satisfacci&#243;n de nuestros clientes, cumpliendo con las regulaciones oficiales de calidad total para nuestro rubro,  teniendo como primordial fundamento la constante actualizaci&#243;n cient&#237;fica y tecnol&#243;gica, &#233;ticamente aplicadas.
					<br><br>
					<span style="font-weight:bold;color:#034179">VISI&#211;N :  </span><br><br>
							Ser la empresa l&#237;der en el rubro de ventas de reactivos de diagn&#243;stico, equipos e instrumental m&#233;dico, con el m&#225;s alto nivel de competitividad, excelencia e innovaci&#243;n, comprometida a contribuir al logro de la calidad total en la salud de la poblaci&#243;n, con un adecuado manejo de los costos que nos permitan manejar una rentabilidad  y un crecimiento sostenido en el mercado de todo el pa&#237;s.
					
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
											<li class="ui-state-active">
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
