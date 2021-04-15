$(document).ready(function () {
    $('.review_container').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        prevArrow: $(".pp2"),
        nextArrow: $(".nn2"),
    });

    $('.partners_block').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        infinite: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.review_block_about').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: false,
        arrows: false,
    });
});

(function () {
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');

    burger.onclick = function () {
        header.classList.toggle('menu-opened');
    }
}

    ());

// let list = document.querySelectorAll(".menu > .menu-item > a");
// list.forEach(i => {
//     i.addEventListener('click', function (e) {
//         e.preventDefault();
//         document.querySelector('.header.menu-opened').classList.remove("menu-opened");


//     })
// });

let btn = document.querySelectorAll(".header .menu_btn");
btn.forEach(i => {
    i.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.header.menu-opened').classList.remove("menu-opened");


    })
});

$(document).ready(function () {
    $('.popup-with-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function () {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });

    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
});

function _class(name) {
    return document.getElementsByClassName(name);
}

let tabPanes = _class("tab-header")[0].getElementsByTagName("div");

for (let i = 0; i < tabPanes.length; i++) {
    tabPanes[i].addEventListener("click", function () {
        _class("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
        tabPanes[i].classList.add("active");
        _class("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
        _class("tab-content")[0].getElementsByClassName("tab-content_block")[i].classList.add("active");

    });
}