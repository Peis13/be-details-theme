/**
 * Dependencies
 */
import $ from 'jquery';
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle.min';
import Swiper from 'swiper/swiper-bundle.js';
import 'magnific-popup';
// import 'core-js/es/object';

$(document).ready(function() {

    /**
     * Dropdown menù si aprono al click solo su mobile
     */
    $('.burger-btn').click(function(e) {
        console.log(e)
        // e.preventDefault();
        //
        $('.navbar-collapse').fadeIn(300);
    });

    $('.close-menu').click(function(e) {
        console.log(e)
        // e.preventDefault();
        //
        $('.navbar-collapse').fadeOut(300);
    });


    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

});
