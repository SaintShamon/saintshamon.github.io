import $ from 'jquery';

function header() {
    $(document).ready(function () {
        $('#toggle').on('click', function () {
            $('#side-panel').toggleClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });

        $(document).click(function (event) {
            let $target = $(event.target);
            if (!$target.closest('.side-panel').length) {
                $('#side-panel').removeClass('active');
                $('body').removeClass('side-panel-overlay');
            }
        });

        $('.location_menu_block .menu-item-has-children').each(function () {
            $('<div class="menu-item__parent"></div>').prependTo($(this));
            $($(this).children('a')).appendTo($(this).find('.menu-item__parent'));
            $('<span class="menu-item__icon"></span>').appendTo($(this).find('.menu-item__parent'));
        });

        $('.location_menu_block .menu-item__icon').on('click', function () {
            event.preventDefault();
            $(this).attr('tabindex', 1).focus();
            $(this).parents().eq(1).toggleClass('active');
            $(this).parents().eq(1).find('.sub-menu').slideToggle(300);
            console.log(123);
        });
        $('#side-close-btn').click(function () {
            $('#side-panel').removeClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });
    });
}


export {
    header
};