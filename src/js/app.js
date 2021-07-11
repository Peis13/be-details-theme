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
        setTimeout(function () {
            $('.header').addClass('height-100vh');
        }, 300);
        setTimeout(function () {
            $('.close-menu').fadeIn(1000);
        }, 1000);
        $('.social-list').fadeIn(1000);
    });

    $('.close-menu').click(function(e) {
        console.log(e)
        // e.preventDefault();
        //
        $('.header').removeClass('height-100vh');
        $('.navbar-collapse').fadeOut(300);
        $('.close-menu').fadeOut(200);
        $('.social-list').fadeOut(200);
    });


    var swiper = new Swiper('.hero-slider', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        speed: 1500,
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
