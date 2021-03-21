/**
 * Dependencies
 */
import $ from 'jquery';
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle.min';
import Swiper from 'swiper/swiper-bundle.js';
import 'magnific-popup';
// import 'core-js/es/object';

$(document).ready(function() {

    var touchmoved = false;
    $('.swipe').on('touchend', function(e){
        if(touchmoved === true){
            $('.page-home').toggleClass('show');
            $('.hero').toggleClass('height-0');
        }
        $(this).removeClass('touched');
    }).on('touchmove', function(e){
        touchmoved = true;
    }).on('touchstart', function(){
        touchmoved = false;
        $(this).addClass('touched');
    });

});
