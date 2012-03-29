$(document).ready( function() {

	$('#techsupport').click(function() {
	  $(this).toggleClass("opensprt");
	  $('#techsupporttxt').slideToggle('slow', function() {
	  });
	  
	});
	
	$('#servicecentre').click(function() {
	  $(this).toggleClass("opensprt");
	  $('#servicecentretxt').slideToggle('slow', function() {
	  });
	  
	});
	
	$('#servicecontracts').click(function() {
	  $(this).toggleClass("opensprt");
	  $('#servicecontractstxt').slideToggle('slow', function() {
	  });
	  
	});
	
});