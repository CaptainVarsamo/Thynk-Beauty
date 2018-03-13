jQuery(document).ready(function ($) {
  var owlCarousel = $('.homecontent  .woocommerce > .products');
  $(owlCarousel).each(function () {
    $(this).addClass('owl-carousel');

    if ($(window).width() > 768) {


      $(owlCarousel).owlCarousel({
        nav: true,
        margin: 0,
        navText: ["‹", "›"],
        items: 4
      })
    }
    else {

      $(owlCarousel).owlCarousel({
        nav: true,
        margin: 0,
        navText: ["‹", "›"],
        items: 2,
        stagePadding: 20
      });
    }
  });
});