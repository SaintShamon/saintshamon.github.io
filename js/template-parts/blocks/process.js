import $  from 'jquery';

$(document).ready(function(){
    $('.process__card__title').click(function(){
        $(this).parent().find('.process__card__image, .process__card__hiddenContent').slideToggle();
        $(this).parent().toggleClass('opened');
    });
}); 