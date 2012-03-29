Cufon.replace('h1, h2, h3', { fontFamily: 'tahoma' });

$(function() {

	//Drop down menus
	$('ul.jd_menu').jdMenu();

	
	//Print current page
	$("#print").click(function() { window.print();} );	

	//Show/Hide Sitemap
	$("#sitemapFunction").click(function() {
		if($("#sitemapContent").is(":hidden")) {
			$("#sitemapContent").slideDown("slow", function() {
				$("#sitemapFunction").html('<img src="/gfx/closeSitemap.png" alt="Close Sitemap" />');
			});	
		}
		else{
			$("#sitemapContent").slideUp("slow", function() {
				$("#sitemapFunction").html('<img src="/gfx/openSitemap.png" alt="Open Sitemap" />');
			});				
		}
	});
	
	//Text resizing
	$("a.size1").click( function() { $("body").removeClass().addClass("size1"); $.ajax({ data: "action=textsize&size=1" }); return false; });
	$("a.size2").click( function() { $("body").removeClass().addClass("size2"); $.ajax({ data: "action=textsize&size=2" }); return false; }); 
	$("a.size3").click( function() { $("body").removeClass().addClass("size3"); $.ajax({ data: "action=textsize&size=3" }); return false; });
	
	//Add even class to even list items for zebra striping
	$(".panel li:nth-child(even)").addClass("even");	
	
	//Expand and collapse
	$(".expand").click( function() {
		$(this).toggleClass("sprite").next().slideToggle("slow");
	});
	
	//Clear default values from login fields on focus
	$("#email").focus(function() {
		if ($(this).val() == "email address")
			$(this).val("");		
	});
	$("#password").focus(function() {
		if ($(this).val() == "password")
			$(this).val("");		
	});

	//Add default values back on blur
	$("#email").blur(function() {
		if ($(this).val() == "")
			$(this).val("email address");						   
	});
	$("#password").blur(function() {
		if ($(this).val() == "")
			$(this).val("password");						   
	});

	//Login to the website
	$("#login").click(function ()
	{
	  $("#loginForm").submit();
	});

});