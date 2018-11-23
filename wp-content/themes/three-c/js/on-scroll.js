// on scroll, Nav bar changes colour

  jQuery(document).ready(function( $ ) {

    $(document).ready(function(){
      $(window).scroll(function(){
      	var scroll = $(window).scrollTop();
        var navbarcolorY = document.getElementById('masthead').offsetTop;
    	  if (scroll > navbarcolorY) {
    	    $( ".site-header" ).removeClass( "white-header" ).addClass( "gray-header" );
          console.log("yo")
    	  } else {
    		  $( ".site-header" ).removeClass( "gray-header" ).addClass( "white-header" );
    	  }
      })
    })
});
