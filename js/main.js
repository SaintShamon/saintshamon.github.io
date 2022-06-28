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

//animations
import {
    scrollToAnchor,
    scrollToHash,
    requestQuoteLink
} from './animations/scroll-to-anchor';

//blocks

// import {
//     faqInit
// } from './template-parts/blocks/faq';

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
    check_lenght
} from './template-parts/blocks/conditions_lenght';
// import {
//     gsap
// } from "gsap";

// import {
//     ScrollTrigger
// } from "gsap/ScrollTrigger";

// gsap.registerPlugin(ScrollTrigger);

// $(document).ready(function () {
//     $('.animate').each(function () {
//         let el = $(this);
//         let disabled = false;
//         gsap.from(el, {
//             scrollTrigger: {
//                 trigger: el,
//                 pin: false,
//                 start: "top 80%",
//                 end: "bottom 20%",
//                 scrub: 1,
//                 markers: false,
//                 onToggle: function (self) {
//                     if (self.isActive && !disabled) {

//                         el.addClass('in');

//                         self.disable();
//                         disabled = true;
//                     } else {
//                         self.disable();
//                     }
//                 },
//             },
//         });
//     });
//     $('.animate-in-out').each(function () {
//         let el = $(this);
//         let disabled = false;
//         gsap.from(el, {
//             scrollTrigger: {
//                 trigger: el,
//                 pin: false,
//                 start: "top 80%",
//                 end: "bottom bottom",
//                 scrub: 1,
//                 markers: false,
//                 toggleClass: "active",
//                 // onToggle: function(self){
//                 //     if(self.isActive && !disabled){

//                 //         el.addClass('in');

//                 //         // self.disable();
//                 //         // disabled = true;
//                 //     } else{
//                 //         // self.disable();
//                 //         el.addClass('in');
//                 //         el.addClass('out');
//                 //     }
//                 // },
//             },
//             bottom: 0,
//         });
//     });
//     $('.animate-now').each(function () {
//         let el = $(this);
//         let disabled = false;
//         gsap.from(el, {
//             scrollTrigger: {
//                 trigger: el,
//                 pin: false,
//                 start: "top bottom",
//                 end: "bottom top",
//                 scrub: 1,
//                 markers: false,
//                 onToggle: function (self) {
//                     if (self.isActive && !disabled) {

//                         el.addClass('in');

//                         self.disable();
//                         disabled = true;
//                     } else {
//                         self.disable();
//                     }
//                 },
//             },
//         });
//     });
// });


//Account tabs 

header();
lazy();
lottie();
// faqInit();
//blocks
mainslider();
testimonials();
testimonialsShowMore();
// check_lenght()

// $('.slider-banner').each(function () {
//     let block = $(this);
//     let slider = $(this).find('.slider_list_bg');
//     let slider2 = $(this).find('.first_section_slider');

//     slider.slick({
//         dots: false,
//         arrows: false,
//         infinite: false,
//         cssEase: 'linear',
//         draggable: false,
//         swipe: false,
//         touchMove: false,
//         // adaptiveHeight: true,

//         asNavFor: '.slider_main'
//     });

//     slider2.slick({
//         dots: true,
//         arrows: false,
//         infinite: false,
//         draggable: false,
//         swipe: false,
//         touchMove: false,
//         cssEase: 'linear',
//         adaptiveHeight: true,
//         asNavFor: '.slider_main',
//         appendDots: $('.dots_block'),
//         responsive: [{
//             breakpoint: 853,
//             settings: {
//                 draggable: true,
//                 swipe: true,
//                 touchMove: true,
//             }
//         }]
//     });

// });

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