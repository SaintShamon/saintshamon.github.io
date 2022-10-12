import $ from 'jquery';
import 'slick-carousel';

function mainslider() {

    $(document).ready(function () {
        $('.slider_row').slick({
            dots: false,
            arrows: false,
            slidesToShow: 3,
            infinite: true,
            cssEase: 'linear',
            variableWidth: true,
        });
    });



}
export {
    mainslider
};