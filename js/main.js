$(document).ready(function () {

    $('.video1-play').click(function () {
        video = '<iframe src="' + $(this).attr('data-video') + '"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $(this).replaceWith(video);
    }

    );

    $('.video2-play').click(function () {
        video = '<iframe src="' + $(this).attr('data-video') + '"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $(this).replaceWith(video);
    }

    );

    /* Check if any part of the element is in the viewport */
    function isAnyPartOfElementInViewport(element) {
        const rect = element.getBoundingClientRect();
        const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
        const windowWidth = (window.innerWidth || document.documentElement.clientWidth);

        const vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
        const horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

        return (vertInView && horInView);
    }

    function scrollHandler() {
        document.querySelectorAll('.show-on-scroll:not(.is-visible)').forEach((element) => {
            if (isAnyPartOfElementInViewport(element) && !element.classList.contains('is-visible')) {
                element.classList.add('is-visible');
            }
        }

        )
    }

    window.addEventListener('scroll', scrollHandler);

    /* 
Call the scroll handler function at first load to 
show elements that is already in the viewport 
*/
    scrollHandler();

    /* Check if any part of the element is in the viewport */
    function isAnyPartOfElementInViewport_2(element) {
        let rect = element.getBoundingClientRect();
        let windowHeight = (window.innerHeight || document.documentElement.clientHeight);
        let windowWidth = (window.innerWidth || document.documentElement.clientWidth);

        let vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
        let horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

        return (vertInView && horInView);
    }

    function scrollHandler_2() {
        document.querySelectorAll('.show-on-scroll_2:not(.is-visible)').forEach((element) => {
            if (isAnyPartOfElementInViewport_2(element) && !element.classList.contains('is-visible')) {
                element.classList.add('is-visible');
            }
        }

        )
    }

    window.addEventListener('scroll', scrollHandler_2);

    /* 
Call the scroll handler function at first load to 
show elements that is already in the viewport 
*/
    scrollHandler_2();

    /* Check if any part of the element is in the viewport */
    function isAnyPartOfElementInViewport_3(element) {
        let rect = element.getBoundingClientRect();
        let windowHeight = (window.innerHeight || document.documentElement.clientHeight);
        let windowWidth = (window.innerWidth || document.documentElement.clientWidth);

        let vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
        let horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

        return (vertInView && horInView);
    }

    function scrollHandler_3() {
        document.querySelectorAll('.show-on-scroll_3:not(.is-visible)').forEach((element) => {
            if (isAnyPartOfElementInViewport_3(element) && !element.classList.contains('is-visible')) {
                element.classList.add('is-visible');
            }
        }

        )
    }

    window.addEventListener('scroll', scrollHandler_3);

    /* 
Call the scroll handler function at first load to 
show elements that is already in the viewport 
*/
    scrollHandler_3();

    var $animation_elements_bar = $('.bar');
    var $window_bar = $(window);

    function check_if_in_view_bar() {
        var window_height = $window_bar.height();
        var window_top_position = $window_bar.scrollTop() - 100;
        var window_bottom_position = (window_top_position + window_height);



        $.each($animation_elements_bar, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('in-viewbar');

            }
        }

        );
    }

    $window_bar.on('scroll resize', check_if_in_view_bar);
    $window_bar.trigger('scroll');

    var $animation_elements_bottom = $('.bottom');
    var $window_bottom = $(window);

    function check_if_in_view_bottom() {
        var window_height = $window_bottom.height();
        var window_top_position = $window_bottom.scrollTop() - 100;
        var window_bottom_position = (window_top_position + window_height);



        $.each($animation_elements_bottom, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('big_button');

            }
        }

        );
    }

    $window_bottom.on('scroll resize', check_if_in_view_bottom);
    $window_bottom.trigger('scroll');

}

);


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