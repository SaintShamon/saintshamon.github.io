jQuery(document).ready(function () {
    // menu panel
    $('.menu_button').click(function () {
        $('#menu_box-panel').toggleClass('active');
        $('body').addClass('menu-panel-overlay');
        return false;
    });

    $('#menu_box-close-btn').click(function () {
        $('#menu_box-panel').toggleClass('active');
        $('body').removeClass('menu-panel-overlay');
        return false;
    });

    // close menu panel on any link click
    $('.menu_box-panel a').click(function () {
        $('#menu_box-panel').toggleClass('active');
        $('body').removeClass('menu-panel-overlay');
    });
});