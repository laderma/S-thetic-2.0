// logic.js

jQuery(document).ready(function ($) {

    jQuery('.sf-menu').superfish({
        cssArrows: false,
        autoArrows: false,
    });

    jQuery(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('.header').addClass("sticky");
        } else {
            $('.header').removeClass("sticky");
        }
    });

    jQuery('.toggle').on('click', function () {
        jQuery('html, body').css({
            'overflow': 'hidden',
            'height': '100%'
        });
        jQuery('.module-wrapper').fadeIn();
        jQuery('.choose-tel').center();
    });

    jQuery('.close-module').on('click', function () {
        jQuery('html, body').css({
            'overflow': 'initial',
            'height': '100%'
        });
        jQuery('.module-wrapper').fadeOut();
    })
    
});