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

    var $animation_elements = $('.animate');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop() - 200;
        var window_bottom_position = (window_top_position + window_height);



        $.each($animation_elements, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');

            }
        }

        );
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

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

}

);