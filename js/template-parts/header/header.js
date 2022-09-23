import $ from 'jquery';

function header() {
    $(document).ready(function () {
        $('#toggle').on('click', function () {
            $(this).toggleClass('on');
            $('#side-panel').toggleClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });

        $('.btn_close').click(function () {
            $('#side-panel').toggleClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });

        $(document).click(function (event) {
            let $target = $(event.target);
            if (!$target.closest('.side-panel').length) {
                $('#toggle').removeClass('on');
                $('#side-panel').removeClass('active');
                $('body').removeClass('side-panel-overlay');
            }
        });

        $('.header__menu .menu-item-has-children').each(function () {
            $('<div class="menu-item__parent"></div>').prependTo($(this));
            $($(this).children('a')).appendTo($(this).find('.menu-item__parent'));
            $('<span class="menu-item__icon"></span>').appendTo($(this).find('.menu-item__parent'));
        });

        $('.header__menu .menu-item__icon').on('click', function () {
            event.preventDefault();
            $(this).attr('tabindex', 1).focus();
            $(this).parents().eq(1).toggleClass('active');
            $(this).parents().eq(1).find('.sub-menu').slideToggle(300);
            // console.log(123);
        });

        // $(window).scroll(function () {
        //     if ($(window).scrollTop() >= 300) {
        //         $('.header .header_block').addClass('fixed_header');
        //         $('#button_top').addClass('show');
        //     } else {
        //         $('.header .header_block').removeClass('fixed_header');
        //         $('#button_top').removeClass('show');
        //     }
        // });
    });
}

export {
    header
};