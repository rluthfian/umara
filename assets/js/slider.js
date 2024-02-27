$(document).ready(function () {
  $(".carousel").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
  });

  $(window).on("resize", function () {
    $(".ms-carousel").slick("unslick");
    $(".ms-carousel").slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: $(document).width() > 500 ? 3 : 1,
      adaptiveHeight: true,
    });
  });
  $(".ms-carousel").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: $(document).width() > 500 ? 3 : 1,
    adaptiveHeight: true,
  });
  $(".date-slider").slick({
    // dots: true
    infinite: false,
    slidesToScroll: 5,
    speed: 300,
    slidesToShow: 5,
    adaptiveHeight: true,
  });
  var selectedYear = $(".date-slider .date-slider-item-cont.active").data(
    "slick-index"
  );
  $(".date-slider").slick("slickGoTo", selectedYear);
  // dateSlider.slickGoTo(2);
});

function stop_caraousel() {
  $(".carousel").slick("unslick");
  $(".carousel").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
  });
}
