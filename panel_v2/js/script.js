
/*

var sticky = new Waypoint.Sticky({
  element: $('header')[0],
  wrapper: false,
  handler: function() {
    $('nav').toggleClass('hidden');
    $('#address').toggleClass('hidden');
    $('#event2').toggleClass('mtop')
  }

});   
*/ 

/*
var waypoint = new Waypoint({
  element: $('#identity')[0],
  handler: function() {
    notify('Basic waypoint triggered')
  }
});
*/




var imgUrl = "p/panel_w.png?v=" + new Date().getTime();
document.getElementById('identity').src = imgUrl;


  
$( function() {
        $( '.type-text' ).teletype( {
            text: [ 'Closing party and screening for the exhibition, Thursday February 16, Doors 7pm, Screening 8pm' ],
            typeDelay: 0,
            backDelay: 5,
           
        } );
    } );
    

//pop up link    
$('.open-popup-link').magnificPopup({
type:'inline',
midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});