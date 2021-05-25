var btn = $('.btn');

btn.on('click', function () {
    $(this).toggleClass('active');
    $(this).toggleClass('not-active');
});

var btn2 = $('.show');

btn2.on('click', function () {
    $(this).toggleClass('background');
});

$(function () {
    $('.show').on('click', function () {
        $('.navigation').hasClass('open') ? $('.navigation').removeClass('open') : $('.navigation').addClass('open');
        $('.toggle').next().slideUp(350);
    });
});


$('.toggle').click(function (e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});


// popup

$(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        preloader: false,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
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
});