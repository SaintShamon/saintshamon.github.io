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
    spaceBetween: 40,
    a11y: true,
    loop: true,
    keyboardControl: true,
    grabCursor: true,
    slidesPerView: 'auto',
    breakpoints: {
        1640: {
            slidesPerView: 6,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next-unique",
        prevEl: ".swiper-button-prev-unique",
    }
});