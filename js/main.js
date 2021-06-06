$(document).ready(function () {
    $('.modal').modal(
        {
            // startingTop: '40%',
            endingTop: '40%'
        }
    );
});

// для ютуба
$(document).ready(function () {
    $('.video1-play').click(function () {
        video = '<iframe src="' + $(this).attr('data-video') + '"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $(this).replaceWith(video);
    }

    );
}

);

$(document).ready(function () {
    $('.carousel').carousel({
        // Transition duration in milliseconds.
        duration: 200,

        // Perspective zoom. If 0, all items are the same size.
        dist: -100,

        // Set the spacing of the center item.
        shift: 50,

        // Set the padding between non center items.
        padding: 0,

        // Set the number of visible items.
        numVisible: 3,

        // Make the carousel a full width slider
        fullWidth: false,

        // Set to true to show indicators.
        indicators: true,

        // Don't wrap around and cycle through items.
        noWrap: false,

        // Callback for when a new slide is cycled to.
        onCycleTo: null
    }

    );

    // move next carousel
    $('.moveNextCarousel').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('.carousel').carousel('next');
    }

    );

    // move prev carousel
    $('.movePrevCarousel').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('.carousel').carousel('prev');
    }

    );

});




// // Плавная прокрутка
// var $page = $('html, body');

// $('a[href*="#"]').click(function () {
//     $page.animate({
//         scrollTop: $($.attr(this, 'href')).offset().top
//     }

//         , 800);
//     return false;
// }

// );

// моб меню

(function () {
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');

    burger.onclick = function () {
        header.classList.toggle('menu-opened');
    }
}

    ());

let list = document.querySelectorAll(".menu_mobile > .menu-item > a");

list.forEach(i => {
    i.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.header.menu-opened').classList.remove("menu-opened");


    }

    )
}

);

let btn = document.querySelectorAll(".header .menu_btn");

btn.forEach(i => {
    i.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('.header.menu-opened').classList.remove("menu-opened");
    }

    )
}

);

var plus = '/img/mobile_logo.png';
var minus = '/img/Logo.png';

$('.burger-container').click(function () {
    if ($('.header_logo img').attr('src') === plus) {
        $('.header_logo img').attr('src', minus);
    }

    else {
        $('.header_logo img').attr('src', plus)
    }
}

)