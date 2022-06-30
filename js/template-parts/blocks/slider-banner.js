import $ from 'jquery';
import 'slick-carousel';

function mainslider() {
    $('.slider-banner').each(function () {
        let block = $(this);
        let slider = $(this).find('.slider_list_bg').not('.slick-initialized');
        let slider2 = $(this).find('.first_section_slider').not('.slick-initialized');

        slider.slick({
            dots: false,
            arrows: false,
            infinite: false,
            cssEase: 'linear',
            draggable: false,
            swipe: false,
            touchMove: false,
            // adaptiveHeight: true,

            asNavFor: '.slider_main'
        });

        slider2.slick({
            dots: true,
            arrows: false,
            infinite: false,
            draggable: false,
            swipe: false,
            touchMove: false,
            cssEase: 'linear',
            adaptiveHeight: true,
            asNavFor: '.slider_main',
            appendDots: $('.dots_block'),
            responsive: [{
                breakpoint: 853,
                settings: {
                    draggable: true,
                    swipe: true,
                    touchMove: true,
                }
            }]
        });

    });

}
export {
    mainslider
};