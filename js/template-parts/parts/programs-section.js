import $ from 'jquery';
import 'slick-carousel';

function programs_slider() {
    $('.programs').each(function () {
        let block = $(this);
        let slider = $(this).find('.programs_row');


        slider.slick({
            dots: true,
            arrows: false,
            slidesToShow: 4,
            infinite: false,
            speed: 500,
            cssEase: 'linear',
            autoplay: false,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
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
    programs_slider
};