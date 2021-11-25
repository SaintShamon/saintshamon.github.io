// swiper slider

var menu = ['01', '02', '03']
let mySwiper = new Swiper('.mySwiper', {
    slidesPerView: 1, /* Set me! */
    // loop: true,
    // loopedSlides: 1,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '"><span class="number">' + (menu[index]) + "</span></span>";
        },
    },
});

var menuvar = ['01', '02', '03', '04', '05']
let swiper = new Swiper('.products_block', {
    slidesPerView: 2,
    spaceBetween: 20,
    slidesPerGroup: 2,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination-product',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '"><span class="number">' + (menuvar[index]) + "</span></span>";
        },
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            loopedSlides: 1,
            spaceBetween: 0,
        },
        587: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2,
        },
    }

});

let swipernews = new Swiper('.news', {
    slidesPerView: 1,
    spaceBetween: 0,
    slidesPerGroup: 1,
    loopedSlides: 1,
    centeredSlides: true,
    loop: true,

    breakpoints: {
        600: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            loopedSlides: 1,
            spaceBetween: 30,
        },
        1025: {
            slidesPerView: 2,
            spaceBetween: 50,
            slidesPerGroup: 2,
            loopedSlides: 2,
            centeredSlides: true,
            loop: true,
        },
    }
});

$(document).ready(function () {
    $('.accordion').click(function () {
        $('.accordion').removeClass('active');
        $('.accordion').find('.arrow').show();
        $(this).toggleClass('active');
        $(this).find('.arrow').hide();
    });
});

// activation carousel plugin
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 35,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        0: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 3,
        },
    }
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    thumbs: {
        swiper: galleryThumbs
    },
});
// change carousel item height
// gallery-top
let productCarouselTopWidth = $('.gallery-top').outerWidth();
$('.gallery-top').css('height', productCarouselTopWidth);

// gallery-thumbs
let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
$('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

// side panel
$('#burger_button, #side-close-btn').click(function () {
    $('#side-panel').toggleClass('active');
    $('body').toggleClass('side-panel-overlay');
    return false;
});

// close side panel on any link click
$('.side-panel a').click(function () {
    $('#side-panel').toggleClass('active');
    $('body').toggleClass('side-panel-overlay');
});

// close side-panel if clicked outside its area
$(document).click(function (event) {
    let $target = $(event.target);
    if (!$target.closest('.side-panel').length) {
        $('.side-panel, .burger_button').removeClass('active');
        $('body').removeClass('side-panel-overlay');
    }
});


const employees = document.querySelector("#employees")
var labels = { 0: '30', 15: '35', 30: '40', 45: '45', 60: '50', 75: '60', 90: '70', 105: '80', };
noUiSlider.create(employees, {
    start: 75,
    step: 15,
    range: {
        'min': 0,
        'max': 105,
    },
    pips: {
        mode: 'steps',
        filter: function (value, type) {
            return type === 0 ? -1 : 1;
        },
        format: {
            to: function (value) {
                return labels[value];
            }
        }
    }
});

