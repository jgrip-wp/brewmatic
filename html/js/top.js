$(function () {
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
        $('.top_life_slider').slick({
          autoplay: true,
          fade: false,
          arrows: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          pauseOnHover: false,
          speed: 2000,
            responsive: [{
              breakpoint:1080,
              settings:{
                slidesToShow: 1,
              }
            }]
        });
      },410)
      $("#wrapper").delay(400).fadeIn(800, "", function () {
        $('.top_pst_list').addClass('wow fadeInLeft')
        new WOW().init();

      });
    });

  });
});


