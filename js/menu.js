
jQuery(document).ready(function() {
    jQuery('#left-menu').sidr({
      name: 'sidr-left',
      side: 'left' // By default
    });
    jQuery('#right-menu').sidr({
      name: 'sidr-right',
      side: 'right'
    });
    jQuery(document).on('click', '.sidr-class-close-sidr', function() {
        $.sidr('close', 'sidr-left');
        $.sidr('close', 'sidr-right');
    });
});
