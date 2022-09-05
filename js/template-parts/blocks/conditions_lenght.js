import $ from 'jquery';

function check_lenght() {

    $(".education_list__item").each(function () {
        var $lis = $(this).find('ul li');
        //check if there are more than 5 elements
        if ($lis.length > 6) {
            //if so get the last 2 elements and add the class
            $(this).find('ul').addClass("two_col_ul");
        }

        if ($lis.length > 9) {
            $(this).find('ul').removeClass("two_col_ul");
            $(this).find('ul').addClass("three_col_ul");
        }

        if ($lis.length >= 16) {
            $(this).find('ul').removeClass("two_col_ul");
            $(this).find('ul').removeClass("three_col_ul");
            $(this).find('ul').addClass("five_col_ul");
        }
    })
}
export {
    check_lenght
};