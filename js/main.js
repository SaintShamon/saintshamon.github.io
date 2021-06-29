$('.review_inner_block').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
});

var $page = $('html, body');

$('a[href*="#"]').click(function () {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }

        , 800);
    return false;
}

);

(function () {
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');

    burger.onclick = function () {
        header.classList.toggle('menu-opened');
    }
}

    ());

let list = document.querySelectorAll(".menu > .menu-item > a");
list.forEach(i => {
    i.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.header.menu-opened').classList.remove("menu-opened");


    })
});

let btn = document.querySelectorAll(".header .menu_btn");
btn.forEach(i => {
    i.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.header.menu-opened').classList.remove("menu-opened");


    })
});