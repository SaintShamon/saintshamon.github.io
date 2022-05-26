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

//animations

//blocks

import {
    first_slider
} from './template-parts/parts/first-section';

import {
    programs_slider
} from './template-parts/parts/programs-section';

import {
    reviews_slider
} from './template-parts/parts/reviews';

import {
    sponsors_slider
} from './template-parts/parts/sponsors-section';


// import {
//     form_section
// } from './template-parts/parts/form-section';

// import {
//     videoBlock
// } from './template-parts/blocks/video';
// import {
//     videoBanner
// } from './template-parts/blocks/video-banner';
// import {
//     testimonialsSlider
// } from './template-parts/blocks/testimonials-slider';
// import {
//     accordion
// } from './template-parts/blocks/accordion';
// import {
//     partners
// } from './template-parts/blocks/partners';
// import {
//     process
// } from './template-parts/blocks/process';
// import {
//     popup
// } from './template-parts/blocks/popup';
// import {
//     blogAjax
// } from './template-parts/blocks/blog-ajax';
// import {
//     textTabs
// } from './template-parts/blocks/text_tabs';


header();
footer();
lazy();
lottie();

//animations
// appearence();

//blocks

// videoBlock();
// testimonialsSlider();
// blogAjax();
// textTabs();
// scrollToAnchor();
first_slider();
programs_slider();
reviews_slider();
sponsors_slider();

// form_section()