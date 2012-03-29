<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<title>.:: Genia-tech ::.</title>
	
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="js/modernizr-2.0.6.min.js"></script>
	<script src="js/inputs.js"></script>
	<script src="js/slide.js"></script>
	<script src="js/jquery.accordion.js"></script>
	<script src="js/main.js"></script>
	<script src="js/addClass.html"></script>
	<script type="text/javascript" src="js/jquery.galleryScroll.1.5.2.js"></script>
	
	
	<script src="js/rollovers.js"></script>
	
	
	<!-- -->


<style type="text/css">	@import "css/home.css";</style>
	<!-- -->
	
	
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
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
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
 
       <!-- slider-proveedores -->
	<?php include("include/js-proveedor.php") ?>
	<!-- end slider-proveedores -->


<script>
	$(document).ready(function() {

	//Speed of the slideshow
	var speed = 5000;
	
	//You have to specify width and height in #slider CSS properties
	//After that, the following script will set the width and height accordingly
	$('#mask-gallery, #gallery li').width($('#slider').width());	
	$('#gallery').width($('#slider').width() * $('#gallery li').length);
	$('#mask-gallery, #gallery li, #mask-excerpt, #excerpt li').height($('#slider').height());
	
	//Assign a timer, so it will run periodically
	var run = setInterval('newsscoller(0)', speed);	
	
	$('#gallery li:first, #excerpt li:first').addClass('selected');

	//Pause the slidershow with clearInterval
	$('#btn-pause').click(function () {
		clearInterval(run);
		return false;
	});

	//Continue the slideshow with setInterval
	$('#btn-play').click(function () {
		run = setInterval('newsscoller(0)', speed);	
		return false;
	});
	
	//Next Slide by calling the function
	$('#btn-next').click(function () {
		newsscoller(0);	
		return false;
	});	

	//Previous slide by passing prev=1
	$('#btn-prev').click(function () {
		newsscoller(1);	
		return false;
	});	
	
	//Mouse over, pause it, on mouse out, resume the slider show
	$('#slider').hover(
	
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('newsscoller(0)', speed);	
		}
	); 	
	
});


function newsscoller(prev) {

	//Get the current selected item (with selected class), if none was found, get the first item
	var current_image = $('#gallery li.selected').length ? $('#gallery li.selected') : $('#gallery li:first');
	var current_excerpt = $('#excerpt li.selected').length ? $('#excerpt li.selected') : $('#excerpt li:first');

	//if prev is set to 1 (previous item)
	if (prev) {
		
		//Get previous sibling
		var next_image = (current_image.prev().length) ? current_image.prev() : $('#gallery li:last');
		var next_excerpt = (current_excerpt.prev().length) ? current_excerpt.prev() : $('#excerpt li:last');
	
	//if prev is set to 0 (next item)
	} else {
		
		//Get next sibling
		var next_image = (current_image.next().length) ? current_image.next() : $('#gallery li:first');
		var next_excerpt = (current_excerpt.next().length) ? current_excerpt.next() : $('#excerpt li:first');
	}

	//clear the selected class
	$('#excerpt li, #gallery li').removeClass('selected');
	
	//reassign the selected class to current items
	next_image.addClass('selected');
	next_excerpt.addClass('selected');

	//Scroll the items
	$('#mask-gallery').scrollTo(next_image, 800);		
	$('#mask-excerpt').scrollTo(next_excerpt, 800);					
	
}
</script>

<script type="text/javascript">
	jQuery(function(){
		jQuery('div.G4').galleryScroll({
			slideNum:'div.s2',
			autoSlide:3000
		});
	});
</script>
	
	<style type="text/css">
		.bar{
			float:left;
			width:104px;
			padding: 13px;	
		}
		.barra_lat{
			width: 100%;
		}
		
		.space{
		padding:5px;
		float:left;
			width:4px;	
		}
		.cont{
			width: 100%;
			margin-bottom: 20px;
			/*height: 544px;*/
			
		}
		
		.col1{
			float:left;
			width: 625px;
			padding:10px;
			/*background-color:#003145;*/
		}
		.col2{
			float:left;
			width: 322px;
			padding:10px;
			/*background-color:#878725;*/
		}
		
		.espac{
			padding: 20px;
		}
		
		.baner{
			height: 208px;
			width: 488px;
			/*background-color:#003D5D;*/
		}
		
		.baner2{
			height: 208px;
			width: 488px;
			/*background-color:#008000;*/
		}
	</style>



