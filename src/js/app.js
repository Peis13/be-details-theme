/**
 * Dependencies
 */
import $ from 'jquery';
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle.min';
import Swiper from 'swiper/swiper-bundle.js';
import 'magnific-popup';
// import 'core-js/es/object';

$(document).ready(function () {

    /**
     * Burger menù appare in basso dopo lo scroll dell'intro
     */
    window.onscroll = function () {
        fixMenu(offsetToSticky)
    };
    var intro = document.getElementById('intro');
    var offsetToSticky = intro.offsetTop;


    /**
     * Burger menù apertura
     */
    $('.burger-btn').click(function (e) {
        console.log(e)
        // e.preventDefault();
        //
        $('body').addClass('overflow-hidden');
        $('.navbar-collapse').fadeIn(300);
        setTimeout(function () {
            $('.close-menu').fadeIn(1000);
        }, 1000);
        $('.social-list').fadeIn(1000);
    });


    /**
     * Burger menù chiusura
     */
    $('.close-menu').click(function (e) {
        console.log(e)
        // e.preventDefault();
        //
        $('body').removeClass('overflow-hidden');
        $('.navbar-collapse').fadeOut(300);
        $('.close-menu').fadeOut(200);
        $('.social-list').fadeOut(200);
    });


    /**
     * Slider Hero
     */
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


function fixMenu(offsetToSticky) {
    if (window.pageYOffset > offsetToSticky) {
        $('.burger-btn').addClass('fixed');
    } else {
        $('.burger-btn').removeClass('fixed');
    }
}