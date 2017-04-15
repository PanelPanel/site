$('.slideshow a').simpleLightbox();

$( document ).ready(function() {
  
  
  $( ".toShow" ).click(function() {
		
		var contentID = jQuery(this).data('show');		
		$( contentID ).toggle("fast").toggleClass("column");
		
		});

// 		close buttons
  $( ".close-btn" ).click(function() {
		
		var contentID = jQuery(this).parents("section");		
		$( contentID ).toggle("fast").toggleClass("column");
		
		});

});