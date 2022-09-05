import $ from 'jquery';
function testimonialsFormPlaceholder() {
    $(document).ready(function(){
        $('.testimonialsForm textarea').attr('placeholder', 'Content');
    });
}
export{ testimonialsFormPlaceholder };