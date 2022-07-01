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
    footer
} from './template-parts/footer/footer';

import {
    mainslider
} from './template-parts/blocks/slider-banner';
import {
    testimonials
} from './template-parts/blocks/testimonials';
import {
    testimonialsShowMore
} from './template-parts/blocks/testimonials_list';
import {
    contact_map
} from './template-parts/blocks/contact_map';

header();
footer()
lazy();
lottie();
mainslider();
testimonials();
testimonialsShowMore();
contact_map();

$('.has_popup a.button').click(function () {
    $('body').addClass('opened-popup');
});

$('.overlay').click(function () {
    $('body').removeClass('opened-popup');
});