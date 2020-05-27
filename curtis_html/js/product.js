$(document).ready(function(){
	$(".detail_introduce_thumbs li img").click(function(){
      var largeImg = $(this).data("largeimg");
      $(".detail_introduce_img img").attr({src:largeImg});
      $(".detail_introduce_img img").hide();
      $(".detail_introduce_img img").fadeIn("slow");
      $(".detail_introduce_img img").css("width","100%");
      return false;
  });
});


