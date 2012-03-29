<!doctype html>

<head>
	<meta charset="utf-8">
	<title>.:: Genia-tech ::.</title>
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="css/cusel.css">
	<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="js/modernizr-2.0.6.min.js"></script>
	<script src="js/inputs.js"></script>
	<script src="js/slide.js"></script>
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
	<script type="text/javascript">
<!--
jQuery(document).ready(function(){

var params = {
		changedEl: ".lineForm select",
		visRows: 5,
		scrollArrows: true
	}

	cuSel(params);
	
	var params = {
		changedEl: "#city",
		scrollArrows: false
	}

	cuSel(params);
	
	
	
jQuery("#showSel").click(
function()
{
	jQuery(this).prev().fadeIn();
	params = {
	visRows: 4
	}
	cuSelRefresh(params);

});
});
-->
</script>
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
					
					<?php include("include/social.php") ?>
					
					<div id="content">
						<!-- content -->
						<div class="content">
							<div class="box">
								
								<h2>RIA/IRMA  I</h2>
								<div class="holder">
									<div class="frame-box">
										<!-- blocks -->
										<div class="blocks-holder blocks-subholder">
											<div class="block">
												<figure>
													<img src="imgProd/autoinmunidad2.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="ria_autoinmunidad.php">AUTOINMUNIDAD</a></h3>
													<p>
													La autoinmunidad es la falta de un organismo para reconocer sus elementos 
													constitutivos propios por cuenta propia, lo que provoca una respuesta inmune 
													en contra de sus propias c&#233;lulas y tejidos.
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_autoinmunidad.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
												
											</div>
											<div class="block">
												<figure>
													<img src="imgProd/animas_biogenas.jpg" width="183" height="134" alt="" />
													
												</figure>
												<h3><a href="ria_anima_biogenas.php">AMINAS BIOGENAS </a></h3>
													<p>
													Amina biog&#233;nica es un t&#233;rmino qu&#237;micamente impreciso, que, por convenci&#243;n, 
													incluye las catecolaminas: epinefrina (o adrenalina), norepinefrina(o noradrenalina)...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_anima_biogenas.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											</div>
											<div class="block">
												<figure>
													<img src="imgProd/metabolismo_huesos.jpg" width="183" height="134" alt="" />
													
												</figure>
												<h3><a href="ria_metabolismo_huesos.php">METABOLISMO ALOS HUESOS</a></h3>
													<p>
													Los huesos est&#225;n sometidos de forma continua un proceso din&#225;mico de resorci&#243;n y absorci&#243;n conocido 
													como metabolismo &#243;seo.V&#237;as de se&#241;alizaci&#243;n en que el
													metabolismo de los huesos depende de incluir la acci&#243;n de varias hormonas...

													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_metabolismo_huesos.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											</div>
											<!-- -->
												<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/marcadores-tumorales.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="ria_marcadores_tumorales.php">MARCADORES TUMORALES</a></h3>
													<p>
													Los marcadores tumorales s&#233;ricos es un t&#233;rmino com&#250;nmente utilizado para referirse a las mol&#233;culas que 
													se pueden detectar en una muestra de sangre mediante m&#233;todos inmunoqu&#237;micos...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_marcadores_tumorales.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											
											</div>
											<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/equilibrio_cardiovascular.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="ria_cardiovascular.php">EQUILIBRIO CARDIOVASCULAR</a></h3>
													<p>
													El sistema renina-angiotensina (RAS) o el sistema renina-angiotensina-aldosterona (RAAS)
													(RAAS) es un sistema hormonal que regula la presi&#243;n sangu&#237;nea y el balance de agua(l&#237;quido).
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_cardiovascular.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											
											</div>
											<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/diabetes_met.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="ria_diabetes.php">DIABETES Y METABOLISMO</a></h3>
													<p>
													La diabetes mellitus es un trastorno del metabolismo de los carbohidratos. Es una enfermedad 
													caracterizada por la hiper glucemia persistente (niveles altos de az&#250;car en la sangre).
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_diabetes.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											
											</div>
											<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/fertilidad.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="ria_fertilidad.php">FERTILIDAD </a></h3>
														<p>
														Con el fin de comprender las causas de la infertilidad y el tratamiento del papel que 
														desempe&#241;a  la infertilidad moderna en 
														la asistencia a la concepci&#243;n, es &#250;til examinar el proceso natural...
														</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_fertilidad.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											
											</div>
											<!-- -->
											
										
											<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/crecimiento.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="ria_crecimiento.php">FACTORES DE CRECIMIENTO </a></h3>
													<p>
													El termino factor de crecimiento se refiere a una prote&#237;na natural capaz de estimular la 
													proliferaci&#243;n celular y la diferenciaci&#243;n celular...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_crecimiento.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											
											</div>
											<!-- -->
											
											
											
																						
										</div>
										<!-- paging -->
										
										
										<div class="btns-holder" style="padding:33px">
											<ul class="paging">
												<li><a href="ria.php">1</a></li>
												<li><a href="ria2.php">2</a></li>
												
											</ul>
										</div><!-- end paginacon-->
										
									</div>
								</div>
							</div>
						</div>
						<!-- aside -->
						<aside id="sidebar">
						<?php include("include/acordeon-menu.php") ?>
						
						<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FGenia-tech%2F386318784731637%3Fref%3Dts&amp;width=222&amp;height=266&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=true&amp;appId=186694071384170" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:222px; height:266px;" allowTransparency="true"></iframe>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include("include/footer.php") ?>
		<!-- end footer -->
	</div>
</body>

</html>
