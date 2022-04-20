// Ховер блока на главной

$('.burger-container').click(function () {
    $('#menu_box-panel').toggleClass('opened');
    $(this).toggleClass('opened');
    $('body').addClass('menu-panel-overlay');
    return false;
});

let wrapper = document.querySelector('.line'),
    marquee = document.querySelector('.line span'),
    wrapperWidth = wrapper.offsetWidth,
    marqueeWidth = marquee.scrollWidth;

function move() {
    var currentTX = getComputedStyle(marquee).transform.split(',');
    if (currentTX[4] === undefined) {
        currentTX = -1;
    } else {
        currentTX = parseFloat(currentTX[4]) - 1;
    }

    if (-currentTX >= marqueeWidth) {
        marquee.style.transform = 'translateX(' + wrapperWidth + 'px)';

    } else {
        marquee.style.transform = 'translateX(' + currentTX + 'px)';
    }
}

var interval = setInterval(move, 10);

let wrapper2 = document.querySelector('.line_2'),
    marquee2 = document.querySelector('.line_2 span'),
    wrapperWidth2 = wrapper2.offsetWidth,
    marqueeWidth2 = marquee2.scrollWidth;

function move2() {
    var currentTX2 = getComputedStyle(marquee2).transform.split(',');
    if (currentTX2[4] === undefined) {
        currentTX2 = -1;
    } else {
        currentTX2 = parseFloat(currentTX2[4]) - 1;
    }

    if (-currentTX2 >= marqueeWidth2) {
        marquee2.style.transform = 'translateX(' + wrapperWidth2 + 'px)';

    } else {
        marquee2.style.transform = 'translateX(' + currentTX2 + 'px)';
    }
}

var interval2 = setInterval(move2, 10);