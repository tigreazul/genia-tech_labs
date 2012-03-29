
function initPage() {
	initDropDown();
}
function initDropDown()
{
	var nav = document.getElementById("nav");
	if(nav) {
		var lis = nav.getElementsByTagName("li");
		for (var i=0; i<lis.length; i++) {
			if(lis[i].getElementsByTagName("ul").length > 0) {
				lis[i].className += " active"
				lis[i].getElementsByTagName("a")[0].className += " active-a"
			}
			lis[i].onmouseover = function()	{
				this.className += " hover";
			}
			lis[i].onmouseout = function() {
				this.className = this.className.replace(" hover", "");
			}
		}
	}
}
if (window.addEventListener)
	window.addEventListener("load", initPage, false);
else if (window.attachEvent && !window.opera)
	window.attachEvent("onload", initPage);

$(document).ready(function() {
	
	
	 $(".open-cart").click(function(){
        $(".cart-box-open").slideToggle("slow");
    });
	
	$(".close-cart").click(function(){
        $(".cart-box-open").slideUp("slow");
    });
	$(".delete-item").click(function(){
       $(".cart-content").hide();
    });
	
	
  
   
	 $(".active-link").mouseover(function(){
       $(".drop-holder").slideDown();
    });
	
	$(".clear").click(function(){
       $(".compare-list").hide();
    });
	
	
	
});

