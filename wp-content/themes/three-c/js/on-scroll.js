// window.onscroll = function() {
//     console.log("Hi my name is Himashi");
//     let navBar = document.getElementById("masthead").classList.add("site-header-color-change");
// };

// window.onscroll = function changeClass(){
//   var scrollPosY = window.pageYOffset | document.body.scrollTop;
//   if(scrollPosY >1900) {
//           let navBar = document.getElementById("masthead").classList.add("site-header-color-change");
//           console.log("pokepokepoke")
//     }
// }
// window.onscroll = () => {
//   const nav = document.querySelector('#masthead');
//   if(this.scrollY > 900) nav.className = ''; else nav.className = 'scroll';
//   console.log("hihihi")
// };

// var scrolling = false;
//
// jquery( window ).scroll( function() {
//   scrolling = true;
// });
//
// setInterval(function () {
//   const nav = document.querySelector('#masthead');
//
//   if ( scrolling ) {
//     scrolling = false;
//     nav.className = '';
//   } else nav.className = 'scroll';
// }, 250 );

// jQuery(document).ready(function($){
//   $('.site-header').css({"background":"red"});
// });

// var a = jquery(".nav").offset().top;
//
// jquery(document).scroll(function($){
//     if($(this).scrollTop() > a)
//     {
//        $('.site-header').css({"background":"red"});
//     } else {
//        $('.site-header').css({"background":"transparent"});
//     }
// });

// jQuery(document).on('scroll', function($) {
//
//   var se1 = $('.culture-container').position().top;
//
//   if($(this).scrollTop() >= se1){
//        $("site-header").addClass("site-header-scroll");
//     }
//   else{
//     $("nav").removeClass("site-header-scroll");
//   };
// });


  // jQuery(document).scroll(function () {
  //   var $nav = jquery(".site-header");
  //   $nav.toggleClass('site-header-scroll', $(this).scrollTop() > $nav.height());
  // });

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

// jQuery(document).ready(function( $ ) {
//
//   $(document).ready(function(){
//     $(window).scroll(function(){
//       var scroll = $(window).scrollTop();
//       var navbarcolorY = document.getElementById('masthead').offsetTop;
//       if (scroll < navbarcolorY) {
//         $( "p" ).removeClass( "gray-header" ).addClass( "white-header" );
//       }
//       console.log("This is a cool girl")
//     })
//   })
// });
