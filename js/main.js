$('.review_inner_block').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});

$("ul.tabs__caption").on("click", "li:not(.active)", function () {
    $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest("div.tabs")
        .find("div.tabs__content")
        .removeClass("active")
        .eq($(this).index())
        .addClass("active");
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