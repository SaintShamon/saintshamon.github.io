import $ from 'jquery';

$('.partners__slider').each(function(){

    $(this).slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});


$('.partners__item').each(function(){
    $(this).hover(function(){
        $(this).find('.partners__description').slideToggle();
    })
});


    $('.press__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // centerMode: true,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

