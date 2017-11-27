/***
 * @jQuery section
 *   code for different libs, that depends on jQuery
 *   or simple jQuery using for various purposes
 */
$(document).ready(function(){
    var $carousel = $('.carousel');
    $carousel.carousel({
        onCycleTo:function($current_item,$dragged){

        }
    });

    $('.button-collapse').sideNav();
});
/**
 * @Vanilla section
 *   code written in plain JS.
 */

