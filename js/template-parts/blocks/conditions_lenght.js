import $ from 'jquery';

function check_lenght() {

    var $lis = $('.page-title .conditions .conditions_list li');
    //check if there are more than 5 elements
    if ($lis.length <= 6) {
        //if so get the last 2 elements and add the class
        $('.page-title .conditions .conditions_list').addClass("one_col");
    }
}
export {
    check_lenght
};