$(document).ready(function () {
    $('.search_btn').on('click', function () {
        $('header .top_header .input_block').slideToggle(500);
    });

    $('.briefcase .btn').on('click', function () {
        $('header .top_header .briefcase_block').slideToggle(1000);
        $('header .top_header .main_block .center_block .our_curses a').toggleClass('clicked');
    });

    $('.menu_icon').on('click', function () {
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

    $('.teachers_block_mob').slick({
        slidesToShow: 1,
        // centerPadding: '50px',
        infinite: true,
        arrows: false,
        dots: false,
        centerMode: true,
        adaptiveHeight: true
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