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

$(document).ready(function () {
    $(".control").click(function () {
        var pageIndex = $(this).index();
        $next = $(".page").eq(pageIndex);
        $(".active-page").removeClass("active-page");
        $(".active-control").removeClass("active-control");
        $(this).addClass("active-control");
        $next.addClass("active-page");
    })
})