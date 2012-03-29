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
								
								<h2>NYCOCARD READER II </h2>
								<div class="holder">
									<div class="frame-box">
										<!-- blocks -->
										<div class="blocks-holder blocks-subholder">
											<div class="block">
												<figure>
													<img src="imgProd/HbA1C.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="nycocard_HbA1C.php">HbA1C </a></h3>
													<p>
													La determinaci&#243;n de la Hemoglobina Glicada (HbA1c) se ha convertido en un eje central 
													del cuidado de la diabetes. El control de la glicemia permite evitar complicaciones graves 
													en diab&#233;ticos como fallas renales y retinopat&#237;a...
													</p>
													
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="nycocard_HbA1C.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
												
											</div>
											<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/D-DIMER.jpg" width="183" height="134" alt="" />
													
												</figure>
												<h3><a href="nycocard_D-Dimer.php">D-DIMER </a></h3>
													<p>
													El Nycocard D&#237;mero D mide las mol&#233;culas configuradas como D&#237;mero D que son 
													liberadas a la circulaci&#243;n por la activaci&#243;n del sistema de fibrin&#243;lisis...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="nycocard_D-Dimer.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											</div>
											<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/U-ALBUMIN.jpg" width="183" height="134" alt="" />
													
												</figure>
												<h3><a href="nycocard_B-Albumin.php">U-ALBUMIN </a></h3>
													<p>
													La Albumina es una peque&#241;a prote&#237;na presente en altas concentraciones 
													en plasma. Normalmente solo peque&#241;as cantidades de albumina son excretadas en la orina...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="nycocard_B-Albumin.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											</div>
											
											<!-- -->
											<div class="block">
												<figure>
													<img src="imgProd/PCR.jpg" width="183" height="134" alt="" />
													
												</figure>
												<h3><a href="nycocard_pcr.php">PCR</a></h3>
													<p>
													La prote&#237;na C reactiva (CRP) es un marcador sensible de la inflamaci&#243;n que se ha convertido en una prueba r&#225;pida ideal 
													para el diagn&#243;stico y seguimiento de enfermedades infecciosas y condiciones inflamatorias...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="nycocard_pcr.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											</div>
											
											
																						
										</div>
										<!-- paging -->
										<div class="btns-holder">
											<ul class="paging">
											
											</ul>
										</div>
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
