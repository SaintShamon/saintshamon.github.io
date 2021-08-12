$(document).ready(function () {
    $('header .top_header .search_btn').on('click', function () {
        $('header .top_header .input_block').slideToggle(500);
    });

    $('header .top_header .briefcase .btn').on('click', function () {
        $('header .top_header .briefcase_block').slideToggle(1000);
        $('header .top_header .main_block .center_block .our_curses a').toggleClass('clicked');
    });

    $('header .top_header .menu_icon').on('click', function () {
        $('header .top_header .main_menu_block').slideToggle(1000, function () {
            if ($(this).is(':visible'))
                $(this).css('display', 'flex');
        });
        $('header .top_header .main_block .right_block .menu_icon .icon_container').toggleClass('open_menu');
    });

    $('.courses_block').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        responsive: [
            {
                breakpoint: 1250,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 769,
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

    $(".item").click(function () {
        $(".gallery-wrap .item").removeClass("active");
        $(this).addClass("active");
    });

    $('.we_are_in_block').mouseover(function () {
        $('.cooperation_section .main_block').addClass('right');
    });

    $('.we_are_in_block').mouseout(function () {
        $('.cooperation_section .main_block').removeClass('right');
    });

    // Check active classes
    var checkClass = function () {
        if ($('.list_block').hasClass('show')) {
            $('.list_block').removeClass('show');
        }
    };

    // Category filters
    $('.list_menu li.articles').click(function () {
        checkClass();
        $('.content_block .list_block.articles').toggleClass('show');
    });
    $('.list_menu li.videos').click(function () {
        checkClass();
        $('.content_block .list_block.videos').toggleClass('show');
    });
    $('.list_menu li.podcasts').click(function () {
        checkClass();
        $('.list_block.podcasts').toggleClass('show');
    });
    $('.list_menu li.books').click(function () {
        checkClass();
        $('.list_block.books').toggleClass('show');
    });

    // Active tag
    $('.list_menu li').click(function () {
        $('.list_menu li').removeClass('active');
        $(this).addClass('active');
    })
});


$('#slide-testimonal').owlCarousel({
    margin: 0,
    center: true,
    loop: true,
    nav: false,
    items: 3,
    responsive: {
        0: {
            items: 3,
            margin: 25,
        },
        768: {
            items: 2,
            margin: 15,
        },
        1000: {
            items: 3,
        }
    }
});


$('header .bottom_header .search_btn').on('click', function () {
    $('header .bottom_header .input_block').slideToggle(500);
});

$('header .bottom_header .briefcase .btn').on('click', function () {
    $('header .bottom_header .briefcase_block').slideToggle(1000);
    $('header .bottom_header .main_block .center_block .our_curses a').toggleClass('clicked');
});

$('header .bottom_header .menu_icon').on('click', function () {
    $('header .bottom_header .main_menu_block').slideToggle(1000, function () {
        if ($(this).is(':visible'))
            $(this).css('display', 'block');
    });
    $('header .bottom_header .main_block .right_block .menu_icon .icon_container').toggleClass('open_menu');
});
