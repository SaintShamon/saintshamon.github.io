var mySwiper = new Swiper('.blog_block .swiper-container', {
    speed: 400,
    spaceBetween: 10,
    a11y: true,
    keyboardControl: true,
    grabCursor: true,
    slidesPerView: 1,
    centeredSlides: true,
    breakpoints: {
        1201: {
            slidesPerView: 2,
            spaceBetween: 0,
            a11y: true,
            keyboardControl: true,
            grabCursor: true,
            centeredSlides: false,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next-unique",
        prevEl: ".swiper-button-prev-unique",
    }
});

let contactsSwiper = new Swiper('.technologies_list', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 30,
    // centeredSlidesBounds: true,
    loop: true,
    loopedSlides: 5,
    autoplay: {
        delay: 3000,
    },
});

var mySwiper_client = new Swiper('.clients_block_inner', {
    speed: 400,
    spaceBetween: 10,
    a11y: true,
    loop: true,
    keyboardControl: true,
    grabCursor: true,
    slidesPerView: 3,
    loopFillGroupWithBlank: true,
    centeredSlides: true,
    breakpoints: {
        768: {
            spaceBetween: 20,
            slidesPerView: 'auto',
            loopFillGroupWithBlank: true,
            centeredSlides: true,
        },
        1024: {
            spaceBetween: 40,
        },
        1640: {
            slidesPerView: 6,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next-unique",
        prevEl: ".swiper-button-prev-unique",
    }
});


var mySwiper_tab = undefined;

function initSwiper() {
    var screenWidth = $(window).outerWidth();
    if ((screenWidth < (1025)) && (mySwiper_tab == undefined)) {
        mySwiper_tab = new Swiper('.controls', {
            speed: 400,
            spaceBetween: 0,
            a11y: true,
            // loop: true,
            keyboardControl: true,
            grabCursor: true,
            slidesPerView: 'auto',
            centeredSlides: true,
            breakpoints: {
                1025: {
                    navigation: false
                },
            },
            navigation: {
                nextEl: ".swiper-button-next-arrow",
                prevEl: ".swiper-button-prev-arrow",
            }
        });
    } else if ((screenWidth > 1026) && (mySwiper_tab != undefined)) {
        mySwiper_tab.destroy();
        mySwiper_tab = undefined;
        $('.about_us_second .swiper-wrapper').removeAttr('style');
        $('.about_us_second .swiper-slide').removeAttr('style');
    }
    mySwiper_tab.slideTo(1, false, false);
}

initSwiper();

$(window).resize(function () {
    initSwiper();
});

var mySwipercontrl = undefined;

function initSwiper_contrl() {
    var screenWidth = $(window).outerWidth();
    if ((screenWidth < (1025)) && (mySwipercontrl == undefined)) {
        var mySwipercontrl = new Swiper('.portfolio_second .controls', {
            speed: 400,
            spaceBetween: 0,
            a11y: true,
            // loop: true,
            keyboardControl: true,
            grabCursor: true,
            slidesPerView: 'auto',
            centeredSlides: true,
            breakpoints: {
                1025: {
                    navigation: false
                },
            },
            navigation: {
                nextEl: ".swiper-button-next-arrow",
                prevEl: ".swiper-button-prev-arrow",
            },
        });
    } else if ((screenWidth > 1026) && (mySwipercontrl != undefined)) {
        mySwipercontrl.destroy();
        mySwipercontrl = undefined;
        $('.portfolio_second .swiper-wrapper').removeAttr('style');
        $('.portfolio_second .swiper-slide').removeAttr('style');
    }
    // mySwipercontrl.slideTo(1, false, false);
}

initSwiper_contrl();

$(window).resize(function () {
    initSwiper_contrl();
});