$('.tabs_gallery__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    touchMove: false,
    swipeToSlide: false,
    swipe: false,
    dots: false,
    fade: true,
    asNavFor: '.nav-tabs',
    prevArrow: $('.arrows_block .prev'),
    nextArrow: $('.arrows_block .next')
});

$('.nav-tabs').slick({
    slidesToShow: 5,
    slidesToScroll: 0,
    asNavFor: '.tabs_gallery__slider',
    dots: false,
    touchMove: false,
    swipeToSlide: false,
    swipe: false,
    centerMode: true,
    focusOnSelect: true,
    variableWidth: true
});