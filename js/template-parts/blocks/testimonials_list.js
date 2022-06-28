import $ from 'jquery';

function testimonialsShowMore() {
    $('.testimonialsList .testimonialsItemWrapper').each(function () {
        var itemHeight = $(this).find('.testimonialsItem__content').height();
        if (itemHeight > 150) {
            $(this).addClass('limited_content');
            $(this).find('.testimonialsItem__content').css('-webkit-box-orient', 'vertical');
        }
    });
    $('.show').on('click', function () {
        $(this).closest('.testimonialsItemWrapper').addClass('opened');
    });
    $('.hide').on('click', function () {
        $(this).closest('.testimonialsItemWrapper').removeClass('opened');
    });
}
export {
    testimonialsShowMore
};