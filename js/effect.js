jQuery(document).foundation();

jQuery(document).ready(function($){

//Detecting viewpot dimension
        var vH = $(window).height();
        var vW = $(window).width();


          // inizio effetti reveal.
        window.sr = ScrollReveal();
        sr.reveal('.content-portfolio', { delay: 900, distance: '20px', origin: 'right', scale: 0});
        sr.reveal('.message', { delay: 1100, distance: '20px', origin: 'left', scale: 0});
        sr.reveal('li.lista-service', { delay: 900, distance: '20px', origin: 'right', scale: 0});
        sr.reveal('.portfolio-menu', { delay: 1100, distance: '20px', origin: 'left', scale: 0});
        sr.reveal('.main-menu', { delay: 1100, distance: '20px', origin: 'right', scale: 0});
        sr.reveal('.logo', { delay: 1100, distance: '20px', origin: 'top', scale: 0});
        sr.reveal('.intro_text', { delay: 1100, distance: '20px', origin: 'right', scale: 0});
        sr.reveal('.da_destra', { delay: 1100, distance: '20px', origin: 'right', scale: 0});
        sr.reveal('.da_sinistra', { delay: 1100, distance: '20px', origin: 'left', scale: 0});



         jQuery(".open-share").click(function () {
           jQuery(this).addClass('hide');
           jQuery('#close-share').removeClass('hide');
            jQuery("#share-panel").velocity({ bottom: "0px" });
          });
         jQuery("#close-share").click(function () {
           jQuery("#share-panel").velocity({ bottom: "-45px" });
           jQuery(this).addClass('hide');
           jQuery('.open-share').removeClass('hide');
          });

        /* video lightbox */
  $( '.swipebox, .swipebox-video' ).swipebox();
//
//
// ion-drag
 $('.menu-trigger-works').click(function() {
     $('.menu-trigger-works').addClass('hide');
     $('.close-left-drawer').removeClass('hide');
     $('.portfolio-menu .span ').velocity({ left: '0%'});
     $('.left-drawer').velocity({ left: '0%'});
     $('#content').velocity({ opacity: .9}, 500, '[200, 20]');
      $('.is-drilldown').velocity({ left: 0, opacity: 1}, 900, '[1200, 200]');
});
 $('.close-left-drawer').click(function() {
   $('.menu-trigger-works').removeClass('hide');
   $('.close-left-drawer').addClass('hide');
   $('.is-drilldown').velocity("reverse");
   $('.left-drawer').velocity("reverse");
   $('#content').velocity("reverse");
});

$('.menu-trigger').click(function() {
    $('.menu-trigger').addClass('hide');
    $('.close-right-drawer').removeClass('hide');
    $('.right-drawer').velocity({ right: '0%'});
    $('#content').velocity({ opacity: .9}, 500, '[200, 20]');
    $('#menu-primary').velocity({ right: 0, opacity: 1}, 900, '[1200, 200]');

});
$('.close-right-drawer').click(function() {
  $('.menu-trigger').removeClass('hide');
  $('.close-right-drawer').addClass('hide');
  $('.right-drawer').velocity("reverse");
  $('#content').velocity("reverse");
  $('#menu-primary').velocity("reverse");
});
//

// $('.menu-trigger').click(function() {
    // $('.right-drawer')
      // .velocity({ translateX: ['0%', '0%'] });
    // $('#page')
      // .velocity(
          // {
                // right: '0%'
            // }, 500, '[200, 20]'
      // );
// });
// $('.close-right-drawer').click(function() {
    // $('.right-drawer')
      // .velocity({ translateX: '100%' })
    // $('#page')
      // .velocity(
          // {
                // translateX: '0px'
            // }, 500, 'easeInOutQuart'
    // )

// })


});
