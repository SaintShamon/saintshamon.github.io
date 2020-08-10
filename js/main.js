$('.advantages-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    accessibility: true,
    arrows: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ]
}

);

$('.partners-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    accessibility: true,
    arrows: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ]
}

);

var mobyMenu = new Moby({
    menu: $('#main-nav'), // The menu that will be cloned
    mobyTrigger: $('#main-menu-button'), // Button that will trigger the Moby menu to open
    template: '<div class="moby-wrap"><div class="moby-close"><span class="moby-close-icon"></span>Закрыть</div><div class="moby-menu"></div></div>'
});