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
								
								<h2>RIA/IRMA II </h2>
								<div class="holder">
									<div class="frame-box">
										<!-- blocks -->
										<div class="blocks-holder blocks-subholder">
											<div class="block">
												<figure>
													<img src="imgProd/marcadores_inmu.jpg" width="183" height="135" alt="" />
													
												</figure>
												<h3><a href="ria_marcadores.php">MARCADORES INMUNOLOGICOS </a></h3>
													<p>
													Los estudios cl&#237;nicos muestran que muchas citoquinas juegan un papel crucial en el c&#225;ncer, enfermedades 
													infecciosas, alergias, enfermedades inflamatorias, autoinmunes y de rechazo al injerto...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_marcadores.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
												
											</div>
											<div class="block">
												<figure>
													<img src="imgProd/tiroide.jpg" width="183" height="134" alt="" />
													
												</figure>
												<h3><a href="ria_tiroide.php">TIROIDES</a></h3>
													<p>
													La funci&#243;n de la gl&#225;ndula tiroides es tomar el yodo, que se encuentra en muchos alimentos, y la convierten en las hormonas tiroideas tiroxina (T4) ytriyodotironina (T3)...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_tiroide.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											</div>
											<div class="block">
												<figure>
													<img src="imgProd/21trisomy.jpg" width="183" height="134" alt="" />
													
												</figure>
												<h3><a href="ria_21trisomy.php">21 TRISOMY</a></h3>
													<p>
													Las anomal&#237;as cromos&#243;micas, comoel s&#237;ndrome de Down, puedendiagnosticarse frecuentementeantes del 
													nacimiento a trav&#233;s delan&#225;lisis de las c&#233;lulas del l&#237;quidoamni&#243;tico o de la placenta...
													</p>
												<!--<span class="top-new">new</span>-->
												<div class="btns-holder">
													<a href="ria_21trisomy.php" class="add">Leer mas...</a>
													<!--<a href="#" class="detail">Detail</a>-->
												</div>
											</div>
																				
											
											
																						
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
