$(document).ready(function() {

//*** Rollover effect for images in columns ***//

	$('.columns .imageWrapper img').css({'opacity':0.6});
	$('.columns .imageWrapper').append('<div class="overlay"></div>');
	$('.columns .imageWrapper').append('<div class="overlayLogo"></div>');
	$('.columns .imageWrapper').hover(function() {
		$(this).children('img').stop().fadeTo(200,1);
		$(this).children('.overlay').stop().fadeTo(200,0);
		$(this).children('.overlayLogo').stop().fadeTo(200,1);
		$(this).parent().find('.readMore').stop().css({'background-position':'0 -14px'}).animate({color:'#ffc528'},200);
	},
	function() {
		$(this).children('img').stop().fadeTo(200,0.6);
		$(this).children('.overlay').stop().fadeTo(200,1);
		$(this).children('.overlayLogo').stop().fadeTo(200,0);
		$(this).parent().find('.readMore').stop().css({'background-position':'0 2px'}).animate({color:'#ffffff'},200);
	});
	
/* For Read more link */
	$('.columns .column .readMore').hover(function(e) {
		$(this).css({color:'#ffffff'});
		$(this).stop().css({'background-position':'0 -14px'}).animate({color:'#ffc528'},200);
		$(this).parent().find('.imageWrapper img').stop().fadeTo(200,1);
		$(this).parent().find('.imageWrapper .overlay').stop().fadeTo(200,0);
		$(this).parent().find('.imageWrapper .overlayLogo').stop().fadeTo(200,1);
	},
	function() {
		$(this).stop().css({'background-position':'0 2px'}).animate({color:'#ffffff'},200);
		$(this).parent().find('.imageWrapper img').stop().fadeTo(200,0.6);
		$(this).parent().find('.imageWrapper .overlay').stop().fadeTo(200,1);
		$(this).parent().find('.imageWrapper .overlayLogo').stop().fadeTo(200,0);
	});
	
//*** For images in posts ***//

	$('.recentPosts .imageWrapper img, .layout1 .imageWrapper img, .layout2 .imageWrapper img').css({'opacity':0.6});
	$('.recentPosts .imageWrapper, .layout1 .imageWrapper, .layout2 .imageWrapper').append('<div class="overlay"></div>');
	$('.overlayDate').before('<div class="overlayDateHover" style="display:none;"></div>');
	
	$('.recentPosts article, .layout2 article').hover(function() {
		window.bgTmp=$(this).find('.imageWrapper .overlayDate').css('background-image');
		$(this).stop().animate({backgroundColor:'#222222'},200);
		$(this).find('.content').stop().animate({color:'#999999'},200);
		$(this).find('.imageWrapper img').stop().fadeTo(200,1);
		$(this).find('.imageWrapper .overlay').stop().fadeTo(200,0);
		$(this).find('.imageWrapper .overlayDateHover').stop().fadeTo(200,1, function() { $(this).parent().find('.overlayDate').css({'background-image':'none'}); } );
		$(this).find('.imageWrapper .overlayDate').stop().animate({color:'#ffc528'});
		$(this).find('.meta, .meta a').stop().animate({color:'#ffc528'});
	},
	function() {
		$(this).stop().animate({backgroundColor:'#111111'},200);
		$(this).find('.content').stop().animate({color:'#666666'},200);
		$(this).find('.imageWrapper img').stop().fadeTo(200,0.6);
		$(this).find('.imageWrapper .overlay').stop().fadeTo(200,1);
		$(this).parent().find('.overlayDate').css({'background-image':window.bgTmp});
		$(this).find('.imageWrapper .overlayDateHover').stop().fadeTo(200,0);
		$(this).find('.imageWrapper .overlayDate').stop().animate({color:'#666666'});
		$(this).find('.meta, .meta a').stop().animate({color:'#999999'});
	});
	
	$('.layout1 article').hover(function() {
		window.bgTmp=$(this).find('.imageWrapper .overlayDate').css('background-image');
		$(this).find('.content').stop().animate({color:'#999999'},200);
		$(this).find('.imageWrapper img').stop().fadeTo(200,1);
		$(this).find('.slider .overlay').stop().fadeTo(200,0);
		$(this).find('.imageWrapper .overlay').stop().fadeTo(200,0);
		$(this).find('.imageWrapper .overlayDateHover').stop().fadeTo(200,1, function() { $(this).parent().find('.overlayDate').css({'background-image':'none'}); } );
		$(this).find('.imageWrapper .overlayDate').stop().animate({color:'#ffc528'});
		$(this).find('.meta, .meta a').stop().animate({color:'#ffc528'});
	},
	function() {
		$(this).find('.content').stop().animate({color:'#666666'},200);
		$(this).find('.imageWrapper img').stop().fadeTo(200,0.6);
		$(this).find('.slider .overlay').stop().fadeTo(200,1);
		$(this).find('.imageWrapper .overlay').stop().fadeTo(200,1);
		$(this).parent().find('.overlayDate').css({'background-image':window.bgTmp});
		$(this).find('.imageWrapper .overlayDateHover').stop().fadeTo(200,0);
		$(this).find('.imageWrapper .overlayDate').stop().animate({color:'#666666'});
		$(this).find('.meta, .meta a').stop().animate({color:'#999999'});
	});

//*** Rollover effect for sliding footer ***//

	$('#slidingFooter .imageWrapper img').css({'opacity':0.6});
	$('#slidingFooter .imageWrapper').append('<div class="overlay"></div>');
	$('#slidingFooter .latestPosts .imageWrapper').hover(function() {
		$(this).addClass('hover');
		$(this).children('img').stop().fadeTo(200,1);
		$(this).children('.overlay').stop().fadeTo(200,0);
	},
	function() {
		$(this).removeClass('hover');
		$(this).children('img').stop().fadeTo(200,0.6);
		$(this).children('.overlay').stop().fadeTo(200,1);
	});
	$('#slidingFooter .featuredProject .imageWrapper').append('<div class="overlayLogo"></div>');
	$('#slidingFooter .featuredProject .imageWrapper').hover(function() {
		$(this).children('img').stop().fadeTo(200,1);
		$(this).children('.overlay').stop().fadeTo(200,0);
		$(this).children('.overlayLogo').stop().fadeTo(200,1);
	},
	function() {
		$(this).children('img').stop().fadeTo(200,0.6);
		$(this).children('.overlay').stop().fadeTo(200,1);
		$(this).children('.overlayLogo').stop().fadeTo(200,0);
	});

});