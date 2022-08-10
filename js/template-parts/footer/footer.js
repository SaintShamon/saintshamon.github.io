import $ from 'jquery';

function footer() {
    $(document).ready(function () {
        var btn = $('#button_top');
        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });

        $(window).scroll(function () {
            $(window).scrollTop(function () {
                if ($(window).scrollTop() >= 300) {
                    function scrollEnd() {
                        $('#button_top').removeClass('show');
                    }
                    $('#button_top').addClass('show');
                    setTimeout(scrollEnd, 3000);
                };
            });
        });
        if ($(window).width() < 1240) {
            /*Dropdown Menu footer*/
            $('.footer__right_col .footer__col').click(function () {
                $(this).attr('tabindex', 1).focus();
                $(this).toggleClass('active');
                $(this).find('nav').slideToggle(300);
            });

            $('.footer__right_col .footer__col').focusout(function () {
                $(this).removeClass('active');
                $(this).find('nav').slideUp(300);
            });

        }
    });
}

export {
    footer
};