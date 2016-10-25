jQuery(document).foundation();

jQuery(document).ready(function($){

//Detecting viewpot dimension
        var vH = $(window).height();
        var vW = $(window).width();


          // inizio effetti reveal.
        window.sr = ScrollReveal();
        sr.reveal('.content-portfolio', { delay: 900, distance: '20px', origin: 'right', scale: 0});
        sr.reveal('.message', { delay: 1100, distance: '20px', origin: 'left', scale: 0});
});
