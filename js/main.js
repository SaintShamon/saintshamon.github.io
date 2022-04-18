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
    $(".controls .swiper-slide").click(function () {
        if ($('.page').hasClass('active-page')) {
            $(".active-page").removeClass("active-page");
        }
        var pageIndex = $(this).index();
        $next = $(".pages .page").eq(pageIndex);

        $(".active-control").removeClass("active-control");
        $(this).addClass("active-control");
        $next.addClass("active-page");
    })
})

$('.service_block li').click(function () {
    $(this).parents().eq(1).find('li').removeClass('active');
    $(this).toggleClass('active');
    $(this).find('li').slideToggle(300);
});