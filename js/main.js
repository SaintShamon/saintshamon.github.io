import $ from 'jquery';

import {
    lazy
} from './lazy';
import {
    lottie
} from './lottie';

import {
    header
} from './template-parts/header/header';


import {
    mainslider
} from './template-parts/blocks/slider-banner';
import {
    testimonials
} from './template-parts/blocks/testimonials';
import {
    testimonialsShowMore
} from './template-parts/blocks/testimonials_list';
// import {
//     contact_map
// } from './template-parts/blocks/contact_map';

header();
lazy();
lottie();
mainslider();
testimonials();
testimonialsShowMore();
//contact_map();

var btn = $('#button_top');
btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
    $('.header .header_block').removeClass('fixed_header');
});

$(window).scroll(function () {
    $(window).scrollTop(function () {
        if ($(window).scrollTop() >= 300) {
            function scrollEnd() {
                $('#button_top').removeClass('show');
            }
            $('#button_top').addClass('show');
            setTimeout(scrollEnd, 3000);
        };
    });
});