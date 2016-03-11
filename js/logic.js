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
        jQuery('.module-wrapper.tel').fadeIn();
        jQuery('.choose-tel').center();
    });

    jQuery('.close-module').on('click', function () {
        jQuery('html, body').css({
            'overflow': 'initial',
            'height': '100%'
        });
        jQuery('.module-wrapper.tel').fadeOut();
    })

    jQuery('.cookie').fadeIn(function () {
        jQuery('html, body').css({
            'overflow': 'hidden',
            'height': '100%'
        });
        jQuery('.cookie-info').center();
    });

    jQuery('.close-cookie').on('click', function () {
        jQuery('.cookie').fadeOut();
        jQuery('html, body').css({
            'overflow': 'initial',
            'height': '100%'
        });
    })

});