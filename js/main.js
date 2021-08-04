$(document).ready(function () {
    $('.search_btn').on('click', function () {
        $('header .top_header .input_block').slideToggle(500);
    });

    $('.briefcase .btn').on('click', function () {
        $('header .top_header .briefcase_block').slideToggle(1000);
        $('header .top_header .main_block .center_block .our_curses a').toggleClass('clicked');
    });

    $('.courses_block').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
    });

    $(".item").click(function () {
        $(".gallery-wrap .item").removeClass("active");
        $(this).addClass("active");
    });

    $('.cooperation_section .we_are_in_block .text').on('click', function () {
        $('.cooperation_section .we_are_in_block').toggleClass('active');
    });
});