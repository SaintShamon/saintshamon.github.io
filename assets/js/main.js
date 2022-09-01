$('#toggle').click(function () {
    $(this).toggleClass('on');
    $('#side-panel').toggleClass('active');
    $('body').toggleClass('side-panel-overlay');
    return false;
});

$(document).click(function (event) {
    let $target = $(event.target);
    if (!$target.closest('.side-panel').length) {
        $('#toggle').removeClass('on');
        $('#side-panel').removeClass('active');
        $('body').removeClass('side-panel-overlay');
    }
});
// side panel
$(' #side-close-btn').click(function () {
    $('#side-panel').toggleClass('active');
    $('body').toggleClass('side-panel-overlay');
    return false;
});