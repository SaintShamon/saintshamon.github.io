import $  from 'jquery';

$(document).ready(function(){
    $('.accordion .accordion__item').click(function(){
        $(this).toggleClass('opened');
        $(this).find('.accordion__itemContent').slideToggle();
    })
}); 