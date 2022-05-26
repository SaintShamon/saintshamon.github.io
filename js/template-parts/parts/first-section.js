import $ from 'jquery';
import 'slick-carousel';

function first_slider() {
    $('.first_section').each(function () {
        let block = $(this);
        let slider = $(this).find('.slider_block__list');


        slider.slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 500,
            cssEase: 'linear',
            adaptiveHeight: true,
            autoplay: false,
            // autoplaySpeed: 3000,
            prevArrow: block.find('.bottom_wrapper .arrow_block .prev_btn'),
            nextArrow: block.find('.bottom_wrapper .arrow_block .next_btn')
        });

        // slider.on('init', function () {
        //     $(window).trigger('heightChanges');
        // });
    });
}

export {
    first_slider
};