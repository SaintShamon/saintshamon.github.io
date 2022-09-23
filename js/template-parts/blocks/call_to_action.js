import $ from 'jquery';
import 'slick-carousel';

function calltoaction() {
    $('.call_to_action').each(function () {
        let block = $(this);
        let testimonials_slider = $(this).find('.call_to_action__row');


        testimonials_slider.slick({
            dots: true,
            arrows: false,
            infinite: false,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            // variableWidth: true,
            responsive: [{
                breakpoint: 453,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false,
                }
            }]
        });

    });

};

export {
    calltoaction
};