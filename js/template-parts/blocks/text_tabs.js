import $ from 'jquery';

function textTabs(){
    jQuery(document).ready(function(){
        jQuery('.textTabs__item').click(function(){
            $(this).toggleClass('active');
            $(this).find('.textTabs__itemText').slideToggle();
        });
    });
}
export{textTabs}