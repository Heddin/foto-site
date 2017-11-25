/***
 * @jQuery section
 *   code for different libs, that depends on jQuery
 *   or simple jQuery using for various purposes
 */
$(document).ready(function(){
    var $carousel = $('.carousel');
    $carousel.carousel({
        onCycleTo:function($current_item,$dragged){
            var $next_item = ($current_item.next().length) ? $current_item.next() : $('.carousel-item').first();
            var $prev_item = ($current_item.prev().length) ? $current_item.prev() : $('.carousel-item').last();

            $next_item.css('transform','translateY(20%)');
            $prev_item.css('transform','translateY(20%)');

        }
    });

    $('.button-collapse').sideNav();
});
/**
 * @Vanilla section
 *   code written in plain JS.
 */

