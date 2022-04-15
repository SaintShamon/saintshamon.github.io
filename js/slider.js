var mySwiper = new Swiper('.swiper-container', {
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