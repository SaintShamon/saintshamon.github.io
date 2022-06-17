import $ from 'jquery';
import 'slick-carousel';

function testimonials() {
  $('.testimonials_section').each(function () {
    let block = $(this);
    let slider = $(this).find('.testimonials_slider');


    slider.slick({
      dots: false,
      arrows: true,
      infinite: false,
      cssEase: 'linear',
      slidesToShow: 3,
      slidesToScroll: 1,
      variableWidth: true,
      prevArrow: block.find('.arrow_block .prev'),
      nextArrow: block.find('.arrow_block .next'),
      responsive: [{
        breakpoint: 453,
        settings: {
          slidesToShow: 1,
          variableWidth: false,
        }
      }]
    });

  });

  function truncateText(selector, maxLength) {
    $(selector).text((i, txt) => txt.length > maxLength ? txt.substr(0, maxLength) + "..." : txt);
  };

  truncateText(".testimonials_block .content", 293);
};

export {
  testimonials
};