import $ from 'jquery';
import 'slick-carousel';

function testimonials() {
  $('.testimonials_section').each(function () {
    let block = $(this);
    let testimonials_slider = $(this).find('.testimonials_slider');


    testimonials_slider.slick({
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

  // requires jquery
  $(document).ready(function () {
    (function () {
      var showChar = 250;
      var ellipsestext = "...";

      $(".testimonials_block .content").each(function () {
        var content = $(this).html();
        if (content.length > showChar) {
          var c = content.substr(0, showChar);
          var h = content;
          var html =
            '<div class="truncate-text" style="display:block">' +
            c + ellipsestext + '</div><div class="truncate-text" style="display:none">' +
            h +
            '</span></div>';

          $(this).html(html);
        }
      });

      $("a.link--icon").click(function () {
        event.preventDefault();
        var thisEl = $(this).parents().eq(1);
        var cT = thisEl.find(".truncate-text");

        $(this).toggleClass('relative');
        cT.toggle();
        return false;
      });
      /* end iffe */
    })();

    /* end ready */
  });

};

export {
  testimonials
};