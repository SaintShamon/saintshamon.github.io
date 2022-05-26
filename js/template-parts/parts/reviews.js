import $ from 'jquery';
import 'slick-carousel';

function reviews_slider() {
    $('.reviews').each(function () {
        let block = $(this);
        let slider = $(this).find('.reviews_row');


        slider.slick({
            dots: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            infinite: false,
            speed: 500,
            initialSlide: 1,
            autoplay: false,

        });

    });
}

export {
    reviews_slider
};