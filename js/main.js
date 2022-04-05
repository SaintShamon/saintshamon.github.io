// Проблема длины при ховере

$('.header_desctop nav li').each(function () {
    $(this).width($(this).width() + 6);
});

// Ховер блока на главной

$('.burger-container').click(function () {
    $('#menu_box-panel').toggleClass('opened');
    $(this).toggleClass('opened');
    $('body').addClass('menu-panel-overlay');
    return false;
});