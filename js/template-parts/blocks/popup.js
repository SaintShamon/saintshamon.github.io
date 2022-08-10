import $ from 'jquery';

function popup_script() {
    $('.has_popup a.button, .has_popup a.btn').click(function () {
        $('body').addClass('opened-popup');
    });

    $('.overlay').click(function () {
        $('body').removeClass('opened-popup');
    });

}
export {
    popup_script
};