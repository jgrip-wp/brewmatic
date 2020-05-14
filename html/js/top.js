$(function () {
  $("body").fadeTo(800, 1);
  $("#wrapper").hide();
  $(document).ready(function () {
    $("#top_logo").delay(1400).fadeOut(800, "", function () {
      setTimeout(function(){
        $('.top_main_box').slick({
          autoplay: true,
          fade: true,
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          pauseOnHover: false,
          speed: 3000
        });
      },410)
      $("#wrapper").delay(400).fadeIn(800, "", function () {
        new WOW().init();
      });
    });

  });
});
