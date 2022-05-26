import $ from 'jquery';
import 'slick-carousel';

function sponsors_slider() {
    $('.sponsors').each(function () {
        let block = $(this);
        let slider = $(this).find('.sponsors_row');


        slider.slick({
            dots: false,
            arrows: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            adaptiveHeight: true,
            infinite: false,
            speed: 500,
            cssEase: 'linear',
            autoplay: false,
            responsive: [{
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1368,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        // centerMode: true,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        // centerMode: true,
                    }
                }
            ]
        });

    });
}

export {
    sponsors_slider
};