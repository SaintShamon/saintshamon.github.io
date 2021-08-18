$(document).ready(function () {
    $('.questions_section .main_block .faq_block .question_block').on('click', function () {
        $('.questions_section .main_block .faq_block .question_block .answer').slideToggle(500);
    });

    $('header .header_block .menu').on('click', function () {
        $('header').addClass('open');
    });

    $('header .main_menu .top_block .close_block').on('click', function () {
        $('header').removeClass('open');
    });

    $('header .main_menu .menu_block ul.menu li.menu-item a').on('click', function () {
        $('header').removeClass('open');
    });
});