</head>
<body>
	<div id="wrapper">
		<!-- header -->
		<div id="header">
			<?php include("include/cabezera.php") ?>
		</div><!-- end header -->
		<!-------------------------------------------->
			<!-- main -->
			<div id="main">
				<!-- slider -->
				<?php include("include/slider.php") ?>
				 <!-- end slider -->
				
	                <div class="main-holder">     
						<div class="main-frame">
						
						 <!--<div style="margin:0 auto; width:460px;float:right;margin-right:76px">
							<div style="padding:10px"> <marquee> "LO MEJOR PARA UN BUEN DESEMPE&#209;O"</marquee> </div>
						</div>-->
						
							<div id="content">
							
								<!-- Contenido Categorias -->
								<div id="barra_lat">
										<!-- -->
											
											

<div id="home-main">				



   
  

    <div class="home-bigbnr">
	
	 <div id="home-text">

    

    	<h1>Bienvenidos</h1>

        

        <p style="line-height:26px;text-align:justify">Es una empresa l&#237;der que est&#243; orientada a brindar un servicio de calidad que garantice una total satisfacci&#243;n a nuestros clientes, as&#237; mismo apuesta por la <strong>tecnolog&#237;a de vanguardia </strong>y se lo hace llegar con el fin de que Ud. y su empresa tengan lo mejor para un buen desempe&#241;o.</p>

        

        <h3 style="margin-top:-8px"><a href="quienes.php" style="text-decoration: none; font-size:12px">Leer m&#225;s</a></h3>

        

	</div>


		<object style="height: 290px; width: 460px"><param name="movie" value="http://www.youtube.com/v/4VBbYBv8-4c?version=3&feature=player_detailpage"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/4VBbYBv8-4c?version=3&feature=player_detailpage" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="460" height="260"></object>

    </div>

	
   

	

  

			</div>

		
											
											
										<!-- -->
										
									</div><!-- end Barra Lateral -->	
									
									<div class="content">
									
								<?php include("include/linea-categoria.php")  ?>
								
								</div>
								
								
								<!-- Contenido -->
								<div class="cont">
									<div class="col1">

				<div class="homeRow">
				
				  
					<div id="blog">
								
							<h3><a href="/blog/" title="Six Celebrity Events To Promote Know Your Stuff">Febrero 2012</a></h3>
								
							<p><strong> GENIA TECH </strong>es el representante exclusivo para el PERU del Software de Laboratorio  Slclabde la Empresa Espa&#241;ola  SLCLAB Inform&#224;tica S.L.</p>
								
							
					</div>
				
					<div id="newsletter">
						<h3>  Revisi&#243;n de Inmunolog&#237;a B&#225;sica  </h3>	
						<p id="news1" style="width:222px">Reuni&#243;n sobre Inmunolog&#237;a que tendr&#225; lugar en <strong>Lima los d&#237;as 29 de Mayo a 2 de Junio del 2012</strong>  </p>
								
						<p> <a href="eventos.php" >Leer mas</a> </p>
						
								
					</div>
					
					
				</div>
					<div style="clear: both"></div>	
					<!--<div id="banee">
						s <br>
						scsds
					</div>
					
					<div id="banee2">
						s <br>
						scsds
					</div>-->
						
										
										<!-- -->
									</div>
									<!-- -->
									<div class="col2">
										<!--<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fblackearthsk8&amp;width=363&amp;height=427&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:363px;margin-left:124px; height:427px;" allowTransparency="true"></iframe>--> 
										<!--<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Friostudio&amp;width=336&amp;height=360&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:336px;  height:360px;" allowTransparency="true"></iframe>-->
										<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FGenia-tech%2F386318784731637%3Fref%3Dts&amp;width=336&amp;height=303&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=true&amp;appId=186694071384170" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:336px; height:303px;" allowTransparency="true"></iframe>
									</div>
								</div>	
									
									
								<!-- Nuestros proveedores -->	
								
								<?php include("include/proveedores.php") ?>
								<div style="padding:20px"> </div>
        						<!-- end proveedores -->
								
									
								
								
							</div><!-- end content-->
						</div><!-- end main-frame -->
				
					</div><!-- main-holder -->
					
	
			</div><!-- end main -->
			
			
		
		
		<!-- footer -->
		<?php include("include/footer.php") ?>
		<!-- end footer -->
		
	</div><!-- end wrapper -->
</body>
</html>
